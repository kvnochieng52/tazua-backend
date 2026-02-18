@extends('layouts.app')

@section('title', 'Contact Us - Tazua Creator Platform')
@section('meta_description',
    'Get in touch with Tazua. Contact us for support, partnerships, or questions about our
    creator platform for Kenyan creators.')

@section('content')
    <!-- CONTACT HERO SECTION -->
    <div id="contact-hero" class="contact-hero-section division"
        style="background: white; padding-top: 120px; padding-bottom: 80px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="contact-hero-content text-center">
                        <h1 class="contact-title">Get in Touch</h1>
                        <p class="contact-subtitle">Have questions about Tazua? We'd love to hear from you. Send us a message
                            and we'll respond as soon as possible.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CONTACT CONTENT SECTION -->
    <section id="contact-content" class="contact-content-section" style="padding-top: 60px; padding-bottom: 100px;">
        <div class="container">
            <div class="row">

                <!-- CONTACT INFO -->
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-box m-bottom-40">

                        <!-- Contact Details -->
                        <div class="contact-item m-bottom-30">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-details">
                                <h5>Our Location</h5>
                                <p>Nairobi, Kenya<br>East Africa</p>
                            </div>
                        </div>

                        <div class="contact-item m-bottom-30">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-details">
                                <h5>Email Us</h5>
                                <p><a href="mailto:info@tazua.africa">info@tazua.africa</a><br>
                                    <a href="mailto:jambo@tazua.africa">jambo@tazua.africa</a>
                                </p>
                            </div>
                        </div>

                        <div class="contact-item m-bottom-30">
                            <div class="contact-icon">
                                <i class="fas fa-globe"></i>
                            </div>
                            <div class="contact-details">
                                <h5>Website</h5>
                                <p><a href="https://tazua.africa" target="_blank">www.tazua.africa</a></p>
                            </div>
                        </div>

                        <!-- Social Links -->
                        <div class="contact-social">
                            <h6>Follow Us</h6>
                            <div class="social-links">
                                <a href="https://x.com/tazuaafrica" target="_blank" class="social-link"><i
                                        class="fab fa-twitter"></i></a>
                                <a href="https://www.instagram.com/tazuaafrica" target="_blank" class="social-link"><i
                                        class="fab fa-instagram"></i></a>
                                <a href="https://www.tiktok.com/@tazuaafrica" target="_blank" class="social-link"><i
                                        class="fab fa-tiktok"></i></a>
                                <a href="https://www.linkedin.com/in/tazua-africa-a3b0223a9" target="_blank"
                                    class="social-link"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- CONTACT FORM -->
                <div class="col-lg-8 col-md-6">
                    <div class="contact-form-wrapper">
                        <h3 class="form-title">Send Us a Message</h3>

                        <form id="contactForm" class="contact-form">
                            <div class="row">

                                <!-- Name -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Full Name *</label>
                                        <input type="text" id="name" name="name" class="form-control" required>
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email Address *</label>
                                        <input type="email" id="email" name="email" class="form-control" required>
                                    </div>
                                </div>

                                <!-- Subject -->
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="subject">Subject *</label>
                                        <input type="text" id="subject" name="subject" class="form-control" required>
                                    </div>
                                </div>

                                <!-- Message -->
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="message">Message *</label>
                                        <textarea id="message" name="message" class="form-control" rows="6" required
                                            placeholder="Tell us how we can help you..."></textarea>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-12">
                                    <button type="submit" class="btn btn-green btn-lg">
                                        <i class="fas fa-paper-plane"></i> Send Message
                                    </button>
                                </div>

                            </div>
                        </form>

                        <!-- Form Response -->
                        <div id="form-response" class="form-response"></div>
                    </div>
                </div>

            </div>

            <!-- FAQ Link Section -->
            <div class="row" style="margin-top: 80px;">
                <div class="col-12 text-center">
                    <div class="contact-faq-section">
                        <h4>Looking for Quick Answers?</h4>
                        <p>Check out our frequently asked questions for instant help.</p>
                        <a href="{{ route('home') }}#faqs-1" class="btn btn-outline-primary">View FAQs</a>
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

        .contact-hero-section {
            color: #333;
        }

        .contact-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: #333;
        }

        .contact-subtitle {
            font-size: 1.2rem;
            color: #666;
            line-height: 1.6;
        }

        .contact-info-box {
            background: #f8f9fa;
            padding: 40px 30px;
            border-radius: 10px;
            height: 100%;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background: #e5841d;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            flex-shrink: 0;
        }

        .contact-icon i {
            font-size: 1.2rem;
            color: white;
        }

        .contact-details h5 {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 5px;
            color: #333;
        }

        .contact-details p {
            color: #666;
            margin: 0;
            line-height: 1.5;
        }

        .contact-details a {
            color: #e5841d;
            text-decoration: none;
        }

        .contact-details a:hover {
            text-decoration: underline;
        }

        .contact-social h6 {
            font-weight: 600;
            margin-bottom: 15px;
            color: #333;
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-link {
            width: 40px;
            height: 40px;
            background: #e5841d;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            transition: transform 0.3s ease;
        }

        .social-link:hover {
            transform: translateY(-3px);
            color: white;
            text-decoration: none;
        }

        .contact-form-wrapper {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .form-title {
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 30px;
            color: #333;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            font-weight: 600;
            margin-bottom: 8px;
            color: #333;
            display: block;
        }

        .form-control {
            border: 2px solid #e9ecef;
            border-radius: 8px;
            padding: 12px 15px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            border-color: #e5841d;
            box-shadow: 0 0 0 0.2rem rgba(229, 132, 29, 0.25);
        }

        .btn-lg {
            padding: 15px 40px;
            font-size: 1.1rem;
            font-weight: 600;
        }

        .form-response {
            margin-top: 20px;
            padding: 15px;
            border-radius: 8px;
            display: none;
        }

        .form-response.success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .form-response.error {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .contact-faq-section {
            background: #f8f9fa;
            padding: 40px;
            border-radius: 10px;
        }

        .contact-faq-section h4 {
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: #333;
        }

        .contact-faq-section p {
            color: #666;
            margin-bottom: 25px;
        }

        .btn-outline-primary {
            border: 2px solid #e5841d;
            color: #e5841d;
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 25px;
        }

        .btn-outline-primary:hover {
            background: #e5841d;
            border-color: #e5841d;
            color: white;
        }

        @media (max-width: 768px) {
            .contact-title {
                font-size: 2.5rem;
            }

            .contact-form-wrapper {
                padding: 30px 20px;
            }

            .contact-info-box {
                padding: 30px 20px;
                margin-bottom: 40px;
            }

            .contact-item {
                flex-direction: column;
                text-align: center;
            }

            .contact-icon {
                margin: 0 auto 15px auto;
            }
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Get form data
            const formData = new FormData(this);
            const responseDiv = document.getElementById('form-response');

            // Show loading state
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
            submitBtn.disabled = true;

            // Simulate form submission (replace with actual form handling)
            setTimeout(() => {
                responseDiv.innerHTML =
                    '<strong>Thank you!</strong> Your message has been sent successfully. We\'ll get back to you soon.';
                responseDiv.className = 'form-response success';
                responseDiv.style.display = 'block';

                // Reset form
                this.reset();

                // Reset button
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;

                // Hide response after 5 seconds
                setTimeout(() => {
                    responseDiv.style.display = 'none';
                }, 5000);
            }, 2000);
        });
    </script>
@endpush
