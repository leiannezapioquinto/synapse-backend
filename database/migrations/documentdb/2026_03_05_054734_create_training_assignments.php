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
        Schema::connection('documentdb')->create('training_assignments', function (Blueprint $collection) {
            $collection->id('training_assignments_id')->unique();
            $collection->index(['trainer_id', 'member_id']);
            $collection->index(['trainer_id' => 1]);
            $collection->index(['member_id' => 1]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('training_assignments');
    }
};
