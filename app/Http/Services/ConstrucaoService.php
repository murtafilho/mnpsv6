<?php

namespace App\Http\Services;


class ConstrucaoService
{
    public function index($construcao)
    {
        if ($construcao == '0') {
            return null;

        } else {
            session(['existeModificador' => 1]);

            if ($construcao == 'Serviços de construção civil não passíveis de confinamento entre 10:00 e 17:00') {
                session(['sqlConstrucao' => 1]);
                return "<p>
                Uma vez que a fonte em avaliação trata-se de Serviços de construção civil não passíveis de confinamento entre 10:00 e 17:00,
                passaremos a considerar o limite de <b>80 dB(A)</b>
                </p>
            ";

            }

        }


    }

}