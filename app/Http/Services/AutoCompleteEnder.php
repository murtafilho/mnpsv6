<?php
/**
 * Created by PhpStorm.
 * User: murtafilho
 * Date: 04/07/2017
 * Time: 19:25
 */

namespace App\Http\Services;
use App\Repositories\EnderecoRepository;
use Illuminate\Http\Request;


class AutoCompleteEnder
{
    public function index(EnderecoRepository $repository, Request $request){
        $termo = $request->term;
        $enderecos = $repository->autoComplete($termo);
        return $enderecos;
    }
}