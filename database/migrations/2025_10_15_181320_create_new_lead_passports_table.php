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
        Schema::create('new_lead_passports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('new_lead_id')->constrained('new_leads')->onDelete('cascade');
            $table->string('passport_number')->nullable();
            $table->string('issuing_country')->nullable();
            $table->string('city_used')->nullable();
            $table->date('issue_date')->nullable();
            $table->date('expire_date')->nullable();
            $table->boolean('is_lost')->default(false);
            $table->text('lost_history')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('new_lead_passports');
    }
};
