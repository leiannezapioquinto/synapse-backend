<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id('members_id'); // id
            $table->string('name');
            $table->string('email')->unique();
            $table->bigInteger('email_verified_at')->nullable(); // UNIX timestamp
            $table->string('password');
            $table->string('remember_token', 100)->nullable();
            $table->string('account_type')->default('user');
            $table->string('account_status')->default('active');
            $table->boolean('is_logged_in')->default(false);
            $table->bigInteger('created_at')->nullable();
            $table->bigInteger('updated_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
