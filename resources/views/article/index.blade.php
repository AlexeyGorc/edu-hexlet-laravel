@extends('layouts.app')
@section('title', 'Статьи')
@section('content')
    <h1>Список статей</h1>
    @foreach ($articles as $article)
        <h2><a href="{{ route('articles.show', $article->id) }}">{{ $article->name }}</a></h2>
        <div>{{ Str::limit($article->body, 200) }}</div>
        <div><a href="{{ route('articles.edit', $article->id) }}">Edit</a></div>
    @endforeach
@endsection