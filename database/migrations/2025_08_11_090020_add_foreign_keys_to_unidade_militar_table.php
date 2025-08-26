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
        Schema::table('unidade_militar', function (Blueprint $table) {
            $table->foreign(['cidade_id'], 'fk_unidade_militar_cidade1')->references(['id'])->on('cidade')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['destrito_id'], 'fk_unidade_militar_destrito1')->references(['id'])->on('destrito')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['provincia_id'], 'fk_unidade_militar_provincia1')->references(['id'])->on('provincia')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('unidade_militar', function (Blueprint $table) {
            $table->dropForeign('fk_unidade_militar_cidade1');
            $table->dropForeign('fk_unidade_militar_destrito1');
            $table->dropForeign('fk_unidade_militar_provincia1');
        });
    }
};
