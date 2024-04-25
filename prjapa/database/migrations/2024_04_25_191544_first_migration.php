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

        if (!Schema::hasTable('cart')) {

            Schema::create('cart', function (Blueprint $table) {
                $table->integer("CART_ID")->id()->autoIncrement();
                $table->string('SLA', length: 50);
                $table->dateTime('CRIACAO_DATA')->default(now());
                $table->string('CRIACAO_TOKEN', 200);
                $table->dateTime('ALTERACAO_DATA')->default(now());
                $table->string('ALTERACAO_TOKEN', 200)->nullable();
                $table->char('STATUS')->default("A");
            });
        }

        if (!Schema::hasTable('tipoquantidade')) {

            Schema::create('tipoquantidade', function (Blueprint $table) {
                $table->integer("TIPOQUANTIDADE_ID")->id()->autoIncrement();
                $table->string("TIPOQUANTIDADE", 50)->nullable(false);
                $table->dateTime('CRIACAO_DATA')->default(now());
                $table->string('CRIACAO_TOKEN', 200);
                $table->dateTime('ALTERACAO_DATA')->default(now());
                $table->string('ALTERACAO_TOKEN', 200)->nullable();
                $table->char('STATUS')->default("A");
            });
        }

        if (!Schema::hasTable('produto')) {

            Schema::create('produto', function (Blueprint $table) {
                $table->integer("PRODUTO_ID")->id()->autoIncrement();
                $table->string('NOMEPRODUTO', length: 100);
                $table->integer('TIPOQUANTIDADE_ID')->nullable(false);
                $table->float('PRECO', 2)->default(0);
                $table->dateTime('CRIACAO_DATA')->default(now());
                $table->string('CRIACAO_TOKEN', 200);
                $table->dateTime('ALTERACAO_DATA')->default(now());
                $table->string('ALTERACAO_TOKEN', 200)->nullable();
                $table->char('STATUS')->default("A");
                $table->foreign("TIPOQUANTIDADE_ID")->references("TIPOQUANTIDADE_ID")->on("tipoquantidade");

            });
        }

        if (!Schema::hasTable('cartproduto')) {

            Schema::create('cartproduto', function (Blueprint $table) {
                $table->integer("CARTPRODUTO_ID")->id()->autoIncrement();
                $table->integer("CART_ID")->nullable(false);
                $table->integer("PRODUTO_ID")->nullable(false);
                $table->integer("QUANTIDADE")->nullable(false);
                $table->dateTime('CRIACAO_DATA')->default(now());
                $table->string('CRIACAO_TOKEN', 200);
                $table->dateTime('ALTERACAO_DATA')->default(now());
                $table->string('ALTERACAO_TOKEN', 200)->nullable();
                $table->char('STATUS')->default("A");
                $table->foreign("CART_ID")->references("CART_ID")->on("cart");
                $table->foreign("PRODUTO_ID")->references("PRODUTO_ID")->on("produto");
            });
        }

        if (!Schema::hasTable('usuario')) {

            Schema::create('usuario', function (Blueprint $table) {
                $table->integer("USUARIO_ID")->id()->autoIncrement();
                $table->string("NOME", 100)->nullable(false);
                $table->string("EMAIL", 100)->nullable(false);
                $table->string("REALM", 200)->nullable(false);
                $table->dateTime('CRIACAO_DATA')->default(now());
                $table->string('CRIACAO_TOKEN', 200);
                $table->dateTime('ALTERACAO_DATA')->default(now());
                $table->string('ALTERACAO_TOKEN', 200)->nullable();
                $table->char('STATUS')->default("A");
            });
        }

        if (!Schema::hasTable('cartusuario')) {

            Schema::create('cartusuario', function (Blueprint $table) {
                $table->integer("CARTUSUARIO_ID")->id()->autoIncrement();
                $table->integer("CART_ID")->nullable(false);
                $table->integer("USUARIO_ID")->nullable(false);
                $table->char("STATUSCARTUSUARIO")->default("P")->nullable(false);
                $table->dateTime("DTRESERVA")->nullable(false);
                $table->dateTime("DTENTREGA")->nullable(false);
                $table->dateTime('CRIACAO_DATA')->default(now());
                $table->string('CRIACAO_TOKEN', 200);
                $table->dateTime('ALTERACAO_DATA')->default(now());
                $table->string('ALTERACAO_TOKEN', 200)->nullable();
                $table->char('STATUS')->default("A");
                $table->foreign("CART_ID")->references("CART_ID")->on("cart");
                $table->foreign("USUARIO_ID")->references("USUARIO_ID")->on("usuario");
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    }
};
