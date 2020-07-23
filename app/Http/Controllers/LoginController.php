<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class LoginController extends Controller
{
    function index(){
        return view('login');
    }

    function checklogin(Request $request){
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required|min:5'
        ]);
 
        $credentials = array(
            'username' => $request->get('username'),
            'password'=> $request->get('password')
        );

        if(Auth()->attempt($credentials)){
            return redirect ('login/PropertySystem');
            
        }
        else{
            return back()->with('error', 'Invalid credentials');
            
        }

    }
    function PropertySystem()
    {
        return view('asegadb');
    }
    function logout(){
        Auth::logout();
        return redirect('login');
    }
}
