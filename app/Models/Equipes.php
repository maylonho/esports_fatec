<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipes extends Model
{

    //Nome da tabela do banco de dados
    protected $table = 'equipes';

    //atributos que serão enviados
    protected $fillable = ['id', 'nome', 'game', 'pontos', 'nick', 'image'];
}
