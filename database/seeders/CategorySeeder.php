<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categories = [
            // Category 1: Outdoor Display
            'Outdoor Display' => [
                'Tents and Shades',
                'Flags and Banners',
                'Pop-Up Banners',
                'Directors Chairs',
                'PVC Banners',
                'Fence Wraps',
                'A-Frame Banners',
                'Bunting',
                'Table cloths',
            ],

            // Category 2: Indoor Display
            'Indoor Display' => [
                // No subcategories yet
            ],

            // Category 3: Promotional Gifts
            'Promotional Gifts' => [
                'Awards',
                'Bags',
                'Bottles',
                'Branded Logo Sets',
                'Digital Printing',
                'Drinkware',
                'Executive Gift Sets',
                'Folders and Tablet Holders',
                'Keyholders',
                'Lanyards',
                'Large Format',
                'Memory Sticks',
                'Notebooks',
                'Outdoor',
                'Packaging',
                'Umbrella',
                'Writing Instruments',
            ],

            // Category 4: Vehicle Branding
            'Vehicle Branding' => [
                'Car Magnets',
                'Full Wrapping',
                'Partial / half-wrapping',
            ],

            // Category 5: Signage
            'Signage' => [
                'Lightboxes',
                'Billboards',
                'Custom signs',
                'Cut-out letters',
                'Window Graphics',
                'Digital signage',
                'Display stands',
                'Fabricated signs',
                'Neon signs',
                'Pylon signs',
                'Shop fitting',
                'Cladding',
                'Digital prints',
            ],

            // Category 6: Printing Services
            'Printing Services' => [
                'Offset Lithography Printing (LITHO)',
                'Digital Printing',
            ],

            // Category 7: Corporate Wear
            'Corporate Wear' => [
                // No subcategories yet
            ],
        ];

        // Seed the categories and subcategories
        foreach ($categories as $categoryName => $subcategories) {
            // Create the category
            $categoryId = DB::table('categories')->insertGetId([
                'name' => ucfirst($categoryName),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Seed the subcategories for the category
            foreach ($subcategories as $subcategoryName) {
                DB::table('sub_categories')->insert([
                    'category_id' => $categoryId,
                    'name' => ucfirst($subcategoryName),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
