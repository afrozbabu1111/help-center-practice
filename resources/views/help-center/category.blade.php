@extends('layouts.app')

@section('title', $category['name'])

@section('content')
<a class="back" href="{{ route('home') }}">← Back to Help Center</a>

<div class="hero">
    <h1>{{ $category['name'] }}</h1>
    <p>{{ $category['description'] }}</p>
</div>

<h2>Articles</h2>

<div class="grid">
    @forelse ($articles as $article)
        <div class="card">
            <h3>
                <a href="{{ route('article', $article['slug']) }}">
                    {{ $article['title'] }}
                </a>
            </h3>
            <p>{{ $article['content'] }}</p>
        </div>
    @empty
        <p>No articles found.</p>
    @endforelse
</div>
@endsection
