<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Videogame;
use Illuminate\Http\Request;

class VideogameController extends Controller
{
    public function index()
    {
        $videogames = Videogame::paginate(6);
        return view('guest.videogames.index', compact('videogames'));
    }

    public function show(Videogame $videogame)
    {
        return view('guest.videogames.show', compact('videogame'));
    }
}
