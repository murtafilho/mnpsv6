<?php

namespace App\Http\Services;


class DepreciacaoService
{
    public function index($leqfonte,$leqfundo){
        if($leqfundo>0){
            $depreciacao = -10 * log10(1 - pow(10, -($leqfonte - $leqfundo) / 10));
            $depreciacao = number_format($depreciacao,1);
            $atribuicao = number_format($leqfonte - $depreciacao, 1);
            $values = ['depreciacao'=>$depreciacao,'atribuicao'=>$atribuicao];
            return $values;
        }else{
            $values = ['depreciacao'=>0,'atribuicao'=>$leqfonte];
            return $values;
        }

    }
}