<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                "id" => 6,
                "name" => "Icaro",
                "email" => "icaro@gmail.com",
                "email_verified_at" => null,
                "password" => '$2y$12$cu/nMEeEqlx8Dp.sGLbGDu34kna7dXcdnc0SQSmrYaBT0TyZ/ZN2a',
                "remember_token" => "iqDhrk5idQAd2cXuF2LXQ57oqWiw0GNkBLBQ6tFU2CdcbUH4waIxhGmUfH7q",
                "created_at" => "2025-08-20 17:53:11",
                "updated_at" => "2025-08-20 17:53:11",
                "nivel" => "admin",
                "team" => "dsm1",
            ],
            [
                "id" => 2,
                "name" => "Maylon",
                "email" => "oliveira_maylon@hotmail.com",
                "email_verified_at" => null,
                "password" => '$2y$12$nS4Z54ot9WVxf6wzLMwmaO03Bhwvstzcg5MoUhmGpsZV6L0voSYiG',
                "remember_token" => null,
                "created_at" => "2025-08-20 01:27:24",
                "updated_at" => "2025-08-20 17:21:21",
                "nivel" => "admin",
                "team" => "dsm2",
            ],
            [
                "id" => 4,
                "name" => "Vinicius",
                "email" => "vinicius@gmail.com",
                "email_verified_at" => null,
                "password" => '$2y$12$5OGoYsjFsCUWQ04VMu3EEeT6XXjxllX4DIAr.qXDaLk6CdLFR7r6y',
                "remember_token" => null,
                "created_at" => "2025-08-20 15:00:50",
                "updated_at" => "2025-08-20 15:00:50",
                "nivel" => "editor",
                "team" => "dsm3",
            ],
            [
                "id" => 5,
                "name" => "Joao",
                "email" => "catarrento@dsds.ca",
                "email_verified_at" => null,
                "password" => '$2y$12$MlSwufRBZgRiETc.5vJSRuRZRIMjAo0jgtNKyNY4hz5lafJC4ssga',
                "remember_token" => null,
                "created_at" => "2025-08-20 17:16:44",
                "updated_at" => "2025-08-20 17:16:44",
                "nivel" => "editor",
                "team" => "dsm4",
            ],
            [
                "id" => 7,
                "name" => "janaina",
                "email" => "janaina@medeiros.com",
                "email_verified_at" => null,
                "password" => '$2y$12$9uHgGwiIAwza43I0IMxwgetGGTDlMMzY39Z2hPu07lxoeLcDopxLe',
                "remember_token" => null,
                "created_at" => "2025-08-20 20:53:50",
                "updated_at" => "2025-08-20 20:53:50",
                "nivel" => "editor",
                "team" => "dsm5",
            ],
            [
                "id" => 8,
                "name" => "jagunço",
                "email" => "jagu@gmail.com",
                "email_verified_at" => null,
                "password" => '$2y$12$rU8CxVKXUeXUa72b3/Ys2u7ETMztMhHlc5D8o.ARsV3FGav.m5pGy',
                "remember_token" => null,
                "created_at" => "2025-08-20 20:54:17",
                "updated_at" => "2025-08-20 20:54:17",
                "nivel" => "editor",
                "team" => "dsm6",
            ],
        ]);
    }
}
