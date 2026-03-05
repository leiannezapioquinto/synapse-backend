<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id('employees_id')->primary();
            $table->string('first_name', 100);
            $table->string('middle_name', 100)->nullable();
            $table->string('last_name', 100);
            $table->string('contact_number', 20)->nullable();
            $table->string('province', 100)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('barangay', 100)->nullable();
            $table->string('zip_code', 10)->nullable();
            $table->string('gender')->nullable();
            $table->string('employment_status')->nullable();
            $table->bigInteger('employment_first_date')->nullable();
            $table->bigInteger('employment_last_date')->nullable();
            $table->string('employee_type')->nullable();
            $table->boolean('can_train')->default(false);
            $table->bigInteger('created_at')->nullable();
            $table->bigInteger('updated_at')->nullable();

            // Indexes
            $table->index('last_name');
            $table->index('city');
            $table->index('province');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
