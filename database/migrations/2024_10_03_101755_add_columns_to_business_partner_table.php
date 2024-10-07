<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('business_partner', function (Blueprint $table) {
            if (Schema::hasColumn('business_partner', 'last_name')) {
                $table->string('last_name')->nullable()->change();
            } else {
                // If it doesn't exist, add it as nullable
                $table->string('last_name')->nullable()->after('first_name');
            }
            $table->string('email')->after('last_name');
            // $table->string('phone_number')->after('email');
            $table->string('time')->nullable()->after('dob');
        });
    }

    public function down()
    {
        Schema::table('business_partner', function (Blueprint $table) {
            $table->dropColumn(['last_name', 'email', 'time']);
        });
    }
};
