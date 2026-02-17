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
                            <a class="btn btn-green" href="tazua_app.apk">
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
                <!-- QUESTIONS HOLDER -->
                <div class="col-lg-6">
                    <div class="questions-holder">

                        <!-- QUESTION #1 -->
                        <div class="question animated" data-animation="fadeInUp" data-animation-delay="300">
                            <h5 class="h5-sm">How do I get started on Tazua?</h5>
                            <p>Getting started is simple! Sign up for an account, complete your creator profile, and start
                                building your audience. You can immediately begin earning through tips, subscriptions, and
                                crowdfunding campaigns.</p>
                        </div>

                        <!-- QUESTION #2 -->
                        <div class="question animated" data-animation="fadeInUp" data-animation-delay="400">
                            <h5 class="h5-sm">What payment methods are supported?</h5>
                            <p>We support all major mobile money services in Kenya including M-Pesa, Airtel Money, and
                                T-Kash. Fans can support you using the payment method they're most comfortable with.</p>
                        </div>

                        <!-- QUESTION #3 -->
                        <div class="question animated" data-animation="fadeInUp" data-animation-delay="500">
                            <h5 class="h5-sm">How quickly can I withdraw my earnings?</h5>
                            <p>There are no minimum withdrawal limits! You can withdraw your earnings to your mobile wallet
                                instantly, whenever you need the money.</p>
                        </div>

                    </div>
                </div>

                <!-- QUESTIONS HOLDER -->
                <div class="col-lg-6">
                    <div class="questions-holder">

                        <!-- QUESTION #4 -->
                        <div class="question animated" data-animation="fadeInUp" data-animation-delay="300">
                            <h5 class="h5-sm">What types of content can I monetize?</h5>
                            <p>All types of creative content! Whether you're a musician, writer, podcaster, artist, or
                                educator - if you create content that people value, you can monetize it on Tazua.</p>
                        </div>

                        <!-- QUESTION #5 -->
                        <div class="question animated" data-animation="fadeInUp" data-animation-delay="400">
                            <h5 class="h5-sm">How much does Tazua charge?</h5>
                            <p>We keep our fees low so you can keep more of what you earn. Our transparent pricing ensures
                                you always know exactly how much you'll receive from each transaction.</p>
                        </div>

                        <!-- QUESTION #6 -->
                        <div class="question animated" data-animation="fadeInUp" data-animation-delay="500">
                            <h5 class="h5-sm">Can I use Tazua alongside other platforms?</h5>
                            <p>Absolutely! Tazua is designed to complement your existing social media presence. You own your
                                audience data and can direct followers from any platform to support you on Tazua.</p>
                        </div>

                    </div>
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
    </style>
@endpush
