<?php
/**
 * Created by PhpStorm.
 * User: murtafilho
 * Date: 29/08/2017
 * Time: 12:30
 */

namespace App\Http\Services;
use App\Medicao;
use Illuminate\Support\Facades\DB;

class StoreService
{

    public function store($data){
        $medicao = new Medicao;
        $medicao->valoresFonte = json_encode($data['valoresFonte']);
        $medicao->valoresFundo = json_encode($data['valoresFundo']);
        $medicao->tipo_exp = $data['tipo_exp'];
        $medicao->num_exp = $data['num_exp'];
        $medicao->leqFonte = $data['leqFonte'];
        $medicao->leqFundo = $data['leqFundo'];
        $medicao->html = $data['html'];
        $medicao->atribuicaoFonte = $data['atribuicaoFonte'];
        $medicao->resultado = $data['resultado'];
        $medicao->usuario_id = $data['usuario_id'];
        $medicao->save();
        $id = $medicao->id;
        unset($medicao);
        return $id;
    }

}