<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    //
    public function index()
    {
        $about_us = About::all();
        return view('admin.about_us.index', compact('about_us'));
    }

         public function show(About $about)
    {
        return view('admin.about_us.show', compact('about'));
    }

        public function create()
    {
        return view('admin.about_us.create');
    }

    public function store(Request $request)
    {
        //
            $about = request()->validate([
            'description' => 'required',
        ]);

        if (request()->hasfile('image')) {
            //get the file field data and name field from form submission
            $file = request()->file('image');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $image = $file->move('images/about_us', $file_name);

            $about['image'] = $image;
        }
        About::create($about);

        return back()->with('message', 'About added successfully');
    }

    public function edit(About $about)
    {
        return view('admin.about_us.edit', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        $about_update = request()->validate([
            'description' => 'required',
        ]);

        if (request()->hasfile('image')) {
            //get the file field data and name field from form submission
            $file = request()->file('image');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $image = $file->move('images/about_us', $file_name);

            $about_update['image'] = $image;
        }

        $about->update($about_update);
        return redirect('/admin/about_us')->with('success', 'About updated successfully.');
    }

    public function destroy(About $about)
    {
        $about->delete();
        return redirect()->route('about_us.index')->with('success', 'About deleted successfully.');
    }
}
