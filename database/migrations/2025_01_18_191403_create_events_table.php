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
            $table->smallInteger('event_type'); // Meetup or Workshop
            $table->string('title');
            $table->text('description');
            $table->timestamp('event_at'); // Date
            $table->timestamp('start_at');
            $table->timestamp('end_at');
            $table->string('location');
            $table->integer('max_attendees');
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
