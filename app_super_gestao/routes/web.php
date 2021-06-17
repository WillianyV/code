<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PrincipalController::class,'principal']);

Route::get('/sobrenos',[\App\Http\Controllers\SobrenosController::class,'exibirMsg']);

Route::get('/contato',[\App\Http\Controllers\ContatoController::class,'exibirMsg']);

Route::prefix('/app')->group(function(){
    Route::get('/login',function(){ return 'LOGIN';});
    Route::get('/clientes',function(){ return 'CLIENTES';});
    Route::get('/fornecedores',function(){ return 'FORNECEDORES';});
    Route::get('/produtos',function(){ return 'PRODUTOS';});
});



