@extends('layout')

@section('content')

    @foreach ($comics as $comic)
    <div>
        <span> {{ $comic->content }}</span>
    </div>
    @endforeach

@endsection
