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
        Schema::table('date_details', function (Blueprint $table) {
            $table->renameColumn('specific_detail', 'unique_characteristic');
            $table->renameColumn('detail', 'personalized_insights');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('date_details', function (Blueprint $table) {
            $table->renameColumn('unique_characteristic', 'specific_detail');
            $table->renameColumn('personalized_insights', 'detail');
        });
    }
};
