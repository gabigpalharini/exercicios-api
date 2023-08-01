<?php

use App\Http\Controllers\ExerciciocincoController;
use App\Http\Controllers\ExercicioquatroController;
use App\Http\Controllers\ExerciciosdoisController;
use App\Http\Controllers\ExerciciosumController;
use App\Http\Controllers\ExerciciotresoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('exercicio/um', 
[ExerciciosumController::class, 'multiplicar']);

Route::post('exercicio/dois', 
[ExerciciosdoisController::class, 'retornarMaior']);

Route::post('exercicio/tres', 
[ExerciciotresoController::class, 'mediaAritimetica']);

Route::post('exercicio/quatro', 
[ExercicioquatroController::class, 'verificarNumero']);

Route::post('exercicio/cinco', 
[ExerciciocincoController::class, 'divisivel']);

Route::get('exercicio/sete', 
[ExercicioSeteController::class, 'exibirNumeros']);

Route::get ('exercicio/doze', 
[ExerciciodozeController::class, 'mostrarNumeros']);
