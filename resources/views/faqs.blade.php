@extends('layouts.app')

@section('title', 'FAQs - Tazua Creator Platform')
@section('meta_description', 'Find all frequently asked questions for creators and fans on Tazua Africa.')

@section('content')
    <section id="faqs-all" class="faqs-all-section division"
        style="padding-top: 120px; padding-bottom: 100px; background: #f8f9fa;">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1 section-title text-center">
                    <h2 class="h2-lg">All Frequently Asked Questions</h2>
                    <p>Everything creators and fans need to know about using Tazua.</p>
                </div>
            </div>

            <div class="row m-top-40">
                <div class="col-lg-6 m-bottom-40">
                    <div class="faq-group-card">
                        <h4 class="faq-group-title">For Creators: Turn Your Passion into a Paycheck</h4>

                        @foreach ($creatorFaqs as $faq)
                            <div class="question">
                                <h5 class="h5-sm">{{ $faq['question'] }}</h5>
                                <p>{{ $faq['answer'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-6 m-bottom-40">
                    <div class="faq-group-card">
                        <h4 class="faq-group-title">For Fans: Support Talent with Ease</h4>

                        @foreach ($fanFaqs as $faq)
                            <div class="question">
                                <h5 class="h5-sm">{{ $faq['question'] }}</h5>
                                <p>{{ $faq['answer'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 text-center">
                    <a href="{{ route('home') }}#faqs-1" class="btn btn-green">Back to Home FAQs</a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
    <style>
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

        .faq-group-card {
            background: #fff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            height: 100%;
        }

        .faq-group-title {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: #333;
        }

        .faq-group-card .question {
            margin-bottom: 20px;
        }

        .faq-group-card .question:last-child {
            margin-bottom: 0;
        }

        .faq-group-card .question h5 {
            color: #333;
            margin-bottom: 8px;
        }

        .faq-group-card .question p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 0;
        }
    </style>
@endpush
