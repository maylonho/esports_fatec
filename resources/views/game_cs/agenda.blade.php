@extends('layouts.base')

@section('title', 'Placar')

@section('content')
<div class="container">
    <h1 class="mt-5">Programação dos Jogos CS 1.6</h1>

    <div class="row mt-5">


        <div class="col-sm-9">
            <h3 class="">TABELA</h3>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center" style="width: 100px">Posição</th>
                            <th scope="col">Time</th>
                            <th scope="col" class="text-center" style="width: 120px">Vitórias</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-3">
            <h3>JOGOS</h3>
            DSM1 x DSM2(wins)
        </div>
    </div>


</div>
@endsection