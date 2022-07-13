@extends('templates.base')

@section('pageTitle', 'Fumetti - Home')

@section('pageMain')

    <main>
        <ul>
            @foreach ($arrComics as $comics)
                <li>
                    <img src="{{$comics['thumb']}}">
                    <div>
                        {{$comics['title']}}
                    </div>
                </li>
            @endforeach
        </ul>
    </main>

@endsection