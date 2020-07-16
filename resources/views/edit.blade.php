@extends('layout')

@section('content')

    <form method="POST" action="{{ route('update',['id'=>$comic->id])}}">
        
        @csrf

        <textarea name="content" rows="4">{{$comic->content}}</textarea>

        @if($errors->any())
            @foreach ($errors->all() as $error)
                <p class="text-right text-black-50">{{ $error }}</p>
            @endforeach
        @endif
        
        <button type="submit">更新</button>
        <a href="{{ route('index') }}">キャンセル</a>

    </form>    

@endsection
