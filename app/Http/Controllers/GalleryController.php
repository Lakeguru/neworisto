<?php

namespace App\Http\Controllers;

use App\Gallery;
use Validator;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //
    public function create()
    {
        return view ('Gallery.create');
    }

    public function all()
    {
        // $gallery = Gallery::latest()->get();
        return view('Gallery.index');        
    }

    public function store(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,jpg,bmp,png|max:2048',
        ]);

          
        $file = $request->file('image') ;
        // return $file;
        $fileName = $file->getClientOriginalName() ;
        $destinationPath = public_path().'/gallery/' ;
        $file->move($destinationPath,$fileName);


        $gallery = new Gallery();
        $gallery->image = $fileName ;
        // dd($f->all());
        $gallery->save();

        return redirect()->route('home')->with('success','Oristo Universal');
            
    }

    public function show($id)
    {
        $service = Service::findorFail($id);
        return view('Service.show',compact('service'));

    }


    public function destroy($id)
    {
        Gallery::find($id)->delete();
        return redirect()->route('home')->with('success','Oristo Universal');
    }
}
