<?php

namespace App\Repositories;

use App\Models\Endereco;
use InfyOm\Generator\Common\BaseRepository;

class EnderecoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'logradouro',
        'bairro',
        'regional'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Endereco::class;
    }

    public function autoComplete($termo)
    {

        $enderecos = $this->model->where('logradouro', 'LIKE', $termo. '%')
            ->select('logradouro','bairro', 'id')
            ->orderBy('logradouro', 'asc')
            ->distinct()
            ->take(8)
            ->get();

        foreach ($enderecos as $endereco){
            $results[] = ['id' => $endereco->id, 'value' => $endereco->logradouro.' - '.$endereco->bairro];
        }

        if($results){
            return response()->json($results);
        }else{
            return null;
        }


    }
}
