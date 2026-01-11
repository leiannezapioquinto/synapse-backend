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
        Schema::create('notifications', function (Blueprint $table) {
            $table->unsignedBigInteger('notifications_id')->primary();
            $table->string('notifications_name');
            $table->string('notifications_type');
            $table->string('notifications_desc')->nullable();
            $table->unsignedInteger('created_at');
            $table->unsignedInteger('updated_at');

            // Indexes
            $table->index('notifications_type');
            $table->index('notifications_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
