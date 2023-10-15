<?php

namespace App\Http\Controllers;

use App\Models\OurTeam;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class OurTeamController extends Controller
{
    //
    public function index()
    {
        $our_team  = OurTeam::all();
        return view('admin.our_team.index', compact('our_team'));
    }

    public function store(Request $request, )
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'bio' => 'nullable',
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
                $path = $file->move('images/products', $file_name);

                $validatedData['image'] = $path;


            }
        }

       OurTeam::create($validatedData);

        return back()->with('success', 'Team added successfully.');

    }


    public function show(OurTeam $ourTeam)
    {
        return view('admin.our_team.show', compact('ourTeam'));
    }

    public function edit(OurTeam $ourTeam)
    {
        return view('admin.our_team.edit', compact('ourTeam'));
    }

    public function update(Request $request, OurTeam $ourTeam)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'bio' => 'nullable',
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
                $path = $file->move('images/our_team', $file_name);

                if ($ourTeam->image !== null) {
                    if (File::exists(public_path($ourTeam->image))) {

                        File::delete(public_path($ourTeam->image));
                    }

                }
                $validatedData['image'] = $path;

            }
        }

        $ourTeam->update($validatedData);

        return redirect('admin/our_team')
            ->with('success', 'Team member updated successfully.');
    }

    // Delete the previous image if it exists

    public function destroy(OurTeam $ourTeam)
    {

        $id = $ourTeam->id;

        $ourTeam->delete();

        return redirect('admin/our_team')
            ->with('success', 'Team member deleted successfully.');
    }
}
