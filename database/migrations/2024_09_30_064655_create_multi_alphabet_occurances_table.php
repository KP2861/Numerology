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
        Schema::create('multi_alphabet_occurances', function (Blueprint $table) {
            $table->id();
            $table->string('alphabet');
            $table->text('details');
            $table->text('if_multiple_occurrence_issues_in_life');
            $table->text('remedies');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('multi_alphabet_occurances');
    }
};
