<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExpiryDayToNumerologyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('numerology', function (Blueprint $table) {
            $table->integer('expiry_day')->default(7)->after('packages_amount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('numerology', function (Blueprint $table) {
            $table->dropColumn('expiry_day');
        });
    }
}
