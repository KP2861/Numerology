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
        Schema::table('mobile_number_totals', function (Blueprint $table) {
            // Rename the 'detail' column to 'impact'
            $table->renameColumn('detail', 'impact');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mobile_number_totals', function (Blueprint $table) {
            // Rename the 'impact' column back to 'detail'
            $table->renameColumn('impact', 'detail');
        });
    }
};
