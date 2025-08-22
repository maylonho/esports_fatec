@extends('layouts.base')

@section('title', 'Placar')

@section('content')
<div class="container mt-5">

    <!-- Cabeçalho -->
    <div class="text-center mb-5">
        <h1 class="text-3xl font-bold text-gray-800">⚽ Placar</h1>
        <p class="text-gray-500">Gerencie seu perfil e suas informações de acesso</p>
    </div>

    <!-- Grid com cards -->
    <div class="row g-4">
        
        <!-- Informações do Perfil -->
        <div class="col-md-6">
            <div class="card shadow-sm rounded-2xl border-0">
                <div class="card-body">
                    <h5 class="card-title text-lg font-semibold text-gray-700 mb-3">Informações do Perfil</h5>
                    <div class="text-sm text-gray-500 mb-3">
                        Atualize seu nome, endereço de e-mail e demais informações pessoais.
                    </div>
                    <div class="border-top pt-3">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
            </div>
        </div>

        <!-- Alterar Senha -->
        <div class="col-md-6">
            <div class="card shadow-sm rounded-2xl border-0">
                <div class="card-body">
                    <h5 class="card-title text-lg font-semibold text-gray-700 mb-3">Alterar Senha</h5>
                    <div class="text-sm text-gray-500 mb-3">
                        Defina uma nova senha forte para manter sua conta protegida.
                    </div>
                    <div class="border-top pt-3">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
            </div>
        </div>

        <!-- Excluir Conta -->
        <div class="col-12">
            <div class="card shadow-sm rounded-2xl border-0 border-danger">
                <div class="card-body">
                    <h5 class="card-title text-lg font-semibold text-red-600 mb-3">⚠️ Excluir Conta</h5>
                    <div class="text-sm text-gray-500 mb-3">
                        Esta ação é irreversível. Todos os seus dados serão apagados permanentemente.
                    </div>
                    <div class="border-top pt-3">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
