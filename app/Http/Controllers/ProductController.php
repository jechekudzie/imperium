<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index(Category $category)
    {
        return view('admin.products.index', compact('category'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request, Category $category)
    {
        $validatedData = $request->validate([
            'image.*' => 'nullable|image',
        ]);

        // Handle the uploaded images
        if (request()->hasfile('image')) {

            //get the file field data and name field from form submission
            $uploadedFiles = request()->file('image');

            foreach ($uploadedFiles as $file) {
                //get file original name
                $name = $file->getClientOriginalName();

                $fileNameWithoutExtension = pathinfo($name, PATHINFO_FILENAME);

                //create a unique file name using the time variable plus the name
                $file_name = time() . $name;


                //upload the file to a directory in Public folder
                $product = $file->move('images/products', $file_name);

                $validatedData['image'] = $product;

                $category->add_products($validatedData);

            }
        }
        return redirect('/admin/products/' . $category->id . '/index')->with('success', 'Products created successfully.');
    }


    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        $brands = Brand::all();

        return view('admin.products.edit', compact('product', 'categories', 'brands'));
    }

    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'brand_id' => 'required|exists:brands,id',
            'name' => 'required|max:255',
            'model' => 'nullable|max:255',
            'description' => 'nullable',
            'quantity' => 'nullable|integer',
            'image' => 'nullable|image',
            'price' => 'nullable|numeric',
            'on_discount' => 'nullable|boolean',
            'discount_percentage' => 'nullable|numeric',
            'qr_code' => 'nullable|max:255',
            'bar_code' => 'nullable|max:255',
        ]);

        // Handle the uploaded image
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $file_name = time() . $name;
            $path = $file->move('images/products', $file_name);

            // Delete the previous image if it exists
            if ($product->image && File::exists(public_path($product->image))) {
                File::delete(public_path($product->image));
            }

            $validatedData['image'] = $path;
        }

        $product->update($validatedData);

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully.');
        // ...
    }
}
