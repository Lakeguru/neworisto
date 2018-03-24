<?php

namespace App\Http\Controllers;

use Auth;
use App\Service;
use Validator;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function create()
    {
        return view ('Service.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'service_name' =>'required',
            'service_description'=>'required',
            'service_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $file = $request->file('service_image') ;
        $fileName = $file->getClientOriginalName() ;
        $destinationPath = public_path().'/service/' ;
        $file->move($destinationPath,$fileName);
       
        $service = new Service();
        $service->service_name = $request->service_name;
        $service->service_description = $request->service_description;
        $service->service_image = $fileName ;
        $service->save();
        return redirect()->route('home')->with('success','Thanks for Using Oristo Universal');
        
    }

    public function show($id)
    {
        $service = Service::findorFail($id);
        return view ('Service.show',compact('service'));

    }

    public function all()
    {
        $services =Service::latest()->get();
        return view ('Service.all',compact('services'));

    }

    public function edit($id)
    {
        $service = Service::findorFail($id);
        return view ('Service.edit',compact('service'));
        
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'service_name' =>'required',
            'service_description'=>'required',
            'service_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $file = $request->file('service_image') ;
        $fileName = $file->getClientOriginalName() ;
        $destinationPath = public_path().'/service/' ;
        $file->move($destinationPath,$fileName);
        

        $service = Service::find($id);
        $service->service_name = $request->service_name;
        $service->service_description = $request->service_description;
        $service->service_image = $fileName ;
        $service->save();
            
        return redirect()->route('home')->with('success','Thanks for Using Oristo Universal');
        
    }

    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect()->route('home')->with('success','Service Delete ');
        
    }

    public function all_service()
    {
        $services = Service::latest()->get();
        return view ('Service.all_service',compact('services'));
    }
}
