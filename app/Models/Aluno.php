<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{

    //Nome da tabela do banco de dados
    protected $table = 'alunos';

    //atributos que serão enviados
    protected $fillable = ['id', 'nome', 'sobrenome', 'turma', 'telefone', 'endereco', 'data_nascimento'];
}
