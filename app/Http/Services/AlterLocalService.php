<?php
/**
 * Created by PhpStorm.
 * User: murtafilho
 * Date: 26/06/2017
 * Time: 22:12
 */

namespace App\Http\Services;


class AlterLocalService
{
    public function index($local){
        if($local == "1"){
            session(['existeModificador'=>1]);
            session(['sqlDentro_dos_limites'=>0]);
            session(['sqlPasseios'=>1]);
            $limiteOriginal = session('limite');
            session(['limite'=>$limiteOriginal + 5]);
            $limite = session('limite');
            session(['localMedicao'=>'<b>NO PASSEIO IMEDIATAMENTE CONTIGUO</b> de onde partiu a reclamação']);
            return "<p>
            Tendo sido as medições ralizadas no PASSEIO IMEDIATAMENTE CONTIGUO de onde partiu o suposto incômodo, de acordo com o art. 4º, § 3º,
            serão acrescidos ao limite de <b>{$limiteOriginal} dB(A)</b> o valor de  <b>5 dB(A)</b> e passamos a considerar o limite de <b>{$limite}dB(A)</b>
            </p>
            ";
        }else{
            session(['sqlPasseios'=>0]);
            session(['sqlDentro_dos_limites'=>1]);
            session(['localMedicao'=>'<b>DENTRO DOS LIMITES</b> de onde partiu o suposto incômodo']);
            return null;
        }
    }

}