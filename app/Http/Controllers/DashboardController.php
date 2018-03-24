<?php

namespace App\Http\Controllers;

use Validator;
use App\Homepagec;
use Auth;
use Carbon\Carbon;
use App\Service;
use App\Product;
use App\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function dashboard()
    {
        $servicecount = Service::count();
        $productcount = Product::count();
        $contacttoday= Contact::whereRaw('date(created_at) = ?', [Carbon::today()])->count();
        
        return view ('dashboard.index',compact('servicecount','productcount','contacttoday'));
    }

    public function homepagec()
    {
        return view('dashboard.homepagec');
    }

   
    public function destroy()
    {
        Auth::logout();
        
        return redirect()->route('index')->with('successMsg','Thanks For Using Oristo Universal');
        
    }
}
