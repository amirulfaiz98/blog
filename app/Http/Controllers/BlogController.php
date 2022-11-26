<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        //method 1

        // $blog = new Blog();
        // $blog->title = $request->title;
        // $blog->content = $request->content;
        // $blog->save();

        //method 2

        // Blog::create($request->only('title', 'content'));

        //method 3

        auth()->user()->blogs()->create($request->only('title', 'content'));

        return redirect()->route('blogs.index');
    }

    public function show(Blog $blog)
    {
        return view('blogs.show', compact('blog'));
    }
}
