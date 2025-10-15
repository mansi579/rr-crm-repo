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
        Schema::create('new_lead_jobs', function (Blueprint $table) {
            $table->id();
             $table->foreignId('new_lead_id')->constrained()->onDelete('cascade');
            $table->date('duration_from')->nullable();
            $table->date('duration_to')->nullable();
            $table->string('country')->nullable();
            $table->string('designation')->nullable();
            $table->string('company_name')->nullable();
            $table->decimal('salary', 10, 2)->nullable();
            $table->string('offer_letter')->nullable();
            $table->string('experience_letter')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('new_lead_jobs');
    }
};
