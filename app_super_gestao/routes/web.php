<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return 'Olá, seja bem vindo ao curso!';
});
*/

Route::get('/', [\App\Http\Controllers\PrincipalController::class,'principal'])->name('site.index');
Route::get('/sobrenos',[\App\Http\Controllers\SobrenosController::class,'sobreNos'])->name('site.sobrenos');

//rotas de contato
Route::get('/contato',[\App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato');
Route::post('/contato',[\App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato');
//fim rotas contato


Route::get('/login',function(){ return 'Login';})->name('app.login');

Route::prefix('/app')->group(function(){    
    Route::get('/clientes',function(){ return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores',[\App\Http\Controllers\FornecedoresController::class,'index'])->name('site.fornecedores');
    Route::get('/produtos',function(){ return 'produtos';})->name('app.protudos');
});