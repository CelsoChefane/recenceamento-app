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
        Schema::table('users_has_rule', function (Blueprint $table) {
            $table->foreign(['rule_id'], 'fk_users_has_rule_rule1')->references(['id'])->on('rule')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['users_id'], 'fk_users_has_rule_users1')->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users_has_rule', function (Blueprint $table) {
            $table->dropForeign('fk_users_has_rule_rule1');
            $table->dropForeign('fk_users_has_rule_users1');
        });
    }
};
