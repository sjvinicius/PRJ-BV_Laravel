<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuario')->insert([
            'REALM' => "[admin]",
            'EMAIL' => "sjf.vinicius@gmail.com",
            'PASSWORD' => "123",
            'CRIACAO_TOKEN' => "USUARIOSEEDER",
        ]);
    }
}
