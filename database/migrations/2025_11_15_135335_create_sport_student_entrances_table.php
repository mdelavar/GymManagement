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
        Schema::create('sport_student_entrances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sports_field_id')->constrained();
            $table->foreignId('sport_field_roll_call_id')->constrained();
            $table->foreignId('sports_student_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sport_student_entrances');
    }
};
