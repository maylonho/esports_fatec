<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunosControllers extends Controller
{
    public function index(Request $request)
    {
        //Recupera todos os dados da tabela alunos e armazena no array $alunos
        $alunos = Aluno::all();

        //'alunos.index' = caminho da view
        //'alunos' => $alunos = envia os dados atraves de um array (método de array associativo, lembrando que temos tambem o with e o compact)
        return view('alunos.index', ['alunos' => $alunos]);
    }

    public function cadastrar()
    {
        return view('alunos.cadastrar');
    }

    public function inserir(Request $request)
    {
        // Validação dos dados do formulário
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'sobrenome' => 'required|string|max:255',
            'turma' => 'required|string|max:50',
            'telefone' => 'required|string|max:15',
            'endereco' => 'required|string|max:255',
            'data_nascimento' => 'required|date',
        ]);

        // Criar um novo registro no banco de dados
        $carro = Aluno::create($validatedData);

        return redirect()->route('alunos.cadastrar')->with('success', 'Aluno cadastrado com sucesso!');
    }

    public function deletar($id)
    {
        // Encontrar o aluno pelo ID e excluir
        //O método findOrFail vai procurar o registro com o id fornecido. Se o registro não for encontrado, ele lança um erro 404. Caso o registro exista, ele será deletado com o método delete().
        $aluno = Aluno::findOrFail($id);
        $aluno->delete();

        // Redirecionar para a página de listagem com uma mensagem de sucesso
        return redirect()->route('alunos.listar')->with('success', 'Aluno excluído com sucesso!');
    }

    public function editar($id)
    {
        // Encontra o aluno pelo ID
        $aluno = Aluno::findOrFail($id);

        // Retorna a view de edição com os dados do aluno
        return view('alunos.editar', compact('aluno'));
    }

    public function atualizar(Request $request, $id)
    {
        // Validação dos dados
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'sobrenome' => 'required|string|max:255',
            'turma' => 'required|string|max:50',
            'telefone' => 'required|string|max:15',
            'endereco' => 'required|string|max:255',
            'data_nascimento' => 'required|date',
        ]);

        // Encontra o aluno pelo ID e atualiza os dados
        $aluno = Aluno::findOrFail($id);
        $aluno->update($validatedData);

        return redirect()->route('alunos.listar')->with('success', 'Aluno atualizado com sucesso!');
    }
}
