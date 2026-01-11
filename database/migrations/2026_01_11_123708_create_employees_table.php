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
        Schema::create('employees', function (Blueprint $table) {
            $table->unsignedBigInteger('employees_id')->primary();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('contact_number');
            $table->string('province');
            $table->string('city');
            $table->string('barangay');
            $table->string('zip_code');
            $table->string('gender')->nullable();
            $table->string('employment_status')->nullable();
            $table->unsignedInteger('employment_first_date');
            $table->unsignedInteger('employment_last_date')->nullable();
            $table->string('employee_type');
            $table->boolean('can_train')->default(null);
            $table->unsignedInteger('created_at');
            $table->unsignedInteger('updated_at');

            // Indexes
            $table->index('employment_status');
            $table->index('employee_type');
            $table->index('contact_number');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
