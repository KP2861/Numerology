<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGenderAndTownCityToBusinessPartnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('business_partner', function (Blueprint $table) {
            $table->string('gender')->after('phone_number'); // Add gender column
            $table->string('town_city')->after('gender'); // Add town_city column
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
            $table->dropColumn('gender');
            $table->dropColumn('town_city');
        });
    }
}
