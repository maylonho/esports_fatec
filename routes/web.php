<?php

use App\Http\Controllers\AlunosControllers;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/', function () {
    return redirect()->route('game_cs.listar');
})->name('site.home');

Route::get('/home', function () {
    return redirect()->route('game_cs.listar');
})->name('site.home');

Route::get('/home', [EquipeController::class, 'index'])->name('home');

// Rota para listar o ranking
Route::get('/placar_cs', [EquipeController::class, 'index'])->name('game_cs.listar');
// Rota para listar a programação dos jogos
Route::get('/agenda_cs', function () {
    return view('game_cs.agenda');
})->name('game_cs.agenda');

Route::get('/alunos', [AlunosControllers::class, 'index'])
    ->middleware(['auth'])
    ->name('alunos.listar');

Route::get('/alunos/cadastrar', function () {
    $user = Auth::user();

    if ($user->nivel !== 'admin' and $user->nivel !== 'editor') {
        return redirect()->route('home')->with('error', 'Acesso negado.');
    }

    return app(\App\Http\Controllers\AlunosControllers::class)->cadastrar(request());
})
    ->middleware(['auth'])
    ->name('alunos.cadastrar');


// Rota para inserir o aluno
Route::post('/alunos/cadastrar', [AlunosControllers::class, 'inserir'])->name('alunos.inserir');
// Rota para deletar o aluno
Route::delete('/alunos/{id}', [AlunosControllers::class, 'deletar'])->name('alunos.deletar');
// Rota para exibir a pagina de edicao do aluno
Route::get('/alunos/{id}/editar', [AlunosControllers::class, 'editar'])->name('alunos.editar');
//Rota que efetivamente realiza a atualização
Route::put('/alunos/{id}', [AlunosControllers::class, 'atualizar'])->name('alunos.atualizar');


// Rota para listar a equipe
Route::middleware('auth')->group(function () {
    // Página do time
    Route::get('/team', [EquipeController::class, 'team'])->name('team.show');

    // Página de edição do time
    Route::get('/team/edit', [EquipeController::class, 'edit'])->name('team.edit');

    // Atualização do time
    Route::put('/team', [EquipeController::class, 'update'])->name('team.update');
});



require __DIR__ . '/auth.php';
