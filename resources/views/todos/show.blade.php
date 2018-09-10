@extends('layouts.app')

@section('content')

    <a href="/" class="btn btn-default">Go back</a>
    <h1>{{$todo->text}}</h1>
    <p>{{$todo->body}}</p>

    <br>
    <br>
    <a href="/todo/{{$todo->id}}/edit" class="btn btn-default">Edit</a>
@endsection