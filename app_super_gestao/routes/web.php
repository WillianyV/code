<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PrincipalController::class,'principal'])->name('site.index');
Route::get('/sobrenos',[\App\Http\Controllers\SobrenosController::class,'exibirMsg'])->name('site.sobrenos');

//rotas de contato
Route::get('/contato',[\App\Http\Controllers\ContatoController::class,'exibirMsg'])->name('site.contato');
Route::post('/contato',[\App\Http\Controllers\ContatoController::class,'exibirMsg'])->name('site.contato');
//fim rotas contato

Route::prefix('/app')->group(function(){
    Route::get('/login',function(){ return 'LOGIN';})->name('app.login');
    Route::get('/clientes',function(){ return 'CLIENTES';})->name('app.clientes');
    Route::get('/fornecedores',[\App\Http\Controllers\FornecedoresController::class,'index'])->name('site.fornecedores');
    Route::get('/produtos',function(){ return 'PRODUTOS';})->name('app.protudos');
});

Route::get('/teste/{p1}/{p2}',[\App\Http\Controllers\TesteController::class,'teste'])->name('site.teste');

Route::fallback(function(){
    echo 'A página acessada não existe, <a href="'.route('site.index').'">Clique aqui</a> para voltar a pagina inicial.';
});
