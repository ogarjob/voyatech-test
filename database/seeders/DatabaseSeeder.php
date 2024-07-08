<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Blog;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         $user = User::factory()->create(['name' => 'Ogar Job', 'email' => 'ogarjob@gmail.com']);

         $personal  = Blog::factory()->create(['name' => 'Ogar Personal Blog']);
         $religious = Blog::factory()->create(['name' => 'Ogar Religious Blog']);

         Post::factory()->create([
             'user_id'  => $user->id,
             'blog_id'  => $personal->id,
             'title'    => 'My First Personal Blog Post',
             'excerpt'  => '<p> Lorem ipsum dolar sit amet. </p>',
             'body'     => '<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>'
         ]);

         Post::factory()->create([
             'user_id'  => $user->id,
             'blog_id'  => $religious->id,
             'title'    => 'My Religious Blog Post',
             'excerpt'  => '<p> Lorem ipsum dolar sit amet. </p>',
             'body'     => '<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>'
         ]);
    }
}
