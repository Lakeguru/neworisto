<?php

namespace App\Http\Controllers;

use Auth;
use App\Product;
use Validator;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function create()
    {
        return view ('Product.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_name' =>'required',
            'product_description'=>'required',
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
            
            $file = $request->file('product_image') ;
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/product/' ;
            $file->move($destinationPath,$fileName);
            

        $product = new Product();
        $product->product_name = $request->product_name;
        $product->product_description = $request->product_description;
        $product->product_image = $fileName ;
        $product->save();

        return redirect()->route('home')->with('success','Thanks for Using Oristo Universal');
        
    }

    public function action()
    {
        $products =Product::latest()->get();
        return view ('Product.all_product',compact('products'));
    }

    public function all()
    {
        $products =Product::latest()->get();
        return view ('Product.index',compact('products'));

    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'product_name' =>'required',
            'product_description'=>'required',
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

            $file = $request->file('product_image') ;
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/product/' ;
            $file->move($destinationPath,$fileName);
            


        $product = Product::find($id);
        $product->product_name = $request->product_name;
        $product->product_description = $request->product_description;
        $product->product_image = $fileName ;
        $product->save();
        return redirect()->route('home')->with('success','Product has been Updated');
        
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('home')->with('success','Product has been delete');
    }


    public function edit($id)
    {
        $product = Product::findorFail($id);
        return view ('Product.edit',compact('product'));
    }

    public function show($id)
    {
        $product = Product::findorFail($id);
        return view('Product.show',compact('product'));

    }

}
