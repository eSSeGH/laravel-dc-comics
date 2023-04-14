@extends('layouts.app')

@section('main-content')
<main>

<div class="container">

    <div class="card mx-auto mt-5" style="width: 400px;">
        <img src="{{$comic['thumb']}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h3 class="card-title">{{$comic['title']}}</h5>
            <h4 class="card-text">Descrizione: 
                <p style="font-size: 0.8rem;">{{ $comic['description']}}</p>
            </h4>
            <h4 class="card-text">Prezzo: 
                <span style="font-size: 0.8rem;">{{ $comic['price'] }} $</span>
            </h4>
            <h4 class="card-text">Serie: 
                <span style="font-size: 0.8rem;">{{ $comic['series'] }}</span>
            </h4>
            <h4 class="card-text">Data: 
                <span style="font-size: 0.8rem;">{{ $comic['sale_date'] }}</span>
            </h4>
            <h4 class="card-text">Tipo: 
                <span style="font-size: 0.8rem;">{{ $comic['type'] }}</span>
            </h4>
            <a href="" class="btn btn-primary">Acquista</a>
        </div>
    </div>

</div>

</main>
@endsection

@section('page-title', $comic->title)