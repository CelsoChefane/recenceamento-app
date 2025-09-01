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
        Schema::table('cidadao_has_nivel_academico', function (Blueprint $table) {
            $table->foreign(['cidadao_id'], 'fk_cidadao_has_nivel_academico_cidadao1')->references(['id'])->on('cidadao')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['nivel_academico_id'], 'fk_cidadao_has_nivel_academico_nivel_academico1')->references(['id'])->on('nivel_academico')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cidadao_has_nivel_academico', function (Blueprint $table) {
            $table->dropForeign('fk_cidadao_has_nivel_academico_cidadao1');
            $table->dropForeign('fk_cidadao_has_nivel_academico_nivel_academico1');
        });
    }
};
