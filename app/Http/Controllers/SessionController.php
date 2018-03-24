<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Validator;
use Hash;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function getlogin()
    {
        return view ('User.login');
    }

    public function postlogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' =>'required',
            'password'=>'required',
        ]);
            dd($request);

            if(!Auth::attempt($request->only(['email','password']), $request->has('remember'))) {

                return redirect()->back()->with('info', 'Could not sign you in with those details!');
            }
            
            return redirect()->route('home');
    
            
            // $user = new User();

            // dd($request->all());


    }
}
