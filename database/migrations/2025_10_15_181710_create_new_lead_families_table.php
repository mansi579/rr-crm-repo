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
        Schema::create('new_lead_families', function (Blueprint $table) {
            $table->id();
            $table->foreignId('new_lead_id')->constrained()->onDelete('cascade');

            // Father
            $table->string('father_surname')->nullable();
            $table->string('father_given_name')->nullable();
            $table->date('father_dob')->nullable();
            $table->string('father_occupation')->nullable();
            $table->enum('father_passport', ['yes', 'no'])->nullable();
            $table->text('father_passport_details')->nullable();

            // Mother
            $table->string('mother_surname')->nullable();
            $table->string('mother_given_name')->nullable();
            $table->date('mother_dob')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->enum('mother_passport', ['yes', 'no'])->nullable();
            $table->text('mother_passport_details')->nullable();

            // Spouse
            $table->string('spouse_surname')->nullable();
            $table->string('spouse_given_name')->nullable();
            $table->date('spouse_dob')->nullable();
            $table->string('spouse_occupation')->nullable();
            $table->enum('spouse_passport', ['yes', 'no'])->nullable();
            $table->text('spouse_passport_details')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('new_lead_families');
    }
};
