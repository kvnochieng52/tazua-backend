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
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

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

        .apk-instructions-list {
            margin-bottom: 1.5rem;
            padding-left: 1.2rem;
        }

        .apk-instructions-list li {
            margin-bottom: 0.75rem;
            color: #333;
        }

        .apk-section-title {
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 0.75rem;
            color: #222;
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
                            <li class="nav-item"><a class="nav-link" href="{{ route('faqs.index') }}">FAQ</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('blogs.index') }}">Blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                        </ul>

                        <!-- Store Badges -->
                        <div class="navbar-stores ml-3 d-flex align-items-center">
                            <!-- Commented out until app store publishing is complete
                            <a href="#" class="store-badge mr-2">
                                <img src="{{ asset('images/store_badges/appstore.png') }}" alt="Download on App Store"
                                    height="35">
                            </a>
                            <a href="#" class="store-badge">
                                <img src="{{ asset('images/store_badges/googleplay.png') }}"
                                    alt="Get it on Google Play" height="35">
                            </a>
                            -->
                            <!-- APK Download button -->
                            <a href="#" class="store-badge apk-download-trigger"
                                data-apk-link="{{ asset('tazua_app.apk') }}">
                                <img src="{{ asset('images/store_badges/apk_download.png') }}" alt="Download APK"
                                    height="35">
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
                                <li><a href="{{ route('faqs.index') }}">FAQs</a></li>
                                <li><a href="{{ route('contact') }}">Help</a></li>
                                <li><a href="{{ route('contact') }}">Support</a></li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- FOOTER STORE BADGES -->
                    <div class="col-md-4 col-lg-3">
                        <div class="footer-stores-badge text-right m-bottom-40">
                            <!-- Commented out until app store publishing is complete
                            <a href="#" class="store">
                                <img class="appstore-original" src="{{ asset('images/store_badges/appstore.png') }}"
                                    width="160" height="50" alt="appstore-logo" />
                            </a>
                            <a href="#" class="store">
                                <img class="googleplay-original"
                                    src="{{ asset('images/store_badges/googleplay.png') }}" width="171"
                                    height="50" alt="googleplay-logo" />
                            </a>
                            -->
                            <!-- APK Download button -->
                            <a href="#" class="store apk-download-trigger"
                                data-apk-link="{{ asset('tazua_app.apk') }}">
                                <img src="{{ asset('images/store_badges/apk_download.png') }}" width="171"
                                    height="50" alt="Download APK" />
                            </a>
                        </div>
                    </div>

                </div>

                <!-- BOTTOM FOOTER -->
                <div class="bottom-footer">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="footer-copyright">
                                <p>&copy; {{ date('Y') }} <span>Tazua Africa</span>. All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </footer>

    </div> <!-- END PAGE CONTENT -->

    <div class="modal fade" id="apkInstructionsModal" tabindex="-1" role="dialog"
        aria-labelledby="apkInstructionsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="apkInstructionsModalLabel">Tazua APK Installation & Creator Onboarding
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h6 class="apk-section-title">Part 1: Download The APK</h6>
                    <ol class="apk-instructions-list">
                        <li><strong>Tap to download:</strong> <a href="{{ asset('tazua_app.apk') }}" download>Download
                                Tazua APK</a>. If your browser warns that the file might be harmful, tap
                            <strong>Download anyway</strong>.
                            <div class="m-top-10">
                                <a href="{{ asset('tazua_app.apk') }}" class="btn btn-green apk-modal-download-link"
                                    download>
                                    Download APK Now
                                </a>
                            </div>
                        </li>
                        <li><strong>Allow install permission:</strong> Go to <strong>Settings &gt; Apps &gt; Special App
                                Access &gt; Install Unknown Apps</strong>. Choose the browser you used (for example,
                            Chrome), then turn on <strong>Allow from this source</strong>.</li>
                        <li><strong>Install the app:</strong> Open your <strong>Downloads</strong> folder, tap the
                            <strong>Tazua APK</strong> file, then tap <strong>Install</strong>.
                        </li>
                        <li><strong>Keep your phone safe:</strong> After installation, return to the same settings page
                            and turn <strong>Allow from this source</strong> back off.</li>
                    </ol>

                    <h6 class="apk-section-title">Part 2: Joining as a Creator</h6>
                    <ol class="apk-instructions-list">
                        <li><strong>Create your account:</strong> Open the app and sign up with your email address.
                            You’ll receive a <strong>6-digit OTP</strong> by email to verify your identity.</li>
                        <li><strong>Open Creator Studio:</strong> After logging in, go to <strong>Creator
                                Studio</strong> to manage your content and track earnings.</li>
                        <li><strong>Complete your setup:</strong> Follow the prompts to finish your profile and link
                            your wallet for instant <strong>M-Pesa withdrawals</strong>.</li>
                        <li><strong>Tax tip:</strong> Add your <strong>KRA PIN</strong> in settings so you are charged
                            the <strong>5% resident tax rate</strong> instead of the <strong>20% non-resident
                                rate</strong>.</li>
                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const apkModal = $('#apkInstructionsModal');
            const downloadButtons = document.querySelectorAll('#apkInstructionsModal .apk-modal-download-link');
            const instructionDownloadLink = document.querySelector(
                '#apkInstructionsModal .apk-instructions-list li a[download]');

            document.querySelectorAll('.apk-download-trigger').forEach((trigger) => {
                trigger.addEventListener('click', function(event) {
                    event.preventDefault();

                    const apkLink = this.getAttribute('data-apk-link');
                    if (apkLink) {
                        if (instructionDownloadLink) {
                            instructionDownloadLink.setAttribute('href', apkLink);
                        }

                        downloadButtons.forEach((button) => {
                            button.setAttribute('href', apkLink);
                        });
                    }

                    apkModal.modal('show');
                });
            });
        });
    </script>

    @stack('scripts')
</body>

</html>
