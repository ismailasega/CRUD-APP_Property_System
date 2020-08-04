<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('County')->nullable();
            $table->string('Country')->nullable();
            $table->string('Town')->nullable();
            $table->integer('Postcode')->nullable();
            $table->text('Description')->nullable();
            $table->string('FullDetailsURL')->nullable();
            $table->string('DisplayableAddress')->nullable();
            $table->binary('Image')->nullable();
            $table->string('ImageURL')->nullable();
            $table->string('ThumbnailURL')->nullable();
            $table->integer('Latitude')->nullable();
            $table->integer('Longitude')->nullable();
            $table->integer('NumberOfBedrooms')->nullable();
            $table->integer('NumberOfBathrooms')->nullable();
            $table->integer('Price')->nullable();
            $table->string('PropertyType')->nullable();
            $table->string('ForSale_ForRent')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data');
    }
}
