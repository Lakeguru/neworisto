<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Service;
use App\Product;
use App\Gallery;
use App\Homepagec;
use Validator;
use Mail;
use Illuminate\Http\Request;

class ViewsController extends Controller
{
    //

    public function index()
    {
        $products=Product::latest()->get();
        $services=Service::latest()->get();
        $homepagecs= Homepagec::latest()->get();
        return view('Functions.index',compact('products','services','homepagecs'));
    }

    public function about()
    {
        return view ('oristo.about');
    }

    public function product()
    {
        return view('Functions.product');
    }

    public function contact()
    {
        return view ('Functions.contact');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' =>'required',
            'last_name'=>'required',
            'email'=>'required',
            'phone_number'=>'required',
            'message'=>'required',
        ]);

        $data = [
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'phone_number'=>$request->phone_number,
            'message'=>$request->message,
        ];

        
        Mail::send('emails.contact',$data, function($contact) use ($data){
            $contact->from($data['email']);
            $contact->to('oluwatosinolamilekan@gmail.com','Oristo Un');
            $contact->subject($data['message']);
        
        });

        dd($request->all());

        $contact = new Contact();
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->email = $request->email;
        $contact->phone_number = $request->phone_number;
        $contact->message = $request->message;
        $contact->save();


        return redirect()->route('index')->with('success','Thanks for Using Oristo Universal');
    }

    public function gallery()
    {
        return view ('Functions.gallery');
    }
}
