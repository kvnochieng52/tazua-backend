<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class HomeController extends Controller
{
    /**
     * Display the homepage with latest blog posts.
     */
    public function index()
    {
        $latestBlogs = Blog::published()
            ->latest('published_at')
            ->take(3)
            ->get();

        return view('home', compact('latestBlogs'));
    }

    /**
     * Display the about page.
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Display the contact page.
     */
    public function contact()
    {
        return view('contact');
    }
}
