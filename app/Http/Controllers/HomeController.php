<?php

namespace App\Http\Controllers;

use App\Service;
use App\Product;
use App\Contact;
use App\Gallery;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $servicecount = Service::count();
        $productcount = Product::count();
        $contacttoday= Contact::whereRaw('date(created_at) = ?', [Carbon::today()])->count();
        $gallerycount = Gallery::count();
        $contacts = Contact::latest()->get();
        
        return view('home',compact('servicecount','productcount','contacttoday','gallerycount','contacts'));
    }
}
