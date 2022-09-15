<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\userDataController;
use App\Models\Category;

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
        "title" => "Home"
    ]);
});

Route::get('/about', function(){
    return view("about", [
        "title" => "About",
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
        "categories" => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('category', [
        "title" => $category->name,
        "posts" => $category->blog,
        "category" => $category->name
    ]);
});
