<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UpdateSlugsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Update categories' slugs
        $categories = Category::all();
        foreach ($categories as $category) {
            $category->name = $category->name;  // This is to trigger slug generation.
            $category->save();
        }

        // Update subcategories' slugs
        $subcategories = SubCategory::all();
        foreach ($subcategories as $subcategory) {
            $subcategory->name = $subcategory->name;  // This is to trigger slug generation.
            $subcategory->save();
        }
    }
}
