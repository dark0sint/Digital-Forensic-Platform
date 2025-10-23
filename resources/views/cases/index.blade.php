@extends('layouts.app')

@section('content')
    <h1>Information Updates</h1>
    <a href="#" class="btn btn-primary mb-3">Add New Update</a>
    @foreach($cases as $case)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $case['title'] ?? 'No Title' }}</h5>
                <p class="card-text">{{ $case['description'] ?? 'No Description' }}</p>
            </div>
        </div>
    @endforeach
@endsection
