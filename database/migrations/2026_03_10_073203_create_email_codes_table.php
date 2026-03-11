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
        Schema::create('email_codes', function (Blueprint $table) {
            $table->string('email_codes_id');
            $table->string('user_id')->index();
            $table->string('code');
            $table->string('type');
            $table->bigInteger('expires_at')->nullable();
            $table->bigInteger('used_at')->nullable();
            $table->bigInteger('created_at')->nullable();
            $table->bigInteger('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('email_codes');
    }
};
