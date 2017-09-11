<?php

namespace App\Http\Services;


class OutputTableService
{
    public function table($medicoes, $caption, $leq)
    {
        $nummeds = count($medicoes);

        $items_por_linha = 8;

        $resto = $nummeds % $items_por_linha;

        if($resto > 0){
            $numlinhas = floor($nummeds/$items_por_linha) + 2;
        }else{
            $numlinhas = $nummeds/$items_por_linha +1;
        }

        $string = "Nivel Equivalente: " . $leq . " dB(A)";
        $t = "<table class='table' >";
        $t .= "<thead>";
        $t .= "<th colspan=\"11\">$caption</th>";
        $t .= "</thead>";
        $t .= "<tfoot>";
        $t .= "<th colspan=\"11\">$string</th>";
        $t .= "</tfoot>";
        $a = 0;
        for ($x = 1; $x < $numlinhas; $x++) {

            $t .= "<tr>";
            for ($i = 1; $i <= $items_por_linha; $i++) {
                $t .= "<td>";
                $t .= $this->existeValor($a, $medicoes);
                $t .= "</td>";
                $a++;
            }
            $t .= "</tr>";
        }
        $t .= "</table>";
        return $t;

    }

    private function existeValor($val, $medicoes)
    {
        if (isset($medicoes[$val])) {
            return $medicoes[$val];
        } else {
            return "&nbsp";
        }

    }
}