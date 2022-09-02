@extends('layouts.main')
{{-- justify-content-center --}}
@section('container')
    <div class="container">
        <div class="row  mb-5">
            <div class="col-md-8 mb-4 ">
                <h2 class="mb-3">{{ $post->title }}</h2>

                <p>By <a href="/blog?user={{ $post->user->username}}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="" class="img-fluid">
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

                <a href="/blog" class="mb-3">Back to Posts</a>

            </div>
            <div class="col-md-3 pr-4">
                <h3>All Categories</h3>
                <ul>
                    @foreach ($categories as $category)
                    <li><a href="/blog?category={{ $category->slug }}" class="text-decoration-none text-dark">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>


@endsection

    
