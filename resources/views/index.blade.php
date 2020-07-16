@extends('layout')

@section('content')

    <div class="text-right">
        <a href="{{ route('create') }}" class="btn btn-outline-secondary btn-sm mt-4">メモを作成</a>
    </div>

    @foreach ($comics as $comic)
    <div>
        <span> {{ $comic->content }}</span>
        <a href="{{ route('edit', ['id'=> $comic->id]) }}" >編集</a>
        <a href="{{ route('delete', ['id'=>$comic->id])}}" >削除</a>
    </div>
    @endforeach

@endsection
