@extends('layouts.app')

@section('content')
    <h1>Todos</h1>

    @if (count($todos) > 0)
        @foreach ($todos as $todo)
            <div class="card">
                <h3>
                    <a href="todo/{{$todo->id}}">
                        {{$todo->text}}
                    </a>
                </h3>
                <p>
                    {{$todo->due}}
                </p>
            </div>
        @endforeach
    @endif
@endsection

