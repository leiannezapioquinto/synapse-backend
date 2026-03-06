<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        // Drop existing primary key if members_id is primary
        DB::statement('ALTER TABLE accounts DROP PRIMARY KEY');

        Schema::table('accounts', function (Blueprint $table) {
            // Rename members_id to id
            $table->renameColumn('members_id', 'id');
        });

        // Change id column type to string and set as primary key
        DB::statement('ALTER TABLE accounts MODIFY id VARCHAR(255) PRIMARY KEY');
    }

    public function down(): void
    {
        // Drop primary key
        DB::statement('ALTER TABLE accounts DROP PRIMARY KEY');

        Schema::table('accounts', function (Blueprint $table) {
            // Rename id back to members_id
            $table->renameColumn('id', 'members_id');
        });

        // Restore original type and primary key if needed
        DB::statement('ALTER TABLE accounts MODIFY members_id BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT');
    }
};
