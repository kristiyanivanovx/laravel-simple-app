<?php

namespace App\Http\Controllers;

use App\Models\Plane;
use App\Models\PlaneType;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
        $validated = $request->validate([
            'name' => 'required|unique:planes|max:255',
            'plane_type_id' => 'required',
        ]);

        Plane::create([
            'name' => $validated['name'],
            'plane_type_id' => (int)$validated['plane_type_id'],
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

        // could be improved
        $plane = Plane::findOrFail($id);
        $plane->name = $validated['name'];
        $plane->plane_type_id = $validated['plane_type_id'];
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
        Plane::destroy($id);
        $planes = Plane::all();
        return view('planes.index', compact('planes'));
    }
}
