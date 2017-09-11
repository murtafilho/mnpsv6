<?php

namespace App\Http\Controllers\mnps;
use App\Http\Services\AcimaDe10Service;
use App\Http\Services\AlterLocalService;
use App\Http\Services\CalculosService;
use App\Http\Controllers\Controller;
use App\Http\Services\ConstrucaoService;
use App\Http\Services\DepreciacaoService;
use App\Http\Services\EscolaHospitalService;
use App\Http\Services\FaixasService;
use App\Http\Services\LimitesService;
use App\Http\Services\OutputTableService;
use App\Http\Services\ResultadoService;
use App\Http\Services\RetornaArtigoService;
use App\Http\Services\SexSabFerService;
use App\Http\Services\SistemasService;
use App\Http\Services\StoreService;
use App\Http\Services\UnsetParametrosService;
use App\Repositories\PrevisaoRepository;
use App\Http\Services\ConvertUTM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;


class ResultadoController extends Controller
{

    /**
     * @param Request $request
     * @param CalculosService $calculosService
     * @param OutputTableService $outputTableService
     * @param DepreciacaoService $depreciacaoService
     * @param LimitesService $limitesService
     * @param EscolaHospitalService $escolaHospitalService
     * @param SexSabFerService $sexSabFerService
     * @param AlterLocalService $alterLocalService
     * @param SistemasService $sistemasService
     * @param ResultadoService $resultadoService
     * @param AcimaDe10Service $acimaDe10Service
     * @param RetornaArtigoService $retornaArtigoService
     * @param UnsetParametrosService $unsetParametrosService
     * @param FaixasService $faixasService
     * @param PrevisaoRepository $previsaoRepository
     * @param ConvertUTM $convertUTM
     * @param ConstrucaoService $construcaoService
     * @param StoreService $storeService
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(
        Request $request,
        CalculosService $calculosService,
        OutputTableService $outputTableService,
        DepreciacaoService $depreciacaoService,
        LimitesService $limitesService,
        EscolaHospitalService $escolaHospitalService,
        SexSabFerService $sexSabFerService,
        AlterLocalService $alterLocalService,
        SistemasService $sistemasService,
        ResultadoService $resultadoService,
        AcimaDe10Service $acimaDe10Service,
        RetornaArtigoService $retornaArtigoService,
        UnsetParametrosService $unsetParametrosService,
        FaixasService $faixasService,
        PrevisaoRepository $previsaoRepository,
        ConvertUTM $convertUTM,
        ConstrucaoService $construcaoService,
        StoreService $storeService
    )
    {
        $tipo_exp = $request->tipo_exp;
        $num_exp = $request->num_exp;

        $request->session()->forget('limite');

        $unsetParametrosService->resetSqlSessions();

        session(['sqlDentro_dos_limites' => 1]);

        $periodo = $request->periodo;

        $limite = $limitesService->index($periodo);

        session(['limiteOriginal' => $limite]);

        session(['limite' => $limite]);

        $valoresFonte = array_filter($request->input('fonte'));

        $leqFonte = $calculosService->calcularLeq($valoresFonte);

        $valoresFundo = array_filter($request->input('fundo'));

        $leqFundo = $calculosService->calcularLeq($valoresFundo);

        $valuesDepreciacao = $depreciacaoService->index($leqFonte, $leqFundo);

        $atribuicaoFonte = $valuesDepreciacao['atribuicao'];

        $depreciacao = $valuesDepreciacao['depreciacao'];

        session(['atribuicaoFonte' => $atribuicaoFonte]);

        session(['atribuicaoFonteVariavel' => session('atribuicaoFonte')]);

        $localFiscalizado = $request->localFiscalizado;

        $numeroReclamado = $request->numeroReclamado;

        $complementoReclamado = $request->complementoReclamado;

        $enderecoReclamado = $this->enderecamento($request->enderecoMedicao, $numeroReclamado, $complementoReclamado);

        $localMedicao = $request->localMedicao;

        $numeroMedicao = $request->numeroMedicao;

        $complementoMedicao = $request->complementoMedicao;

        $enderecoMedicao = $this->enderecamento($request->enderecoMedicao, $numeroMedicao, $complementoMedicao);

        $decibelimetro = $request->decibelimetro;

        $posicionamento = $request->local;

        if($posicionamento==0){
            $posicionamento = "Dentro dos limites da propriedade de onde partiu a reclamação";
        }else{
            $posicionamento = "No passeio contíguo de onde partiu a reclamação";
        }

        $dataMedicao = $request->dataMedicao;

        $inicio = $request->inicio;

        $fim = $request->fim;

        $tabelaFonte = $outputTableService->table($valoresFonte, 'Ruído Total', $leqFonte);

        $tabelaFundo = $outputTableService->table($valoresFundo, 'Ruído de Fundo', $leqFundo);

        $distancia = $request->distancia;

        $ruido = $request->ruido;

        //MODIFICADORES DE LIMITE E DECIBEIS

        if ($request->escolaHospital <> "0") {

            $escolaHospital = $escolaHospitalService->index($request->escolaHospital, $request->periodo);

        } else {

            if ($request->periodo == "SEX,SAB,FER entre 22:00 e 23:00") {

                $sexSabFer = $sexSabFerService->index('Sexta, sábado ou véspera de feriado');

            }else{

                if($request->periodo == "Serviços de construção civil não passíveis de confinamento entre 10:00 e 17:00"){
                    $construcao = $construcaoService->index('Serviços de construção civil não passíveis de confinamento entre 10:00 e 17:00');
                }
            }

        }

        $alterLocal = $alterLocalService->index($request->local);

        $sistemas = $sistemasService->index($request->sistemas);

        $resultado = $resultadoService->index();

        session(['RESULTADO' => $resultado]);

        $acimaDe10 = $acimaDe10Service->index($resultado,$leqFundo);

        $faixasService->index();

        $relatorio = $request->relatorio;

        if (session('resultado') != 'DENTRO') {
            $artigos = $retornaArtigoService->index();

        } else {
            $artigos = null;
        }

        $endereco_id = $request->id_enderecoMedicao;


        $local = $previsaoRepository->getLocal($endereco_id,$numeroMedicao);



        $lat = 0;
        $long = 0;



        if(isset($local->leste) && isset($local)) {
            $lat = $local->leste;
            $long = $local->norte;
            $toLatLong = $convertUTM->index($lat, $long);
            $lat = $toLatLong['lat'];
            $long = $toLatLong ['long'];
        }


        if(isset(Auth::user()->name)){
            $usuario = Auth::user()->name;
            $usuario_id = Auth::user()->id;
        }

        $data = compact(
            'tipo_exp',
            'num_exp',
            'localFiscalizado',
            'enderecoReclamado',
            'numeroReclamado',
            'localMedicao',
            'numeroMedicao',
            'complementoMedicao',
            'enderecoMedicao',
            'decibelimetro',
            'posicionamento',
            'dataMedicao',
            'inicio',
            'fim',
            'distancia',
            'tabelaFonte',
            'tabelaFundo',
            'valoresFonte',
            'valoresFundo',
            'leqFonte',
            'leqFundo',
            'atribuicaoFonte',
            'depreciacao',
            'distancia',
            'ruido',
            'periodo',
            'limite',
            'escolaHospital',
            'sexSabFer',
            'alterLocal',
            'sistemas',
            'relatorio',
            'resultado',
            'acimaDe10',
            'artigos',
            'local',
            'lat',
            'long',
            'construcao',
            'usuario',
            'usuario_id'
        );
        $html =  View::make('mnps.print', $data);
        $data['html'] = $html;
        $id_medicao = $storeService->store($data);
        return $html;

    }

    private function enderecamento($endereco, $numero, $complemento)
    {
        $a = explode('-', $endereco);
        $ender = "";
        if (count($a) > 1) {
            $ender = trim($a[0]) . ', ' . $numero . ' ' . $complemento . ', ' . trim($a[1]);
            return $ender;
        } else {
            return "Não informado";
        }
    }
}
