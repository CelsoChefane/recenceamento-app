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
        Schema::create('cidadao_has_nivel_academico', function (Blueprint $table) {
            $table->unsignedInteger('cidadao_id')->index('fk_cidadao_has_nivel_academico_cidadao1_idx');
            $table->integer('nivel_academico_id')->index('fk_cidadao_has_nivel_academico_nivel_academico1_idx');
            $table->integer('ano_conclusao')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->primary(['cidadao_id', 'nivel_academico_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cidadao_has_nivel_academico');
    }
};
