<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\CategoryImage;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryImageController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        $categoryImages = CategoryImage::all();
        return view('admin.category_images.index', compact('categories', 'categoryImages'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.category_images.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image',
            'description' => 'nullable',
        ]);

        // Handle the uploaded image
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $file_name = time() . $name;
            $path = $file->move('images/category_images', $file_name);
            $validatedData['image'] = $path;
        }

        CategoryImage::create($validatedData);

        return redirect()->route('admin/category_images')
            ->with('success', 'Products added successfully.');
    }

    public function show(CategoryImage $categoryImage)
    {
        return view('admin.category_images.show', compact('categoryImage'));
    }

    public function edit(CategoryImage $categoryImage)
    {
        $categories = Category::all();
        return view('admin.category_images.edit', compact('categories', 'categoryImage'));
    }

    public function update(Request $request, CategoryImage $categoryImage)
    {
        $validatedData = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image',
            'description' => 'nullable',
        ]);

        // Handle the uploaded image
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $file_name = time() . $name;
            $path = $file->move('images/category_images', $file_name);

            // Delete the previous image if it exists
            if ($categoryImage->image && File::exists(public_path($categoryImage->image))) {
                File::delete(public_path($categoryImage->image));
            }

            $validatedData['image'] = $path;
        }

        $categoryImage->update($validatedData);

        return redirect()->route('admin/category_images')
            ->with('success', 'Product updated successfully.');
    }

    public function destroy(CategoryImage $categoryImage)
    {
        $categoryImage->delete();

        return redirect()->route('admin/category_images')
            ->with('success', 'Product deleted successfully.');
        // ...
    }
}
