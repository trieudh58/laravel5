@extends('app')

@section('content')

    <h1>About me:</h1>
    <h3>Activities I like:</h3>

    @if (count($people))
        <ul>
            @foreach($people as $person)
                <li>
                    {!!$person!!}
                </li>
            @endforeach
        </ul>
    @endif

    <p>There's nothing to say about me. I'm just ridiculous</p>

@stop