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
        Schema::table('area_of_struggles', function (Blueprint $table) {
            // Change affirmation column to text
            $table->text('affirmation')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('area_of_struggles', function (Blueprint $table) {
            // Revert affirmation column back to string
            $table->string('affirmation')->change();
        });
    }
};
