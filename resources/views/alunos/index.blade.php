@extends('layouts.base')

@section('title', 'Players')

@section('content')
<div class="container mt-5">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Lista de Jogadores</h1>

        @auth
        <div class="text-end">
            <div class="fw-bold">Olá, {{ auth()->user()->name }}!</div>
            <div class="text-muted">Equipe: {{ strtoupper(auth()->user()->team) }}</div>
        </div>
        @endauth
    </div>

    {{-- Permissões --}}
    <div class="mb-4">
        @can('admin')
        <span class="badge bg-danger">Administrador</span>
        @endcan
        @can('editor')
        <span class="badge bg-warning text-dark">Editor</span>
        @endcan
        @can('user')
        <span class="badge bg-secondary">Usuário comum</span>
        @endcan
    </div>

    {{-- Tabela --}}
    <div class="table-responsive">
        <table class="table table-striped table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Matrícula</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">Turma</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Idade</th>
                    @auth
                    @can('admin-or-editor')
                    <th colspan="2" scope="col">Ações</th>
                    @endcan
                    @endauth
                </tr>
            </thead>
            <tbody>
                @foreach ($alunos as $alu)
                <tr>
                    <th scope="row">{{ $alu->id }}</th>
                    <td>{{ $alu->nome }}</td>
                    <td>{{ $alu->sobrenome }}</td>
                    <td>{{ strtoupper($alu->turma) }}</td>
                    <td class="telefone">{{ $alu->telefone }}</td>
                    <td>{{ $alu->endereco }}</td>
                    <td>{{ \Carbon\Carbon::parse($alu->data_nascimento)->age }}</td>

                    @auth
                    @can('admin-or-editor')
                    <td>
                        <a href="{{ route('alunos.editar', $alu->id) }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-pencil-alt"></i> Editar
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('alunos.deletar', $alu->id) }}" method="POST"
                            onsubmit="return confirm('Tem certeza que deseja excluir este aluno?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i> Excluir
                            </button>
                        </form>
                    </td>
                    @endcan
                    @endauth

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection

{{-- Scripts devem estar fora do @section('content') --}}



@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {

    function formatTelefone(tel) {
        if (!tel) return '';
        // Remove tudo que não é número
        let nums = tel.toString().replace(/\D/g, '');
        if (nums.length === 11) {
            // Formato (99) 99999-9999
            return '(' + nums.slice(0,2) + ') ' + nums.slice(2,7) + '-' + nums.slice(7);
        } else if (nums.length === 10) {
            // Formato (99) 9999-9999
            return '(' + nums.slice(0,2) + ') ' + nums.slice(2,6) + '-' + nums.slice(6);
        }
        return tel; // caso não seja 10 ou 11 dígitos
    }

    // Seleciona todos os elementos com a classe 'telefone'
    document.querySelectorAll('.telefone').forEach(function(td) {
        td.textContent = formatTelefone(td.textContent);
    });

});
</script>
@endsection
