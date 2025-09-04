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
        Schema::create('cidade', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nome', 45);
            $table->string('descricao', 45)->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedInteger('provincia_id')->nullable()->index('fk_cidade_provincia1_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cidade');
    }
};
