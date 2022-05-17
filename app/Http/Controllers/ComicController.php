<?php

namespace App\Http\Controllers;
use App\Comic;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::paginate(10);
        $data = ["comics" => $comics];
        return view('comics.index', $data);
    }

    public function show($id) {
        $comic = Comic::findOrFail($id);
        $data = ["comic" => $comic];
        return view('comics.show', $data);
    }
}
