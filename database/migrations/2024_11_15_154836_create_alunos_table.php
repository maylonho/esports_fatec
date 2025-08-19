<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->id(); // Chave primária
            $table->string('nome'); // Nome do aluno
            $table->string('sobrenome'); // Sobrenome do aluno
            $table->string('turma'); // Turma do aluno
            $table->string('telefone'); // Telefone do aluno
            $table->string('endereco'); // Endereço do aluno
            $table->date('data_nascimento'); // Data de nascimento do aluno
            $table->timestamps(); // Colunas 'created_at' e 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};
