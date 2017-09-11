<?php
/**
 * Created by PhpStorm.
 * User: murtafilho
 * Date: 26/06/2017
 * Time: 23:29
 */

namespace App\Http\Services;


class UnsetParametrosService
{
    public function resetSqlSessions(){
        session(['sqlDiurno'=>0]);
        session(['sqlNoturno'=>0]);
        session(['sqlVespertino'=>0]);
        session(['sqlNoturno1'=>0]);
        session(['sqlNoturno2'=>0]);
        session(['sqlSex_sab_fer'=>0]);
        session(['sqlSistemas'=>0]);
        session(['sqlPasseios'=>0]);
        session(['sqlAutomotor'=>0]);
        session(['sqlFrequentadores'=>0]);
        session(['sqlDentro_dos_limites'=>0]);
        session(['sqlEscolas'=>0]);
        session(['sqlTonais'=>0]);
        session(['sqlFaixa'=>0]);
        session(['deuAcimaDeDez'=>0]);
        session(['sqlConstrucao'=>0]);
    }
}