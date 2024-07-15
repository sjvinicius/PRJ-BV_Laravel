<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UsuarioProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarioproduto')->insert([
            'USUARIO_ID' => 1,
            'PRODUTO_ID' => 1,
            'NUMEROITENS' => rand(20, 120),
            'CRIACAO_TOKEN' => "USUARIOPRODUTOSEEDER",
        ]);
    }
}
