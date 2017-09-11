<?php
/**
 * Created by PhpStorm.
 * User: murtafilho
 * Date: 26/06/2017
 * Time: 22:33
 */

namespace App\Http\Services;


class SistemasService
{
    public function index($sistema){
        if($sistema == '0'){
            return null;

        }else{
            session(['existeModificador'=>1]);

            session(['sqlSistemas'=>1]);

            $atribuicaoFonteOriginal = number_format(session('atribuicaoFonte'),1);

            session(['atribuicaoFonte'=>$atribuicaoFonteOriginal + 5]);

            $atribuicaoFonte = number_format(session('atribuicaoFonte'),1);

            return "<p>
                O ruído em avalidação foi caracterizado como {$sistema}. De acordo com o Art. 4º § 4º inc. I e II,
                será acrescido ao nível equivalente atribuído à fonte 5 dB(A). O leq medido como <b>{$atribuicaoFonteOriginal} dB(A)</b>
                será modificado para <b>{$atribuicaoFonte} dB(A)</b> para efeito de avaliação.
                </p>
            ";
        }

    }


}