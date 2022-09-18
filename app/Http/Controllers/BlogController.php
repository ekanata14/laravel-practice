<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;

class BlogController extends Controller
{
    public function index(){

        $title = '';
        $categoryReq = request('category');
        $authorReq = request('author');

        if($categoryReq){
            $category = Category::firstWhere('slug', $categoryReq); 
            $title = "in $category->name";
        }

        if($authorReq){
            $author = User::firstWhere('username', $authorReq);
            $title = "by $author->name";
        }

        return view("blog.blog", [
            "title" => "All Blogs $title",
            "active" => "blog",
            "posts" => Blog::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function singleBlog(Blog $blog){
        return view("blog.single-blog", [
            "title" => "Single Blog",
            "active" => "blog",
            "post" => $blog 
        ]);
    }

}
