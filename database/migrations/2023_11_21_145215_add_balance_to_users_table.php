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
            $table->string('last_name')
                ->nullable()
                ->after('name');
            $table->string('first_name')
                ->nullable()
                ->after('name');

            $table->float('balance', 18)
                ->default(0)
                ->after('remember_token');

            $table->unsignedSmallInteger('currency_id')
                ->default(1)
                ->after('id');

            $table->renameColumn('name', 'username');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('balance');

            $table->renameColumn('username', 'name');

        });
    }
};
