<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\data;


class MYSQLAPIController extends Controller
{
    function index()
    {
        
        $PropertyData = data::all();
        return view('asegadb')->with('PropertyData', $PropertyData);
    }

    function insert(Request $request){
        
        $PropertyData = new data;

     
        $PropertyData->Country = $request->input('County'); 
        $PropertyData->Country = $request->input('Country'); 
        $PropertyData->Town = $request->input('Town'); 
        $PropertyData->Postcode = $request->input('Postcode'); 
        $PropertyData->Description = $request->input('Description'); 
        $PropertyData->FullDetailsURL = $request->input('FullDetailsURL');
        $PropertyData->DisplayableAddress = $request->input('DisplayableAddress'); 
        $PropertyData->Image = $request->inpute('Image'); 
        $PropertyData->ImageUR = $request->input('ImageURL'); 
        $PropertyData->ThumbnailURL = $request->input('ThumbnailURL'); 
        $PropertyData->Latitude = $request->input('Latitude'); 
        $PropertyData->Longitude = $request->input('Longitude');
        $PropertyData->NumberOfBedrooms = $request->input('NumberOfBedrooms');
        $PropertyData->NumberOfBathrooms = $request->input('NumberOfBathrooms'); 
        $PropertyData->Price = $request->input('Price'); 
        $PropertyData->PropertyType = $request->input('PropertyType');
        $PropertyData->ForSale_ForRent = $request->input('ForSale_ForRent');

        $PropertyData->save();
        return redirect('/PropertySystem');

    }
    function update(Request $request, $id){
        
        $PropertyData->Country = $request->input('County'); 
        $PropertyData->Country = $request->input('Country'); 
        $PropertyData->Town = $request->input('Town'); 
        $PropertyData->Postcode = $request->input('Postcode'); 
        $PropertyData->Description = $request->input('Description'); 
        $PropertyData->DisplayableAddress = $request->input('DisplayableAddress'); 
        $PropertyData->Image = $request->inpute('Image'); 
        $PropertyData->NumberOfBedrooms = $request->input('NumberOfBedrooms');
        $PropertyData->NumberOfBathrooms = $request->input('NumberOfBathrooms'); 
        $PropertyData->Price = $request->input('Price'); 
        $PropertyData->PropertyType = $request->input('PropertyType');
        $PropertyData->ForSale_ForRent = $request->input('ForSale_ForRent');

        $PropertyData->save();
        return redirect('/PropertySystem');
    }
}
