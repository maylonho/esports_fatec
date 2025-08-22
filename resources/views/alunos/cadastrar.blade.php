@extends('layouts.base')

@section('title', 'Cadastrar Jogador')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-light text-dark">
            <h3 class="mb-0">Cadastrar Jogador</h3>
        </div>
        <div class="card-body">

            {{-- Mensagem de sucesso --}}
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form action="{{ route('alunos.inserir') }}" method="POST">
                @csrf

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="nome" class="form-label">Nome</label>
                        <input name="nome" type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" value="{{ old('nome') }}" required>
                        @error('nome')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="sobrenome" class="form-label">Sobrenome</label>
                        <input name="sobrenome" type="text" class="form-control @error('sobrenome') is-invalid @enderror" id="sobrenome" value="{{ old('sobrenome') }}" required>
                        @error('sobrenome')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input name="telefone" type="text" class="form-control @error('telefone') is-invalid @enderror" id="telefone" value="{{ old('telefone') }}" required>
                        @error('telefone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input name="endereco" type="text" class="form-control @error('endereco') is-invalid @enderror" id="endereco" value="{{ old('endereco') }}" required>
                        @error('endereco')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                        <input name="data_nascimento" type="date" class="form-control @error('data_nascimento') is-invalid @enderror" id="data_nascimento" value="{{ old('data_nascimento') }}" required>
                        @error('data_nascimento')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <input name="turma" type="hidden" value="{{ auth()->user()->team }}">

                <div class="d-flex justify-content-end mt-4">
                    <button type="submit" class="btn btn-danger">Cadastrar</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
