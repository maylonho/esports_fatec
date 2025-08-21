@extends('layouts.base')

@section('title', 'Editar Meu Time')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-secoundary text-darck">
            <h3 class="mb-0">Editar Meu Time</h3>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('team.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nick" class="form-label">Nick</label>
                    <input type="text" name="nick" id="nick" class="form-control @error('nick') is-invalid @enderror" value="{{ old('nick', $team->nick) }}">
                    @error('nick')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="game" class="form-label">Game</label>
                    <input type="text" name="game" id="game" class="form-control @error('game') is-invalid @enderror" value="{{ old('game', $team->game) }}">
                    @error('game')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Imagem</label>
                    <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    @if($team->image)
                        <div class="mt-2">
                            <p>Imagem atual:</p>
                            <img src="{{ asset('storage/' . $team->image) }}" alt="Imagem do time" class="img-thumbnail" width="150">
                        </div>
                    @endif
                </div>

                <button type="submit" class="btn btn-danger">Salvar Alterações</button>
                <a href="{{ route('team.show') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
</div>
@endsection
