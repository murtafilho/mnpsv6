<?php

namespace App\Http\Services;


class AcimaDe10Service
{
    public function index($resultado,$leqFundo){

        $diferenca = session('atribuicaoFonte') - $leqFundo;

        if($diferenca > 10 and $resultado == 'DENTRO') {
            return number_format($diferenca,1);
        } else {
            return null;
        }
    }
}