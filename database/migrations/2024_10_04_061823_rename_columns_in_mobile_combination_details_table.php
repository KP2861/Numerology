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
        Schema::table('mobile_combination_details', function (Blueprint $table) {
            // Rename the 'type' column to 'behaviour_of_combination'
            $table->renameColumn('type', 'behaviour_of_combination');

            // Rename the 'message' column to 'details'
            $table->renameColumn('message', 'details');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mobile_combination_details', function (Blueprint $table) {
            // Revert the column names back to original
            $table->renameColumn('behaviour_of_combination', 'type');
            $table->renameColumn('details', 'message');
        });
    }
};
