<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of published blogs.
     */
    public function index()
    {
        $blogs = Blog::published()
            ->orderBy('published_at', 'desc')
            ->paginate(12);

        return view('blogs.index', compact('blogs'));
    }

    /**
     * Display the specified blog post.
     */
    public function show(Blog $blog)
    {
        // Ensure the blog is published
        if (!$blog->is_published) {
            abort(404);
        }

        return view('blogs.show', compact('blog'));
    }

    /**
     * Display blogs by category.
     */
    public function category($category)
    {
        $blogs = Blog::published()
            ->where('category', $category)
            ->orderBy('published_at', 'desc')
            ->paginate(12);

        return view('blogs.category', compact('blogs', 'category'));
    }
}
