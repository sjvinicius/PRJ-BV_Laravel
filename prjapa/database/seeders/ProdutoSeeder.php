<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('produto')->insert([
            'NOME' => Str::random(7),
            'TIPOMEDIDA_ID' => 1,
            'VALORMEDIDA' => rand(20, 120),
            'PRECOUNIDADE' => mt_rand(0, 10000) / 100,
            'INFOADD' => Str::random(7) . " " . Str::random(15) . " " . Str::random(4) . ".",
            'CRIACAO_TOKEN' => "PRODUTOSEEDER",
        ]);
    }
}
