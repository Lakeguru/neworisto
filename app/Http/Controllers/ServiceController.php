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


        $file = $request->file('service_image') ;
            // return $file;
        $fileName = $file->getClientOriginalName() ;
        $destinationPath = public_path().'/service/' ;
        $file->move($destinationPath,$fileName);


        $service = new Service();
        $service->service_name = $request->service_name;
        $service->service_description = $request->service_description;
        $service->service_image = $fileName ;
         $service->save();
        //  Toastr::success('Post successfully Created.','Success',["positionClass" => "toast-top-right"]);
         return redirect()->route('home')->with('success','Oristo Universal');
        

    }

    public function all_service()
    {
        $services = Service::latest()->get();
        return view('Service.all_service',compact('services'));
    }

    public function show(Service $service)
    {
        // $services = Service::findorFail($service);
        // $services  = Service::latest()->get();
        return view('Service.show');
    }

    public function destroy($id)
    {
        Service::find($id)->delete();
        return redirect()->route('home')->with('success','Oristo Universal');
    }

}
