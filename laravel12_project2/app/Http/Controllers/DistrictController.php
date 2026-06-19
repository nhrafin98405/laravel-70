<?php

namespace App\Http\Controllers;

use App\Models\Districts;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $districts = Districts::all();
        return view('backend.district.district_index',compact('districts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.district.district_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

                   $request->validate([
        'name' => 'required|min:4|max:25|unique:districts,name',
    ]);

       

        $districts = new Districts();
        $districts->name = $request->name;
        $districts->save();

        return redirect()->route('district.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $district = Districts::findOrFail($id);

        return view('backend.district.district_show', compact('district'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $district = Districts::find($id);
        return view('backend.district.district_edit',['district'=>$district] );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $request->validate([
        'name' => 'required|min:4|max:25|unique:districts,name,' . $id,
    ]);

    $district = Districts::findOrFail($id);

    $district->name = $request->name;
    $district->save();

    return redirect()->route('district.index')
                     ->with('success', 'District updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
            $district = Districts::findOrFail($id);
    $district->delete();

    return redirect()->route('district.index')
        ->with('success','Deleted successfully');
    }
}
