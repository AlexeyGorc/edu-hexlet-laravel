@extends('layouts.app')

@section('content')
    <h1>{{ $articles->name }}</h1>
    <div>{{ $articles->body }}</div>
@endsection