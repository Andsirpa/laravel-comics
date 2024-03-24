@extends('layouts.app')

@section('page-title', 'Comics')

@section('main-content')
    <div class="container">
        <h1>Comics</h1>

        <div class="row">
            {{-- recupero dall'oggetto le info che mi interessano (thumb e series) --}}
            @foreach ($comics as $index => $comic)
                <div class="col-2">
                    {{-- creo il link per il detail --}}
                    <a href="{{ route('comic-detail', [
                        'index' => $index,
                    ]) }}">
                        <img src="{{ $comic['thumb'] }}" alt="" class="img-fluid comic-thumb">
                    </a>
                    <h2>{{ $comic['series'] }}</h2>
                </div>
            @endforeach
        </div>
    </div>
@endsection
