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
        Schema::create('king_queen_remedies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('numerology_type');
            $table->foreign('numerology_type')->references('id')->on('numerology')->onDelete('cascade')->onUpdate('cascade');
            $table->string('king');
            $table->string('queen');
            $table->string('concatinate');
            $table->string('remidies');
            $table->string('percentage_of_life');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('king_queen_remedies');
    }
};
