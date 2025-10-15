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
        Schema::create('new_leads', function (Blueprint $table) {
            $table->id();
             $table->string('surname')->nullable();
            $table->string('given_name')->nullable();
            $table->enum('gender', ['male', 'female', 'other'])->nullable();
            $table->string('marital_status')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('country_of_origin')->nullable();
            $table->unsignedBigInteger('lead_assigned_to')->nullable(); // user_id

            // Address Info
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('pincode')->nullable();

            // Mailing Address
            $table->string('mail_address')->nullable();
            $table->string('mail_city')->nullable();
            $table->string('mail_state')->nullable();
            $table->string('mail_pincode')->nullable();

            // Contact Info
            $table->string('primary_phone')->nullable();
            $table->string('secondary_phone')->nullable();
            $table->string('work_phone')->nullable();
            $table->string('other_phone')->nullable();
            $table->string('email')->nullable();
            $table->string('other_email')->nullable();
            $table->string('social_media')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('new_leads');
    }
};
