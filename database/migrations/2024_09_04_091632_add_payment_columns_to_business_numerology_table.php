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
        Schema::table('business_numerology', function (Blueprint $table) {
            // Add payment columns after 'have_partner' column
            $table->string('payment_id')->after('have_partner');
            $table->enum('payment_status', [
                '1' => 'success',
                '2' => 'pending',
                '3' => 'refunded',
                '4' => 'failed'
            ])->after('payment_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('business_numerology', function (Blueprint $table) {
            // Drop the payment columns
            $table->dropColumn('payment_id');
            $table->dropColumn('payment_status');
        });
    }
};
