@extends('layouts.app')

@section('title', 'Help Center')

@section('content')
<div class="hero">
    <h1><b>Help Center Application</b></h1>
    <p>Hello!! Welcome to this page. </p>
    <p>Owner of this application: Afroz Shaik</p>
    <p>Contact: afrozshaik.devops@Gmail.com</p>
    <p>This application will later be containerized and deployed to Kubernetes.</p>
</div>

<h2>Categories</h2>

<div class="grid">
    @foreach ($categories as $key => $category)
        <div class="card">
            <h3>
                <a href="{{ route('category', $key) }}">
                    {{ $category['name'] }}
                </a>
            </h3>
            <p>{{ $category['description'] }}</p>
        </div>
    @endforeach
</div>

<h2 style="margin-top: 35px;">Articles</h2>

<div class="grid">
    @foreach ($articles as $article)
        <div class="card">
            <h3>
                <a href="{{ route('article', $article['slug']) }}">
                    {{ $article['title'] }}
                </a>
            </h3>
            <p>{{ $article['content'] }}</p>
        </div>
    @endforeach
</div>
@endsection
