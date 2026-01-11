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
        Schema::create('members', function (Blueprint $table) {
            // Primary key
            $table->string('members_id')->primary();

            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('contact_number');
            $table->string('province');
            $table->string('city');
            $table->string('barangay');
            $table->string('zip_code');
            $table->string('plan_id');
            $table->string('plan_status');
            $table->string('gender');
            $table->float('weight')->nullable();
            $table->unsignedInteger('created_at');
            $table->unsignedInteger('updated_at');

            // Indexes
            $table->index('plan_id');
            $table->index('contact_number');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
