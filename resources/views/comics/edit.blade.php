@extends('layouts.app')

@section('main-content')
<main>

<div class="black-section">

    <div class="container">

        <div class="card mx-auto my-5" style="max-width: 900px;">
            <div class="card-body">
                <h3 class="card-title" style="text-align:center;">Modifica: {{ $comic->title }}</h5>

                <form action="{{ route('comics.update', $comic) }}" method="POST">
                    {{-- controllo csrf  --}}
                    @csrf

                    {{-- specifico il metodo post:put --}}
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo:</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{ $comic->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">URL immagine:</label>
                        <input type="text" class="form-control" name="thumb" id="thumb" value="{{ $comic->thumb }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione:</label>
                        <textarea type="textarea" row="5" cols="30" class="form-control" name="description" id="description">
                            {{ $comic->description }}
                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo:</label>
                        <input type="text" class="form-control" name="price" id="price" value="{{ $comic->price }}">
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Serie:</label>
                        <input type="text" class="form-control" name="series" id="series" value="{{ $comic->series }}">
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data:</label>
                        <input type="text" class="form-control" name="sale_date" id="sale_date" value="{{ $comic->sale_date}}">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo:</label>
                        <input type="text" class="form-control" name="type" id="type" value="{{ $comic->type }}">
                    </div>

                    <div class="btn-parent d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary mx-auto">Invia</button>
                    </div>
                
                </form>

            </div>
        </div>

    </div>

</div>

</main>
@endsection

@section('page-title', $page_title)