@extends('templates.base')

@section('pageTitle', 'Fumetti - Homepage')

@section('pageMain')

    <main>
        <ul>
            @foreach ($comics as $comic)
                <li>
                    <a href="{{ route('prodotto', ['series' => $comic['series']]) }}">
                    <img src="{{$comic['thumb']}}">
                    <div>
                        {{$comic['title']}}
                    </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </main>

@endsection