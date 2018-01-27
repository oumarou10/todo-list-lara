@extends('layouts.app')

@section('title', 'Index')

@section('content')
    @if(count($todos))
        @foreach($todos as $todo)
            <div class="well">
                <h3>{{ $todo->text }}</h3>
                <p> {{ $todo->body }} </p>
                <span class="abel label-danger">{{ $todo->due }} </span>
            </div>
        @endforeach
    @endif
@endsection