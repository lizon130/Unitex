<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(10);
        return view('admin.allcategory', compact('categories'));
    }


    public function addcategory()
    {
        return view('admin.addcategory');
    }

    public function storecategory(Request $request)
    {
        $request->validate([
            'category_name' => 'required|unique:categories'
        ]);

        Category::insert([
            'category_name' => $request->category_name,
            'slug' => strtolower(str_replace(' ', '-', $request->category_name))
        ]);

        return redirect()->route('category.index')->with('message', 'Category added successfully!');
    }

    public function editcategory($id)
    {
        $category_info = Category::find($id);

        return view('admin.editcategory', compact('category_info'));
    }

    public function updatecategory(Request $request)
    {
        $category_id = $request->category_id;

        $request->validate([
            'category_name' => 'required|unique:categories'
        ]);

        Category::find($category_id)->update([
            'category_name' => $request->category_name,
            'slug' => strtolower(str_replace(' ', '-', $request->category_name))
        ]);

        return redirect()->route('category.index')->with('message', 'Category updated successfully!');
    }

    public function deletecategory($id)

    {
        Category::find($id)->delete();
        return redirect()->route('category.index')->with('message', 'Category deleted successfully!');
    }
}
