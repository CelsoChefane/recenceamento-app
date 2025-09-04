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
        Schema::table('alistamento', function (Blueprint $table) {
            $table->foreign(['cidadao_id'], 'fk_cidadao_has_unidade_militar_cidadao1')->references(['id'])->on('cidadao')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['unidade_militar_id'], 'fk_cidadao_has_unidade_militar_unidade_militar1')->references(['id'])->on('unidade_militar')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('alistamento', function (Blueprint $table) {
            $table->dropForeign('fk_cidadao_has_unidade_militar_cidadao1');
            $table->dropForeign('fk_cidadao_has_unidade_militar_unidade_militar1');
        });
    }
};
