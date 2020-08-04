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
    
    function store(Request $request){
        
        $PropertyData = new data();
     
        $PropertyData->County = $request->input('County'); 
        $PropertyData->Country = $request->input('Country'); 
        $PropertyData->Town = $request->input('Town'); 
        $PropertyData->Postcode = $request->input('Postcode'); 
        $PropertyData->Description = $request->input('Description');
        $PropertyData->DisplayableAddress = $request->input('DisplayableAddress');
        
        if($request->hasFile('Image')){
            $img = $request->file('Image');  
            $imgname =time().'.'.$img->getClientOriginalExtension();
            $path= storage_psth('public/uploads/'. $imgname);
            Image::make($img)->resize(200, 200)->save($path);
            $PropertyData->Image = $imgname;
        }
        $PropertyData->NumberOfBedrooms = $request->input('NumberOfBedrooms');
        $PropertyData->NumberOfBathrooms = $request->input('NumberOfBathrooms'); 
        $PropertyData->Price = $request->input('Price'); 
        $PropertyData->PropertyType = $request->input('PropertyType');
        $PropertyData->ForSale_ForRent = $request->input('ForSale_ForRent');

        $PropertyData->save();

    }
    function update(Request $request, $Id){
        
        $PropertyData = data::find($Id);

        $PropertyData->County = $request->input('County'); 
        $PropertyData->Country = $request->input('Country'); 
        $PropertyData->Town = $request->input('Town'); 
        $PropertyData->Postcode = $request->input('Postcode'); 
        $PropertyData->Description = $request->input('Description');
        $PropertyData->DisplayableAddress = $request->input('DisplayableAddress'); 

        if($request->hasFile('Image')){
            $img = $request->file('Image');  
            $imgname =time().'.'.$img->getClientOriginalExtension();
            $path= storage_psth('public/uploads/'. $imgname);
            Image::make($img)->resize(200, 200)->save($path);
            Storage::delete('public/uploads/' . $$PropertyData->Image);
            $PropertyData->Image = $imgname;
        }
        $PropertyData->NumberOfBedrooms = $request->input('NumberOfBedrooms');
        $PropertyData->NumberOfBathrooms = $request->input('NumberOfBathrooms'); 
        $PropertyData->Price = $request->input('Price'); 
        $PropertyData->PropertyType = $request->input('PropertyType');
        $PropertyData->ForSale_ForRent = $request->input('ForSale_ForRent');

        $PropertyData->save();
    }
    
    function delete($id){
        $PropertyData = data::findorfail($id);
        $PropertyData->delete();
        
    }


}
