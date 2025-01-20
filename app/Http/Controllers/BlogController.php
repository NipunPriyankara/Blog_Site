<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string|max:100',
            'tags' => 'nullable|string',
        ]);

        Blog::create([
            'title' => $request->title,
            'content' => $request->content,
            'author' => $request->author,
            'tags' => $request->tags,
        ]);
        return "Blog post added successfully!";
        return redirect()->route('newblog')->with('success', 'Blog post added successfully!');
        
    }
}
