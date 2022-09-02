@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Post Category : {{ $category }}</h1>
    @foreach ($posts as $post)
    <article class="border-bottom pb-3">
        <h2 class="mt-3"><a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>
        <p>By <a href="/author/{{ $post->user->username}}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/category/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        <p>{{ $post->excerpt }} <a href="/posts/{{ $post->slug }}" class="text-decoration-none"><i>read more...</i></a></p>
    </article>
    @endforeach

    <a href="/blog" class="mb-5">Back to Posts</a>
@endsection

    
