<?php

namespace App\Http\Controllers\Comic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;
// attenzione a uesta importazione di sotto, è uesta uella giusta
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    public function welcome() {
        $page_title = 'Benvenuto';
        return view('welcome', compact('page_title'));
    }

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

        // METTI A POSTO LE VALIDATION
        // $data = $request->validate([
        //     'title' => 'required|max:50|min:3',
        //     'description' => 'required|max:65535|min:3',
        //     'thumb' => 'required|max:255|url',
        //     'price' => 'required|max:50|min:3',
        //     'series' => 'required|max:50|min:3',
        //     'sale_date' => 'required|max:50|min:3',
        //     'type' => ['required',
        //         Rule::in(['Comic Book', 'Graphic Novel'])
        //     ]
        // ]);

        // $data = $request->all();

        $data = $this->validation($request);

        // $new_comic = new Comic();

        // $new_comic->title = $data['title'];
        // $new_comic->description = $data['description'];
        // $new_comic->thumb = $data['thumb'];
        // $new_comic->price = $data['price'];
        // $new_comic->series = $data['series'];
        // $new_comic->sale_date = $data['sale_date'];
        // $new_comic->type = $data['type'];

        // $new_comic->save();

        $new_comic = Comic::Create($data);

        return redirect()->route('comics.show', $new_comic);
    }

    public function edit(Comic $comic) {

        $page_title = 'Modifica fumetto esistente';
        
        return view('comics.edit', compact('comic', 'page_title'));
    }

    public function update(Request $request, Comic $comic) {

        // $data = $request->all();

        $data = $this->validation($request);

        // $comic->title = $data['title'];
        // $comic->description = $data['description'];
        // $comic->thumb = $data['thumb'];
        // $comic->price = $data['price'];
        // $comic->series = $data['series'];
        // $comic->sale_date = $data['sale_date'];
        // $comic->type = $data['type'];

        // $comic->save();
        $comic->update($data);

        return to_route('comics.show', $comic);

    }

    public function destroy(Comic $comic) {

        $comic->delete();

        return redirect()->route('comics.index');
    }

    public function validation(Request $request) {

        return $request->validate([
            'title' => 'required|max:50|min:3',
            'description' => 'nullable|string',
            'thumb' => 'required|max:255|url',
            'price' => 'required|decimal:2',
            'series' => 'required|max:50|min:3',
            'sale_date' => 'required|date',
            'type' => ['required',
                Rule::in(['Comic Book', 'Graphic Novel'])
            ]
        ]);
    }
}
