<?php

namespace App\Http\Controllers;

use Validator;
use App\Homepagec;
use Auth;
use Carbon\Carbon;
use App\Service;
use App\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function dashboard()
    {
        $servicecount = Service::count();
        $productcount = Product::count();
        // $patienttoday= Patient::whereRaw('date(created_at) = ?', [Carbon::today()])->count();
        
        return view ('dashboard.index',compact('servicecount','productcount'));
    }

    public function homepagec()
    {
        return view('dashboard.homepagec');
    }

    public function slider(Request $request)
    
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,jpg,bmp,png',
        ]);
        
         //save image
         $filenamewithExt = $request->file('image')->getClientOriginalName();
         //   return $filenamewithExt;
           $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
           // RETURN $filename;
           $extension = $request->file('image')->getClientOriginalExtension();
           //create new filename
               // return $extension;
           $filenametostore = $filename .'_'.time().'.'.$extension;
           //upload image
               // return $filenametostore;
           $path= $request->file('image')->storeAs('public/slider',$filenametostore);
        //    return $path;
   
            
        $homepagec = new Homepagec();
        $homepagec->image = '/slider'.$request->$filename;
        $homepagec->save();
        return redirect()->route('home')->with('successMsg','Background Successfully Saved');

    }

    public function destroy()
    {
        Auth::logout();
        
        return redirect()->route('index')->with('successMsg','Thanks For Using Oristo Universal');
        
    }
}
