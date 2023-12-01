<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SubCategory;

class SubcategoryController extends Controller
{
    public function index()
    {
        $subcategories = SubCategory::paginate(10);
        return view('admin.allsubcategory', compact('subcategories'));
    }


    public function addsubcategory()
    {
        $categories = Category::all();
        return view('admin.addsubcategory', compact('categories'));
    }

    public function storesubcategory(Request $request)
    {

        $request->validate([
            'subcategory_name' => 'required|unique:sub_categories',
            'category_id' => 'required'
        ]);

        // SQL inject for database

        $category_id = $request->category_id;

        $category_name = Category::where('id', $category_id)->value('category_name');

        // SQL inject for database

        SubCategory::insert([
            'subcategory_name' => $request->subcategory_name,
            'slug' => strtolower(str_replace(' ', '-', $request->subcategory_name)),
            'category_id' => $category_id,
            'category_name' => $category_name,
        ]);

        Category::where('id', $category_id)->increment('subcategory_count', 1);

        return redirect()->route('subcategory.index')->with('message', 'subcategory added successfully!');
    }

    public function editsubcategory($id)
    {
        $subcategory_info = SubCategory::find($id);

        return view('admin.editsubcategory', compact('subcategory_info'));
    }


    public function updatesubcategory(Request $request)
    {
        $request->validate([
            'subcategory_name' => 'required|unique:sub_categories',
            'category_id' => 'required'
        ]);

        $subcategory_id = $request->subcategory_id;

        SubCategory::find($subcategory_id)->update([

            'subcategory_name' => $request->subcategory_name,
            'slug' => strtolower(str_replace(' ', '-', $request->subcategory_name))

        ]);

        return redirect()->route('subcategory.index')->with('message', 'subcategory edited successfully!');
    }

    public function deletesubcategory($id)
    {
        $cat_id = SubCategory::where('id', $id)->value('category_id');
        SubCategory::find($id)->delete();

        Category::where('id', $cat_id)->decrement('subcategory_count', 1);

        return redirect()->route('subcategory.index')->with('message', 'subcategory deleted successfully!');
    }
}
