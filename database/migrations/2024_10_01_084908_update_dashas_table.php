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
        Schema::table('dashas', function (Blueprint $table) {
            // Remove the 'number' column
            $table->dropColumn('number');
            
            // Rename 'details' to 'your_personalized_planetary_insights'
            $table->renameColumn('details', 'your_personalized_planetary_insights');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dashas', function (Blueprint $table) {
            // Add the 'number' column back
            $table->string('number');

            // Rename 'your_personalized_planetary_insights' back to 'details'
            $table->renameColumn('your_personalized_planetary_insights', 'details');
        });
    }
};
