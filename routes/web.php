<?php

use App\Models\Category;
use App\Models\Post;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Block\Element\Document;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;

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

    return view('posts', [
        'posts' => Post::with('category')->get()
    ]);
});



Route::get('posts/{post}', function (Post $post) {

    // find a post by its slug and pass it to the view
    return view('post', [
        'post' => ($post)
    ]);
});

Route::get('categories/{category}', function(Category $category){
    return view('posts', [
        'posts' => $category->posts
    ]);
});
