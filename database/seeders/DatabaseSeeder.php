<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Category;
use \App\Models\Post;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        //User::create([
        //'name' => 'Agung Ramadhan',
        //'email' => 'agung@gmail.com',
        //'password' => bcrypt('12345'),
        //]);

        //User::create([
        //'name' => 'Anita Amelia',
        //'email' => 'anita@gmail.com',
        //'password' => bcrypt('12345'),
        //]);

        User::factory(3)->create();

        Category::create([
            'name' => 'web programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'web design',
            'slug' => 'web-design',
        ]);

        Category::create([
            'name' => 'personal',
            'slug' => 'personal',
        ]);

        Post::factory(20)->create();

        //post::create([
        //'title' => 'judul pertama',
        //'slug' => 'judul-pertama',
        //'excerpt' => 'Lorem Ipsum is simply dummy text of the printing  unchanged. It was popularised .',
        //'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys
        //standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
        //specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially
        //unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, including versions of Lorem Ipsum.',
        //'category_id' => 1,
        //'user_id' => 1,
        //]);

        //post::create([
        //'title' => 'judul kedua',
        //'slug' => 'judul-kedua',
        //'excerpt' => 'Lorem Ipsum is simply dummy text of the printing  unchanged. It was popularised .',
        //'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys
        //standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
        //specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially
        //unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, including versions of Lorem Ipsum.',
        //'category_id' => 1,
        //'user_id' => 1,
        //]);

        //post::create([
        //'title' => 'judul tiga',
        //'slug' => 'judul-tiga',
        //'excerpt' => 'Lorem Ipsum is simply dummy text of the printing  unchanged. It was popularised .',
        //'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys
        //standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
        //specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially
        //unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, including versions of Lorem Ipsum.',
        //'category_id' => 2,
        //'user_id' => 1,
        //]);

        //post::create([
        //'title' => 'judul Empat',
        //'slug' => 'judul-Empat',
        //'excerpt' => 'Lorem Ipsum is simply dummy text of the printing  unchanged. It was popularised .',
        //'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys
        //standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
        //specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially
        //unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, including versions of Lorem Ipsum.',
        //'category_id' => 2,
        //'user_id' => 2,
        //]);
    }
}
