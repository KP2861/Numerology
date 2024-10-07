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
        Schema::table('word_and_combinations', function (Blueprint $table) {
            // Renaming columns
            $table->renameColumn('name', 'name_sound');
            $table->renameColumn('type', 'energy_type');
            $table->renameColumn('issues_faced_in_life', 'life_challenges_or_success');
            $table->renameColumn('details', 'meaning');

            // Adding a new column
            $table->text('famous_names')->after('details');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('word_and_combinations', function (Blueprint $table) {
            // Reverting the changes
            $table->renameColumn('name_sound', 'name');
            $table->renameColumn('energy_type', 'type');
            $table->renameColumn('life_challenges_or_success', 'issues_faced_in_life');
            $table->renameColumn('meaning', 'details');

            // Dropping the added column
            $table->dropColumn('famous_names');
        });
    }
};
