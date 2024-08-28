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
        Schema::create('name_numerology', function (Blueprint $table) {
            $table->id();
            $table->foreignId('numerology_type')
                ->constrained('numerology');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('dob');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('name_numerology');
    }
};
