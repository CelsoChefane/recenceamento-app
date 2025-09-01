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
        Schema::create('nivel_academico', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('nivel', 45)->nullable();
            $table->string('area', 100)->nullable();
            $table->string('institucao', 100)->nullable();
            $table->string('descricao', 45)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nivel_academico');
    }
};
