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
            $table->string('County');
            $table->string('Country');
            $table->string('Town');
            $table->integer('Postcode');
            $table->text('Description');
            $table->string('FullDetailsURL');
            $table->string('DisplayableAddress');
            $table->binary('Image');
            $table->string('ImageURL');
            $table->string('ThumbnailURL');
            $table->integer('Latitude');
            $table->integer('Longitude');
            $table->integer('NumberOfBedrooms');
            $table->integer('NumberOfBathrooms');
            $table->integer('Price');
            $table->string('PropertyType');
            $table->string('ForSale_ForRent');
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
