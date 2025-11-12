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
        Schema::create('sports_fields', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('type');
            $table->foreignId('sports_coach_id')->constrained('sports_coaches');
            $table->integer('status')->default(0);
            $table->timestamps();

            $table->foreignId('created_by')->nullable()->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sports_fields');
    }
};
