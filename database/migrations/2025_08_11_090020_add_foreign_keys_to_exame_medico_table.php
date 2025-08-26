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
        Schema::table('exame_medico', function (Blueprint $table) {
            $table->foreign(['cidadao_id'], 'fk_exame_medico_cidadao1')->references(['id'])->on('cidadao')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('exame_medico', function (Blueprint $table) {
            $table->dropForeign('fk_exame_medico_cidadao1');
        });
    }
};
