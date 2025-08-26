<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunosSeeder extends Seeder
{
   /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('alunos')->insert([
            [
                "id" => 2,
                "nome" => "MAYLON",
                "sobrenome" => "DE OLIVEIRA",
                "turma" => "dsm1",
                "telefone" => "1399711714",
                "endereco" => "Rua Brasil, 200",
                "data_nascimento" => "1995-06-13",
                "created_at" => "2025-08-20 14:33:28",
                "updated_at" => "2025-08-20 17:51:57",
            ],
            [
                "id" => 3,
                "nome" => "JORGE",
                "sobrenome" => "DE OLIVEIRA",
                "turma" => "dsm2",
                "telefone" => "1399711714",
                "endereco" => "Rua Brasil, 200",
                "data_nascimento" => "2025-08-22",
                "created_at" => "2025-08-20 14:33:28",
                "updated_at" => "2025-08-20 14:33:28",
            ],
            [
                "id" => 4,
                "nome" => "GEAN",
                "sobrenome" => "DE OLIVEIRA",
                "turma" => "dsm2",
                "telefone" => "1399711714",
                "endereco" => "Rua Brasil, 200",
                "data_nascimento" => "2025-08-22",
                "created_at" => "2025-08-20 14:33:28",
                "updated_at" => "2025-08-20 14:33:28",
            ],
            [
                "id" => 6,
                "nome" => "RUAN",
                "sobrenome" => "DE OLIVEIRA",
                "turma" => "dsm4",
                "telefone" => "1399711714",
                "endereco" => "Rua Brasil, 200",
                "data_nascimento" => "2025-08-22",
                "created_at" => "2025-08-20 14:33:28",
                "updated_at" => "2025-08-20 14:33:28",
            ],
            [
                "id" => 7,
                "nome" => "NARCISIO",
                "sobrenome" => "DE OLIVEIRA",
                "turma" => "dsm4",
                "telefone" => "1399711714",
                "endereco" => "Rua Brasil, 200",
                "data_nascimento" => "2025-08-22",
                "created_at" => "2025-08-20 14:33:28",
                "updated_at" => "2025-08-20 14:33:28",
            ],
            [
                "id" => 8,
                "nome" => "JOAO",
                "sobrenome" => "DE OLIVEIRA",
                "turma" => "dsm4",
                "telefone" => "1399711714",
                "endereco" => "Rua Brasil, 200",
                "data_nascimento" => "2025-08-22",
                "created_at" => "2025-08-20 14:33:28",
                "updated_at" => "2025-08-20 14:33:28",
            ],
            [
                "id" => 10,
                "nome" => "Miria Alves",
                "sobrenome" => "Santana de Oliveira",
                "turma" => "mmlkkn",
                "telefone" => "1399711714",
                "endereco" => "rua brasil, 200",
                "data_nascimento" => "2025-08-11",
                "created_at" => "2025-08-20 17:11:41",
                "updated_at" => "2025-08-20 17:11:41",
            ],
            [
                "id" => 13,
                "nome" => "NARCISIO",
                "sobrenome" => "DE OLIVEIRA",
                "turma" => "dsm4",
                "telefone" => "1399711714",
                "endereco" => "Rua Brasil, 200",
                "data_nascimento" => "2025-08-22",
                "created_at" => "2025-08-20 14:33:28",
                "updated_at" => "2025-08-20 14:33:28",
            ],
            [
                "id" => 14,
                "nome" => "João",
                "sobrenome" => "Silva",
                "turma" => "dsm1",
                "telefone" => "13997000001",
                "endereco" => "Rua das Flores, 10",
                "data_nascimento" => "2000-05-15",
                "created_at" => "2025-08-20 17:56:42",
                "updated_at" => "2025-08-20 17:56:42",
            ],
            [
                "id" => 15,
                "nome" => "Maria",
                "sobrenome" => "Santos",
                "turma" => "dsm2",
                "telefone" => "13997000002",
                "endereco" => "Avenida Paulista, 25",
                "data_nascimento" => "2001-11-22",
                "created_at" => "2025-08-20 17:56:42",
                "updated_at" => "2025-08-20 17:56:42",
            ],
            // continue listando todos até o id 44...
            [
                "id" => 44,
                "nome" => "joanico",
                "sobrenome" => "silvestre",
                "turma" => "dsm6",
                "telefone" => "1380391823",
                "endereco" => "fdfsfsd",
                "data_nascimento" => "2025-08-14",
                "created_at" => "2025-08-20 21:29:40",
                "updated_at" => "2025-08-20 21:29:40",
            ],
        ]);
    }
}
