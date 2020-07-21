<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    protected $table = 'data';
    protected $fillable=['id','County','Country','Town','Postcode','Description','FullDetails','DisplayableAddress','ImageURL','ThumbnailURL','Latitude','Longitude','NumberOfBedrooms','NumberOfBathrooms','Price','PropertyType','ForSale_ForRent'];

}
