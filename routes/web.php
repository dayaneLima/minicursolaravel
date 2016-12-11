<?php

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

Route::get("alunos","AlunoController@index")
    ->name("aluno.consulta");

Route::get("aluno/editar/{idAluno}","AlunoController@editar")
        ->name("aluno.editar");

Route::post("aluno","AlunoController@gravar")
        ->name("aluno.gravar");

Route::get("aluno/novo","AlunoController@novo")
        ->name("aluno.novo");

Route::get("aluno/excluir/{idAluno}","AlunoController@excluir")
        ->name("aluno.excluir");