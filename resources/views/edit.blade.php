@extends('layout')

@section('content')

    <form method="POST" action="">
        @csrf

        <textarea name="content" rows="4">{{$comic->content}}</textarea>

        <button type="submit">更新</button>
        <a href="{{ route('index') }}">キャンセル</a>

    </form>    

@endsection
