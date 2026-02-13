@extends('layouts.app')

@section('title', 'Blog - Tazua')
@section('meta_description',
    'Read the latest articles and insights from Tazua. Discover stories about creators,
    technology, and the platform.')

@section('content')
    <div id="hero-section" class="hero-section division" style="background: white; padding-top: 120px; padding-bottom: 80px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="hero-txt text-center">
                        <h1 class="hero-title">Our Blog</h1>
                        <p class="hero-subtitle">Discover stories, insights, and updates from the Tazua community</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BLOG LISTING SECTION -->
    <section id="blog-listing" class="blog-listing section-padding">
        <div class="container">

            @if ($blogs->count() > 0)
                <div class="row">
                    @foreach ($blogs as $blog)
                        <div class="col-md-6 col-lg-4 d-flex">
                            <div class="blog-post m-bottom-50 d-flex flex-column w-100">
                                <!-- Blog Image -->
                                @if ($blog->thumbnail)
                                    <div class="blog-post-img">
                                        <img src="{{ asset('storage/' . $blog->thumbnail) }}" alt="{{ $blog->title }}"
                                            class="img-fluid">
                                    </div>
                                @endif

                                <!-- Blog Post Content -->
                                <div class="blog-post-txt flex-grow-1 d-flex flex-column">

                                    <!-- Blog Title -->
                                    <h4 class="blog-post-title">
                                        <a href="{{ route('blogs.show', $blog->slug) }}">{{ $blog->title }}</a>
                                    </h4>

                                    <!-- Blog Date -->
                                    <div class="blog-post-date">
                                        <span class="blog-meta-date">{{ $blog->formatted_published_date }}</span>
                                    </div>

                                    <!-- Blog Excerpt -->
                                    <div class="blog-post-excerpt-container flex-grow-1">
                                        @if ($blog->excerpt)
                                            <p class="blog-post-excerpt">{{ Str::limit($blog->excerpt, 150) }}</p>
                                        @else
                                            <p class="blog-post-excerpt">{{ Str::limit(strip_tags($blog->content), 150) }}
                                            </p>
                                        @endif
                                    </div>

                                    <!-- Read More -->
                                    <a href="{{ route('blogs.show', $blog->slug) }}" class="read-more-link mt-auto">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-pagination text-center">
                            {{ $blogs->links() }}
                        </div>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="text-center">
                            <h3>No blog posts found</h3>
                            <p>Check back later for new content!</p>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </section>
@endsection

@push('styles')
    <style>
        /* Fix navigation text color for blog index page */
        .navbar-dark .navbar-nav .nav-link {
            color: #333 !important;
        }

        .navbar-dark .navbar-nav .nav-link:hover {
            color: #667eea !important;
        }

        .navbar-dark .navbar-brand {
            color: #333 !important;
        }

        .navbar-toggler {
            border-color: #333 !important;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%2833, 37, 41, 0.75%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='m4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e") !important;
        }

        .hero-section {
            position: relative;
            color: #333;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: #333;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            color: #666;
        }

        .blog-listing {
            background-color: #f8f9fa;
        }

        .blog-post {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .blog-post:hover {
            transform: translateY(-5px);
        }

        .blog-post-img img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .blog-post-txt {
            padding: 30px 25px;
        }

        .blog-post-date {
            margin-bottom: 15px;
        }

        .blog-meta-date {
            color: #888;
            font-size: 14px;
        }

        .blog-post-title a {
            color: #333;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.3rem;
        }

        .blog-post-title a:hover {
            color: #667eea;
        }

        .blog-post-excerpt {
            color: #666;
            line-height: 1.6;
            margin: 15px 0;
        }

        .read-more-link {
            color: #667eea;
            font-weight: 600;
            text-decoration: none;
        }

        .read-more-link:hover {
            text-decoration: underline;
        }
    </style>
@endpush
