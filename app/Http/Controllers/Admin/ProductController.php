<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);
        return view('admin.allproduct', compact('products'));
    }


    public function addproduct()
    {
        $categories = Category::all();
        $subcategories = SubCategory::all();
        return view('admin.addproduct', compact('categories', 'subcategories'));
    }

    public function storeproduct(Request $request)
    {
        $request->validate([
            'product_name' => 'required|unique:products',
            'short_description' => 'required',
            'long_description' => 'required',
            'product_category_id' => 'required',
            'product_subcategory_id' => 'required',
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $image = $request->file('product_image');
        $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $request->product_image->move(public_path('upload'), $image_name);
        $image_url = 'upload/' . $image_name;

        $category_id = $request->product_category_id;
        $subcategory_id = $request->product_subcategory_id;

        $category_name = Category::where('id', $category_id)->value('category_name');
        $subcategory_name = SubCategory::where('id', $subcategory_id)->value('subcategory_name');


        Product::insert([
            'product_name' => $request->product_name,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'product_category_name' => $category_name,
            'product_subcategory_name' => $subcategory_name,
            'product_category_id' => $request->product_category_id,
            'product_subcategory_id' => $request->product_subcategory_id,
            'product_image' => $image_url, // Corrected variable name
            'slug' => strtolower(str_replace(' ', '-', $request->product_name))
        ]);

        Category::where('id', $category_id)->increment('product_count', 1);
        SubCategory::where('id', $subcategory_id)->increment('product_count', 1);

        return redirect()->route('product.index')->with('message', 'Products added successfully!');
    }

    public function editimg($id)
    {
        $product_info = Product::find($id);
        return view('admin.editproductimg', compact('product_info'));
    }

    public function updateimg(Request $request)
    {
        $request->validate([
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);


        $id = $request->id;
        $image = $request->file('product_image');
        $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $request->product_image->move(public_path('upload'), $image_name);
        $image_url = 'upload/' . $image_name;

        Product::find($id)->update([
            'product_image' => $image_url
        ]);

        return redirect()->route('product.index')->with('message', 'Products image updated successfully!');
    }

    public function editproduct($id)
    {
        $product_info = Product::find($id);
        return view('admin.editproduct', compact('product_info'));
    }

    public function updateproduct(Request $request)

    {
        $product_id = $request->id;

        $request->validate([
            'product_name' => 'required|unique:products,product_name,' . $product_id,
            'short_description' => 'required',
            'long_description' => 'required',
        ]);



        Product::find($product_id)->update([
            'product_name' => $request->product_name,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'slug' => strtolower(str_replace(' ', '-', $request->product_name))
        ]);

        return redirect()->route('product.index')->with('message', 'Products updated successfully!');
    }

    public function deleteproduct($id)
    {
        $cat_id = Product::where('id', $id)->value('product_category_id');
        $subcat_id = Product::where('id', $id)->value('product_subcategory_id');

        Category::where('id', $cat_id)->decrement('product_count', 1);
        SubCategory::where('id', $cat_id)->decrement('product_count', 1);

        Product::find($id)->delete();
        return redirect()->route('product.index')->with('message', 'Product deleted successfully!');
    }
}
