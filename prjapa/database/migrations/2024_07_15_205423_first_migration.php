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

        Schema::create('usuario', function (Blueprint $table) {
            $table->bigIncrements('USUARIO_ID'); // Cria um campo auto-incremento e chave primária
            $table->string('REALM', 50); // Cria um campo auto-incremento e chave primária
            $table->string('EMAIL', 200)->unique();
            $table->string('PASSWORD', 50); // Cria um campo auto-incremento e chave primária
            $table->datetime('DTPASSWORD')->useCurrent(); // Cria um campo auto-incremento e chave primária
            $table->string('ALTERACAO_TOKEN', 200)->nullable();
            $table->dateTime('ALTERACAO_DATA')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')); // Define o valor padrão como a data e hora atuais
            $table->string('CRIACAO_TOKEN', 200);
            $table->dateTime('CRIACAO_DATA')->useCurrent(); // Define o valor padrão como a data e hora atuais
            $table->char('STATUS', 1)->default('A'); // Define o tamanho do campo 'STATUS' como 1
        });

        Schema::create('tokenacesso', function (Blueprint $table) {
            $table->string('TOKENACESSO_ID', 200)->primary();
            $table->unsignedBigInteger('USUARIO_ID')->useCurrent();
            $table->dateTime('CRIACAO_DATA')->useCurrent();
            $table->foreign("USUARIO_ID")->references("USUARIO_ID")->on("usuario");
        });

        Schema::create('tipomedida', function (Blueprint $table) {
            $table->bigIncrements('TIPOMEDIDA_ID');
            $table->string('MEDIDA', 50);
            $table->string('ACRONIMO', 5);
            $table->string('ALTERACAO_TOKEN', 200)->nullable();
            $table->dateTime('ALTERACAO_DATA')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')); // Define o valor padrão como a data e hora atuais
            $table->string('CRIACAO_TOKEN', 200);
            $table->dateTime('CRIACAO_DATA')->useCurrent(); // Define o valor padrão como a data e hora atuais
            $table->char('STATUS', 1)->default('A'); // Define o tamanho do campo 'STATUS' como 1
        });

        Schema::create('produto', function (Blueprint $table) {
            $table->bigIncrements('PRODUTO_ID');
            $table->string('NOME', 50);
            $table->unsignedBigInteger('TIPOMEDIDA_ID');
            $table->float('VALORMEDIDA', 10, 1);
            $table->float('PRECOUNIDADE', 10, 2);
            $table->string('INFOADD', 300);
            $table->string('ALTERACAO_TOKEN', 200)->nullable();
            $table->dateTime('ALTERACAO_DATA')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')); // Define o valor padrão como a data e hora atuais
            $table->string('CRIACAO_TOKEN', 200);
            $table->dateTime('CRIACAO_DATA')->useCurrent(); // Define o valor padrão como a data e hora atuais
            $table->char('STATUS', 1)->default('A'); // Define o tamanho do campo 'STATUS' como 1
            $table->foreign("TIPOMEDIDA_ID")->references("TIPOMEDIDA_ID")->on("tipomedida");
        });

        Schema::create('usuarioproduto', function (Blueprint $table) {
            $table->bigIncrements('USUARIOPRODUTO_ID');
            $table->unsignedBigInteger('USUARIO_ID');
            $table->unsignedBigInteger('PRODUTO_ID');
            $table->tinyInteger('NUMEROITENS')->unsigned();
            $table->string('ALTERACAO_TOKEN', 200)->nullable();
            $table->dateTime('ALTERACAO_DATA')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')); // Define o valor padrão como a data e hora atuais
            $table->string('CRIACAO_TOKEN', 200);
            $table->dateTime('CRIACAO_DATA')->useCurrent(); // Define o valor padrão como a data e hora atuais
            $table->char('STATUS', 1)->default('A'); // Define o tamanho do campo 'STATUS' como 1
            $table->foreign("USUARIO_ID")->references("USUARIO_ID")->on("usuario");
            $table->foreign("PRODUTO_ID")->references("PRODUTO_ID")->on("produto");
        });

        Schema::create('categoria', function (Blueprint $table) {
            $table->bigIncrements('CATEGORIA_ID');
            $table->string('CATEGORIA', 50);
            $table->string('ALTERACAO_TOKEN', 200)->nullable();
            $table->dateTime('ALTERACAO_DATA')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')); // Define o valor padrão como a data e hora atuais
            $table->string('CRIACAO_TOKEN', 200);
            $table->dateTime('CRIACAO_DATA')->useCurrent(); // Define o valor padrão como a data e hora atuais
            $table->char('STATUS', 1)->default('A'); // Define o tamanho do campo 'STATUS' como 1
        });

        Schema::create('categoriaproduto', function (Blueprint $table) {
            $table->bigIncrements('CATEGORIAPRODUTO_ID');
            $table->unsignedBigInteger('PRODUTO_ID');
            $table->unsignedBigInteger('CATEGORIA_ID');
            $table->string('ALTERACAO_TOKEN', 200)->nullable();
            $table->dateTime('ALTERACAO_DATA')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')); // Define o valor padrão como a data e hora atuais
            $table->string('CRIACAO_TOKEN', 200);
            $table->dateTime('CRIACAO_DATA')->useCurrent(); // Define o valor padrão como a data e hora atuais
            $table->char('STATUS', 1)->default('A'); // Define o tamanho do campo 'STATUS' como 1
            $table->foreign("PRODUTO_ID")->references("PRODUTO_ID")->on("produto");
            $table->foreign("CATEGORIA_ID")->references("CATEGORIA_ID")->on("categoria");
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
