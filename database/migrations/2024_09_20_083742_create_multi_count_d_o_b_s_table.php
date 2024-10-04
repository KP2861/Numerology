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
        Schema::create('multi_count_d_o_b_s', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('occurance');
            $table->string('trate');
            $table->string('direction_to_balance');
            $table->text('behaviour');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('multi_count_d_o_b_s');
    }
};
