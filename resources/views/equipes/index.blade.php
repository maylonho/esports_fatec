@extends('layouts.base')

@section('title', 'Meu Time')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-secoundary text-dark">
            <h3 class="mb-0">Meu Time</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 text-center">
                    @if($team->image)
                        <img src="{{ asset('storage/' . $team->image) }}" alt="Imagem do time" class="img-fluid img-thumbnail mb-3">
                    @else
                        <img src="{{ asset('images/no-image.png') }}" alt="No Image" class="img-fluid img-thumbnail mb-3" width="50%">
                    @endif
                </div>
                <div class="col-md-8">
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item"><strong>Nome:</strong> {{ $team->nick }}</li>
                        <li class="list-group-item"><strong>Pontos:</strong> {{ $team->pontos }}</li>
                        <li class="list-group-item">
                            <strong>Jogadores:</strong>
                            @if($jogadores->isEmpty())
                                Nenhum jogador cadastrado.
                            @else
                                <ul class="mt-2">
                                    @foreach($jogadores as $jogador)
                                        <li>{{ $jogador->nome }} {{ $jogador->sobrenome }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    </ul>
                    <a href="{{ route('team.edit') }}" class="btn btn-danger">Editar Time</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
