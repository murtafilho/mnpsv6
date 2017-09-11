<?php

namespace App\Http\Controllers;

use App\Repositories\PessoaRepository;
use Illuminate\Http\Request;

class AutoCompletePessoasController extends Controller
{
    public function index(PessoaRepository $repository, Request $request){

        $term = $request->term;
        $result =  $repository->autoComplete($term);
        return $result;
    }
}
