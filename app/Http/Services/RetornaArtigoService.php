<?php


namespace App\Http\Services;

use App\Repositories\ArtigoRepository;


class RetornaArtigoService
{
    private $repository;

    public function __construct(ArtigoRepository $repository)
    {
        $this->repository = $repository;

    }

    public function index()
    {

        $diurno = session('sqlDiurno');
        $vespertino = session('sqlVespertino');
        $sex_sab_fer = session('sqlSex_sab_fer');
        $noturno1 = session('sqlNoturno1');
        $noturno2 = session('sqlNoturno2');
        $escolas = session('sqlEscolas');
        $sistemas = session('sqlSistemas');
        $passeios = session('sqlPasseios');
        $dentro_dos_limites = session('sqlDentro_dos_limites');
        $automotor = session('sqlAutomotor');
        $frequentadores = session('sqlFrequentadores');
        $tonais = session('sqlTonais');
        $faixa = session('sqlFaixa');
        $construcao = session('sqlConstrucao');

        /*
                $diurno = 1;
                $vespertino = 0;
                $sex_sab_fer = 0;
                $noturno1 = 0;
                $noturno2 = 0;
                $escolas = 0;
                $sistemas = 0;
                $passeios = 0;
                $dentro_dos_limites = 1;
                $automotor = 0;
                $frequentadores = 0;
                $tonais = 0;
                $faixa = 1;
        */
        if ($construcao !== 1) {
            $artigos = $this->repository->findWhere([
                'diurno' => $diurno,
                'vespertino' => $vespertino,
                'sex_sab_fer' => $sex_sab_fer,
                'noturno1' => $noturno1,
                'noturno2' => $noturno2,
                'escolas' => $escolas,
                'sistemas' => $sistemas,
                'passeios' => $passeios,
                'dentro_dos_limites' => $dentro_dos_limites,
                'automotor' => $automotor,
                'frequentadores' => $frequentadores,
                'tonais' => $tonais,
                'faixa' => $faixa,
            ]);
        } else {
            $artigos = $this->repository->findWhere([
                'construcao' => $construcao,
                'faixa' => $faixa,

            ]);

        }
        return $artigos;
    }

}