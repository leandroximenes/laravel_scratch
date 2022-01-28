<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /* CLEAN ALL TABLES
        User::truncate();
        Category::truncate();
        Post::truncate();
        */

        $user = User::factory()->create([
            'name' => "John Stewart"
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id
        ]);

        Post::factory(5)->create(); // ONLY ANY 5 POSTS

        /*
        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => '<p>My first Post</p>',
            'slug' => 'my-first-post',
            'excerpt' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
            'body' => "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>."
        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => '<p>My Second Post</p>',
            'slug' => 'my-second-post',
            'excerpt' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
            'body' => "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>."
        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => '<p>My Third Post</p>',
            'slug' => 'my-third-post',
            'excerpt' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
            'body' => "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>."
        ]);
        */
    }
}
