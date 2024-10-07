<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePhoneNumerologyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('phone_numerology', function (Blueprint $table) {
            $table->string('first_name')->after('dob');          // First Name after dob
            $table->string('last_name')->nullable()->after('first_name');  // Last Name (optional) after first_name
            $table->string('town_city')->after('last_name');    // Town/City after last_name
            $table->string('email')->after('town_city');         // Email after town_city
            $table->string('time')->nullable()->after('email');   // Time (format like 10:30am) [optional] after email
            $table->string('language')->after('time');           // Select Language after time
            $table->string('gender')->after('language');         // Gender after language
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('phone_numerology', function (Blueprint $table) {
            $table->dropColumn(['first_name', 'last_name', 'town_city', 'email', 'time', 'language', 'gender']);
        });
    }
}
