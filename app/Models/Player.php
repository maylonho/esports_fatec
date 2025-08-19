<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
        //Nome da tabela do banco de dados
    protected $table = 'players';

    //atributos que serão enviados
    protected $fillable = ['id', 'id_equipe', 'level_access', 'nome'];
}
