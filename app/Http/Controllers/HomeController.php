<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Collection;

class HomeController extends Controller
{
    /**
     * Display the homepage with latest blog posts.
     */
    public function index()
    {
        $latestBlogs = Blog::published()
            ->latest('published_at')
            ->take(3)
            ->get();

        $featuredFaqs = $this->getAllFaqs()
            ->shuffle()
            ->take(6)
            ->values();

        return view('home', compact('latestBlogs', 'featuredFaqs'));
    }

    /**
     * Display the full FAQ page.
     */
    public function faqs()
    {
        $allFaqs = $this->getAllFaqs();
        $creatorFaqs = $allFaqs->where('audience', 'For Creators')->values();
        $fanFaqs = $allFaqs->where('audience', 'For Fans')->values();

        return view('faqs', compact('creatorFaqs', 'fanFaqs'));
    }

    /**
     * Display the about page.
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Display the contact page.
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * Display the privacy policy page.
     */
    public function privacyPolicy()
    {
        return view('privacy-policy');
    }

    /**
     * Get all FAQs for creators and fans.
     */
    private function getAllFaqs(): Collection
    {
        return collect([
            [
                'audience' => 'For Creators',
                'question' => 'What is Tazua Africa?',
                'answer' => 'It\'s your "Digital Headquarters." It\'s an all-in-one platform where Kenyan creators host their videos, podcasts, music, or digital content and get paid directly by their community or fans.',
            ],
            [
                'audience' => 'For Creators',
                'question' => 'How do I get paid?',
                'answer' => 'Forget complex international bank transfers. Tazua is built on M-Pesa. You get 70% of every shilling earned, sent instantly to your mobile wallet.',
            ],
            [
                'audience' => 'For Creators',
                'question' => 'Is my work safe?',
                'answer' => 'Yes. When you upload, we create a digital audit trail that proves you are the owner, helping you protect your intellectual property under Kenyan law.',
            ],
            [
                'audience' => 'For Creators',
                'question' => 'How can I grow my income?',
                'answer' => 'You aren\'t limited to just one way to earn. Use Monthly Subscriptions for steady income, Crowdfunding for big projects, or collect Instant Tips from your biggest fans. Share on your other social media platforms.',
            ],
            [
                'audience' => 'For Creators',
                'question' => 'What are "Challenges"?',
                'answer' => 'Showcase your talent in official Tazua challenges (like dance, fashion, music, or comedy), follow the instructions, and compete for cash prizes credited straight to your wallet.',
            ],
            [
                'audience' => 'For Creators',
                'question' => 'How much tax is deducted?',
                'answer' => 'The amount taken depends on your KRA status: with a KRA PIN (Resident), only 5% is withheld from your gross earnings. Without a KRA PIN (Non-Resident), a higher rate of 20% is withheld.',
            ],
            [
                'audience' => 'For Creators',
                'question' => 'Why is the tax deducted?',
                'answer' => 'TazuaAfrica is a compliant "Rights Management Hub". We are legally required to withhold these amounts for Digital Content Monetization as per Kenyan law.',
            ],
            [
                'audience' => 'For Fans',
                'question' => 'How do I support a creator I love?',
                'answer' => 'It\'s as easy as sending a text. You can subscribe for exclusive "Subscribers Only" content or send a quick tip using the M-Pesa prompt right on their profile.',
            ],
            [
                'audience' => 'For Fans',
                'question' => 'Do I need a credit card?',
                'answer' => 'No. Tazua is built for Kenya. Everything from tips to monthly memberships happens via M-Pesa.',
            ],
            [
                'audience' => 'For Fans',
                'question' => 'What do I get for subscribing?',
                'answer' => 'Subscribers get "Premium Content" that isn\'t available to the general public, plus the satisfaction of helping a local creator build a professional career.',
            ],
            [
                'audience' => 'For Fans',
                'question' => 'Can anyone be a creator?',
                'answer' => 'Yes. Everyone on the platform can become a creator. Simply head to the Creator Studio screen to set up your profile and start earning.',
            ],
        ]);
    }
}
