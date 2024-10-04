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
        Schema::table('consultant', function (Blueprint $table) {
            // Check if the column exists and modify it if necessary
            if (Schema::hasColumn('consultant', 'occupation')) {
                $table->string('occupation')->change();
            } else {
                $table->string('occupation')->after('dob')->notNullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('consultant', function (Blueprint $table) {
            // Drop the string column
            $table->dropColumn('occupation');

            // Add the original enum column back
            $table->enum('occupation', ['Business', 'Private job', 'Govt job'])->after('dob');
        });
    }
};
