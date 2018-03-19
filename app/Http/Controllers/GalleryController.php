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

    public function store(Request $request)
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
          $path= $request->file('image')->storeAs('public/gallery',$filenametostore);
          // return $path;
  

        $gallery = new Gallery();
        $gallery->image = $request->image;
        $gallery->save();

        return redirect()->route('home')->with('success','Oristo Universal');
            
    }
}
