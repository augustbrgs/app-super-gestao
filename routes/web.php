<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\TesteController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login', function () {
    return 'Login';
})->name('site.login');

Route::prefix('/app')->group(function () {
    Route::get('/clientes', function () {return 'clientes';})->name('app.clientes');
    Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('app.fornecedores');
    Route::get('/produtos', function () {return 'produtos';})->name('app.produtos');
});

Route::controller(TesteController::class)->group(function(){
    Route::get('/teste/{p1}/{p2}', 'teste');
});







//redirect direto
//Route::redirect('/rota2', '/rota1');
/*
Route::get('/rota2', function(){
    return redirect()->route('site.rota1');
})->name('site.rota2');
*/
Route::fallback(function(){
   echo 'erro <a href="'.route('site.index').'"> 404 </a> :/';

});

/*
http

get
post
put
patch
delete
options
*/