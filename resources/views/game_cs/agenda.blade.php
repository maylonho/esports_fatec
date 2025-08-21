@extends('layouts.base')

@section('title', 'Chaveamento dos Jogos')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-5">Chaveamento dos Jogos</h1>

    <div class="bracket">

        <div class="round round-1">
            <div class="match">
                <div class="team">DSM1</div>
                <div class="team">DSM6</div>
            </div>
            <div class="match">
                <div class="team">DSM2</div>
                <div class="team">DSM5</div>
            </div>
            <div class="match">
                <div class="team">DSM3</div>
                <div class="team">DSM4</div>
            </div>
        </div>

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

        <div class="round round-3">
            <div class="match">
                <div class="team">Final</div>
                <div class="team">Final</div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Estilos Gerais do Chaveamento */
    .bracket {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        gap: 60px;
        /* Espaço entre as colunas (rodadas) */
        flex-wrap: wrap;
    }

    .round {
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 40px;
        /* Espaço entre as partidas na mesma coluna */
        position: relative;
    }

    .match {
        background: #f8f9fa;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 10px 15px;
        display: flex;
        flex-direction: column;
        text-align: center;
        min-width: 150px;
        position: relative;
        /* Necessário para posicionar as linhas de conexão */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .match .team {
        padding: 5px 0;
        font-weight: 600;
        border-bottom: 1px solid #eee;
    }

    .match .team:last-child {
        border-bottom: none;
    }

    /* Estilo para a rodada final (opcional) */
    .round-3 .match {
        background: #ffd700;
        border: 1px solid #ffc107;
    }

    /* Linhas de Conexão entre as Rodadas */

    /* Conexões horizontais saindo de cada partida */
    .match::after {
        content: '';
        position: absolute;
        right: -30px;
        /* Metade da distância entre as colunas */
        top: 50%;
        width: 30px;
        height: 1px;
        background-color: #555;
        transform: translateY(-50%);
        z-index: 1;
    }

    /* Linhas verticais conectando os grupos de partidas (ex: 1ª para a 2ª rodada) */
    .round .match:nth-child(odd)::before {
        content: '';
        position: absolute;
        right: -30px;
        /* Metade da distância entre as colunas */
        top: 50%;
        width: 1px;
        height: calc(50% + 20px);
        /* 50% da altura da partida + metade do gap */
        border-right: 1px dashed #555;
        border-bottom: 1px dashed #555;
        transform: translateY(-50%);
    }

    /* Ajuste para as partidas pares para não duplicar as linhas */
    .round .match:nth-child(even)::before {
        content: '';
        position: absolute;
        right: -30px;
        /* Metade da distância entre as colunas */
        top: 50%;
        width: 1px;
        height: calc(50% + 20px);
        /* 50% da altura da partida + metade do gap */
        border-right: 1px dashed #555;
        border-top: 1px dashed #555;
        transform: translateY(-50%);
    }

    /* Correção para as linhas da última partida de cada grupo, que não precisam de conexão vertical para baixo */
    .round-1 .match:nth-last-child(-n+1)::before,
    .round-2 .match:nth-last-child(-n+1)::before {
        height: calc(50% + 20px);
        border-top: 1px dashed #555;
        border-bottom: none;
    }

    /* Ajuste para a conexão entre as rodadas Semifinal e Final */
    .round-2 .match::after {
        right: -30px;
    }

    /* Linhas da Final */
    .round-3 .match::after {
        content: none;
    }

    /* Correção para as linhas da primeira rodada */
    .round-1 .match:nth-child(odd)::before {
        border-right: 1px dashed #555;
        border-bottom: 1px dashed #555;
    }

    .round-1 .match:nth-child(even)::before {
        border-right: 1px dashed #555;
        border-top: 1px dashed #555;
    }
</style>
@endsection