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
        Schema::create('users_has_rule', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('users_id')->index('fk_users_has_rule_users1_idx');
            $table->unsignedInteger('rule_id')->index('fk_users_has_rule_rule1_idx');
            $table->string('description', 45)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_has_rule');
    }
};
