@extends('layouts.app')
@section('content')
    <h1>Information Updates</h1>
    @foreach($cases as $case)
        <div>{{ $case->title }} - {{ $case->description }}</div>
    @endforeach
@endsection
