<?php
/**
 * Created by PhpStorm.
 * User: murtafilho
 * Date: 26/06/2017
 * Time: 22:59
 */

namespace App\Http\Services;


class ResultadoService
{
    public function index(){

        $limite = session('limite');

        $atribuicaoFonte = session('atribuicaoFonte');

        if($atribuicaoFonte <= $limite){

            return 'DENTRO';

        }else{

            $porcento = $atribuicaoFonte * 100 / $limite;
            $porcentoAcima = $porcento - 100;
            $porcentoAcima = number_format($porcentoAcima,1);
            return $porcentoAcima.'% ACIMA';

        }

    }
}