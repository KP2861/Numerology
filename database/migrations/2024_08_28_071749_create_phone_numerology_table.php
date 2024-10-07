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
        Schema::create('phone_numerology', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('numerology_type');
           
            //$table->foreignId('numerology_type')->constrained('numerology')->onDelete('cascade')->onUpdate('cascade');
            $table->string('phone_number');
            $table->date('dob');
            $table->string('area_of_concern');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phone_numerology');
    }
};
