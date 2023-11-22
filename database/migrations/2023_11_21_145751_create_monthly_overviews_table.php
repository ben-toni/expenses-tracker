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
        Schema::create('monthly_overviews', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');

            $table->date('from');
            $table->date('to');

            $table->string('name');

            $table->float('income');
            $table->float('saving');
            $table->float('spending');

            $table->float('loan-in');
            $table->float('loan-out');

            $table->float('balance');
            $table->float('previous_balance');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monthly_overviews');
    }
};
