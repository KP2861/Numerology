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
        Schema::create('business_numerology', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('numerology_type');
             // $table->foreign('numerology_type')
             //    ->references('id')
             //    ->on('numerology')
             //    ->onDelete('cascade');
            //$table->foreign('numerology_type')->references('id')->on('numerology')->onDelete('cascade')->onUpdate('cascade');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('dob');
            $table->string('phone_number');
            $table->string('business_name');
            $table->string('type_of_business');
            $table->integer('have_partner');  // 0 and 1 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_numerology');
    }
};
