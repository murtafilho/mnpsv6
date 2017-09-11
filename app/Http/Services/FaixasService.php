<?php
/**
 * Created by PhpStorm.
 * User: murtafilho
 * Date: 26/06/2017
 * Time: 23:31
 */

namespace App\Http\Services;


class FaixasService
{
    public function index(){

        $limite = session('limite');
        $atribuicaoFonte = session('atribuicaoFonte');
        $porcento = $atribuicaoFonte * 100 / $limite;
        $porcentoAcima = $porcento - 100;
        $porcentoAcima = number_format($porcentoAcima,1);

        if($porcentoAcima <= 10){
            session(['sqlFaixa'=>1]);
        }

        if($porcentoAcima > 10 and $porcentoAcima <=40){
            session(['sqlFaixa'=>2]);
        }

        if($porcentoAcima > 40){
            session(['sqlFaixa'=>3]);
        }
    }

}