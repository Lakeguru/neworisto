<?php

namespace App\Http\Controllers;

use App\Product;
use Auth;
use Carbon\Carbon;
use Validator;
// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        return view('dashboard.productview');
    }

    public function all()
    {
        $products=Product::latest()->get();
        return view ('Product.index',compact('products'));
    }

    public function create()
    {
        return view('Product.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_name' =>'required',
            'product_description'=>'required',
            'product_image' => 'required|image|mimes:jpeg,jpg,bmp,png',
        ]);


        $file = $request->file('product_image') ;
            // return $file;
        $fileName = $file->getClientOriginalName() ;
        $destinationPath = public_path().'/product/' ;
        $file->move($destinationPath,$fileName);

        $product = new Product();
        $product->product_name = $request->product_name;
        $product->product_description = $request->product_description;
        // $product->product_image = '/product'.$request->$filename;
        $product->product_image = $fileName ;
         $product->save();
        //  Toastr::success('Post successfully Created.','Success',["positionClass" => "toast-top-right"]);
         return redirect()->route('home')->with('success','Oristo Universal');

    }

    public function show(Product $product)
    {
        return view('Product.show');
    }
    
}
