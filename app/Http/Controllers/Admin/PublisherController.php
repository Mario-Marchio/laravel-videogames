<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Publisher;
use Illuminate\Http\Request;

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
        $new_publisher = new Publisher();
        return view('admin.publishers.create', compact('new_publisher'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //todo
    }

    /**
     * Display the specified resource.
     */
    public function show(Publisher $publisher)
    {
        return view('admin.publisher.show', compact($publisher));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //todo
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //todo
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //todo
    }
}
