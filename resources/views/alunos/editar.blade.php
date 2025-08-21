@extends('layouts.base')

@section('title', 'Editar Aluno')

@section('content')
<div class="container mt-5">

    {{-- Header --}}
    <div class="mb-4">
        <h1 class="h3">Editar Aluno</h1>
        <p class="text-muted">Atualize as informações do aluno abaixo.</p>
    </div>

    {{-- Formulário --}}
    <form action="{{ route('alunos.atualizar', $aluno->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Método PUT para atualizar -->

        <div class="row g-3">

            <div class="col-md-6">
                <label for="nome" class="form-label">Nome</label>
                <input name="nome" type="text" class="form-control" id="nome" value="{{ $aluno->nome }}" required>
            </div>

            <div class="col-md-6">
                <label for="sobrenome" class="form-label">Sobrenome</label>
                <input name="sobrenome" type="text" class="form-control" id="sobrenome" value="{{ $aluno->sobrenome }}" required>
            </div>

        </div>

        <div class="row g-3 mt-2">

            {{-- Campo oculto para turma --}}
            <div class="col-md-6 d-none">
                <label for="turma" class="form-label">Turma</label>
                <input name="turma" type="text" class="form-control" id="turma" value="{{ $aluno->turma }}" required>
            </div>

            <div class="col-md-6">
                <label for="telefone" class="form-label">Telefone</label>
                <input name="telefone" type="text" class="form-control" id="telefone" value="{{ $aluno->telefone }}" required>
            </div>

        </div>

        <div class="row g-3 mt-2">

            <div class="col-12">
                <label for="endereco" class="form-label">Endereço</label>
                <input name="endereco" type="text" class="form-control" id="endereco" value="{{ $aluno->endereco }}" required>
            </div>

            <div class="col-md-3">
                <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                <input name="data_nascimento" type="date" class="form-control" id="data_nascimento" value="{{ $aluno->data_nascimento }}" required>
            </div>

        </div>

        {{-- Botão --}}
        <div class="mt-4 text-end">
            <button type="submit" class="btn btn-success">
                <i class="fas fa-save me-1"></i> Atualizar
            </button>
        </div>

    </form>
</div>
@endsection
