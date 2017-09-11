<?php

namespace App\Repositories;

use App\Models\Pessoa;
use Illuminate\Support\Facades\DB;
use InfyOm\Generator\Common\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;

class PessoaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'=>'like',
        'cnpj_cpf',
        'numero',
        'complemento'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Pessoa::class;
    }

    public function search($termo, $numero){
        DB::enableQueryLog();

        if(!is_null($numero) && !is_null($termo)){
            $pessoas = DB::table('pessoas')
                ->join('enderecos','pessoas.endereco_id','enderecos.id')
                ->select('pessoas.*','enderecos.logradouro','enderecos.bairro')
                ->where('logradouro','like', '%'.$termo.'%')
                ->where('numero','=', $numero)
                ->orWhere('name','like', '%'.$termo.'%')
                ->orWhere('cnpj_cpf','=', $termo)
                ->paginate(2);
            return $pessoas;

        }else{
            $pessoas = DB::table('pessoas')
                ->join('enderecos','pessoas.endereco_id','enderecos.id')
                ->select('pessoas.*','enderecos.logradouro','enderecos.bairro')
                ->orWhere('name','like', '%'.$termo.'%')
                ->orWhere('logradouro','like', '%'.$termo.'%')
                ->orWhere('cnpj_cpf','=', $termo)
                ->paginate(2);
            return $pessoas;
        }


    }

    public function autoComplete($termo)
    {

        $pessoas = $this->model
            ->join('enderecos','pessoas.endereco_id','enderecos.id')
            ->orWhere( 'logradouro', 'LIKE', $termo. '%')
            ->orWhere( 'name', 'LIKE', $termo. '%')
            ->orWhere( 'cnpj_cpf', 'LIKE', $termo. '%')
            ->orderBy('name', 'asc')
            ->take(8)
            ->get();


        foreach ($pessoas as $pessoa){
            $results[] = ['id' => $pessoa->id, 'value' => $pessoa->name.' - '.$pessoa->endereco->logradouro.' - '.$pessoa->numero.' , '.$pessoa->cnpj_cpf];
        }

        return response()->json($results);

    }
}
