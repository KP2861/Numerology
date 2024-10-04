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
            $table->unsignedBigInteger('user_id')->nullable()->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('name_numerology', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->default(0)->change();
        });
    }
};
