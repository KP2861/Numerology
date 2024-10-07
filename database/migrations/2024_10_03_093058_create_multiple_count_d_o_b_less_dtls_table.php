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
        Schema::create('multiple_count_d_o_b_less_dtls', function (Blueprint $table) {
            $table->id();
            $table->string('your_unique_number');
            $table->string('occurrence');
            $table->string('discover_your_nature');
            $table->string('your_key_characteristics');
            $table->text('your_emotional_insights');
            $table->text('your_behavior_insights');
            $table->string('balance_through_vastu_and_numerology');
            $table->string('focus_area_to_balance');
            $table->text('why_this_direction_works_and_potential_challenges');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('multiple_count_d_o_b_less_dtls');
    }
};
