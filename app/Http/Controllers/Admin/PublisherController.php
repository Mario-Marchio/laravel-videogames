<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PublisherRequest;
use App\Models\Publisher;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\Pure;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publishers = Publisher::all();
        return view('admin.publishers.index', compact('publishers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $publisher = new Publisher();
        return view('admin.publishers.create', compact('publisher'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PublisherRequest $request)
    {
        $data = $request->all();
        $publisher = Publisher::create($data);

        return to_route('admin.publishers.show', $publisher);
    }

    /**
     * Display the specified resource.
     */
    public function show(Publisher $publisher)
    {
        return view('admin.publishers.show', compact('publisher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publisher $publisher)
    {
        return view('admin.publishers.edit', compact('publisher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PublisherRequest $request, Publisher $publisher)
    {
        $data = $request->all();
        $publisher->update($data);

        return to_route('admin.publishers.show', compact('publisher'))->with('success', "$publisher->name updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publisher $publisher)
    {
        // Check if publisher has videogames, if it has videogames attached return an error.
        if (count($publisher->videogames))
            return to_route('admin.publishers.show', $publisher)
                ->withErrors("Cannot delete $publisher->name,
                The publisher has " . count($publisher->videogames) . " active videogames.");

        $publisher->delete();

        return to_route('admin.publishers.index')->with('success', "$publisher->name deleted successfully!");
    }
}
