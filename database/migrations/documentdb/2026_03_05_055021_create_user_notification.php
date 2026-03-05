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
        Schema::connection('documentdb')->create('user_notifications', function (Blueprint $collection) {
            $collection->id('user_notifications_id')->unique();
            $collection->index(['notifications_id' => 1]);
            $collection->index(['user_id' => 1]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_notification');
    }
};
