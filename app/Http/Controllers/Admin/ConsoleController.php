<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Console;


class ConsoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consoles = Console::all();

        return view('admin.consoles.index', compact('consoles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $console = new Console();
        return view('admin.consoles.create', compact('console'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'label' => 'required|string|max:255',
            'year_production' => 'nullable|string|',
            'company' => 'nullable|string|max:255',
        ]);

        $console = Console::create($validatedData);


        if ($console) {
            return redirect()->route('admin.consoles.index', ['console' => $console])->with('success', 'Console created successfully!');
        } else {
            return back()->withErrors('error')->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Console $console)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Console $console)
    {
        return view('admin.consoles.edit', compact('console'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Console $console)
    {
        $validatedData = $request->validate([
            'label' => 'required|string|max:255',
            'year_production' => 'nullable|string|',
            'company' => 'nullable|string|max:255',
        ]);

        $console->update($validatedData);

        return Redirect()->route('admin.consoles.show', ['console' => $console])->with('success', 'Console updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Console $console)
    {
        $console->delete();

        return redirect()->route('admin.consoles.index')->with('success', 'Console deleted successfully!');
    }
}
