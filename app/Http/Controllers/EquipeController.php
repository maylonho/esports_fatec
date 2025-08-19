<?php

namespace App\Http\Controllers;

use App\Models\Equipes;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    public function index(Request $request)
    {
        //Recupera todos os dados da tabela equipes e armazena no array $equipes
        $equipes = Equipes::orderBy('pontos', 'desc')->get();

        //'alunos.index' = caminho da view
        //'alunos' => $alunos = envia os dados atraves de um array (método de array associativo, lembrando que temos tambem o with e o compact)
        return view('game_cs.index', ['equipes' => $equipes]);
    }
}
