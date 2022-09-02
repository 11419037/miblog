@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Post Categories</h1>

    <div class="container">
        <div class="row">
            
        @foreach ($categories as $category)

            <div class="col-md-4">
                
            <a href="/blog?category={{ $category->slug }}" class="text-decoration-none text-white">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                        <h5 class="card-title text-center flex-fill p-4 fs-4" style="background-color : rgba(0,0,0,0.5)">{{ $category->name }}</h5>
                    </div>
                </div>
            </a>
            </div>
        @endforeach
        </div>
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
    
