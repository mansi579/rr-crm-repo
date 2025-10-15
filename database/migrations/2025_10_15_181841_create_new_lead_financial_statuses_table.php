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
        Schema::create('new_lead_financial_statuses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('new_lead_id')->constrained()->onDelete('cascade');
            $table->decimal('father_income', 12, 2)->nullable();
            $table->decimal('mother_income', 12, 2)->nullable();
            $table->decimal('candidate_income', 12, 2)->nullable();
            $table->decimal('spouse_income', 12, 2)->nullable();
            $table->decimal('total_income', 12, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('new_lead_financial_statuses');
    }
};
