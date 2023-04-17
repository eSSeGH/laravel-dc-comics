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

    public function store(Request $request) {
        $data = $request->all();

        $new_comic = new Comic();

        $new_comic->title = $data['title'];
        $new_comic->description = $data['description'];
        $new_comic->thumb = $data['thumb'];
        $new_comic->price = $data['price'];
        $new_comic->series = $data['series'];
        $new_comic->sale_date = $data['sale_date'];
        $new_comic->type = $data['type'];

        $new_comic->save();

        return redirect()->route('comics.show', $new_comic);
    }

    public function edit(Comic $comic) {

        $page_title = 'Modifica fumetto esistente';
        
        return view('comics.edit', compact('comic', 'page_title'));
    }

    public function update(Request $request, Comic $comic) {

        $data = $request->all();
        // dd($comic, $request->all());

        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];

        $comic->save();

        return to_route('comics.show', $comic);

    }
}
