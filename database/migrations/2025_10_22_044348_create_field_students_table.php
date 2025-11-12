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
        Schema::create('field_students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sports_student_id')->constrained('sports_students');
            $table->foreignId('sports_field_id')->constrained('sports_fields');
            $table->date('membership_date');
            $table->integer('status')->default(0);
            $table->integer('type')->default(0);
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
        Schema::dropIfExists('field_students');
    }
};
