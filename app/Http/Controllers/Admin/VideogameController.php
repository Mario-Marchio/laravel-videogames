<?php

namespace App\Http\Controllers\Admin;

use App\Models\Videogame;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VideogameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videogames = Videogame::all();
        return view('admin.videogames.index', compact('videogames'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $videogame = new Videogame();
        return view('admin.videogames.create', compact('videogame'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|Url:https',
            'release_year' => 'nullable|date',
            'rate' => 'nullable|numeric|between:0,5',
        ]);

        $videogame = Videogame::create($validatedData);

        return Redirect()->route('admin.videogames.show', ['videogame' => $videogame])->with('success', 'Videogame created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Videogame $videogame)
    {
        return view('admin.videogames.show', compact('videogame'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Videogame $videogame)
    {
        return view('admin.videogames.edit', compact('videogame'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Videogame $videogame)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|Url:https',
            'release_year' => 'nullable|date',
            'rate' => 'nullable|numeric|between:0,5',
        ]);

        $videogame->update($validatedData);

        return Redirect()->route('admin.videogames.show', ['videogame' => $videogame])->with('success', 'Videogame updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Videogame $videogame)
    {
        $videogame->delete();

        return redirect()->route('admin.videogames.index')->with('success', 'Videogame deleted successfully!');
    }

    public function trash()
    {
        $videogames = Videogame::onlyTrashed()->get();

        return view('admin.videogames.trash', compact('videogames'));
    }

    public function restore(string $id)
    {
        $videogame = Videogame::onlyTrashed()->findOrFail($id);

        $videogame->restore();

        return to_route('admin.videogames.trash');
    }
}
