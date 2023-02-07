<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use PhpParser\Node\Stmt\Catch_;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Post::truncate();
        Category::truncate();

        Post::factory(5)->create();

         // $user = User::factory()->create();

         // $personal = Category::create([
         //    'name'=>'Personal',
         //    'slug'=>'personal'
         // ]);

         // $family = Category::create([
         //    'name'=>'Family',
         //    'slug'=>'family'
         // ]);

         // $work = Category::create([
         //    'name'=>'Work',
         //    'slug'=>'work'
         // ]);

         // Post::create([
         //    'user_id'=>$user->id,
         //    'category_id'=>$family->id,
         //    'title' => 'My Family Post',
         //    'slug' => 'my-first-post',
         //    'excerpt'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
         //    'body'=>'    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
         // ]);

         // Post::create([
         //    'user_id'=>$user->id,
         //    'category_id'=>$work->id,
         //    'title' => 'My Work Post',
         //    'slug' => 'my-second-post',
         //    'excerpt'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
         //    'body'=>'    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
         // ]);

         // Post::create([
         //    'user_id'=>$user->id,
         //    'category_id'=>$personal->id,
         //    'title' => 'My Personal Post',
         //    'slug' => 'my-personal-post',
         //    'excerpt'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
         //    'body'=>'    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
         // ]);
    }
}
