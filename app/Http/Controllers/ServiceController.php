<?php

namespace App\Http\Controllers;

use App\Service;
use Auth;
use Carbon\Carbon;
use Validator;
// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function create()
    {
        return view('Service.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'service_name' =>'required',
            'service_description'=>'required',
            'service_image' => 'required|image|mimes:jpeg,jpg,bmp,png',
        ]);
        //save image
        $filenamewithExt = $request->file('service_image')->getClientOriginalName();
        // return $filenamewithExt;
        $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
        // RETURN $filename;
        $extension = $request->file('service_image')->getClientOriginalExtension();
        //create new filename
            // return $extension;
        $filenametostore = $filename .'_'.time().'.'.$extension;
        //upload image
            // return $filenametostore;
        $path= $request->file('service_image')->storeAs('public/service',$filenametostore);
        // return $path;

        $service = new Service();
        $service->service_name = $request->service_name;
        $service->service_description = $request->service_description;
        $service->service_image = '/service'.$request->$filename;
         $service->save();
        //  Toastr::success('Post successfully Created.','Success',["positionClass" => "toast-top-right"]);
         return redirect()->route('home')->with('success','Oristo Universal');
        

    }

}
