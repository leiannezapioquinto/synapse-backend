<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('employees_attendance', function (Blueprint $table) {
            $table->unsignedBigInteger('employees_id');
            $table->unsignedBigInteger('time_in');
            $table->unsignedBigInteger('time_out')->nullable();
            $table->bigInteger('created_at')->nullable();
            $table->bigInteger('updated_at')->nullable();

            // Foreign key
            $table->foreign('employees_id')
                  ->references('employees_id')
                  ->on('employees')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('employees_attendance');
    }
};
