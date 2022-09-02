@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6 ">
            <form action="/blog">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">    
                @endif
                @if (request('user'))
                    <input type="hidden" name="user" value="{{ request('user') }}">    
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                    <button class="btn btn-dark" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-5">
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h5>
                <p class="card-text"> <small class="text-muted"> By <a href="/blog?user={{ $posts[0]->user->username }}" class="text-decoration-none">{{ $posts[0]->user->name }}</a> in <a href="/blog?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}</small></p>
                <p class="card-text">{{ $posts[0]->excerpt }}<a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none"><i> Read more...</i></a></p>
                
            </div>
        </div> 
    
        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="position-absolute px-4 py-1" style="background-color: rgba(0,0,0,0.5)"><a href="/blog?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name  }}</></a></div>
                            <img src="https://source.unsplash.com/400x400?{{ $post->category->name }}"  class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title"><a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a></h5>
                            <p class="card-text"> <small class="text-muted"> By <a href="/blog?user={{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> {{ $post->created_at->diffForHumans() }}</small></p>
                            <p class="card-text">{{ $post->excerpt }} <a href="/posts/{{ $post->slug }}" class="text-decoration-none"><i>Read more...</i></a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="">No post found</p>
    @endif

    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
    
@endsection


{{-- 
Post::create([
    'title' => 'Judul Pertama',
    'category_id' => 1,
    'slug' => 'judul-pertama',
    'excerpt' => 'Lorem ipsum dolor sit amet consectetur judul pertama',
    'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum voluptate, nostrum minima porro inventore dolor fugiat totam cupiditate cumque enim doloribus ipsam facere temporibus nam dignissimos quia ullam, nulla ad, reiciendis tempore laudantium quibusdam! Eos ea veritatis quidem provident doloremque est, odit eligendi eum qui voluptatibus neque repellendus ipsa, voluptate ratione iste?</p><p> Iusto, enim expedita! Placeat, repudiandae. Necessitatibus tenetur, voluptas quia nobis id inventore est! Quidem animi harum facere incidunt consectetur eum asperiores libero qui hic, corrupti, veniam doloremque ratione dignissimos eligendi quia ipsa labore cupiditate quasi. Numquam itaque ipsa magni esse recusandae nostrum, quos sapiente porro facilis explicabo saepe eveniet vitae maiores commodi odio. Laudantium quo necessitatibus atque quaerat corrupti. Consequatur quis voluptates temporibus et repudiandae doloribus? Quae, nostrum.</p>'
]) 
Post::create([
    'title' => 'Judul Kedua',
    'category_id' => 2,
    'slug' => 'judul-kedua',
    'excerpt' => 'Lorem ipsum dolor sit amet consectetur judul kedua',
    'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum voluptate, nostrum minima porro inventore dolor fugiat totam cupiditate cumque enim doloribus ipsam facere temporibus nam dignissimos quia ullam, nulla ad, reiciendis tempore laudantium quibusdam! Eos ea veritatis quidem provident doloremque est, odit eligendi eum qui voluptatibus neque repellendus ipsa, voluptate ratione iste?</p><p> Iusto, enim expedita! Placeat, repudiandae. Necessitatibus tenetur, voluptas quia nobis id inventore est! Quidem animi harum facere incidunt consectetur eum asperiores libero qui hic, corrupti, veniam doloremque ratione dignissimos eligendi quia ipsa labore cupiditate quasi. Numquam itaque ipsa magni esse recusandae nostrum, quos sapiente porro facilis explicabo saepe eveniet vitae maiores commodi odio. Laudantium quo necessitatibus atque quaerat corrupti. Consequatur quis voluptates temporibus et repudiandae doloribus? Quae, nostrum.</p>'
]) 
Post::create([
    'title' => 'Judul Ketiga',
    'category_id' => 1,
    'slug' => 'judul-ketiga',
    'excerpt' => 'Lorem ipsum dolor sit amet consectetur judul ketiga',
    'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum voluptate, nostrum minima porro inventore dolor fugiat totam cupiditate cumque enim doloribus ipsam facere temporibus nam dignissimos quia ullam, nulla ad, reiciendis tempore laudantium quibusdam! Eos ea veritatis quidem provident doloremque est, odit eligendi eum qui voluptatibus neque repellendus ipsa, voluptate ratione iste?</p><p> Iusto, enim expedita! Placeat, repudiandae. Necessitatibus tenetur, voluptas quia nobis id inventore est! Quidem animi harum facere incidunt consectetur eum asperiores libero qui hic, corrupti, veniam doloremque ratione dignissimos eligendi quia ipsa labore cupiditate quasi. Numquam itaque ipsa magni esse recusandae nostrum, quos sapiente porro facilis explicabo saepe eveniet vitae maiores commodi odio. Laudantium quo necessitatibus atque quaerat corrupti. Consequatur quis voluptates temporibus et repudiandae doloribus? Quae, nostrum.</p>'
])

Category::create([
    'name' => 'Travel',
    'slug' => 'travel'
])
Category::create([
    'name' => 'Food',
    'slug' => 'food'
])
Category::create([
    'name' => 'Humor',
    'slug' => 'humor'
])
--}}
    
