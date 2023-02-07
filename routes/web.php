<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Log\Logger;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    
    // // return ['foo'=> 'bar'];

    // $posts = array_map(function ($file) {
    //     $document =  YamlFrontMatter::parseFile($file);
    //     return new Post(
    //         $document->title,
    //         $document->excerpt,
    //         $document->date,
    //         $document->body(),
    //         $document->slug
    //     );
    // }, $files);
    // DB::listen(function ($query) {
    //     Logger($query->sql, $query->bindings);
    // });

    return view('posts', [
        // 'posts' => Post::all()
        'posts' => Post::latest('created_at')->get()
    ]);    
});

Route::get('posts/{post}', function(Post $post) {
    // Find a post by its slug and pass it to a view called 'post'
    
    return view('post', [
        //'post' => Post::findOrFail($post)
        'post' => $post
    ]);

    // return $slug;
 
});

Route::get('categories/{category:slug}', function (Category $category) {

    return view('posts', [
        'posts'=>$category->posts
    ]);
});

Route::get('authors/{author:username}', function (User $author) {

    //dd($author);
    
    return view('posts', [
        'posts'=>$author->posts
    ]);
});
