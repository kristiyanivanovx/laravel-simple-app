<?php

namespace App\Http\Controllers;

use App\Models\Plane;
use App\Models\PlaneType;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class PlaneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
//        $planes = Plane::with('type')->get();
        $planes = Plane::all();
        return view('planes.index', compact('planes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $plane_types = PlaneType::all();
        return view('planes.create', compact('plane_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Application|Factory|View
     */
    public function store(Request $request)
    {
        // 'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        $validated = $request->validate([
            'name' => 'required|unique:planes|max:255',
            'plane_type_id' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:20000',
        ]);

        $image_name = uniqid() . '-' . $request->file('image')->getClientOriginalName();
        $image_path = '/storage/' . $request->file('image')->storeAs('images', $image_name, 'public');

        // php by default limits file sizes to 2 MB maximum - https://laraveldaily.com/validate-max-file-size-in-laravel-php-and-web-server/
        Plane::create([
            'name' => $validated['name'],
            'plane_type_id' => (int)$validated['plane_type_id'],
            'path' => $image_path,
        ]);

        $planes = Plane::all();
        return view('planes.index', compact('planes'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|View
     */
    public function show($id)
    {
        $plane = Plane::findOrFail($id);
        $plane_types = PlaneType::all();
        return view('planes.show', compact('plane','plane_types'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $plane = Plane::findOrFail($id);
        $plane_types = PlaneType::all();

        return view('planes.edit', compact('plane','plane_types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Application|Factory|View
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'plane_type_id' => 'required',
        ]);

        $plane = Plane::findOrFail($id);
        $plane->name = $validated['name'];
        $plane->plane_type_id = $validated['plane_type_id'];

        if ($request->file('image')) {
            // php by default limits file sizes to 2 MB maximum - https://laraveldaily.com/validate-max-file-size-in-laravel-php-and-web-server/
            $request->validate([
                'image' => 'required|image|mimes:jpg,png,jpeg|max:20000',
            ]);

            $plane = Plane::findOrFail($id);

            $path = str_replace("/storage/", "", $plane->path);
            Storage::disk('public')->delete($path);

            $image_name = uniqid() . '-' . $request->file('image')->getClientOriginalName();
            $image_path = '/storage/' . $request->file('image')->storeAs('images', $image_name, 'public');

            $plane->path = $image_path;
        }

        $plane->save();

        $planes = Plane::all();
        return view('planes.index', compact('planes'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Application|Factory|View
     */
    public function destroy(int $id)
    {
        $plane = Plane::findOrFail($id);
        $path = str_replace("/storage/", "", $plane->path);
        Storage::disk('public')->delete($path);
        $plane->delete();

        $planes = Plane::all();
        return view('planes.index', compact('planes'));
    }
}
