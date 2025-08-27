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
        Schema::create('exame_medico', function (Blueprint $table) {
            $table->increments('id');
            $table->date('data_exame');
            $table->unsignedInteger('cidadao_id')->index('fk_exame_medico_cidadao1_idx');
            $table->string('resultado', 45)->nullable();
            $table->text('observacao')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exame_medico');
    }
};
