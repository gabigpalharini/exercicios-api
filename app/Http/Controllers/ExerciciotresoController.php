<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciciotresoController extends Controller
{
    public function mediaAritimetica(Request $request){
        $primeiraEntrada = $request->primeiraEntrada;
        $segundaEntrada = $request->segundaEntrada;
        $terceiraEntrada = $request->terceiraEntrada;
        
        return json_encode([
           'resultado'=> ($primeiraEntrada * $segundaEntrada* $terceiraEntrada )/3
        ]);
}
}
