<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Equipes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EquipeController extends Controller
{
    public function index(Request $request)
    {
        //Recupera todos os dados da tabela equipes e armazena no array $equipes
        $equipes = Equipes::orderBy('pontos', 'desc')->get();

        return view('game_cs.index', ['equipes' => $equipes]);
    }

    public function team()
    {
        // pega o nome do time do usuário logado
        $teamName = Auth::user()->team;

        // busca o time pelo nome
        $team = Equipes::where('nome', $teamName)->first();

        if (!$team) {
            abort(404, 'Time não encontrado.');
        }
        // Pega os jogadores/alunos que pertencem a essa equipe
        $jogadores = Aluno::where('turma', $teamName)->get();

        return view('equipes.index', compact('team', 'jogadores'));
    }

    public function edit()
    {
        $teamName = Auth::user()->team;

        $team = Equipes::where('nome', $teamName)->first();

        if (!$team) {
            abort(404, 'Time não encontrado.');
        }

        return view('equipes.edit', compact('team'));
    }

    public function update(Request $request)
    {
        $teamName = Auth::user()->team;

        $team = Equipes::where('nome', $teamName)->first();

        if (!$team) {
            abort(404, 'Time não encontrado.');
        }

        // Validação básica
        $validated = $request->validate([
            'nick' => 'required|string|max:255',
            'game' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048', // opcional
        ]);

        // Se enviou uma imagem, salvar no storage/public
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('teams', 'public');
            $validated['image'] = $path;
        }

        $team->update($validated);

        return redirect()->route('team.show')->with('success', 'Time atualizado com sucesso!');
    }
}
