<?php
/**
 * Created by PhpStorm.
 * User: murtafilho
 * Date: 26/06/2017
 * Time: 20:09
 */

namespace App\Http\Services;


class LimitesService
{
    public function index($periodo){

        switch ($periodo) {
            case "Diurno":
                session(['sqlDiurno' => 1]);
                return 70;
                break;
            case "Vespertino":
                session(['sqlVespertino' => 1]);
                return 60;

                break;
            case "SEX,SAB,FER entre 22:00 e 23:00";
                session(['sqlSex_sab_fer' => 1]);
                return 60;

                break;
            case "NOTURNO entre 22:00 e 23:59":
                session(['sqlNoturno1' => 1]);
                return 50;
                break;
            case "NOTURNO entre 00:00 e 06:59":
                session(['sqlNoturno2' => 1]);
                return 45;
                break;
            case "Serviços de construção civil não passíveis de confinamento entre 10:00 e 17:00":
                session(['sqlContrucao' => 1]);
                return 80;
                break;
        }
    }

}