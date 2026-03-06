<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('accounts', function (Blueprint $table) {

            // add new primary key column first
            $table->string('accounts_id')->first();
        });

        // drop auto increment from id
        DB::statement('ALTER TABLE accounts MODIFY members_id BIGINT UNSIGNED');

        // drop primary key
        DB::statement('ALTER TABLE accounts DROP PRIMARY KEY');

        // make accounts_id primary
        DB::statement('ALTER TABLE accounts ADD PRIMARY KEY (accounts_id)');
    }

    public function down(): void
    {
        DB::statement('ALTER TABLE accounts DROP PRIMARY KEY');
        DB::statement('ALTER TABLE accounts ADD PRIMARY KEY (members_id)');

        Schema::table('accounts', function (Blueprint $table) {
            $table->dropColumn('accounts_id');
        });
    }
};
