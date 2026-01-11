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
        Schema::create('members_attendance', function (Blueprint $table) {
            $table->string('members_attendance_id')->primary();
            $table->string('members_id');
            $table->unsignedInteger('time_in');
            $table->unsignedInteger('time_out')->nullable();
            $table->unsignedInteger('created_at');
            $table->unsignedInteger('updated_at');

            // Indexes
            $table->index('members_id');
            $table->index('time_in');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members_attendance');
    }
};
