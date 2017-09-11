<?php

namespace App\Repositories;

use App\Models\Previsao;
use Illuminate\Support\Facades\DB;
use InfyOm\Generator\Common\BaseRepository;

class PrevisaoRepository extends BaseRepository
{

    /**
     * @var EnderecoRepository
     */
    private $enderecoRepository;
    /**
     * @var PrevisaoRepository
     */


    public function __construct(EnderecoRepository $enderecoRepository)
    {
        $this->enderecoRepository = $enderecoRepository;

    }

    protected $fieldSearchable = [

        'logradouro',
        'bairro',
        'regional',
        'numero',
        'leste',

    ];

    public function model()
    {
        return Previsao::class;
    }


    public function search($logradouro,$numero){

        $data = DB::table('previsoes')

            ->where('logradouro','like',$logradouro.'%')

            ->get();

        return $data;
    }

    public function getLocal($endereco_id, $numero){

        if(isset($endereco_id)) {
            $endereco = $this->enderecoRepository->findWithoutFail($endereco_id);
            $logradouro_id = $endereco->logradouro_id;

            $data = DB::table('previsoes')
                ->where('numero', '=', $numero)
                ->where('logradouro_id', '=', $logradouro_id)
                ->get();
            return $data;

        }else{
            return null;
        }

    }

    public function busca($logradouro,$numero){

        if(!is_null($logradouro)&&!is_null($numero)) {
            $previsaos = DB::table('previsoes')
                ->where('logradouro', 'like', $logradouro . '%')
                ->where('numero', '=', $numero)
                ->orderBy('logradouro','asc')
                ->orderBy('bairro','asc')
                ->orderBy('numero','asc')
                ->paginate(5);
        }
        if(!is_null($logradouro) && is_null($numero)){
            $previsaos = DB::table('previsoes')
                ->where('logradouro', 'like', $logradouro . '%')
                ->orderBy('logradouro','asc')
                ->orderBy('bairro','asc')
                ->orderBy('numero','asc')
                ->paginate(5);
        }

        if(is_null($logradouro)&& is_null($numero)){
            $previsaos = DB::table('previsoes')
                ->paginate(5);

        }

        return $previsaos;
    }
}
