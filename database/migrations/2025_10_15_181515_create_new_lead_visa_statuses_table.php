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
        Schema::create('new_lead_visa_statuses', function (Blueprint $table) {
            $table->id();
             $table->foreignId('new_lead_id')->constrained()->onDelete('cascade');
            $table->enum('visa_granted', ['yes', 'no'])->nullable();
            $table->date('visa_issue_date')->nullable();
            $table->date('visa_expire_date')->nullable();
            $table->string('visa_category')->nullable();
            $table->boolean('visa_refusal')->default(false);
            $table->date('visa_rejection_date')->nullable();
            $table->text('reason')->nullable();
            $table->string('language_spoken')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('new_lead_visa_statuses');
    }
};
