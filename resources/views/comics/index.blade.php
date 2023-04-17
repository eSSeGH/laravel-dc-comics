@extends('layouts.app')

@section('main-content')
<main>

<div class="black-section">

    <div class="container">

        <table class="table">
            <thead>
            <tr>
                <th scope="col">Immagine</th>
                <th scope="col">Titolo</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Serie</th>
                <th scope="col">Data</th>
                <th scope="col">Tipo</th>
            </tr>
            </thead>
            <tbody>

                @foreach($comics as $comic)
                <tr>
                    <td>
                        <img style="max-width: 150px;" src="{{ $comic->thumb }}" alt="">
                    </td>
                    <td>
                        {{ $comic->title }} <br>
                        <a href="{{ route('comics.show', $comic->id) }}">Vai al fumetto</a>
                    </td>
                    <td style="max-height: 50px; overflow-y: scroll;">{{ $comic->description }}</td>
                    <td>{{ $comic->price }} $</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->sale_date }}</td>
                    <td>{{ $comic->type }}</td>
                    <td>
                        <a href="{{ route('comics.edit', $comic) }}" class="btn btn-secondary btn-sm">MODIFICA</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</div>

</main>
@endsection

@section('page-title', $page_title)