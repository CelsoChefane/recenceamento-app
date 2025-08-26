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
        Schema::create('alistamento', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('cidadao_id')->index('fk_cidadao_has_unidade_militar_cidadao1_idx');
            $table->integer('unidade_militar_id')->index('fk_cidadao_has_unidade_militar_unidade_militar1_idx');
            $table->integer('ano')->nullable();
            $table->string('situacao', 45)->nullable();
            $table->date('data_alistamento')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alistamento');
    }
};
