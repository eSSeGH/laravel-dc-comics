@extends('layouts.app')

@section('main-content')
<main>

<div class="black-section">

    <div class="container">

        <div class="row">

            {{-- @foreach($comics as $comic)
            <div class="col">

                <div class="card">
                    <img src="{{ Vite::asset('$comic[thumb]') }}" alt="">
                    <span>{{ $comic['title'] }}</span>
                </div>

            </div>
            @endforeach --}}

        </div>

    </div>

</div>

</main>
@endsection

@section('page-title', $page_title)