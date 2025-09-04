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
        Schema::table('centro_recrutamento', function (Blueprint $table) {
            $table->foreign(['cidade_id'], 'fk_centro_recrutamento_cidade1')->references(['id'])->on('cidade')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['destrito_id'], 'fk_centro_recrutamento_destrito1')->references(['id'])->on('destrito')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('centro_recrutamento', function (Blueprint $table) {
            $table->dropForeign('fk_centro_recrutamento_cidade1');
            $table->dropForeign('fk_centro_recrutamento_destrito1');
        });
    }
};
