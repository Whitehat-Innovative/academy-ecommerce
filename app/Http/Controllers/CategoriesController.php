<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    public function category()
    {
        return view('category');
    }


    public function addCategory(Request $request)
  {
    $category = new Categories();
    $category->name = $request->name;
    $category->save();

    return back();
  }


  public function viewAllCategory()
  {
    $categories = Categories::latest()->get();

    return view('view_all_category', compact('categories'));
  }


  public function editCategory($id)
  {
    $categories = Categories::find($id);

    return view('edit_category',compact('categories'));
  }

  public function updateCategory(Request $request,$id)
  {
    $categories = Categories::find($id);
    $categories->name = $request->name;
    $categories->save();
    return back();
  }

  public function deleteCategory($id)
  {
    $categories = Categories::find($id);
    $categories->delete();
    return back();
  }
}

