<?php

namespace App\Http\Controllers\Comic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    public function index() {

        $comics = Comic::all();
        $page_title = 'Comic List';

        return view('comics.index', compact('comics','page_title'));
    }

    public function show(Comic $comic) {

        return view('comics.show', compact('comic'));
    }
}
