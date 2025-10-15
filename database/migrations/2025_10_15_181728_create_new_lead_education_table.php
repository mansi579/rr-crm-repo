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
        Schema::create('new_lead_education', function (Blueprint $table) {
            $table->id();
             $table->foreignId('new_lead_id')->constrained()->onDelete('cascade');
            $table->string('education_type')->nullable(); // e.g. 10th, 12th, graduation, IELTS, etc.
            $table->string('degree')->nullable();
            $table->string('board_or_university')->nullable();
            $table->year('passing_year')->nullable();
            $table->string('percentage')->nullable();
            $table->string('score')->nullable();
            $table->string('trial')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('new_lead_education');
    }
};
