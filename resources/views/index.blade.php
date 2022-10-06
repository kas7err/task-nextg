@extends('layouts.app')

@section('content')
    <div class="content">
        <h1>Stack</h1>
        @foreach ($words as $word)
        <p>{{$word->value}}</p>
        @endforeach
    </div>
    <form method="POST" action="/stack/add">
        @csrf
        <input type="text" name="value" id="">
        <button>Push</button>
    </form>
    <form method="GET" action="/stack/get">
        @csrf
        <button>Pull</button>
    </form>
@endsection
