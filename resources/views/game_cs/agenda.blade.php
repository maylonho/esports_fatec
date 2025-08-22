@extends('layouts.base')

@section('title', 'Chaveamento dos Jogos')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-5">Chaveamento dos Jogos</h1>

    <div class="bracket">

        <!-- Rodada 1 -->
        <div class="round round-1">
            <div class="match">
                <div class="team">
                    <img src="{{ asset('storage/' . $equipes[0]->image) }}" alt="{{ $equipes[0]->nome }}" style="width:30px;height:30px;margin-right:5px;">
                    {{ strtoupper($equipes[0]->nome) }}
                </div>
                <div class="team">
                    <img src="{{ asset('storage/' . $equipes[5]->image) }}" alt="{{ $equipes[0]->nome }}" style="width:30px;height:30px;margin-right:5px;">
                    {{ strtoupper($equipes[5]->nome) }}
                </div>
            </div>
            <div class="match">
                <div class="team">
                    <div class="team">
                    <img src="{{ asset('storage/' . $equipes[1]->image) }}" alt="{{ $equipes[0]->nome }}" style="width:30px;height:30px;margin-right:5px;">
                    {{ strtoupper($equipes[1]->nome) }}
                </div>
                </div>
                <div class="team">
                    <div class="team">
                    <img src="{{ asset('storage/' . $equipes[4]->image) }}" alt="{{ $equipes[0]->nome }}" style="width:30px;height:30px;margin-right:5px;">
                    {{ strtoupper($equipes[4]->nome) }}
                </div>
                </div>
            </div>
            <div class="match">
                <div class="team">
                    <img src="{{ asset('storage/' . $equipes[2]->image) }}" alt="{{ $equipes[0]->nome }}" style="width:30px;height:30px;margin-right:5px;">
                    {{ strtoupper($equipes[2]->nome) }}
                </div>
                <div class="team"><img src="{{ asset('storage/' . $equipes[3]->image) }}" alt="{{ $equipes[0]->nome }}" style="width:30px;height:30px;margin-right:5px;">
                    {{ strtoupper($equipes[3]->nome) }}</div>
            </div>
        </div>

        <!-- Rodada 2 -->
        <div class="round round-2">
            <div class="match">
                <div class="team">Vencedor 1</div>
                <div class="team">Vencedor 2</div>
            </div>
            <div class="match">
                <div class="team">Vencedor 3</div>
                <div class="team">Vencedor 4</div>
            </div>
        </div>

        <!-- Rodada Final -->
        <div class="round round-3">
            <div class="match">
                <div class="team final">Final</div>
            </div>
        </div>

    </div>
</div>

<style>
    /* Container da chave */
    .bracket {
        display: flex;
        justify-content: center;
        gap: 80px;
        align-items: flex-start;
        flex-wrap: wrap;
    }

    /* Rodadas */
    .round {
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 40px;
        position: relative;
    }

    /* Partidas */
    .match {
        background: #f8f9fa;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px 15px;
        min-width: 150px;
        text-align: center;
        position: relative;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    /* Times dentro da partida */
    .team {
        font-weight: 600;
        padding: 5px 0;
        border-bottom: 1px solid #eee;
    }

    .team:last-child {
        border-bottom: none;
    }

    /* Destaque Final */
    .round-3 .match {
        background: #ffd700;
        border: 2px solid #ffc107;
    }

    /* Linhas horizontais conectando partidas */
    .match::after {
        content: '';
        position: absolute;
        right: -40px;
        top: 50%;
        width: 40px;
        height: 2px;
        background: #555;
        transform: translateY(-50%);
    }

    /* Linhas verticais conectando as partidas pares e ímpares */
    .round .match:nth-child(odd)::before {
        content: '';
        position: absolute;
        right: -40px;
        top: 50%;
        width: 2px;
        height: calc(100% + 20px);
        background: #555;
    }

    .round .match:nth-child(even)::before {
        content: '';
        position: absolute;
        right: -40px;
        top: -20px;
        width: 2px;
        height: calc(100% + 20px);
        background: #555;
    }

    /* Remove linha horizontal da última rodada */
    .round-3 .match::after,
    .round-3 .match::before {
        content: none;
    }

    /* Centraliza a Final */
    .round-3 {
        margin-top: 80px;
    }
</style>
@endsection