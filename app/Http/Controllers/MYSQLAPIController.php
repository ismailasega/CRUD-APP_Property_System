<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\data;


class MYSQLAPIController extends Controller
{
    function index()
    {
        
        $PropertyData = data::all();
        return view('asegadb', compact('PropertyData'));
    }

    function insert(Request $request){
        
        $PropertyData = new data;
     
        $PropertyData->County = $request->input('County'); 
        $PropertyData->Country = $request->input('Country'); 
        $PropertyData->Town = $request->input('Town'); 
        $PropertyData->Postcode = $request->input('Postcode'); 
        $PropertyData->Description = $request->input('Description');
        $PropertyData->DisplayableAddress = $request->input('DisplayableAddress'); 
        $PropertyData->Image = $request->input('Image');
        $PropertyData->NumberOfBedrooms = $request->input('NumberOfBedrooms');
        $PropertyData->NumberOfBathrooms = $request->input('NumberOfBathrooms'); 
        $PropertyData->Price = $request->input('Price'); 
        $PropertyData->PropertyType = $request->input('PropertyType');
        $PropertyData->ForSale_ForRent = $request->input('ForSale_ForRent');

        $PropertyData->save();

    }
    function update(Request $request, $id){
        
        $PropertyData = data::find($id);

        $PropertyData->County = $request->input('County'); 
        $PropertyData->Country = $request->input('Country'); 
        $PropertyData->Town = $request->input('Town'); 
        $PropertyData->Postcode = $request->input('Postcode'); 
        $PropertyData->Description = $request->input('Description');
        $PropertyData->DisplayableAddress = $request->input('DisplayableAddress'); 
        $PropertyData->Image = $request->input('Image'); 
        $PropertyData->NumberOfBedrooms = $request->input('NumberOfBedrooms');
        $PropertyData->NumberOfBathrooms = $request->input('NumberOfBathrooms'); 
        $PropertyData->Price = $request->input('Price'); 
        $PropertyData->PropertyType = $request->input('PropertyType');
        $PropertyData->ForSale_ForRent = $request->input('ForSale_ForRent');

        $PropertyData->save();
    }
    function delete($id){
        $PropertyData = data::find($id);
        $PropertyData->delete();
        return $PropertyData;
    }


}
