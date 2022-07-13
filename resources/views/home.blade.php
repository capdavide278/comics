@extends('templates.base')

@section('pageTitle', 'Fumetti - Home')

@section('pageMain')

    <main>
        <ul>
            @foreach ($arrComics as $comics)
                <li>{{$comics['title']}}</li>
            @endforeach
        </ul>
    </main>

@endsection