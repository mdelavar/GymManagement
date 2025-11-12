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
        Schema::create('tuition_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sports_student_id')->constrained();
            $table->foreignId('sports_field_id')->constrained();
            $table->foreignId('sports_coach_id')->constrained();
            $table->foreignId('tuition_type_id')->constrained();
            $table->foreignId('tuition_price_id')->constrained();

            $table->integer('amount');
            $table->integer('type')->default(0);
            $table->date('start_date');
            $table->date('end_type');
            $table->date('payment_date');

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
        Schema::dropIfExists('tuition_payments');
    }
};
