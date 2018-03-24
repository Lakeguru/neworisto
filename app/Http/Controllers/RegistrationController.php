<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Validator;
use Hash;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    //
    public function getsign()
    {
        return view('User.signin');
    }

    public function postsign(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' =>'required',
            'email'=>'required',
            'password'=>'required|confirmed',
        ]);


        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        dd($request->all());
        

    }
}
