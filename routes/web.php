<?php

use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\ClientController;


Route::controller(HomeController::class)->group(function () {

    Route::get('/', 'index')->name('home');
    Route::get('/contact-Us', 'contact')->name('contact');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/about-us', 'about')->name('about');
});

Route::controller(ClientController::class)->group(function () {
    Route::get('/category/{id}/{slug}', 'categorypage')->name('client.category');
    Route::get('/collections-all-products', 'collection')->name('collection.products');
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Dashboard

Route::prefix('admin/')->controller(DashboardController::class)->middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', 'index')->name('dashboard.index');
    Route::get('dashboard/logout', 'logout')->name('dashboard.logout');

});

//Category
Route::prefix('admin/category/')->controller(CategoryController::class)->group(function () {
    Route::get('all', 'index')->name('category.index');
    Route::get('add', 'addcategory')->name('category.add');
    Route::post('store', 'storecategory')->name('category.store');
    Route::get('edit/{id}', 'editcategory')->name('category.edit');
    Route::post('update/', 'updatecategory')->name('category.update');
    Route::get('delete/{id}', 'deletecategory')->name('category.delete');
});

//SubCategory
Route::prefix('admin/subcategory/')->controller(SubcategoryController::class)->group(function () {
    Route::get('all', 'index')->name('subcategory.index');
    Route::get('add', 'addsubcategory')->name('subcategory.add');
    Route::post('store', 'storesubcategory')->name('subcategory.store');
    Route::get('edit/{id}', 'editsubcategory')->name('subcategory.edit');
    Route::post('update/', 'updatesubcategory')->name('subcategory.update');
    Route::get('delete/{id}', 'deletesubcategory')->name('subcategory.delete');
});

//product
Route::prefix('admin/product/')->controller(ProductController::class)->group(function () {
    Route::get('all', 'index')->name('product.index');
    Route::get('add', 'addproduct')->name('product.add');
    Route::post('store', 'storeproduct')->name('product.store');
    Route::get('edit-image/{id}', 'editimg')->name('product.img');
    Route::post('update-image', 'updateimg')->name('product.imgupdate');
    Route::get('edit/{id}', 'editproduct')->name('product.edit');
    Route::post('update/', 'updateproduct')->name('product.update');
    Route::get('delete/{id}', 'deleteproduct')->name('product.delete');
});


require __DIR__ . '/auth.php';
