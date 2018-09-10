@extends('layouts.app')

@section('content')
    <h1>Todos</h1>

    @if (count($todos) > 0)
        @foreach ($todos as $todo)
            <div class="card">
                <h3>
                    {{$todo->text}}
                </h3>
                <p class="label label-danger">
                    {{$todo->due}}
                </p>
            </div>
        @endforeach
    @endif
@endsection

