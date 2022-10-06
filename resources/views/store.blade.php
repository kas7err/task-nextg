@extends('layouts.app')

@section('content')

@if (count($keysList) > 0)
    <h2>We have {{count($keysList)}} stored items:</h2>
    <div class="list">
        @foreach ($keysList as $key)
            <a style="font-size:25px;color:white;" href="/store/{{$key}}" >{{$key}}</a> - <a  style="font-size:25px;color:red;"href="/store/delete/{{$key}}">delete</a> <br>
        @endforeach
    </div>
@else
    <h2>We dont have any items in Store!</h2>
@endif

<form method="POST" action="/store">
    @csrf
    <label for="key">Key: </label>
    <input type="text" name="key" id="">
    <label for="value">Value: </label>
    <input type="text" name="value" id="">
    <label for="expires_at">Expires At: </label>
    <input type="number" name="expires_at" id="">
    <button>Create</button>
</form>

@endsection
