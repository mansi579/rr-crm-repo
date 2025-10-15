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
        Schema::create('new_lead_travel', function (Blueprint $table) {
            $table->id();
             $table->foreignId('new_lead_id')->constrained()->onDelete('cascade');
            $table->string('purpose_of_trip')->nullable();
            $table->date('arrival_date')->nullable();
            $table->string('arrival_flight')->nullable();
            $table->string('arrival_city')->nullable();
            $table->date('departure_date')->nullable();
            $table->string('departure_flight')->nullable();
            $table->string('departure_city')->nullable();
            $table->text('places_to_visit')->nullable();
            $table->string('foreign_phone')->nullable();
            $table->string('stay_address')->nullable();
            $table->string('stay_city')->nullable();
            $table->string('stay_state')->nullable();
            $table->string('stay_zipcode')->nullable();
            $table->text('person_paying_details')->nullable();
            $table->enum('mother_in_country', ['yes', 'no'])->nullable();
            $table->enum('immediate_relative_in_country', ['yes', 'no'])->nullable();
            $table->enum('other_relative_in_country', ['yes', 'no'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('new_lead_travel');
    }
};
