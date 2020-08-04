<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    protected $fillable=['County','Country','Town','Postcode','Description','FullDetailsURL','DisplayableAddress','Image','ImageURL','ThumbnailURL','Latitude','Longitude','NumberOfBedrooms','NumberOfBathrooms','Price','PropertyType','ForSale_ForRent'];

}
