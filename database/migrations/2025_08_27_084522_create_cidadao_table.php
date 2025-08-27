<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cidadao', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->string('apelido', 45);
            $table->string('sexo', 45)->nullable();
            $table->date('data_nascimento')->nullable();
            $table->string('estado_civil', 45)->nullable();
            $table->string('tipo_doc', 45);
            $table->string('num_doc', 45);
            $table->string('telefone', 9)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('endereco', 45)->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedInteger('provincia_id')->index('fk_cidadao_provincia1_idx');
            $table->unsignedInteger('destrito_id')->nullable()->index('fk_cidadao_destrito1_idx');
            $table->unsignedInteger('documento_id')->nullable()->index('fk_cidadao_documento1_idx');
            $table->integer('cidade_id')->nullable()->index('fk_cidadao_cidade1_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cidadao');
    }
};
