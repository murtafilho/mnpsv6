<?php
/**
 * Created by PhpStorm.
 * User: murtafilho
 * Date: 25/06/2017
 * Time: 15:48
 */

namespace App\Http\Services;


class CalculosService
{
    public function calcularLeq($medicoes)
    {
        $soma = 0;
        $medicoes = array_filter($medicoes);
        $nummeds = count($medicoes);

        if($nummeds==0) return 0;

        foreach ($medicoes as $key=>$val){
            $soma = (pow(10,$val/10)) + $soma;
        }
        $argumento = $soma/$nummeds;
        $leq = 10 *log10($argumento);
        return number_format($leq,1);

    }

}