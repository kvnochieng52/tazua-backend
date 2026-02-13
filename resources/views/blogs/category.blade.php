@extends('layouts.app')

@section('title', 'Category: ' . ucfirst($category) . ' - Blog - Tazua')
@section('meta_description', 'Browse articles in the ' . $category . ' category on Tazua blog.')

@section('content')
    <div id="hero-section" class="hero-section division"
        style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding-top: 120px; padding-bottom: 80px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="hero-txt text-center white-color">
                        <h1 class="hero-title">{{ ucfirst($category) }}</h1>
                        <p class="hero-subtitle">Browse articles in the {{ $category }} category</p>
                        <a href="{{ route('blogs.index') }}" class="btn btn-outline-light">← Back to All Posts</a>
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
                        <div class="col-md-6 col-lg-4">
                            <div class="blog-post m-bottom-50">

                                <!-- Blog Image -->
                                @if ($blog->thumbnail)
                                    <div class="blog-post-img">
                                        <img src="{{ asset('storage/' . $blog->thumbnail) }}" alt="{{ $blog->title }}"
                                            class="img-fluid">
                                    </div>
                                @endif

                                <!-- Blog Post Content -->
                                <div class="blog-post-txt">

                                    <!-- Blog Meta -->
                                    <div class="blog-post-meta">
                                        <span class="blog-meta-category">{{ ucfirst($blog->category) }}</span>
                                        <span class="blog-meta-date">{{ $blog->formatted_published_date }}</span>
                                    </div>

                                    <!-- Blog Title -->
                                    <h4 class="blog-post-title">
                                        <a href="{{ route('blogs.show', $blog->slug) }}">{{ $blog->title }}</a>
                                    </h4>

                                    <!-- Blog Excerpt -->
                                    @if ($blog->excerpt)
                                        <p class="blog-post-excerpt">{{ Str::limit($blog->excerpt, 150) }}</p>
                                    @else
                                        <p class="blog-post-excerpt">{{ Str::limit(strip_tags($blog->content), 150) }}</p>
                                    @endif

                                    <!-- Read More -->
                                    <a href="{{ route('blogs.show', $blog->slug) }}" class="read-more-link">Read More</a>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-pagination text-center">
                            {{ $blogs->appends(['category' => $category])->links() }}
                        </div>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="text-center">
                            <h3>No blog posts found in this category</h3>
                            <p>Check back later for new content or browse all posts!</p>
                            <a href="{{ route('blogs.index') }}" class="btn btn-primary">View All Posts</a>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </section>
@endsection

@push('styles')
    <style>
        .hero-section {
            position: relative;
            color: white;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
            margin-bottom: 30px;
        }

        .btn-outline-light {
            border: 2px solid white;
            color: white;
            padding: 10px 25px;
            font-weight: 600;
        }

        .btn-outline-light:hover {
            background: white;
            color: #667eea;
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

        .blog-post-meta {
            margin-bottom: 15px;
        }

        .blog-meta-category {
            background: #667eea;
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            margin-right: 10px;
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
