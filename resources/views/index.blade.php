@extends('layout')

@section('content')

    <div class="text-right">
        <a href="{{ route('create') }}" class="btn btn-outline-secondary btn-sm mt-4">メモを作成</a>
    </div>

    @foreach ($comics as $comic)
    <div>
        <span> {{ $comic->content }}</span>
    </div>
    @endforeach

@endsection
