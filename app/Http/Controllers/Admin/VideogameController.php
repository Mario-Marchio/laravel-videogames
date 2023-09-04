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
        return view('admin.videogames.index', compact('videogame'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $videogame = new videogame;

        return view('admin.videogames.create', compact('videogame'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'release_year' => 'nullable|date',
            'rate' => 'nullable|numeric|between:0,5',
        ]);

        $videogame = Videogame::create($validatedData);

        return Redirect()->route('admin.videogames.show', ['videogame' => $videogame]);
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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'release_year' => 'nullable|date',
            'rate' => 'nullable|numeric|between:0,10',
        ]);

        $videogame->update($validatedData);

        return Redirect()->route('admin.videogames.show', ['videogame' => $videogame]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Videogame $videogame)
    {
        //
    }
}
