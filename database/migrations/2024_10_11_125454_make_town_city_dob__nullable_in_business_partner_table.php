<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('business_partner', function (Blueprint $table) {

            // If 'town_city' exists, modify to nullable, otherwise add it
            if (Schema::hasColumn('business_partner', 'town_city')) {
                $table->string('town_city')->nullable()->change();
            } else {
                $table->string('town_city')->nullable()->after('gender');
            }

            // If 'dob' exists, modify to nullable, otherwise add it
            if (Schema::hasColumn('business_partner', 'dob')) {
                $table->string('dob')->nullable()->change();
            } else {
                $table->string('dob')->nullable()->after('email');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('business_partner', function (Blueprint $table) {

            // Revert 'town_city' back to non-nullable if it exists
            if (Schema::hasColumn('business_partner', 'town_city')) {
                $table->string('town_city')->nullable(false)->change();
            }

            // Revert 'dob' back to non-nullable if it exists
            if (Schema::hasColumn('business_partner', 'dob')) {
                $table->string('dob')->nullable(false)->change();
            }
        });
    }
};
