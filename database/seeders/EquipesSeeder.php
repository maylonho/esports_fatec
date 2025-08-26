<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('equipes')->insert([
            [
                "id" => 1,
                "nome" => "dsm1",
                "created_at" => "2025-08-19 16:01:27",
                "updated_at" => "2025-08-20 20:58:14",
                "game" => "CS1.6",
                "pontos" => 5,
                "nick" => "DSM1",
                "image" => "teams/RMhTihBIxc469gH7Ksl46J9sZbivdJY0B2l3AvIh.webp",
            ],
            [
                "id" => 2,
                "nome" => "dsm2",
                "created_at" => "2025-08-19 16:01:27",
                "updated_at" => "2025-08-20 20:57:41",
                "game" => "CS1.6",
                "pontos" => 4,
                "nick" => "DSM2",
                "image" => "teams/n1Z6Zjov1PsXIC9tN4IWAs6QLEmeOfVWD4wErdSG.png",
            ],
            [
                "id" => 3,
                "nome" => "dsm3",
                "created_at" => "2025-08-19 16:01:27",
                "updated_at" => "2025-08-20 20:59:02",
                "game" => "CS1.6",
                "pontos" => 2,
                "nick" => "Furia dos Calouros",
                "image" => "teams/TnMoes00sq546PxVWHIIocZ7oHkHNIcs0eN6GiRT.jpg",
            ],
            [
                "id" => 4,
                "nome" => "dsm4",
                "created_at" => "2025-08-19 16:01:27",
                "updated_at" => "2025-08-20 20:59:30",
                "game" => "CS1.6",
                "pontos" => 0,
                "nick" => "Corajosos e Perdidos",
                "image" => "teams/c7TYzR4Sbtd2KUsUiTwQwFf3ICjAieJjCGnwAvAL.jpg",
            ],
            [
                "id" => 5,
                "nome" => "dsm5",
                "created_at" => "2025-08-19 16:01:27",
                "updated_at" => "2025-08-20 22:34:53",
                "game" => "CS1.6",
                "pontos" => 1,
                "nick" => "Jabuticabeiros",
                "image" => "teams/QQYl86FAyx1vTxZK2HoWOJXGV839E3NVSk1CSWva.png",
            ],
            [
                "id" => 6,
                "nome" => "dsm6",
                "created_at" => "2025-08-19 16:01:27",
                "updated_at" => "2025-08-20 20:57:17",
                "game" => "CS1.6",
                "pontos" => 8,
                "nick" => "Furtivos",
                "image" => "teams/g5rmjG06g7Kq4d7WJnQL2eFLqYetMo6k6hQEY3Y6.webp",
            ],
            [
                "id" => 7,
                "nome" => "dsm7",
                "created_at" => "2025-08-19 16:01:27",
                "updated_at" => "2025-08-22 00:39:51",
                "game" => "CS1.6",
                "pontos" => 8,
                "nick" => "TESTANDO NICK",
                "image" => "teams/PdRrxUwKcxuWzLC64jbsfStCbK0dL2GyYJcRDk4m.jpg",
            ],
        ]);
    }
}
