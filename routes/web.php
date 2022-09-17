<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\userDataController;
use App\Models\Category;
use App\Models\User;

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
    return view("home", [
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function(){
    return view("about", [
        "title" => "About",
        "active" => "about",
        "name" => "Eka Nata",
        "email" => "ekanata1411@gmail.com",
        "image" => "pict-1.jpg"
    ]);
});

Route::get("/blog", [BlogController::class, "index"]);

Route::get('/user', [userDataController::class, "index"]);

Route::get('/user/{user:user_slug}', [userDataController::class, "detail"]);

Route::get('/blog/{blog:slug}', [BlogController::class, "singleBlog"]);

Route::get('/categories', function(){
    return view('categories', [
        "title" => "Post Categories",
        "active" => "categories",
        "categories" => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('blog', [
        "title" => "Post By Category : $category->name",
        "active" => "categories",
        "posts" => $category->blog->load('category', 'author')
    ]);
});

Route::get('/author/{author:username}', function(User $author){
    return view('blog', [
        "title" => "Author Posts : $author->name",
        "active" => "author",
        "posts" => $author->blog->load('category', 'author')
    ]);
});
