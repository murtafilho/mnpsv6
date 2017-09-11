<?php

namespace App\Http\Controllers;

use App\Repositories\EnderecoRepository;
use Illuminate\Http\Request;

class AutoCompleteEnderController extends Controller
{
    public function index(EnderecoRepository $repository, Request $request){

        $term = $request->term;
        $result =  $repository->autoComplete($term);
        return $result;
    }
}
