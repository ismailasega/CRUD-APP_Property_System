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

        $user_data = array(
            'username' => $request->get('name'),
            'password'=>$request->get('password')
        );

        if(Auth::attempt($user_data)){
            return redirect ('login/PropertySytem');
            echo ($request->get());
        }
        else{
            return back()->with('error', 'wrong credentials');
            
        }

    }
    function successlogin()
    {
        return view('PropertySytem');
    }
    function logout(){
        Auth::logout();
        return redirect('login');
    }
}
