<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateNameNumerologyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('name_numerology', function (Blueprint $table) {
            // Check if last_name exists; if it does, make it nullable
            if (Schema::hasColumn('name_numerology', 'last_name')) {
                $table->string('last_name')->nullable()->change();
            } else {
                // If it doesn't exist, add it as nullable
                $table->string('last_name')->nullable()->after('first_name');
            }

            // Adding new columns after existing ones
            $table->string('phone_number')->after('last_name');
            $table->string('town_city')->after('gender');
            $table->string('email')->after('town_city');
            $table->string('time')->nullable()->after('email'); // Time (format like 10:30am) [optional] after email
            $table->string('language')->after('time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('name_numerology', function (Blueprint $table) {
            // Drop the added columns
            $table->dropColumn(['phone_number', 'town_city', 'email', 'time', 'language']);

            // Check if last_name exists before trying to modify it
            if (Schema::hasColumn('name_numerology', 'last_name')) {
                $table->string('last_name')->nullable(false)->change(); // Change back to non-nullable if needed
            }
        });
    }
}
