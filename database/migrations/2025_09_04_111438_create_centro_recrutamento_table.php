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
        Schema::create('centro_recrutamento', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('sigla', 45)->nullable();
            $table->string('email', 45)->nullable();
            $table->string('descricao')->nullable();
            $table->string('endereco', 45)->nullable();
            $table->string('telefone', 45)->nullable();
            $table->integer('cidade_id')->nullable()->index('fk_centro_recrutamento_cidade1_idx');
            $table->unsignedInteger('destrito_id')->nullable()->index('fk_centro_recrutamento_destrito1_idx');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('centro_recrutamento');
    }
};
