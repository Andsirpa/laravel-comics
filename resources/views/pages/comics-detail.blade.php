@extends('layouts.app')

@section('page-title', 'Comics')

@section('main-content')
    <div class="container">
        <h1>Comics</h1>

        <div class="row">
            <div class="col-2">
                <img src="{{ $comic['thumb'] }}" alt="" class="img-fluid comic-thumb">
                <h2>{{ $comic['series'] }}</h2>

            </div>


        </div>
    </div>
@endsection
