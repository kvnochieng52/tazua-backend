@extends('layouts.app')

@section('title', 'About Tazua - Creator Platform for Kenya')
@section('meta_description',
    'Learn about Tazua Africa, the first digital platform for Kenyan creators to own their
    audience and earn sustainable income through mobile-money-first fan support.')

@section('content')
    <!-- ABOUT HERO SECTION -->
    <div id="about-hero" class="about-hero-section division"
        style="background: white; padding-top: 120px; padding-bottom: 80px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="about-hero-content text-center">
                        <h1 class="about-title">About Tazua</h1>
                        <p class="about-subtitle">The first digital home for Kenyan creators to own their audience and earn a
                            sustainable salary through simple, mobile-money-first fan support.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ABOUT CONTENT SECTION -->
    <section id="about-content" class="about-content-section" style="padding-top: 80px; padding-bottom: 80px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">

                    <!-- Section 1: Own Your Audience -->
                    <div class="about-section m-bottom-60">
                        <div class="row align-items-center">
                            <div class="col-lg-2 col-md-3">
                                <div class="section-number">
                                    <span class="number-lg">1</span>
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-9">
                                <h2 class="section-title">Own Your Audience, Own Your Income</h2>
                                <p class="section-intro">On global platforms, you are at the mercy of an algorithm that can
                                    hide your work overnight. On Tazua, you own the relationship.</p>
                                <ul class="feature-list">
                                    <li><strong>Direct Access:</strong> Your fans connect with you directly.</li>
                                    <li><strong>Predictable Growth:</strong> Build a recurring income that doesn't depend on
                                        "going viral" but on the loyal community you've already worked hard to build.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Section 2: Built for Kenya -->
                    <div class="about-section m-bottom-60">
                        <div class="row align-items-center">
                            <div class="col-lg-2 col-md-3">
                                <div class="section-number">
                                    <span class="number-lg">2</span>
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-9">
                                <h2 class="section-title">Built for the Way Kenya Works</h2>
                                <p class="section-intro">No more waiting for international wire transfers or struggling with
                                    credit card hurdles.</p>
                                <ul class="feature-list">
                                    <li><strong>Mobile-First Payments:</strong> We've integrated the payment tools your fans
                                        actually use. It's as simple as a phone prompt for them and an instant notification
                                        for you.</li>
                                    <li><strong>Instant Payouts:</strong> Your hard-earned money shouldn't be locked in a
                                        "threshold." Withdraw your earnings to your phone whenever you need to.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Section 3: Three Streams -->
                    <div class="about-section m-bottom-60">
                        <div class="row align-items-center">
                            <div class="col-lg-2 col-md-3">
                                <div class="section-number">
                                    <span class="number-lg">3</span>
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-9">
                                <h2 class="section-title">Three Streams, One Dashboard</h2>
                                <p class="section-intro">Why limit yourself to just one way to earn? Tazua gives you a
                                    multi-tool for your career:</p>
                                <ul class="feature-list">
                                    <li><strong>Subscriptions:</strong> Offer exclusive, "members-only" content for your
                                        most dedicated fans.</li>
                                    <li><strong>Crowdfunding:</strong> Turn your big ideas—a new studio, a documentary, or a
                                        live event—into reality with the collective support of your community.</li>
                                    <li><strong>Tips:</strong> Give your audience a way to show instant appreciation for
                                        those "wow" moments.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Section 4: Professional Protection -->
                    <div class="about-section m-bottom-60">
                        <div class="row align-items-center">
                            <div class="col-lg-2 col-md-3">
                                <div class="section-number">
                                    <span class="number-lg">4</span>
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-9">
                                <h2 class="section-title">Professional-Grade Protection</h2>
                                <p class="section-intro">Your content is your intellectual property. We provide the "Shield"
                                    to keep it that way.</p>
                                <ul class="feature-list">
                                    <li><strong>IP Security:</strong> Built-in anti-piracy tools and secure hosting ensure
                                        your premium content stays on your platform.</li>
                                    <li><strong>Freedom to Create:</strong> Focus on your art while we handle the
                                        complicated stuff—tax compliance (KRA), secure processing, and technical support.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Call to Action -->
                    <div class="about-cta text-center" style="padding: 60px 0;">
                        <h3 class="cta-title">Ready to Turn Your Passion into Income?</h3>
                        <p class="cta-subtitle">Join hundreds of Kenyan creators building sustainable businesses on Tazua
                        </p>
                        <a href="#" class="btn btn-green btn-lg apk-download-trigger"
                            data-apk-link="{{ asset('tazua_app.apk') }}">Download Tazua APK Now</a>
                        <p class="cta-link">
                            <a href="https://tazua.africa/" target="_blank" class="text-muted">Visit tazua.africa</a>
                        </p>
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
            color: #e5841d !important;
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

        .about-hero-section {
            color: #333;
        }

        .about-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: #333;
        }

        .about-subtitle {
            font-size: 1.3rem;
            color: #666;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto;
        }

        .about-section {
            border-bottom: 1px solid #eee;
            padding-bottom: 40px;
        }

        .section-number {
            text-align: center;
        }

        .number-lg {
            display: inline-block;
            width: 80px;
            height: 80px;
            line-height: 80px;
            background: #e5841d;
            color: white;
            font-size: 2rem;
            font-weight: 700;
            border-radius: 50%;
            text-align: center;
        }

        .section-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: #333;
        }

        .section-intro {
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .feature-list {
            list-style: none;
            padding: 0;
        }

        .feature-list li {
            margin-bottom: 15px;
            font-size: 1rem;
            line-height: 1.6;
            color: #555;
            position: relative;
            padding-left: 30px;
        }

        .feature-list li::before {
            content: "✓";
            position: absolute;
            left: 0;
            top: 0;
            color: #e5841d;
            font-weight: bold;
            font-size: 1.2rem;
        }

        .feature-list strong {
            color: #333;
        }

        .cta-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: #333;
        }

        .cta-subtitle {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 30px;
        }

        .cta-link {
            margin-top: 20px;
        }

        .btn-lg {
            padding: 15px 40px;
            font-size: 1.1rem;
        }

        @media (max-width: 768px) {
            .about-title {
                font-size: 2.5rem;
            }

            .section-title {
                font-size: 1.5rem;
            }

            .cta-title {
                font-size: 2rem;
            }

            .number-lg {
                width: 60px;
                height: 60px;
                line-height: 60px;
                font-size: 1.5rem;
            }
        }
    </style>
@endpush
