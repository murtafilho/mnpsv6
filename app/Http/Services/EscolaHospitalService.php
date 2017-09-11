<?php
/**
 * Created by PhpStorm.
 * User: murtafilho
 * Date: 26/06/2017
 * Time: 20:45
 */

namespace App\Http\Services;


class EscolaHospitalService
{
    public function index($var,$periodo){

        if($var == '0'){
            return null;
        }else{
            session(['existeModificador'=>1]);
            switch ($periodo) {
                case "Diruno":
                    $limite =  55;
                    session(['limite'=>$limite]);
                    session(['sqlEscolas' => 1]);
                    break;
                case "Vespertino":
                    $limite = 50;
                    session(['limite'=>$limite]);
                    session(['sqlEscolas' => 1]);
                    break;
                case "Noturno 1":
                    $limite = 45;
                    session(['limite'=>$limite]);
                    session(['sqlEscolas' => 1]);
                    break;
                case "Noturno 2":
                    $limite = 45;
                    session(['limite'=>$limite]);
                    session(['sqlEscolas' => 1]);
                    break;
                case "SEX,SAB,FER entre 22:00 e 23:00":
                    $limite = 45;
                    session(['limite'=>$limite]);
                    session(['sqlEscolas' => 1]);
                    break;
                case "Serviços de construção civil não passíveis de confinamento entre 10:00 e 17:00":
                    $limite = 45;
                    session(['limite'=>$limite]);
                    session(['sqlConstrucao' => 1]);
                    break;
            }


            $str = "
                <p>
                Como a propriedade onde foram realizadas as medições trata-se de um(a) {$var}, de acordo com o Art. 4º § 6º, passamos a considerar para o período <b>{$periodo}</b>
                o limte de <b>{$limite} dB(A)</b>
                </p>
           ";
            return $str;
        }
    }


}