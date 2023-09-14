<?php

namespace App\Http\Controllers;

use App\Models\Act;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    public function show(Service $service)
    {
        return view('admin.services.show', compact('service'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        //
        $service = request()->validate([
            'name' => 'required',
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
            $image = $file->move('images/services', $file_name);

            $service['image'] = $image;
        }
        Service::create($service);

        return back()->with('message', 'Service added successfully');
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $service_update = request()->validate([
            'name' => 'required',
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
            $image = $file->move('images/services', $file_name);

            $service_update['image'] = $image;
        }

        $service->update($service_update);
        return redirect('/admin/services')->with('success', 'Service updated successfully.');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
    }
}
