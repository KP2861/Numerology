<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePdfTemplatesTable extends Migration
{
    public function up()
    {
        Schema::create('pdf_templates', function (Blueprint $table) {
            $table->id();
            $table->string('header_name');
            $table->string('footer_name');
            $table->string('header_img');
            $table->string('footer_img');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pdf_templates');
    }
}
