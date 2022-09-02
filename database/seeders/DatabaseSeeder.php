<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        Post::factory(15)->create();
            // Post::create([
            //     'title' => 'Judul Pertama',
            //     'user_id' => 1,
            //     'category_id' => 1,
            //     'slug' => 'judul-pertama',
            //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur judul pertama',
            //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum voluptate, nostrum minima porro inventore dolor fugiat totam cupiditate cumque enim doloribus ipsam facere temporibus nam dignissimos quia ullam, nulla ad, reiciendis tempore laudantium quibusdam! Eos ea veritatis quidem provident doloremque est, odit eligendi eum qui voluptatibus neque repellendus ipsa, voluptate ratione iste?</p><p> Iusto, enim expedita! Placeat, repudiandae. Necessitatibus tenetur, voluptas quia nobis id inventore est! Quidem animi harum facere incidunt consectetur eum asperiores libero qui hic, corrupti, veniam doloremque ratione dignissimos eligendi quia ipsa labore cupiditate quasi. Numquam itaque ipsa magni esse recusandae nostrum, quos sapiente porro facilis explicabo saepe eveniet vitae maiores commodi odio. Laudantium quo necessitatibus atque quaerat corrupti. Consequatur quis voluptates temporibus et repudiandae doloribus? Quae, nostrum.</p>'
            // ]);
            // Post::create([
            //     'title' => 'Judul Kedua',
            //     'user_id' => 1,
            //     'category_id' => 2,
            //     'slug' => 'judul-kedua',
            //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur judul kedua',
            //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum voluptate, nostrum minima porro inventore dolor fugiat totam cupiditate cumque enim doloribus ipsam facere temporibus nam dignissimos quia ullam, nulla ad, reiciendis tempore laudantium quibusdam! Eos ea veritatis quidem provident doloremque est, odit eligendi eum qui voluptatibus neque repellendus ipsa, voluptate ratione iste?</p><p> Iusto, enim expedita! Placeat, repudiandae. Necessitatibus tenetur, voluptas quia nobis id inventore est! Quidem animi harum facere incidunt consectetur eum asperiores libero qui hic, corrupti, veniam doloremque ratione dignissimos eligendi quia ipsa labore cupiditate quasi. Numquam itaque ipsa magni esse recusandae nostrum, quos sapiente porro facilis explicabo saepe eveniet vitae maiores commodi odio. Laudantium quo necessitatibus atque quaerat corrupti. Consequatur quis voluptates temporibus et repudiandae doloribus? Quae, nostrum.</p>'
            // ]);
            // Post::create([
            //     'title' => 'Judul Ketiga',
            //     'user_id' => 2,
            //     'category_id' => 1,
            //     'slug' => 'judul-ketiga',
            //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur judul ketiga',
            //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum voluptate, nostrum minima porro inventore dolor fugiat totam cupiditate cumque enim doloribus ipsam facere temporibus nam dignissimos quia ullam, nulla ad, reiciendis tempore laudantium quibusdam! Eos ea veritatis quidem provident doloremque est, odit eligendi eum qui voluptatibus neque repellendus ipsa, voluptate ratione iste?</p><p> Iusto, enim expedita! Placeat, repudiandae. Necessitatibus tenetur, voluptas quia nobis id inventore est! Quidem animi harum facere incidunt consectetur eum asperiores libero qui hic, corrupti, veniam doloremque ratione dignissimos eligendi quia ipsa labore cupiditate quasi. Numquam itaque ipsa magni esse recusandae nostrum, quos sapiente porro facilis explicabo saepe eveniet vitae maiores commodi odio. Laudantium quo necessitatibus atque quaerat corrupti. Consequatur quis voluptates temporibus et repudiandae doloribus? Quae, nostrum.</p>'
            // ]);
            
            Category::create([
                'name' => 'Travel',
                'slug' => 'travel'
            ]);
            Category::create([
                'name' => 'Food',
                'slug' => 'food'
            ]);
            Category::create([
                'name' => 'Humor',
                'slug' => 'humor'
            ]);

    }
}
