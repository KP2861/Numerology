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
            // Drop user_id column
            $table->dropColumn('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('numerology', function (Blueprint $table) {
            // Add user_id column back in case of rollback
            $table->unsignedBigInteger('user_id')->after('id');
        });
    }
};
