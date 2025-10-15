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
        Schema::create('new_lead_properties', function (Blueprint $table) {
            $table->id();
             $table->foreignId('new_lead_id')->constrained()->onDelete('cascade');
            $table->decimal('total_valuation', 15, 2)->nullable();
            $table->decimal('total_loan_value', 15, 2)->nullable();
            $table->integer('loan_years')->nullable();
            $table->string('loan_availed_on')->nullable();
            $table->string('valuation_report')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('new_lead_properties');
    }
};
