<?php
/**
 * Created by PhpStorm.
 * User: murtafilho
 * Date: 26/06/2017
 * Time: 21:20
 */

namespace App\Http\Services;


class SexSabFerService
{
    public function index($var){
        if($var == '0'){
            return null;
        }else{
            session(['existeModificador'=>1]);
            session(['sqlSex_sab_fer'=>1]);
            $limite = session('limite');
            return "
            <p>
            Como as medições foram realizadas {$var} entre 22:00 e 23:00, de acordo com o Art. 4º § 1º, será admitido,
            o limite correspondente ao horádio vespertino de <b>{$limite}</b> dB(A)
            </p>
            ";
        }

    }

}