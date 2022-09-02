@extends('dashboard.layouts.main')
@section('container')
    <div class="container">
        <div class="row  mb-5 mt-3">
            <div class="col-md-12 mb-4 ">
                <h2 class="mb-3">{{ $post->title }}</h2>

                <p>By {{ $post->user->name }} in {{ $post->category->name }}</p>

                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to my all posts</a>
                <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <a href="" class="btn btn-danger"><span data-feather="trash"></span> Delete</a>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="" class="img-fluid mt-3">
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>

@endsection