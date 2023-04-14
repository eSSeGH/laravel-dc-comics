<?php

namespace App\Http\Controllers\Comic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    public function index() {
        $comics = Comic::all();
        $page_title = 'Lista fumetti';
        return view('comics.index', compact('comics','page_title'));
    }

    public function create() {
        $page_title = 'Inserisci un nuovo fumetto';
        return view('comics.create', compact('page_title'));
    }

    public function show(Comic $comic) {
        return view('comics.show', compact('comic'));
    }
}
