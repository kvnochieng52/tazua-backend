@extends('layouts.app')

@section('title', 'Tazua - Creator Platform for Kenya')

@section('content')
    <!-- HERO-10 -->
    <section id="hero-10" class="bg-fixed bg-lightgrey hero-section division">
        <div class="container">
            <div class="row d-flex align-items-center">

                <!-- HERO TEXT -->
                <div class="col-md-7 col-lg-6">
                    <div class="hero-txt">

                        <!-- Title -->
                        <h2 class="h2-xs animated hero-main-title" data-animation="fadeInUp" data-animation-delay="300">
                            A digital home where creators turn loyal fans into <span class="green-color">reliable
                                income</span>
                        </h2>

                        <!-- APK Download Button -->
                        <div class="hero-btn animated" data-animation="fadeInUp" data-animation-delay="500">
                            <a class="btn btn-green apk-download-trigger" href="#"
                                data-apk-link="{{ asset('tazua_app.apk') }}">
                                Download APK
                            </a>
                        </div>

                    </div>
                </div> <!-- END HERO TEXT -->

                <!-- HERO IMAGE -->
                <div class="col-md-5 col-lg-4 offset-lg-2 animated" data-animation="fadeInRight" data-animation-delay="500">
                    <div class="hero-img">
                        <img class="img-fluid" src="{{ asset('images/hero-10-img.png') }}" alt="hero-image">
                    </div>
                </div>

            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- END HERO-10 -->

    <!-- FEATURES-2 -->
    <section id="features-2" class="bg-lightgrey p-top-60 p-bottom-60 featuress-section division">
        <div class="container">

            <!-- SECTION TITLE -->
            <div class="row">
                <div class="col-md-10 offset-md-1 section-title">
                    <h2 class="h2-lg">Why Choose Tazua?</h2>
                    <p>The first digital platform built specifically for Kenyan creators to own their audience and earn
                        sustainable income through simple, mobile-money-first fan support.</p>
                </div>
            </div>

            <div class="row">

                <!-- FEATURE BOX #1 -->
                <div class="col-md-6 col-lg-3 animated" data-animation="fadeInUp" data-animation-delay="300">
                    <div class="fbox-2 box-icon-lg green-icon">
                        <span class="pe-7s-users"></span>
                        <h5 class="h5-md">Own Your Audience</h5>
                        <p class="grey-color">Direct access to your fans without algorithm interference. Build predictable
                            income from your loyal community.</p>
                    </div>
                </div>

                <!-- FEATURE BOX #2 -->
                <div class="col-md-6 col-lg-3 animated" data-animation="fadeInUp" data-animation-delay="400">
                    <div class="fbox-2 box-icon-lg green-icon">
                        <span class="pe-7s-phone"></span>
                        <h5 class="h5-md">Mobile-First Payments</h5>
                        <p class="grey-color">Integrated with payment tools Kenyans actually use. Simple phone prompts for
                            fans, instant notifications for you.</p>
                    </div>
                </div>

                <!-- FEATURE BOX #3 -->
                <div class="col-md-6 col-lg-3 animated" data-animation="fadeInUp" data-animation-delay="500">
                    <div class="fbox-2 box-icon-lg green-icon">
                        <span class="pe-7s-portfolio"></span>
                        <h5 class="h5-md">Three Income Streams</h5>
                        <p class="grey-color">Subscriptions, crowdfunding, and tips—all in one dashboard. Multiple ways to
                            monetize your creativity.</p>
                    </div>
                </div>

                <!-- FEATURE BOX #4 -->
                <div class="col-md-6 col-lg-3 animated" data-animation="fadeInUp" data-animation-delay="600">
                    <div class="fbox-2 box-icon-lg green-icon">
                        <span class="pe-7s-cash"></span>
                        <h5 class="h5-md">Instant Payouts</h5>
                        <p>No threshold limits. Withdraw your earnings to your mobile wallet whenever you need them.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section id="intro-video-option-2" class="intro-video-section division">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="intro-video-card text-center">
                        <h4>See How Tazua Works</h4>
                        <p>Watch this quick intro without leaving the website.</p>
                        <a href="#" class="intro-video-thumb-link" data-toggle="modal" data-target="#introVideoModal"
                            data-video-embed="https://www.youtube.com/embed/CrEcmOVZNh0?autoplay=1&amp;rel=0">
                            <img src="https://img.youtube.com/vi/CrEcmOVZNh0/maxresdefault.jpg"
                                alt="Tazua intro video thumbnail" class="img-fluid intro-video-thumb">
                            <span class="intro-video-overlay">
                                <span class="intro-video-play"><i class="fas fa-play"></i></span>
                                <span class="intro-video-label">Watch Intro Video</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="introVideoModal" tabindex="-1" role="dialog" aria-labelledby="introVideoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="introVideoModalLabel">Tazua Intro Video</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="intro-video-frame-wrap">
                        <iframe id="introVideoFrame" src="" title="Tazua Intro Video" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SCREENSHOTS-1 -->
    <section id="screens-1" class="bg-scroll bg-green screens-section division"
        style="background-image: url({{ asset('images/tra-bg-1.png') }});">

        <!-- SECTION TITLE -->
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1 white-color section-title">
                    <h2 class="h2-lg">App Features</h2>
                    <p>Explore the powerful features that make Tazua the perfect platform for Kenyan creators to build
                        sustainable income and connect with their audience.</p>
                </div>
            </div>
        </div>

        <!-- SCREENSHOTS CAROUSEL -->
        <div class="screenshots-wrap">
            <div class="screens-carousel">

                <!-- Screen #1 -->
                <div class="carousel-item">
                    <img src="{{ asset('images/portfolio/screen-1.jpg') }}" alt="screenshot">
                </div>

                <!-- Screen #2 -->
                <div class="carousel-item">
                    <img src="{{ asset('images/portfolio/screen-2.jpg') }}" alt="screenshot">
                </div>

                <!-- Screen #3 -->
                <div class="carousel-item">
                    <img src="{{ asset('images/portfolio/screen-3.jpg') }}" alt="screenshot">
                </div>

                <!-- Screen #4 -->
                <div class="carousel-item">
                    <img src="{{ asset('images/portfolio/screen-4.jpg') }}" alt="screenshot">
                </div>

                <!-- Screen #5 -->
                <div class="carousel-item">
                    <img src="{{ asset('images/portfolio/screen-5.jpg') }}" alt="screenshot">
                </div>

                <!-- Screen #6 -->
                <div class="carousel-item">
                    <img src="{{ asset('images/portfolio/screen-6.jpg') }}" alt="screenshot">
                </div>

                <!-- Screen #7 -->
                <div class="carousel-item">
                    <img src="{{ asset('images/portfolio/screen-7.jpg') }}" alt="screenshot">
                </div>

                <!-- Screen #8 -->
                <div class="carousel-item">
                    <img src="{{ asset('images/portfolio/screen-8.jpg') }}" alt="screenshot">
                </div>

            </div>

            <!-- IPHONE FRAME -->
            <div class="iphone-frame">
                <img src="{{ asset('images/iphone.png') }}" alt="iphone-image">
            </div>

        </div>

    </section>

    <!-- BLOG SECTION -->
    <section id="blog-section" class="blog-section" style="padding-top: 100px; padding-bottom: 100px;">
        <div class="container">

            <!-- SECTION TITLE -->
            <div class="row">
                <div class="col-md-10 offset-md-1 section-title">
                    <h2 class="h2-lg">Latest from Our Blog</h2>
                    <p>Stay updated with the latest news, tips, and insights from the Tazua community</p>
                </div>
            </div>

            <!-- BLOG POSTS -->
            <div class="row">
                @forelse($latestBlogs as $blog)
                    <div class="col-md-6 col-lg-4 d-flex">
                        <div class="blog-post m-bottom-40 d-flex flex-column w-100">

                            @if ($blog->thumbnail)
                                <div class="blog-post-img">
                                    <img src="{{ asset('storage/' . $blog->thumbnail) }}" alt="{{ $blog->title }}"
                                        class="img-fluid">
                                </div>
                            @endif

                            <div class="blog-post-txt flex-grow-1 d-flex flex-column">
                                <h4 class="blog-post-title">
                                    <a href="{{ route('blogs.show', $blog->slug) }}">{{ $blog->title }}</a>
                                </h4>

                                <div class="blog-post-date">
                                    <span class="blog-meta-date">{{ $blog->formatted_published_date }}</span>
                                </div>

                                <p class="blog-post-excerpt flex-grow-1">
                                    {{ Str::limit($blog->excerpt ?: strip_tags($blog->content), 120) }}
                                </p>

                                <a href="{{ route('blogs.show', $blog->slug) }}" class="read-more-link mt-auto">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="text-center">
                            <p>No blog posts available at the moment.</p>
                        </div>
                    </div>
                @endforelse
            </div>

            @if ($latestBlogs->count() > 0)
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="{{ route('blogs.index') }}" class="btn btn-green">View All Blog Posts</a>
                    </div>
                </div>
            @endif

        </div>
    </section>

    <!-- FAQs -->
    <section id="faqs-1" class="bg-fixed bg-lightgrey faqs-section division"
        style="background-image: url({{ asset('images/tra-waves.png') }}); padding-top: 100px; padding-bottom: 100px;">
        <div class="container">

            <!-- SECTION TITLE -->
            <div class="row">
                <div class="col-md-10 offset-md-1 section-title">
                    <h2 class="h2-lg">Questions about Tazua?</h2>
                    <p>Find answers to common questions about our creator platform, mobile money integration, and how to
                        start earning from your content.</p>
                </div>
            </div>

            <div class="row">
                @php
                    $faqChunks = collect($featuredFaqs ?? [])->chunk(3);
                @endphp

                @foreach ($faqChunks as $chunk)
                    <div class="col-lg-6">
                        <div class="questions-holder">
                            @foreach ($chunk as $index => $faq)
                                <div class="question animated" data-animation="fadeInUp"
                                    data-animation-delay="{{ 300 + $index * 100 }}">
                                    <h5 class="h5-sm">{{ $faq['question'] }}</h5>
                                    <p>{{ $faq['answer'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row m-top-30">
                <div class="col-12 text-center">
                    <a href="{{ route('faqs.index') }}" class="btn btn-green">See All FAQs</a>
                </div>
            </div>
        </div>
    </section>

    <!-- NEWSLETTER -->
    <section id="newsletter-2" class="bg-scroll bg-green newsletter-section division">
        <div class="container white-color">
            <div class="row d-flex align-items-center">

                <!-- NEWSLETTER TEXT -->
                <div class="col-lg-6">
                    <div class="newsletter-txt">
                        <h3 class="h3-xs">Stay up to date with our news, ideas and updates</h3>
                    </div>
                </div>

                <!-- NEWSLETTER FORM -->
                <div class="col-lg-6">
                    <form class="newsletter-form p-left-30">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Your email address" required
                                id="s-email">
                            <span class="input-group-btn">
                                <button type="submit" class="btn"><i class="fas fa-arrow-right"></i></button>
                            </span>
                        </div>
                        <!-- Newsletter Form Notification -->
                        <label for="s-email" class="form-notification"></label>
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection

@push('styles')
    <style>
        .hero-main-title {
            font-size: 3.2rem !important;
            line-height: 1.3;
            font-weight: 700;
        }

        @media (max-width: 768px) {
            .hero-main-title {
                font-size: 2.5rem !important;
            }
        }

        @media (max-width: 576px) {
            .hero-main-title {
                font-size: 2rem !important;
            }
        }

        .hero-links {
            margin-top: 30px;
        }

        .intro-video-section {
            background: #ffffff;
            padding: 70px 0;
        }

        .intro-video-card {
            background: #f8f9fa;
            border-radius: 12px;
            padding: 35px;
            box-shadow: 0 4px 18px rgba(0, 0, 0, 0.08);
        }

        .intro-video-card h4 {
            margin-bottom: 10px;
            color: #333;
        }

        .intro-video-card p {
            color: #666;
            margin-bottom: 24px;
        }

        .intro-video-thumb-link {
            display: block;
            position: relative;
            border-radius: 12px;
            overflow: hidden;
        }

        .intro-video-thumb {
            width: 100%;
            display: block;
        }

        .intro-video-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.35);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: #fff;
            transition: background 0.2s ease;
        }

        .intro-video-thumb-link:hover .intro-video-overlay {
            background: rgba(0, 0, 0, 0.45);
        }

        .intro-video-play {
            width: 58px;
            height: 58px;
            border-radius: 50%;
            background: #44ce6f;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            margin-bottom: 10px;
        }

        .intro-video-label {
            font-weight: 600;
        }

        .intro-video-frame-wrap {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            border-radius: 10px;
        }

        .intro-video-frame-wrap iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .hero-links .link-btn {
            display: inline-block;
            margin-right: 20px;
            color: white;
            text-decoration: none;
            font-weight: 600;
            padding: 12px 25px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 25px;
            transition: all 0.3s ease;
        }

        .hero-links .link-btn:hover {
            background: rgba(255, 255, 255, 0.2);
            text-decoration: none;
            color: white;
        }

        .blog-section {
            background: #f8f9fa;
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
            height: 220px;
            object-fit: cover;
        }

        .blog-post-txt {
            padding: 25px 20px;
        }

        .blog-post-meta {
            margin-bottom: 12px;
        }

        .blog-meta-category {
            background: #667eea;
            color: white;
            padding: 4px 10px;
            border-radius: 15px;
            font-size: 11px;
            font-weight: 600;
            margin-right: 8px;
        }

        .blog-meta-date {
            color: #888;
            font-size: 13px;
        }

        .blog-post-title a {
            color: #333;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.2rem;
        }

        .blog-post-title a:hover {
            color: #667eea;
            text-decoration: none;
        }

        .blog-post-excerpt {
            color: #666;
            line-height: 1.5;
            margin: 12px 0;
            font-size: 14px;
        }

        .read-more-link {
            color: #667eea;
            font-weight: 600;
            text-decoration: none;
            font-size: 14px;
        }

        .read-more-link:hover {
            text-decoration: underline;
        }

        .btn-outline-primary {
            border: 2px solid #667eea;
            color: #667eea;
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 25px;
        }

        .btn-outline-primary:hover {
            background: #667eea;
            border-color: #667eea;
            color: white;
        }

        @media (max-width: 768px) {
            .intro-video-card {
                padding: 25px 20px;
            }
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const introVideoModal = document.getElementById('introVideoModal');
            const introVideoFrame = document.getElementById('introVideoFrame');
            const introVideoTrigger = document.querySelector('.intro-video-thumb-link');

            if (introVideoTrigger && introVideoFrame) {
                introVideoTrigger.addEventListener('click', function() {
                    const embedUrl = this.getAttribute('data-video-embed');
                    if (embedUrl) {
                        introVideoFrame.setAttribute('src', embedUrl);
                    }
                });
            }

            if (introVideoModal && introVideoFrame) {
                $('#introVideoModal').on('hidden.bs.modal', function() {
                    introVideoFrame.setAttribute('src', '');
                });
            }
        });
    </script>
@endpush
