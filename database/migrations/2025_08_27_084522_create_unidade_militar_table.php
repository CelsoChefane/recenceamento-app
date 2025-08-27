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
        Schema::create('unidade_militar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->string('descricao', 100)->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedInteger('provincia_id')->nullable()->index('fk_unidade_militar_provincia1_idx');
            $table->unsignedInteger('destrito_id')->nullable()->index('fk_unidade_militar_destrito1_idx');
            $table->integer('cidade_id')->nullable()->index('fk_unidade_militar_cidade1_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unidade_militar');
    }
};
