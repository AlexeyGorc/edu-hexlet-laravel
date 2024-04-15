@extends('layouts.app')

@section('title', 'О блоге')

@section('content')
<h1>О блоге</h1>
<p>Эксперименты с Laravel на Хекслете</p>

@foreach ($team as $person)
    <p>{{ $person['name'] }}</p>
    <p>{{ $person['position'] }}</p>
@endforeach
@endsection