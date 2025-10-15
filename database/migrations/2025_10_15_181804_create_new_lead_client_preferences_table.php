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
        Schema::create('new_lead_client_preferences', function (Blueprint $table) {
            $table->id();
             $table->foreignId('new_lead_id')->constrained()->onDelete('cascade');
    
            // Work Permit
            $table->string('preferred_designation')->nullable();
            $table->string('industry')->nullable();
            $table->enum('role_type', ['on_role', 'off_role'])->nullable();
            $table->string('preferred_country')->nullable();
            $table->enum('work_category', ['skilled', 'unskilled', 'semi_skilled'])->nullable();

            // PR
            $table->boolean('skill_assessment_letter')->default(false);
            $table->string('assessment_letter')->nullable();
            $table->string('preferred_state')->nullable();
            $table->enum('family_type', ['single', 'couple', 'couple_children', 'family'])->nullable();

            // Visit Visa
            $table->string('purpose_of_visit')->nullable();

            // Student Visa
            $table->string('course_name')->nullable();
            $table->string('university')->nullable();
            $table->string('term_intake')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('new_lead_client_preferences');
    }
};
