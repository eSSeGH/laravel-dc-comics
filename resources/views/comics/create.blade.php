@extends('layouts.app')

@section('main-content')
<main>

<div class="black-section">

    <div class="container">

        <div class="card mx-auto my-5" style="max-width: 900px;">
            <div class="card-body">
                <h3 class="card-title" style="text-align:center;">Inserisci un nuovo fumetto!</h5>

                <form action="{{ route('comics.store') }}" method="POST">
                    {{-- controllo csrf  --}}
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo:</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">URL immagine:</label>
                        <input type="text" class="form-control" name="thumb" id="thumb" value="{{ old('thumb') }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione:</label>
                        <textarea type="text" class="form-control" name="description" id="description">
                            {{ old('description') }}
                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo:</label>
                        <input type="text" class="form-control" name="price" id="price" value="{{ old('price') }}">
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Serie:</label>
                        <input type="text" class="form-control" name="series" id="series" value="{{ old('series') }}">
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data:</label>
                        <input type="text" class="form-control" name="sale_date" id="sale_date" value="{{ old('sale_date') }}">
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo:</label>
                        <select class="form-select" name="type" aria-label="Default select example">
                            <option selected>Seleziona un tipo di fumetto</option>
                            <option @selected( old('type') == 'Comic Book') value="Comic Book">Comic Book</option>
                            <option @selected( old('type') == 'Graphic Novel') value="Graphic Novel">Graphic Novel</option>
                        </select>
                    </div>

                    <div class="btn-parent d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary mx-auto">Invia</button>
                    </div>
                
                </form>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            </div>
        </div>

    </div>

</div>

</main>
@endsection

@section('page-title', $page_title)