<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Tazua" />
    <meta name="description" content="@yield('meta_description', 'Tazua - Creator Platform for Kenya')" />
    <meta name="keywords" content="@yield('meta_keywords', 'Creator Platform, Kenya, Blogs, Content')" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SITE TITLE -->
    <title>@yield('title', 'Tazua - Creator Platform for Kenya')</title>

    <!-- FAVICON AND TOUCH ICONS -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/apple-touch-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/apple-touch-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/apple-touch-icon-76x76.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">

    <!-- BOOTSTRAP CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- FONT ICONS -->
    <link href="{{ asset('css/fa-svg-with-js.css') }}" rel="stylesheet">
    <link href="{{ asset('css/pe-icon-7-stroke.css') }}" rel="stylesheet">

    <!-- PLUGINS STYLESHEET -->
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet">

    <!-- On Scroll Animations -->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">

    <!-- TEMPLATE CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- RESPONSIVE CSS -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    @stack('styles')

    <style>
        .navbar-stores {
            display: flex;
            align-items: center;
        }

        .store-badge {
            transition: transform 0.3s ease;
        }

        .store-badge:hover {
            transform: translateY(-2px);
        }

        .store-badge img {
            border-radius: 5px;
        }

        @media (max-width: 991px) {
            .navbar-stores {
                margin-top: 15px;
                margin-left: 0 !important;
                justify-content: center;
                padding: 10px 0;
            }
        }
    </style>
</head>

<body>
    <!-- PRELOADER -->
    <div id="loader-wrapper">
        <div id="loader">
            <ul class="cssload-flex-container">
                <li><span class="cssload-loading"></span></li>
            </ul>
        </div>
    </div>

    <!-- PAGE CONTENT -->
    <div id="page" class="page">

        <!-- HEADER -->
        <header id="header" class="header">
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-tra">
                <div class="container">

                    <!-- LOGO IMAGE -->
                    <a href="{{ url('/') }}" class="navbar-brand logo-white">
                        <img src="{{ asset('images/logo.png') }}" alt="Tazua Logo">
                    </a>
                    <a href="{{ url('/') }}" class="navbar-brand logo-black">
                        <img src="{{ asset('images/logo.png') }}" alt="Tazua Logo">
                    </a>

                    <!-- Responsive Menu Button -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Navigation Menu -->
                    <div id="navbarSupportedContent" class="collapse navbar-collapse">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('blogs.index') }}">Blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                        </ul>

                        <!-- Store Badges -->
                        <div class="navbar-stores ml-3 d-flex align-items-center">
                            <a href="#" class="store-badge mr-2">
                                <img src="{{ asset('images/store_badges/appstore.png') }}" alt="Download on App Store"
                                    height="35">
                            </a>
                            <a href="#" class="store-badge">
                                <img src="{{ asset('images/store_badges/googleplay.png') }}"
                                    alt="Get it on Google Play" height="35">
                            </a>
                        </div>
                    </div>

                </div>
            </nav>
        </header>

        <!-- MAIN CONTENT -->
        <main>
            @yield('content')
        </main>

        <!-- FOOTER -->
        <footer id="footer-1" class="footer division" style="padding-top: 80px; padding-bottom: 40px;">
            <div class="container">

                <!-- FOOTER CONTENT -->
                <div class="row">

                    <!-- FOOTER INFO -->
                    <div class="col-md-5 col-lg-5">
                        <div class="footer-info m-bottom-40">

                            <!-- Footer Logo -->
                            <img class="footer-logo" src="{{ asset('images/logo.png') }}" alt="Tazua Logo"
                                style="margin-bottom: 20px; max-width: 150px;">

                            <!-- Text -->
                            <p>The first digital platform built specifically for Kenyan creators to own their audience
                                and earn sustainable income through simple, mobile-money-first fan support. Transform
                                your passion into reliable income with three powerful monetization streams.</p>

                        </div>
                    </div>

                    <!-- FOOTER LINKS -->
                    <div class="col-md-4 col-lg-2">
                        <div class="footer-links m-bottom-40">
                            <h5 class="h5-md">Useful Links</h5>
                            <ul class="foo-links clearfix">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('blogs.index') }}">Blog</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- FOOTER LINKS -->
                    <div class="col-md-4 col-lg-2">
                        <div class="footer-links m-bottom-40">
                            <h5 class="h5-md">Support</h5>
                            <ul class="foo-links clearfix">
                                <li><a href="#faq">FAQs</a></li>
                                <li><a href="#help">Help</a></li>
                                <li><a href="#support">Support</a></li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- FOOTER STORE BADGES -->
                    <div class="col-md-4 col-lg-3">
                        <div class="footer-stores-badge text-right m-bottom-40">
                            <a href="#" class="store">
                                <img class="appstore-original" src="{{ asset('images/store_badges/appstore.png') }}"
                                    width="160" height="50" alt="appstore-logo" />
                            </a>
                            <a href="#" class="store">
                                <img class="googleplay-original"
                                    src="{{ asset('images/store_badges/googleplay.png') }}" width="171"
                                    height="50" alt="googleplay-logo" />
                            </a>
                        </div>
                    </div>

                </div>

                <!-- BOTTOM FOOTER -->
                <div class="bottom-footer">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="footer-copyright">
                                <p>&copy; {{ date('Y') }} <span>Tazua</span>. All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </footer>

    </div> <!-- END PAGE CONTENT -->

    <!-- EXTERNAL SCRIPTS -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/fontawesome-all.js') }}"></script>
    <script src="{{ asset('js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.js') }}"></script>
    <script src="{{ asset('js/retina.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollto.js') }}"></script>
    <script src="{{ asset('js/jquery.appear.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/contact-form.js') }}"></script>
    <script src="{{ asset('js/quick-form.js') }}"></script>
    <script src="{{ asset('js/comment-form.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    @stack('scripts')
</body>

</html>
