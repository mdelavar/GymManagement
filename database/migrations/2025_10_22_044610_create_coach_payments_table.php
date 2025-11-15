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
        Schema::create('coach_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sports_coach_id')->constrained();
            $table->foreignId('coach_contract_id')->constrained();
            $table->bigInteger('amount');
            $table->integer('status')->default(0);
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coach_payments');
    }
};
