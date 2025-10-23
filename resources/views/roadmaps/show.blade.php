@extends('layouts.app')

@section('content')
    <h1>Case Investigation Roadmap</h1>
    <ul class="list-group">
        @foreach($roadmap->steps as $step)
            <li class="list-group-item">{{ $step }}</li>
        @endforeach
    </ul>
@endsection
