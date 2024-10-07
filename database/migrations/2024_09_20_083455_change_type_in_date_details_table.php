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
            $table->text('specific_detail')->change();
            $table->text('detail')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('date_details', function (Blueprint $table) {
            $table->string('specific_detail')->change(); // Change back to original type
            $table->string('detail')->change(); // Change back to original type
        });
    }
};
