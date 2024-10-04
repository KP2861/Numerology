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
            // Drop the foreign key constraint for numerology_type first
            $table->dropForeign(['numerology_type']);
            // Remove the numerology_type column
            $table->dropColumn('numerology_type');

            // Change rudraksh and direction_to_work columns to text
            $table->text('rudraksh')->change();
            $table->text('direction_to_work')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('area_of_struggles', function (Blueprint $table) {
            // Add back the numerology_type column with the foreign key
            $table->unsignedBigInteger('numerology_type');
            $table->foreign('numerology_type')->references('id')->on('numerology')->onDelete('cascade')->onUpdate('cascade');

            // Revert rudraksh and direction_to_work columns back to string
            $table->string('rudraksh')->change();
            $table->string('direction_to_work')->change();
        });
    }
};
