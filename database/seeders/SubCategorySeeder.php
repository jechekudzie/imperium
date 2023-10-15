<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $sub_categories = [
            ["name" => ucfirst("awards"), "created_at" => now(), "updated_at" => now()],
            ["name" => ucfirst("Bags"), "created_at" => now(), "updated_at" => now()],
            ["name" => ucfirst("Bottles"), "created_at" => now(), "updated_at" => now()],
            ["name" => ucfirst("Branded Logo Sets"), "created_at" => now(), "updated_at" => now()],
            ["name" => ucfirst("digital printing"), "created_at" => now(), "updated_at" => now()],
            ["name" => ucfirst("drinkware"), "created_at" => now(), "updated_at" => now()],
            ["name" => ucfirst("Executive Gift Sets"), "created_at" => now(), "updated_at" => now()],
            ["name" => ucfirst("Folders and Tablet Holders"), "created_at" => now(), "updated_at" => now()],
            ["name" => ucfirst("keyholders"), "created_at" => now(), "updated_at" => now()],
            ["name" => ucfirst("lanyards"), "created_at" => now(), "updated_at" => now()],
            ["name" => ucfirst("large format"), "created_at" => now(), "updated_at" => now()],
            ["name" => ucfirst("memory sticks"), "created_at" => now(), "updated_at" => now()],
            ["name" => ucfirst("notebooks"), "created_at" => now(), "updated_at" => now()],
            ["name" => ucfirst("Outdoor"), "created_at" => now(), "updated_at" => now()],
            ["name" => ucfirst("packaging"), "created_at" => now(), "updated_at" => now()],
            ["name" => ucfirst("Umbrella"), "created_at" => now(), "updated_at" => now()],
            ["name" => ucfirst("writing instruments"), "created_at" => now(), "updated_at" => now()],
        ];
        SubCategory::insert($sub_categories);
    }
}
