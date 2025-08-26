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
        Schema::create('destrito', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 45);
            $table->string('descricao', 45)->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedInteger('provincia_id')->index('fk_destrito_provincia_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destrito');
    }
};
