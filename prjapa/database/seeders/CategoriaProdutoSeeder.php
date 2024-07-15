<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CategoriaProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categoriaproduto')->insert([
            'CATEGORIA_ID' => 1,
            'PRODUTO_ID' => 1,
            'CRIACAO_TOKEN' => "CATEGORIAPRODUTOSEEDER",
        ]);
    }
}
