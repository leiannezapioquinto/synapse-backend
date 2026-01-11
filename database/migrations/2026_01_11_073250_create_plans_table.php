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
        Schema::create('plans', function (Blueprint $table) {
            $table->string('plans_id')->primary();
            $table->string('plans_name');
            $table->text('plans_description')->nullable();
            $table->decimal('plans_price_monthly', 10, 2)->default(0);
            $table->decimal('plans_price_annual', 10, 2)->default(0);
            $table->decimal('plans_price_per_unit', 10, 2)->default(0);
            $table->string('plans_status');
            $table->unsignedInteger('created_at');
            $table->unsignedInteger('updated_at');

            // Indexes
            $table->index('plans_name');
            $table->index('plans_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
