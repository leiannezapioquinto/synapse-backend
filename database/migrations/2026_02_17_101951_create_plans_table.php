<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id('plans_id'); // PK
            $table->string('plans_name');
            $table->text('plans_description')->nullable();
            $table->decimal('plans_price_monthly', 10, 2)->default(0);
            $table->decimal('plans_price_annual', 10, 2)->default(0);
            $table->string('plans_status')->default('active');
            $table->bigInteger('created_at')->nullable();
            $table->bigInteger('updated_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
