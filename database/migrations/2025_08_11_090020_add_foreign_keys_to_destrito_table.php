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
        Schema::table('destrito', function (Blueprint $table) {
            $table->foreign(['provincia_id'], 'fk_destrito_provincia')->references(['id'])->on('provincia')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('destrito', function (Blueprint $table) {
            $table->dropForeign('fk_destrito_provincia');
        });
    }
};
