<?php

namespace App\Http\Controllers\Api;

use App\Categories;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        $categories = Categories::latest()->get();

        return response()->json([
            'products' => $products,
            'categgories' => $categories
        ]);
    }

    public function detail($id)
    {
        $products = Product::find($id);
        return response()->json([
            'product'=> $products,]
        );
    }

    public function productCategory($category_i
    {
        $category = Categories::find($category_id);

        $products = $category->products;
        return response()->json([
            'product'=>$products, 'categories'=>$category
        ]);

    }
}
