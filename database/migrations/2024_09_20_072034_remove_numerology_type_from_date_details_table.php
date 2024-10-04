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
        // Drop the foreign key constraint first
        Schema::table('date_details', function (Blueprint $table) {
            $table->dropForeign(['numerology_type']);
            $table->dropColumn('numerology_type'); // Then drop the column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('date_details', function (Blueprint $table) {
            $table->unsignedBigInteger('numerology_type')->nullable(); // Add the column back
            $table->foreign('numerology_type')->references('id')->on('numerology')->onDelete('cascade')->onUpdate('cascade'); // Recreate the foreign key
        });
    }
};
