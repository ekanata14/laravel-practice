<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Blog::where('user_id', auth()->user()->id)->get();
        return view('dashboard.blog.index', [
            'blogs' => Blog::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.blog.create',[
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // return $request->file('image')->store('image');

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:blogs',
            'image' => 'image|file|max:1024',
            'category_id' => 'required',
            'body' => 'required'
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('image');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Blog::create($validatedData);

        return redirect('dashboard/blog')->with('success', 'New post has been added');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('dashboard.blog.show',[
            'blog' => $blog,
            
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('dashboard.blog.edit', [
            'blog' => $blog,
            'categories' => Category::all()
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ];

        if($request->slug != $blog->slug){
            $rules['slug'] = 'required|unique:blogs';
        }

        
        $validatedData = $request->validate($rules);
        
        if($request->file('image')){
            Storage::delete($request->oldImage);
            $validatedData['image'] = $request->file('image')->store('image');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Blog::where('id', $blog->id)->update($validatedData);

        return redirect('dashboard/blog')->with('success', 'The blog has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        if($blog->image) {
            Storage::delete($blog->image);
        }
        Blog::destroy($blog->id);
        return redirect('dashboard/blog')->with('success', 'The post has been deleted');
    }

    public function checkSlug(Request $request){
        $slug = \Cviebrock\EloquentSluggable\Services\SlugService::createSlug(Blog::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
