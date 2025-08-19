<?php

use App\Http\Controllers\AlunosControllers;
use App\Http\Controllers\EquipeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('game_cs.listar');
})->name('site.home');



// Rota para listar o ranking
Route::get('/placar_cs', [EquipeController::class, 'index'])->name('game_cs.listar');
// Rota para listar a programação dos jogos
Route::get('/agenda_cs', function () {return view('game_cs.agenda');})->name('game_cs.agenda');


// Rota para listar os alunos
Route::get('/alunos', [AlunosControllers::class, 'index'])->name('alunos.listar');
// Rota para mostrar o form de cadastro
Route::get('/alunos/cadastrar', [AlunosControllers::class, 'cadastrar'])->name('alunos.cadastrar');
// Rota para inserir o aluno
Route::post('/alunos/cadastrar', [AlunosControllers::class, 'inserir'])->name('alunos.inserir');
// Rota para deletar o aluno
Route::delete('/alunos/{id}', [AlunosControllers::class, 'deletar'])->name('alunos.deletar');
// Rota para exibir a pagina de edicao do aluno
Route::get('/alunos/{id}/editar', [AlunosControllers::class, 'editar'])->name('alunos.editar');
//Rota que efetivamente realiza a atualização
Route::put('/alunos/{id}', [AlunosControllers::class, 'atualizar'])->name('alunos.atualizar');
