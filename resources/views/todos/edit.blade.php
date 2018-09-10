@extends('layouts/app')

@section('content')

    <a class="btn btn-default" href="/todo/{{$todo->id}}">Go back</a>

    <h1>Edit todo</h1>
    {!! Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'put']) !!}
        {{ Form::bsText('text', $todo->text) }}
        {{ Form::bsTextArea('body', $todo->body) }}
        {{ Form::bsText('due', $todo->due) }}
        {{ Form::hidden('_method', 'put') }}
        {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection