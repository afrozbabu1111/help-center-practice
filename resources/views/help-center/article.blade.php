@extends('layouts.app')

@section('title', $article['title'])

@section('content')
<a class="back" href="{{ route('home') }}">← Back to Help Center</a>

<div class="hero">
    <h1>{{ $article['title'] }}</h1>
</div>

<div class="article-content">
    <p>{{ $article['content'] }}</p>
</div>
@endsection
