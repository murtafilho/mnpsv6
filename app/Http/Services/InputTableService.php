<?php
/**
 * Created by PhpStorm.
 * User: murtafilho
 * Date: 26/06/2017
 * Time: 19:17
 */

namespace App\Http\Services;


class InputTableService
{
    public function inputtable($nomeArray)
    {
        $nummed = 30;
        $i = 0;
        $y = 0;
        $table = '<table class="table table-condensed table-input">';
        $table .= "<tbody>";
        while ($i < $nummed) {
            $table .= "<tr>";
            while ($y < 5 AND $i < $nummed) {
                $table .= "<td style=\"border: none\">";
                $table .= '<input  name="' . $nomeArray . '[]" class="form-control" value="" style="font-size: larger;font-family: Arial">';
                $table .= "</td>";
                $y++;
                $i++;
            }
            $y = 0;
            $table .= "</tr>";
        }
        $table .= "</tbody>";
        $table .= "</table>";
        return $table;
    }

}