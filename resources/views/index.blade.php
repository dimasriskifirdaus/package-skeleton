@extends('package-skeleton::layouts.app')

@section('content')
    <h1>Articles</h1>
    <a href="{{ route('articles.create') }}" class="add-article">Add New Article</a>
    <ul class="article-list">
        @foreach ($articles as $article)
            <li class="article-item">
                <a href="{{ route('articles.show', $article) }}" class="article-title">
                    {{ $article->title }}
                </a>
                <p class="article-content">
                    {{ Str::limit($article->content, 200) }}
                </p>
            </li>
        @endforeach
    </ul>
@endsection