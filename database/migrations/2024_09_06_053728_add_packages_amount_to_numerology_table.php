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
        Schema::table('numerology', function (Blueprint $table) {
            // Adding packages_amount as an integer
            $table->integer('packages_amount')->after('numerology_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('numerology', function (Blueprint $table) {
            $table->dropColumn('packages_amount');
        });
    }
};
