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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();

            // Required
            $table->string('name');              // Team/member name

            // Optional (nullable) fields
            $table->string('position')->nullable();     // e.g., CTO, Lead Designer
            $table->string('image_path')->nullable();   // storage path/URL to photo
            $table->text('about')->nullable();          // short bio/description

            // Helpful extras (safe defaults)
            $table->unsignedInteger('sort_order')->default(0);
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
