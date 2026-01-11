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
        Schema::table('users', function (Blueprint $table) {
            $table->string('account_type')
                  ->after('email')
                  ->default(null);

            $table->string('account_status')
                  ->after('account_type')
                  ->default(null);

            // Login state
            $table->boolean('is_logged_in')
                  ->after('account_status')
                  ->default(false);

            // Indexes
            $table->index('account_type');
            $table->index('account_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropIndex(['account_type']);
            $table->dropIndex(['account_status']);

            $table->dropColumn([
                'account_type',
                'account_status',
                'is_logged_in',
            ]);
        });
    }
};
