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
        Schema::create('sport_filed_roll_calls', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sports_field_id')->constrained();
            $table->date('roll_call_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sport_filed_roll_calls');
    }
};
