<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('members_attendance', function (Blueprint $table) {
            $table->id('members_id');
            $table->unsignedBigInteger('time_in');
            $table->unsignedBigInteger('time_out')->nullable();
            $table->bigInteger('created_at')->nullable();
            $table->bigInteger('updated_at')->nullable();

            $table->foreign('members_id')
                  ->references('members_id')
                  ->on('members')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('members_attendance');
    }
};
