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
        Schema::create('missing_number_and_remedies', function (Blueprint $table) {
            $table->id();
            $table->string('your_unique_traits');
             $table->text('challanges_you_might_face');
             $table->text('empowering_remedies_for_you');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('missing_number_and_remedies');
    }
};
