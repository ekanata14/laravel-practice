<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(){
        return view("blog", [
            "title" => "All Blogs",
            "active" => "blog",
            "posts" => Blog::latest()->get()
        ]);
    }

    public function singleBlog(Blog $blog){
        return view("single-blog", [
            "title" => "Single Blog",
            "active" => "blog",
            "post" => $blog 
        ]);
    }

}
