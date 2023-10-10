<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function sub_categories()
    {
        return $this->hasMany(SubCategory::class);
    }

    public function add_sub_categories($sub_category)
    {
        return $this->sub_categories()->create($sub_category);
    }

}
