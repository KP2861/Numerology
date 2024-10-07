<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateBusinessNumerologyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('business_numerology', function (Blueprint $table) {

            if (Schema::hasColumn('business_numerology', 'last_name')) {
                $table->string('last_name')->nullable()->change();
            } else {
                // If it doesn't exist, add it as nullable
                $table->string('last_name')->nullable()->after('first_name');
            }

            $table->string('town_city')->after('last_name');
            $table->string('email')->after('town_city');
            // $table->string('phone_number')->after('email');
            $table->string('time')->nullable()->after('phone_number');
            $table->string('language')->after('time');
            $table->string('gender')->after('language');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('business_numerology', function (Blueprint $table) {
            // Drop the added columns
            $table->dropColumn(['first_name', 'last_name', 'town_city', 'email', 'time', 'language', 'gender']);
        });
    }
}
