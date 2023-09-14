<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //

    public function welcome()
    {
        $categories = Category::all();

        $category = Category::find(1);
        //dd($category->products);
        return view('welcome', compact('categories'));
    }

    public function products()
    {
        $categories = Category::all();

        return view('products', compact('categories'));
    }


    public function about_us()
    {
        $about_us = About::find(1);
        $customer_orientation = About::find(2);
        return view('about_us', compact('about_us','customer_orientation'));
    }

    public function services(Service $service)
    {
        return view('services',compact('service'));
    }

    public function contact_us()
    {

        return view('contact_us');
    }


}
