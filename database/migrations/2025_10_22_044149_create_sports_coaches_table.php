<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sports_coaches', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('family');
            $table->string('phone');
            $table->date('birth_date');
            $table->string('national_code');
            $table->string('image');
            $table->string('grade');
            $table->string('grade_image');
            $table->string('license_image');
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
        Schema::dropIfExists('sports_coaches');
    }
};
