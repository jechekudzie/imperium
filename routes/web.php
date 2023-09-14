<?php


use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryImageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Website Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', [\App\Http\Controllers\SiteController::class,'welcome']);
Route::get('/about_us', [\App\Http\Controllers\SiteController::class,'about_us']);
Route::get('/contact_us', [\App\Http\Controllers\SiteController::class,'contact_us']);
Route::get('/services/{service}', [\App\Http\Controllers\SiteController::class,'services']);
Route::get('/products', [\App\Http\Controllers\SiteController::class,'products']);

/*
|--------------------------------------------------------------------------
| Admin Web Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/admin', [AdminController::class,'index']);

// Service Routes
Route::get('/admin/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/admin/services/create', [ServiceController::class, 'create'])->name('services.create');
Route::post('/admin/services', [ServiceController::class, 'store'])->name('services.store');
Route::get('/admin/services/{service}', [ServiceController::class, 'show'])->name('services.show');
Route::get('/admin/services/{service}/edit', [ServiceController::class, 'edit'])->name('services.edit');
Route::put('/admin/services/{service}', [ServiceController::class, 'update'])->name('services.update');
Route::delete('/admin/services/{service}', [ServiceController::class, 'destroy'])->name('services.destroy');

// Service Routes
Route::get('/admin/about_us', [AboutUsController::class, 'index'])->name('about_us.index');
Route::get('/admin/about_us/create', [AboutUsController::class, 'create'])->name('about_us.create');
Route::post('/admin/about_us', [AboutUsController::class, 'store'])->name('about_us.store');
Route::get('/admin/about_us/{about}', [AboutUsController::class, 'show'])->name('about_us.show');
Route::get('/admin/about_us/{about}/edit', [AboutUsController::class, 'edit'])->name('about_us.edit');
Route::put('/admin/about_us/{about}', [AboutUsController::class, 'update'])->name('about_us.update');
Route::delete('/admin/about_us/{about}', [AboutUsController::class, 'destroy'])->name('about_us.destroy');

// Routes for CategoryController
Route::get('/admin/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/admin/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/admin/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/admin/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/admin/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/admin/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');

//Category Images
Route::resource('/admin/category_images', CategoryImageController::class );

Route::get('/admin/brands', [BrandController::class, 'index'])->name('brands.index');
Route::get('/admin/brands/create', [BrandController::class, 'create'])->name('brands.create');
Route::post('/admin/brands', [BrandController::class, 'store'])->name('brands.store');
Route::get('/admin/brands/{brand}', [BrandController::class, 'show'])->name('brands.show');
Route::get('/admin/brands/{brand}/edit', [BrandController::class, 'edit'])->name('brands.edit');
Route::put('/admin/brands/{brand}', [BrandController::class, 'update'])->name('brands.update');
Route::delete('/admin/brands/{brand}', [BrandController::class, 'destroy'])->name('brands.destroy');


// Display all products
Route::get('/admin/products/{category}/index', [ProductController::class, 'index'])->name('products.index');
// store products
Route::post('/admin/products/{category}/store', [ProductController::class, 'store'])->name('products.store');
// Display the form to edit a specific product
Route::get('/admin/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
// Delete a specific product
Route::delete('/admin/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
