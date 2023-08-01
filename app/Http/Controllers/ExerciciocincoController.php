<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciciocincoController extends Controller
{
    public function divisivel(Request $request)
    {
        if ($request->primeira_entrada % 4 == 0) {
            return json_encode([
                'resultado' => 'é divisivel por 4'
            ]);
        } else {
            return json_encode([
                'resultado' => ' não é divisivel por 4'
            ]);
        }
    }
}
