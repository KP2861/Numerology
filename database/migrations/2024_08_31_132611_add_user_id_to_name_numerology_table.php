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
            $table->unsignedBigInteger('numerology_type');

            $table->foreign('numerology_type')->references('id')->on('numerology')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('user_id')->after('id'); // Add user_id column after id
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade'); // Add foreign key constraint
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('name_numerology', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
};
