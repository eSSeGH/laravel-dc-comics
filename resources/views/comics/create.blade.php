@extends('layouts.app')

@section('main-content')
<main>

<div class="black-section">

    <div class="container">

        <div class="card mx-auto my-5" style="max-width: 900px;">
            <div class="card-body">
                <h3 class="card-title" style="text-align:center;">Inserisci un nuovo fumetto!</h5>

                <form>
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo:</label>
                        <input type="text" class="form-control" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">URL immagine:</label>
                        <input type="text" class="form-control" id="thumb">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione:</label>
                        <input type="text" class="form-control" id="description">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo:</label>
                        <input type="text" class="form-control" id="price">
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Serie:</label>
                        <input type="text" class="form-control" id="series">
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data:</label>
                        <input type="text" class="form-control" id="sale_date">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo:</label>
                        <input type="text" class="form-control" id="type">
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