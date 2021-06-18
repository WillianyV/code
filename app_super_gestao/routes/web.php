<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PrincipalController::class,'principal'])->name('site.index');
Route::get('/sobrenos',[\App\Http\Controllers\SobrenosController::class,'exibirMsg'])->name('site.sobrenos');
Route::get('/contato',[\App\Http\Controllers\ContatoController::class,'exibirMsg'])->name('site.contato');

Route::prefix('/app')->group(function(){
    Route::get('/login',function(){ return 'LOGIN';})->name('app.login');
    Route::get('/clientes',function(){ return 'CLIENTES';})->name('app.clientes');
    Route::get('/fornecedores',function(){ return 'FORNECEDORES';})->name('app.fornecedores');
    Route::get('/produtos',function(){ return 'PRODUTOS';})->name('app.protudos');
});
/* */
//redirecinamento de rotas
Route::get('/rota1', function(){echo 'rota 1';})->name('site.rota1');
//mais usual
Route::get('/rota2', function(){
    return redirect()->route('site.rota1');
})->name('site.rota2');
//não é usual:
//Route::redirect('/rota2','rota1');

Route::fallback(function(){
    echo 'A página acessada não existe, <a href="'.route('site.index').'">Clique aqui</a> para voltar a pagina inicial.';
});
