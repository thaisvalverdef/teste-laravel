<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('index');
});

Route::get('/como-funciona', function () {
    return view('como-funciona');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/modalidades', function () {
    return view('modalidades');
});

Route::get('/edicao-perfil', function () {
    return view('edicao-perfil');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/perfil-professor', function () {
    return view('perfil-professor');
});

Route::get('/lista-usuario', function () {
    return view('lista-usuario');
});

Route::get('/lista-categorias', function () {
    return view('lista-categorias');
});

Route::get('/perfil-publico', function () {
    return view('perfil-publico');
});


//Listando professores
Route::get('/lista-usuario', 'ProfessorController@index');

//Criando perfil
Route::get('/cadastro', 'ProfessorController@add');
Route::post('/cadastro', 'ProfessorController@create');

//Visualizando o próprio perfil do professor
Route::get('/perfil-professor/{id}', 'ProfessorController@perfilProfessor');

//Usuário visualizando o perfil do professor
Route::get('/perfil/{id}', 'ProfessorController@perfil');

//Alterando perfil
Route::get('/edicao-perfil/{id}', 'ProfessorController@edit');
Route::put('/edicao-perfil/{id}', 'ProfessorController@update');


//Deletando perfil
Route::delete('/professor/remove/{id}', 'ProfessorController@delete');

//Pesquisando - filtro de busca
Route::get('/professor/search', 'ProfessorController@search');

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');

//Enviar e-mail

Route::get('/perfil-publico', 'PerfilEmailController@create');
Route::post('/perfil-publico', 'PerfilEmailController@store');
