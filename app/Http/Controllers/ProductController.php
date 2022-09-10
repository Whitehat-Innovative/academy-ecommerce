<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function addProduct()
    {
        $categories = Categories::all();
        return view('add_product',compact('categories'));
    }

    public function storeProduct(Request $request)
    {
        $products = new Product();
        $products->name = $request->name;
        $products->brand = $request->brand;
        $products->price = $request->price;
        $products->discount = $request->discount;
        $products->percentage_discount = $request->percentage_discount;
        $products->category_id = $request->category_id;
        $products->description = $request->description;


        $image = $request->image;
        $extension = $image->getClientOriginalExtension();
        $filename = $request->title . uniqid() . '.' . $extension;
        Storage::put('public/assets/images/'.$filename, fopen($image, 'r+'));
        $products->image = $filename;
        $products->save();

        return back();
    }

    public function allProduct()
    {
        $products = Product::latest()->get();
        return view('view_all_product',compact('products'));
    }

    public function editProduct($id)
    {
        $products = Product::find($id);
        $categories = Categories::all();
        return view('edit_product',compact('products','categories'));
    }

    public function updateProduct(Request $request,$id)
    {
        $products = Product::find($id);
        $products->name = $request->name;
        $products->brand = $request->brand;
        $products->price = $request->price;
        $products->discount = $request->discount;
        $products->percentage_discount = $request->percentage_discount;
        $products->category_id = $request->category_id;
        $products->description = $request->description;


        $image = $request->image;
        $extension = $image->getClientOriginalExtension();
        $filename = $request->title . uniqid() . '.' . $extension;
        Storage::put('/public/assets/images/'.$filename, fopen($image, 'r+'));
        $products->image = $filename;
        $products->save();

        return back();
    }

    public function deleteProduct($id)
    {
      $products = Product::find($id);
      $products->delete();
      return back();
    }


    public function productDetails($id)
    {
        $categories = Categories::all();
        $products = Product::find($id);
        return view('product_details',compact('products'));
    }

    

}
