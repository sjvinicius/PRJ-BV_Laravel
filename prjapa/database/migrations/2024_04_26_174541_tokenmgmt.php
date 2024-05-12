<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasTable("usuariotoken")) {
            Schema::create('usuariotoken', function (Blueprint $table) {
                $table->string('TOKEN', 64)->id();
                $table->integer("USUARIO_ID");
                $table->dateTime("CRIACAO_DATA")->default(now());
                $table->foreign("USUARIO_ID")->references("USUARIO_ID")->on("usuario");
            });
        }

        Schema::table('usuario', function (Blueprint $table) {
            $table->string("PASSWORD")->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
