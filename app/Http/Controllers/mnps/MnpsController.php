<?php

namespace App\Http\Controllers\mnps;

use App\Http\Controllers\Controller;
use App\Http\Services\InputTableService;
use Illuminate\Support\Facades\DB;

class MnpsController extends Controller
{
    public function index(InputTableService $inputTableService){
        $tableFonte = $inputTableService->inputtable('fonte');
        $tableFundo = $inputTableService->inputtable('fundo');
        $tipos = DB::table('tipo_expediente')
            ->get();
        $tipos = $tipos->pluck('tipo','tipo');
        return view('mnps.index',compact('tableFonte','tableFundo','tipos'));
    }
}
