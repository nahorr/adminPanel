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
        Schema::create('company_infos', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Company Name
            $table->string('tagline')->nullable(); // Short tagline or slogan
            $table->string('logo')->nullable(); // Logo path or URL
            $table->string('email')->nullable(); // Contact email
            $table->string('phone')->nullable(); // Primary phone number
            $table->string('alt_phone')->nullable(); // Alternative phone number
            $table->string('website')->nullable(); // Website URL
            $table->string('address')->nullable(); // Physical address
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('registration_number')->nullable(); // CAC or legal reg #
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_infos');
    }
};
