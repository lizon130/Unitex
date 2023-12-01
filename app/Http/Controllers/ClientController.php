<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function categorypage($id)
    {

        // Fetch the specific category based on the provided ID
        $subcategory = SubCategory::find($id);

        // Fetch all products related to the category
        $product = Product::where('product_subcategory_id', $id)->paginate(8);

        return view('user_temp.category', compact('subcategory', 'product'));
    }

    public function collection()
    {
        $categories = Category::all();
        $product = Product::paginate(6);
        return view('user_temp.collection', compact('categories', 'product'));
    }
}
