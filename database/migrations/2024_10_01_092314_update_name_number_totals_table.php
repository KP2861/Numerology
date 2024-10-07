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
        // Rename table and columns
        Schema::rename('name_number_totals', 'name_numerology_totals'); // Update table name

        Schema::table('name_numerology_totals', function (Blueprint $table) {
            // Check for correct column name
            if (Schema::hasColumn('name_numerology_totals', 'for_business')) {
                $table->renameColumn('for_business', 'your_bussiness_insights');
            } elseif (Schema::hasColumn('name_numerology_totals', 'for_bussiness')) {
                $table->renameColumn('for_bussiness', 'your_bussiness_insights');
            }
            $table->renameColumn('rulling', 'rulling_planet');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Revert table name and columns
        Schema::rename('name_numerology_totals', 'name_number_totals'); // Revert table name

        Schema::table('name_number_totals', function (Blueprint $table) {
            $table->renameColumn('rulling_planet', 'rulling');
            $table->renameColumn('your_bussiness_insights', 'for_business');
        });
    }
};
