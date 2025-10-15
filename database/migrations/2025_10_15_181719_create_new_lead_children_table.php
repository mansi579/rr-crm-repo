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
        Schema::create('new_lead_children', function (Blueprint $table) {
            $table->id();
            $table->foreignId('new_lead_family_id')->constrained()->onDelete('cascade');
            $table->string('name')->nullable();
            $table->integer('age')->nullable();
            $table->date('dob')->nullable();
            $table->string('city_of_birth')->nullable();
            $table->enum('gender', ['male', 'female', 'other'])->nullable();
            $table->enum('has_passport', ['yes', 'no'])->nullable();
            $table->text('passport_details')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('new_lead_children');
    }
};
