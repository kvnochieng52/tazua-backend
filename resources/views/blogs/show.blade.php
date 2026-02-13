@extends('layouts.app')

@section('title', $blog->meta_title ?: $blog->title . ' - Tazua')
@section('meta_description', $blog->meta_description ?: ($blog->excerpt ?: Str::limit(strip_tags($blog->content), 160)))

@section('content')
    <!-- BLOG HERO SECTION -->
    <div id="blog-hero" class="blog-hero-section division"
        style="background: white; padding-top: 120px; padding-bottom: 80px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="blog-hero-content text-center">

                        <!-- Category -->
                        <div class="blog-meta">
                            <span class="blog-category badge badge-primary">{{ ucfirst($blog->category) }}</span>
                            <span class="blog-date text-muted">{{ $blog->formatted_published_date }}</span>
                        </div>

                        <!-- Title -->
                        <h1 class="blog-title">{{ $blog->title }}</h1>

                        <!-- Excerpt -->
                        @if ($blog->excerpt)
                            <p class="blog-excerpt">{{ $blog->excerpt }}</p>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BLOG CONTENT SECTION -->
    <section id="blog-content" class="blog-content-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">

                    <!-- Featured Image -->
                    @if ($blog->thumbnail)
                        <div class="blog-featured-image m-bottom-50">
                            <img src="{{ asset('storage/' . $blog->thumbnail) }}" alt="{{ $blog->title }}"
                                class="img-fluid rounded">
                        </div>
                    @endif

                    <!-- Blog Content -->
                    <div class="blog-post-content">
                        {!! nl2br(e($blog->content)) !!}
                    </div>

                    <!-- Blog Tags/Categories -->
                    <div class="blog-tags-section m-top-50 p-top-30" style="border-top: 1px solid #eee;">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h6>Category:</h6>
                                <span class="blog-tag">{{ ucfirst($blog->category) }}</span>
                            </div>
                            <div class="col-md-6 text-right">
                                <h6>Share:</h6>
                                <div class="social-share">
                                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($blog->title) }}"
                                        target="_blank" class="share-btn twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}"
                                        target="_blank" class="share-btn facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->url()) }}"
                                        target="_blank" class="share-btn linkedin">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Navigation -->
                    <div class="blog-navigation m-top-50">
                        <div class="row">
                            <div class="col-md-6">
                                @php
                                    $previousBlog = App\Models\Blog::published()
                                        ->where('published_at', '<', $blog->published_at)
                                        ->orderBy('published_at', 'desc')
                                        ->first();
                                @endphp

                                @if ($previousBlog)
                                    <div class="blog-nav-item prev">
                                        <span class="nav-label">Previous Post</span>
                                        <h5><a
                                                href="{{ route('blogs.show', $previousBlog->slug) }}">{{ $previousBlog->title }}</a>
                                        </h5>
                                    </div>
                                @endif
                            </div>

                            <div class="col-md-6 text-right">
                                @php
                                    $nextBlog = App\Models\Blog::published()
                                        ->where('published_at', '>', $blog->published_at)
                                        ->orderBy('published_at', 'asc')
                                        ->first();
                                @endphp

                                @if ($nextBlog)
                                    <div class="blog-nav-item next">
                                        <span class="nav-label">Next Post</span>
                                        <h5><a
                                                href="{{ route('blogs.show', $nextBlog->slug) }}">{{ $nextBlog->title }}</a>
                                        </h5>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Back to Blog -->
                    <div class="back-to-blog text-center m-top-50">
                        <a href="{{ route('blogs.index') }}" class="btn btn-primary">
                            <i class="fas fa-arrow-left"></i> Back to Blog
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
    <style>
        /* Fix navigation text color for white background pages */
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

        .blog-hero-section {
            color: #333;
        }

        .blog-meta {
            margin-bottom: 20px;
        }

        .blog-category {
            font-size: 14px;
            margin-right: 15px;
            padding: 5px 15px;
            border-radius: 20px;
        }

        .blog-date {
            font-size: 14px;
        }

        .blog-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .blog-excerpt {
            font-size: 1.2rem;
            opacity: 0.9;
            margin-bottom: 0;
        }

        .blog-featured-image img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .blog-post-content {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #444;
        }

        .blog-post-content p {
            margin-bottom: 20px;
        }

        .blog-tag {
            background: #f8f9fa;
            color: #667eea;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
        }

        .social-share .share-btn {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            border-radius: 50%;
            color: white;
            margin-left: 10px;
            transition: transform 0.3s ease;
        }

        .social-share .share-btn:hover {
            transform: translateY(-3px);
            text-decoration: none;
            color: white;
        }

        .share-btn.twitter {
            background: #1da1f2;
        }

        .share-btn.facebook {
            background: #3b5998;
        }

        .share-btn.linkedin {
            background: #0077b5;
        }

        .blog-nav-item {
            padding: 20px;
            border: 1px solid #eee;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .nav-label {
            font-size: 12px;
            text-transform: uppercase;
            color: #888;
            font-weight: 600;
        }

        .blog-nav-item h5 a {
            color: #333;
            text-decoration: none;
            font-size: 16px;
            line-height: 1.4;
        }

        .blog-nav-item h5 a:hover {
            color: #667eea;
        }

        .back-to-blog .btn {
            background: #667eea;
            border-color: #667eea;
            padding: 12px 30px;
            font-weight: 600;
        }

        .back-to-blog .btn:hover {
            background: #5a67d8;
            border-color: #5a67d8;
        }

        @media (max-width: 768px) {
            .blog-title {
                font-size: 2rem;
            }

            .blog-navigation .col-md-6:last-child {
                text-align: left !important;
                margin-top: 20px;
            }
        }
    </style>
@endpush
