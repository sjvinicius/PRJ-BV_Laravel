<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class TipoMedidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('tipomedida')->insert([
            'MEDIDA' => Str::random(7),
            'ACRONIMO' => Str::random(2),
            'CRIACAO_TOKEN' => "TIPOMEDIDASEEDER",
        ]);
    }
}
