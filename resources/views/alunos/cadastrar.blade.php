@extends('layouts.base')

@section('title', 'Alunos')

@section('content')
    <div class="container">
        <h1>Cadastro de Alunos</h1>


        {{-- Exibe uma mensagem de sucesso após o cadastro --}}
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('alunos.inserir') }}" method="POST">
            @csrf
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="nome" class="form-label">Nome</label>
                    <input name="nome" type="text" class="form-control" id="nome" required>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="sobrenome" class="form-label">Sobrenome</label>
                    <input name="sobrenome" type="text" class="form-control" id="sobrenome" required>
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-6">
                    <label for="turma" class="form-label">Turma</label>
                    <input name="turma" type="text" class="form-control" id="turma" required>
                </div>
                <div class="mb-3 col-6">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input name="telefone" type="text" class="form-control" id="telefone" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço</label>
                <input name="endereco" type="text" class="form-control" id="endereco" required>
            </div>
            <div class="mb-3 col-3">
                <label for="data_nascimento" class="form-label">Data Nascimento</label>
                <input name="data_nascimento" type="date" class="form-control" id="data_nascimento" required>
            </div>
            <div class="col text-end mb-5">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>

        </form>
    </div>
@endsection
