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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('organizer')->nullable();
            $table->text('description')->nullable();
            $table->string('event_type')->nullable(); // e.g. "In-person", "Online", "Hybrid"
            $table->dateTime('start_time');
            $table->dateTime('end_time')->nullable();
            $table->string('time_zone')->default('America/Toronto');
            $table->string('location')->nullable(); // Address or "Online"
            $table->boolean('is_free')->default(true);
            $table->decimal('ticket_price', 10, 2)->nullable();
            $table->string('currency', 10)->default('CAD');
            $table->string('banner_image')->nullable(); // path to uploaded image
            $table->unsignedInteger('capacity')->nullable(); // Max number of attendees
            $table->unsignedInteger('registered_count')->default(0); // Number of people already registered

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
