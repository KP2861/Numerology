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
        Schema::create('character_and_multiples', function (Blueprint $table) {
            $table->id();
            $table->string('alphabet');
            $table->text('personal_traits'); // Personal Traits Shaped by Your Name
            $table->text('multiple_occurrences'); // If You Have Multiple Occurrences in Your Name
            $table->text('power_remedies'); // Power Remedies to Unlock Your Full Potential
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('character_and_multiples');
    }
};
