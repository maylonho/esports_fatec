@extends('layouts.base')

@section('title', 'Placar')

@section('content')
<div class="container my-5">

    <div class="text-center mb-5">
        <h1 class="fw-bold text-dark">🏆 Classificação dos Jogos CS 1.6 da Fatec</h1>
        <p class="text-muted">Acompanhe o ranking atualizado das equipes</p>
    </div>

    <div class="row">
        <!-- Tabela -->
        <div class="col-lg-8 mb-4">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-dark text-white text-center rounded-top-4">
                    <h3 class="mb-0">Tabela de Classificação</h3>
                </div>
                <div class="card-body p-4">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="table-primary">
                                <tr>
                                    <th scope="col" class="text-center" style="width: 80px">Pos</th>
                                    <th scope="col">Time</th>
                                    <th scope="col" class="text-center" style="width: 100px">Vitórias</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($equipes as $index => $equi)
                                <tr>
                                    <td class="text-center fw-bold {{ $index < 2 ? 'text-success' : '' }}">
                                        {{ $index + 1 }}º
                                    </td>
                                    <td class="fw-semibold">
                                        @if($equi->image)
                                        <img src="{{ asset('storage/' . $equi->image) }}" alt="Imagem do time" width="30px" class="me-3">
                                        @else
                                        <img src="{{ asset('storage/teams/default-team.png') }}" alt="Imagem padrão" width="30px" class="me-3">
                                        @endif
                                        
                                        {{ $equi->nick }} - {{ strtoupper($equi->nome) }}
                                    </td>
                                    <td class="text-center fw-bold text-dark">
                                        {{ $equi->pontos }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jogos -->
        <div class="col-lg-4 mb-4">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-secoundary text-dark text-center rounded-top-4">
                    <h3 class="mb-0">Partidas</h3>
                </div>
                <div class="card-body p-4">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            DSM1
                            <span class="badge bg-success rounded-2">Vitória</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            DSM2
                            <span class="badge bg-danger rounded-2">Derrota</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Team X
                            <span class="badge bg-warning rounded-2">Em andamento</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection