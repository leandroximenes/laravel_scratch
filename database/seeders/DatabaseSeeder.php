<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application"s database.
     *
     * @return void
     */
    public function run()
    {
        # CLEAN ALL TABLES
        User::truncate();
        Post::truncate();
        Category::truncate();
        $user = User::factory()->create();
        $user2 = User::factory()->create([
            'name' => "John Doe",
            'username' => "picaDasGalaxias"
        ]);

        $personal = Category::create([
            "name" => "Personal",
            "slug" => "personal"
        ]);

        $family = Category::create([
            "name" => "Family",
            "slug" => "family"
        ]);
        $work = Category::create([
            "name" => "Work",
            "slug" => "work"
        ]);

        Post::factory(5)->create([
            "user_id" => $user2->id
        ]);

        Post::create([
            "user_id" => $user->id,
            "category_id" => $personal->id,
            "title" => "My first Post",
            "slug" => "my_first_post",
            "excerpt" => "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>",
            "body" => "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, 
                        when an unknown printer took a galley of type and scrambled it to make a type 
                        specimen book. It has survived not only five centuries, but also the leap 
                        into electronic typesetting, remaining essentially unchanged. It was 
                        popularised in the 1960s with the release of Letraset sheets containing Lorem 
                        Ipsum passages, and more recently with desktop publishing software like Aldus 
                        PageMaker including versions of Lorem Ipsum.</p>"

        ]);
        Post::create([
            "user_id" => $user->id,
            "category_id" => $personal->id,
            "title" => "My second Post",
            "slug" => "my_second_post",
            "excerpt" => "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>",
            "body" => "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, 
                        when an unknown printer took a galley of type and scrambled it to make a type 
                        specimen book. It has survived not only five centuries, but also the leap 
                        into electronic typesetting, remaining essentially unchanged. It was 
                        popularised in the 1960s with the release of Letraset sheets containing Lorem 
                        Ipsum passages, and more recently with desktop publishing software like Aldus 
                        PageMaker including versions of Lorem Ipsum.</p>"

        ]);
    }
}
