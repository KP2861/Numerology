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
        Schema::table('name_numerology', function (Blueprint $table) {
            // Drop the foreign key constraint
            // You need to specify the actual constraint name here.
            $table->dropForeign(['numerology_type']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('name_numerology', function (Blueprint $table) {
            // Re-add the foreign key constraint
            $table->foreign('numerology_type')->references('id')->on('numerology')->onDelete('cascade')->onUpdate('cascade');
        });
    }
};
