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

Route::get('/', function () {
    return view('welcome');
});

// Route::view('/r', 'home', ['nome' =>'Jalisson']);
//Route::view('/login', 'home', ['nome' =>'Jalisson']);
// Route::get('/login', 'teste@testeinfo');
// Route::get('/user/{nome}', function($n){
//         echo"valor -> ".$n;
// });
Route::get('/user/{nome}/{senha}', 'Estudos@testeinfo'); //ROtas com Parametros 
Route::get('/nomeado', 'Estudos@nomeado')->name('nome1'); //Rotas Nomeadas
Route::get('/exibir', 'Estudos@exibir_dados');//Exibindo Funções com metodos Private
Route::get('produtos', 'base_de_dados\produtos@Roupas');//Controllers dentro de pastas
Route::get('single', 'funcaoUnica');//Single Action COntroller
// Route::get('info/{index}', 'Estudos@info');
Route::get('info/{id?}', 'Estudos@cliente');
Route::resource('listagens','produtos');