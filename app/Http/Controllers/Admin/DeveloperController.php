<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Developer;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $developers = Developer::all();
        return view('admin.developers.index', compact('developers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $new_developer = new Developer();
        return view('admin.developers.create', compact('new_developer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'label' => 'required|string|max:255',
            'year_production' => 'nullable|date',
            'location' => 'nullable|string|max:255',
        ]);

        Developer::create($data);

        return redirect()->route('admin.developers.index')->with('success', 'developer created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.developers.show', compact('developer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $developer = Developer::findOrFail($id);
        return view('admin.developers.edit', compact('developer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'label' => 'required|string|max:255',
            'year_production' => 'nullable|date',
            'location' => 'nullable|string|max:255',
        ]);

        $developer = Developer::findOrFail($id);
        $developer->update($data);

        return redirect()->route('admin.developers.index')->with('success', 'Developer successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $developer = Developer::findOrFail($id);
        $developer->delete();

        return redirect()->route('admin.developers.index')->with('success', 'Developer successfully deleted.');
    }
}
