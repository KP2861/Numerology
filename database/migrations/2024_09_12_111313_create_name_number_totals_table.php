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
        Schema::create('name_number_totals', function (Blueprint $table) {
            $table->id();
             $table->string('number');
            $table->string('rulling');
            $table->string('contributting_planet');
            $table->string('for_bussiness');
            $table->text('details');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('name_number_totals');
    }
};
