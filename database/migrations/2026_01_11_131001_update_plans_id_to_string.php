<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('plans', function (Blueprint $table) {
            $table->dropColumn(['plans_id']);
        });

        Schema::table('plans', function (Blueprint $table) {
            $table->string('plans_id')->before('plans_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('plans', function (Blueprint $table) {
            $table->dropColumn(['plans_id']);
        });

        Schema::table('plans', function (Blueprint $table) {
            $table->string('plans_id');
        });
    }
};
