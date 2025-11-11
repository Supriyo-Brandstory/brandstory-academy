@extends('frontend.partial.app')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 col-md-7 text-md-start text-center align-self-center">
                    <h1 class="mb-3 text-blue">Best Digital Marketing Course in Bangalore for Job-ready Learning</h1>
                    <p class="mb-2">Job-ready digital marketing course in Bangalore with 30+ learning modules, 50+
                        AI-powered tools, and industry certifications. We are the best digital marketing institute in
                        Bangalore, collaborating with 1000+ global placement partners. Enroll for a free demo class today!
                    </p>
                    <div class="d-md-flex align-items-center">
                        <div
                            class="outline-btn d-flex me-lg-5 mb-lg-0 my-4 justify-content-md-start justify-content-center">
                            <a href="{{route('contact')}}">Enroll Now </a>
                        </div>
                        <div class="violet-btn d-flex me-lg-5 mb-lg-0 my-4 justify-content-md-start justify-content-center">
                            <a href="{{route('contact')}}">Expert Help</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 col-md-5">
                    <img class="w-100" src="{{asset('frontend/assets/images/courses/Digital-Marketing.webp')}}">
                </div>
            </div>
        </div>
    </section>
    <section class="sp-100">
        <div class="container">
            <h2 class="mb-3 text-lg-start text-center">About <span class="text-violet">BrandStory Academy</span> </h2>
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 px-2 text-center text-lg-start order-2 order-lg-1">
                    <p>BrandStory Academy is a premier digital marketing institute in Bangalore. We provide
                        industry-oriented digital marketing courses in Bangalore, both offline and self-paced learning
                        options. At BrandStory, we are the most successful digital marketing agency, we train our students
                        with industry-relevant skills, providing hands-on project experience, and prepare them to get higher
                        packages and a 100% job guarantee. </p>
                    <p>The digital marketing industry is continuously evolving at a rapid pace. Thus, we provide the most
                        advanced digital marketing course where students are equipped with the latest AI tools and modern
                        marketing methodologies. We help every student to get the real-world insights of the industry, make
                        them job-ready, and place them in 1000+ global partner agencies. We are the top institute offering
                        digital marketing courses for 5+ years, ensuring nothing is missed. We value each candidate and
                        their career prospect with utmost priority. </p>

                </div>
                <div class="col-12 col-lg-6  order-1 order-lg-2">
                    <img src="{{asset('frontend/assets/images/courses/certificate.webp')}}" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>
    <section class="spb-100 why-enroll-coursepage">
        <div class="container">
            <h2 class="mb-3 text-lg-center text-center frame-700">Why Enroll in BrandStory Academy for
                <span class="text-violet ">Digital Marketing Course?</span>
            </h2>
            <p class="frame-700 text-center">BrandStory Academy is one of the leading digital marketing institutes in
                Bangalore, offering an expert-led, industry-focused learning experience. We have the most experienced and
                expert faculty to teach the hooks and crooks of digital marketing. With 1000+ placement partners, we place
                our students in global agencies. </p>
            <div class="row whychoose-boxes ">
                <div class="col-12 col-lg-4 mb-4 ">
                    <div class="box y-top">
                        <img src="{{ asset('frontend/assets/images/courses/certificate.svg') }}" />
                        <h4>Certifications</h4>
                        <p>Earn global recognition and certification from HubSpot, Google Ads, Semrush, etc. These
                            credentials
                            strengthen your digital expertise and make your resume stand out.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mb-4">
                    <div class="box g-top">
                        <img src="{{ asset('frontend/assets/images/courses/live.svg') }}" />
                        <h4>Live Campaign Experience</h4>
                        <p>Get hands-on exposure by running real SEO, PPC, and social media campaigns and analyzing
                            performance metrics under expert guidance and support. </p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mb-4">
                    <div class="box s-top">
                        <img src="{{ asset('frontend/assets/images/courses/career.svg') }}" />
                        <h4>Career Guidance & Placement</h4>
                        <p>Get comprehensive placement support, including resume building, mock interviews, and access to
                            top hiring partners across various industries.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mb-4">
                    <div class="box r-top">
                        <img src="{{ asset('frontend/assets/images/courses/interview.svg') }}" />
                        <h4>Interview Preparation</h4>
                        <p>Participate in expert-led interview workshops to refine your presentation, problem-solving, and
                            communication skills. We get you job-ready with expert guidance. </p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mb-4">
                    <div class="box v-top">
                        <img src="{{ asset('frontend/assets/images/courses/mentorship.svg') }}" />
                        <h4>Mentorship from Industry Experts</h4>
                        <p>Learn directly from seasoned marketing professionals who bring real-world experience and insights
                            to every session. Join group learning and 1-to-1 learning sessions. </p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mb-4">
                    <div class="box o-top">
                        <img src="{{ asset('frontend/assets/images/courses/soft-skill.svg') }}" />
                        <h4>Soft Skills & Personal Branding</h4>
                        <p>Develop essential communication, leadership, and personal branding skills to stand out in the
                            digital industry. We ensure you have the right opportunities to launch your career.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="placement-coursepage">
        <div class="container">
            <h2 class="text-center">Placement Opportunity & <span class="text-violet">Support</span></h2>
            <div class="mt-5">
                <div class="row g-4">
                    <div class="col-12 col-lg-4">
                        <img src="{{ asset('frontend/assets/images/courses/placement1.webp') }}" class="img-fluid" />
                    </div>
                    <div class="col-12 col-lg-4">
                        <img src="{{ asset('frontend/assets/images/courses/placement2.webp') }}" class="img-fluid" />
                    </div>
                    <div class="col-12 col-lg-4">
                        <img src="{{ asset('frontend/assets/images/courses/placement3.webp') }}" class="img-fluid" />
                    </div>
                </div>
                <div class="text-center ">
                    <div class="violet-btn">
                        <a href="http://brandstory-academy.test/contact-us">Explore Placements</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="journy-couresepage sp-100">
        <div class="container">
            <h2 class="text-center frame-700">Map Your Journey from Beginner to <span class="text-violet">Successful
                    Marketer </span></h2>
            <img src="{{ asset('frontend/assets/images/courses/journy.webp') }}" class="img-fluid mt-5" />
        </div>
    </section>
    <section class="curicullmn-coursepage spb-100">
        <div class="container">
            <h2 class="text-center">Digital Marketing Course <span class="text-violet">Curriculum</span></h2>
            <p class="frame-1100 text-center">
                Our digital marketing course curriculum covers 30 industry-oriented modules. Among the best digital
                marketing institutes in Bangalore, we provide the most advanced digital marketing courses with 100%
                placement support. We offer the most affordable digital marketing coaching in Bangalore backed by 10+ 
                years of digital marketing expertise.  
            </p>

            <div class="curriculum-grid">
                <!-- Item 1 -->
                <div class="curr-item">
                    <button class="curr-header" aria-expanded="false">
                        <span>Website Architecture Planning</span>
                        <svg class="chev" viewBox="0 0 24 24">
                            <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="curr-content">
                        <ul>
                            <li>Website Structure and Hierarchy</li>
                            <li>UX/UI Design Fundamentals</li>
                            <li>Landing Page Design Strategy</li>
                            <li>Mobile Responsiveness and User Journey</li>
                            <li>Conversion-focused Layout Design</li>
                            <li>WordPress Website Setup</li>
                            <li>Domain Name Setup</li>
                            <li>Website On-page Basics</li>
                        </ul>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="curr-item">
                    <button class="curr-header" aria-expanded="false">
                        <span>Pay Per Click Ads (PPC)</span>
                        <svg class="chev" viewBox="0 0 24 24">
                            <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="curr-content">
                        <ul>
                            <li>Introduction to Google Ads</li>
                            <li>Set up Google Ads Account</li>
                            <li>Launch Initial Search Campaign</li>
                            <li>Create Ad Groups</li>
                            <li>Advanced keyword Research</li>
                            <li>Create Engaging Ads Content</li>
                            <li>Events & Conversion Tracking</li>
                            <li>Budget Alocation for Campaigns</li>
                            <li>Smart Bidding & Automation Strategy</li>
                            <li>Campaign Optimization for better ROI</li>
                            <li>Create Remarketing Campaigns</li>
                            <li>Product-Based Shopping Campaigns</li>
                            <li>Google Display Network Ads</li>
                            <li>YouTube Video Ads</li>
                            <li>App Promotion on Play Store</li>
                            <li>Google Discovery Ads Setup</li>
                            <li>Competitor Campaign Insights</li>
                            <li>Use Spy Tools- SpyFu & Semrush</li>
                        </ul>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="curr-item">
                    <button class="curr-header" aria-expanded="false">
                        <span>Search Engine Optimization (SEO)</span>
                        <svg class="chev" viewBox="0 0 24 24">
                            <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="curr-content">
                        <ul>
                            <li>Understanding Search Engine Optimization</li>
                            <li>Strategic Keyword Research & Discovery</li>
                            <li>Planning & Executing SEO Campaigns</li>
                            <li>Technical SEO Mastery</li>
                            <li>User-focused Content Creation</li>
                            <li>Quality Backlink Acquisition</li>
                            <li>Competitor SEO Benchmarking</li>
                            <li>Preventing Harmful SEO Practices</li>
                            <li>Website Audit & Analysis</li>
                            <li>Google Ranking System & Algorithms</li>
                            <li>Tracking SEO Success</li>
                            <li>Explore SEO Tools (Ahrefs, Semrush, Moz, and More)</li>
                        </ul>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="curr-item">
                    <button class="curr-header" aria-expanded="false">
                        <span>Google Business Profile (GBP)</span>
                        <svg class="chev" viewBox="0 0 24 24">
                            <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="curr-content">
                        <ul>
                            <li>Local SEO & Google Business Profile</li>
                            <li>Map Pack vs Organic Lisiting</li>
                            <li>Optimize GBP Profile for Visibility</li>
                            <li>Importance of Customer Reviews</li>
                            <li>Building Local Citations</li>
                            <li>GMB Posting & Product Feature</li>
                            <li>Tracking Local Search Rankings</li>
                            <li>Using GMB Insights & Analytics</li>
                            <li>Setting Up Local Google Ads</li>
                        </ul>
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="curr-item">
                    <button class="curr-header" aria-expanded="false">
                        <span>Google Search Console</span>
                        <svg class="chev" viewBox="0 0 24 24">
                            <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="curr-content">
                        <ul>
                            <li>Google Search Console Dashboard</li>
                            <li>Performance: Clicks, Impressions, CTR & Position</li>
                            <li>Identifying SEO Improvements</li>
                            <li>Finding Indexing & Crawling Issues</li>
                            <li>Checking Mobile Usability & Site Experience</li>
                            <li>Finding keyword Opportunities from Queries</li>
                            <li>Monitor Page Speed and Core Web Vitals</li>
                            <li>Inspecting URLs & Submit Indexing</li>
                            <li>Tracking Coverage & Error Fixation</li>
                            <li>Integrate with Google Analytics</li>
                        </ul>
                    </div>
                </div>

                <!-- Item 6 -->
                <div class="curr-item">
                    <button class="curr-header" aria-expanded="false">
                        <span>Google Analytics (GA4)</span>
                        <svg class="chev" viewBox="0 0 24 24">
                            <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="curr-content">
                        <ul>
                            <li>Introduction to Google Analytics 4</li>
                            <li>Setup & Configure GA4 Account</li>
                            <li>Understanding Dimensions & Metrics</li>
                            <li>Tracking Traffic & User Behavior</li>
                            <li>Audience, Acquisition, and Behavior Reports</li>
                            <li>Set Up Goals and Conversion Tracking</li>
                            <li>Monitor Traffic Sources and Campaigns</li>
                            <li>Measuring ROI and Traffic Performance</li>
                        </ul>
                    </div>
                </div>

                <!-- Item 7 -->
                <div class="curr-item">
                    <button class="curr-header" aria-expanded="false">
                        <span>Google Tag Manager (GTM)</span>
                        <svg class="chev" viewBox="0 0 24 24">
                            <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="curr-content">
                        <ul>
                            <li>Introduction to Google Tag Manager (GTM)</li>
                            <li>Set Up Your GTM Account & Containers</li>
                            <li>Understanding Tags, Triggers, and Variables</li>
                            <li>Installing GTM on Website</li>
                            <li>Creating and Managing Custom Tags</li>
                            <li>Tracking Events, Clicks, and Form Submissions</li>
                            <li>Integrating GTM with Google Analytics & Ads</li>
                            <li>Setting Up Conversion Tracking</li>
                        </ul>
                    </div>
                </div>

                <!-- Item 8 -->
                <div class="curr-item">
                    <button class="curr-header" aria-expanded="false">
                        <span>Facebook Marketing</span>
                        <svg class="chev" viewBox="0 0 24 24">
                            <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="curr-content">
                        <ul>
                            <li>Introduction to Facebook Marketing</li>
                            <li>Create & Optimizing Facebook Page</li>
                            <li>Introduction to Meta Ads Manager</li>
                            <li>Creating & Managing Meta Ad Campaigns</li>
                            <li>Audience Targeting & Custom Audiences</li>
                            <li>Budgeting and Bidding Strategies</li>
                            <li>Crafting Engaging Ad Creatives</li>
                            <li>Facebook Pixel Setup and Tracking</li>
                            <li>A/B Testing for Ads Performance</li>
                            <li>Measuring Campaign Insights and ROI</li>
                        </ul>
                    </div>
                </div>

                <!-- Item 9 -->
                <div class="curr-item">
                    <button class="curr-header" aria-expanded="false">
                        <span>Facebook Marketing</span>
                        <svg class="chev" viewBox="0 0 24 24">
                            <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="curr-content">
                        <ul>
                            <li>Introduction to Facebook Marketing</li>
                            <li>Create & Optimizing Facebook Page</li>
                            <li>Content Strategy: Posts, Stories, and Reels</li>
                            <li>Introduction to Meta Ads Manager</li>
                            <li>Creating & Managing Meta Ad Campaigns</li>
                            <li>Audience Targeting & Custom Audiences</li>
                            <li>Budgeting and Bidding Strategies</li>
                            <li>Crafting Engaging Ad Creatives</li>
                            <li>Facebook Pixel Setup and Tracking</li>
                            <li>A/B Testing for Ads Performance</li>
                            <li>Measuring Campaign Insights and ROI</li>
                        </ul>
                    </div>
                </div>

                <!-- Item 10 -->
                <div class="curr-item">
                    <button class="curr-header" aria-expanded="false">
                        <span>Instagram Marketing</span>
                        <svg class="chev" viewBox="0 0 24 24">
                            <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="curr-content">
                        <ul>
                            <li>Introduction to Instagram for Business</li>
                            <li>Set Up and Optimize Business Profiles</li>
                            <li>Content Strategy: Posts, Stories, and Reels</li>
                            <li>Hashtag Research and Best Practices</li>
                            <li>Influencer Collaborations & Partnerships</li>
                            <li>Instagram Ad Campaigns (Meta Ads)</li>
                            <li>Audience Engagement Tactics</li>
                            <li>Tracking Insights and Analytics</li>
                            <li>Converting Followers into Customers</li>
                        </ul>
                    </div>
                </div>

                <!-- Item 11 -->
                <div class="curr-item">
                    <button class="curr-header" aria-expanded="false">
                        <span>LinkedIn Marketing</span>
                        <svg class="chev" viewBox="0 0 24 24">
                            <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="curr-content">
                        <ul>
                            <li>Introduction to LinkedIn for Business</li>
                            <li>Optimizing Personal & Company Profiles</li>
                            <li>Building a Strong Professional Network</li>
                            <li>Content Strategy: Posts, Articles, and Videos</li>
                            <li>LinkedIn Groups for Engagement</li>
                            <li>Sponsored Content and InMail Campaigns</li>
                            <li>Targeting Decision Makers and B2B Audiences</li>
                            <li>Generating Leads through LinkedIn Ads</li>
                            <li>Analytics and Performance Tracking</li>
                            <li>Building Thought Leadership on LinkedIn</li>
                        </ul>
                    </div>
                </div>

                <!-- Item 12 -->
                <div class="curr-item">
                    <button class="curr-header" aria-expanded="false">
                        <span>Twitter (X) Marketing</span>
                        <svg class="chev" viewBox="0 0 24 24">
                            <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="curr-content">
                        <ul>
                            <li>Introduction to Twitter (X)</li>
                            <li>Set Up & Optimizing Business Profiles</li>
                            <li>Understanding the Twitter Algorithm</li>
                            <li>Crafting Engaging Tweets & Threads</li>
                            <li>Hashtag Research & Trending Topics</li>
                            <li>Audience Engagement & Community Building</li>
                            <li>Running Twitter Ad Campaigns</li>
                            <li>Using Twitter Analytics for Insights</li>
                            <li>Collaborations & Influencer Marketing</li>
                            <li>Measuring Performance and ROI</li>
                        </ul>
                    </div>
                </div>

                <!-- Item 13 -->
                <div class="curr-item">
                    <button class="curr-header" aria-expanded="false">
                        <span>Pinterest Marketing</span>
                        <svg class="chev" viewBox="0 0 24 24">
                            <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="curr-content">
                        <ul>
                            <li>Introduction to Pinterest for Business</li>
                            <li>Set Up and Optimizing Business Accounts</li>
                            <li>Understanding Pinterest Algorithms</li>
                            <li>Creating Eye-Catching Pins and Boards</li>
                            <li>Keyword Research for Pinterest SEO</li>
                            <li>Driving Traffic through Rich Pins</li>
                            <li>Running Pinterest Ad Campaigns</li>
                            <li>Analytics to Measure Performance</li>
                        </ul>
                    </div>
                </div>

                <!-- Item 14 -->
                <div class="curr-item">
                    <button class="curr-header" aria-expanded="false">
                        <span>WhatsApp Marketing</span>
                        <svg class="chev" viewBox="0 0 24 24">
                            <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="curr-content">
                        <ul>
                            <li>Introduction to WhatsApp Business</li>
                            <li>Set Up & Optimizing Business Profiles</li>
                            <li>Understanding WhatsApp Business Tools</li>
                            <li>Creating Broadcast Lists & Groups for Engagement</li>
                            <li>Using Catalogs to Showcase Products or Services</li>
                            <li>Responses with Quick Replies & Chatbots</li>
                            <li>Integrating WhatsApp with Facebook & Instagram</li>
                            <li>Running Click-to-WhatsApp Ad Campaigns</li>
                            <li>Tracking Engagement and Measuring Results</li>
                        </ul>
                    </div>
                </div>

                <!-- Item 15 -->
                <div class="curr-item">
                    <button class="curr-header" aria-expanded="false">
                        <span>Performance Marketing</span>
                        <svg class="chev" viewBox="0 0 24 24">
                            <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="curr-content">
                        <ul>
                            <li>Introduction to Performance Marketing</li>
                            <li>Key Metrics: CPC, CPA, CTR, and ROI</li>
                            <li>Set Up Multi-Channel Campaigns</li>
                            <li>Audience Targeting & Segmentation</li>
                            <li>Budget Planning & Bid Management</li>
                            <li>Conversion Tracking & Attribution</li>
                            <li>Retargeting and Remarketing Strategies</li>
                            <li>Optimizing Campaigns for Better ROI</li>
                            <li>Tools for Performance Analysis & Reporting</li>
                            <li>Scaling Successful Campaigns</li>
                        </ul>
                    </div>
                </div>

                <!-- Item 16 -->
                <div class="curr-item">
                    <button class="curr-header" aria-expanded="false">
                        <span>YouTube Marketing</span>
                        <svg class="chev" viewBox="0 0 24 24">
                            <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="curr-content">
                        <ul>
                            <li>Introduction to YouTube for Business</li>
                            <li>Set Up and Optimize a YouTube Channel</li>
                            <li>Understanding YouTube SEO</li>
                            <li>Creating Engaging Video Content</li>
                            <li>Keyword Research for Video Titles & Tags</li>
                            <li>Eye-Catching Thumbnails & Descriptions</li>
                            <li>Running YouTube Ad Campaigns</li>
                            <li>Building Subscribers & Audience Engagement</li>
                            <li>YouTube Analytics and Insights</li>
                            <li>Monetization & Collaboration Strategies</li>
                        </ul>
                    </div>
                </div>

                <!-- Item 17 -->
                <div class="curr-item">
                    <button class="curr-header" aria-expanded="false">
                        <span>Canva & Adobe Photoshop</span>
                        <svg class="chev" viewBox="0 0 24 24">
                            <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="curr-content">
                        <ul>
                            <li>Introduction to Visual Design Principles</li>
                            <li>Overview of Canva and Adobe Photoshop</li>
                            <li>Designing Social Media Graphics & Creatives</li>
                            <li>Professional Banners, Posters, and Thumbnails</li>
                            <li>Using Templates & Layers Effectively</li>
                            <li>Photo Editing and Background Removal</li>
                            <li>Typography, Color Theory, and Brand Consistency</li>
                            <li>Designing for Digital Campaigns & Websites</li>
                            <li>Best Practices for Visual Branding</li>
                        </ul>
                    </div>
                </div>

                <!-- Item 18 -->
                <div class="curr-item">
                    <button class="curr-header" aria-expanded="false">
                        <span>Blogging</span>
                        <svg class="chev" viewBox="0 0 24 24">
                            <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="curr-content">
                        <ul>
                            <li>Introduction to Blogging and Its Importance</li>
                            <li>Choosing the Right Niche & Audience</li>
                            <li>Keyword Research for Blog Topics</li>
                            <li>Structuring Blog Posts for SEO and Readability</li>
                            <li>Write Engaging and Valuable Content</li>
                            <li>Optimizing Titles, Meta Tags, & Internal Links</li>
                            <li>Adding Visuals & Multimedia for Engagement</li>
                            <li>Promoting Blogs Through Social Media</li>
                            <li>Measuring Blog Performance with Analytics</li>
                            <li>Monetization and Content Scaling Strategies</li>
                        </ul>
                    </div>
                </div>

                <!-- Item 19 -->
                <div class="curr-item">
                    <button class="curr-header" aria-expanded="false">
                        <span>Video Editing</span>
                        <svg class="chev" viewBox="0 0 24 24">
                            <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="curr-content">
                        <ul>
                            <li>Video Editing and Storytelling</li>
                            <li>Editing Software (Premiere Pro, Final Cut, CapCut, etc.)</li>
                            <li>Importing, Trimming, & Organizing Footage</li>
                            <li>Adding Transitions, Effects, and Soundtracks</li>
                            <li>Color Correction and Audio Balancing</li>
                            <li>Creating Intros, Outros, and Lower Thirds</li>
                            <li>Editing for Different Platforms (YouTube, Instagram, Ads)</li>
                            <li>Exporting Videos in Optimal Formats and Resolutions</li>
                            <li>Adding Captions and Subtitles for Accessibility</li>
                        </ul>
                    </div>
                </div>

                <!-- Item 20 -->
                <div class="curr-item">
                    <button class="curr-header" aria-expanded="false">
                        <span>Influencer Marketing</span>
                        <svg class="chev" viewBox="0 0 24 24">
                            <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="curr-content">
                        <ul>
                            <li>Introduction to Influencer Marketing</li>
                            <li>Understanding the Role of Influencers</li>
                            <li>Identifying & Selecting the Right Influencers</li>
                            <li>Negotiation & Collaboration Strategies</li>
                            <li>Planning & Executing Influencer Campaigns</li>
                            <li>Content Co-Creation & Brand Messaging</li>
                            <li>Measuring Reach, Engagement, & ROI</li>
                            <li>Legal & Ethical Aspects of Influencer Marketing</li>
                            <li>Building Long-Term Influencer Partnerships</li>
                            <li>Case Studies & Campaign Optimization</li>
                        </ul>
                    </div>
                </div>

                <!-- Item 21 -->
                <div class="curr-item">
                    <button class="curr-header" aria-expanded="false">
                        <span>Affiliate Marketing</span>
                        <svg class="chev" viewBox="0 0 24 24">
                            <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="curr-content">
                        <ul>
                            <li>Introduction to Affiliate Marketing</li>
                            <li>How Affiliate Programs Work</li>
                            <li>Choosing Affiliate Networks and Partners</li>
                            <li>Set Up an Affiliate Program for Your Brand</li>
                            <li>Strategies to Promote Affiliate Links Effectively</li>
                            <li>Tracking Clicks, Conversions, and Commissions</li>
                            <li>Optimizing Landing Pages for Better Results</li>
                            <li>Understanding Cookies and Attribution</li>
                            <li>Compliance & Ethical Best Practices</li>
                            <li>Scaling and Managing Affiliate Relationships</li>
                        </ul>
                    </div>
                </div>

                <!-- Item 22 -->
                <div class="curr-item">
                    <button class="curr-header" aria-expanded="false">
                        <span>Meta Ads Manager</span>
                        <svg class="chev" viewBox="0 0 24 24">
                            <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="curr-content">
                        <ul>
                            <li>Introduction to Meta Advertising (Facebook & Instagram)</li>
                            <li>Understanding Meta Ads Manager Interface</li>
                            <li>Setting Up Business Manager and Ad Accounts</li>
                            <li>Creating Target Audiences Using Custom & Lookalike Options</li>
                            <li>Crafting High-Converting Ad Creatives & Copy</li>
                            <li>Setting Campaign Objectives (Awareness, Traffic, Conversions, etc.)</li>
                            <li>A/B Testing for Ad Optimization</li>
                            <li>Understanding Pixel Integration & Tracking</li>
                            <li>Analyzing Campaign Performance</li>
                            <li>Retargeting Strategies for Maximum ROI</li>
                        </ul>
                    </div>
                </div>

                <!-- Item 23 -->
                <div class="curr-item">
                    <button class="curr-header" aria-expanded="false">
                        <span>Google Adsense</span>
                        <svg class="chev" viewBox="0 0 24 24">
                            <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="curr-content">
                        <ul>
                            <li>Introduction to Google AdSense</li>
                            <li>Set Up and Verify AdSense Account</li>
                            <li>Choosing the Right Website Niche</li>
                            <li>Ad Placement Strategies for Maximum Revenue</li>
                            <li>Ad Types: Display, In-feed, and In-article</li>
                            <li>Policies & Guidelines for AdSense Approval</li>
                            <li>Tracking Earnings & Performance Reports</li>
                            <li>Optimizing CTR and RPM for Higher Returns</li>
                            <li>Best Practices for AdSense Account</li>
                        </ul>
                    </div>
                </div>

                <!-- Item 24 -->
                <div class="curr-item">
                    <button class="curr-header" aria-expanded="false">
                        <span>E-mail Marketing</span>
                        <svg class="chev" viewBox="0 0 24 24">
                            <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="curr-content">
                        <ul>
                            <li>Introduction to Email Marketing</li>
                            <li>Building & Segmenting an Email List</li>
                            <li>Email Campaign Types (Newsletters, Promotions, Drip Campaigns)</li>
                            <li>Crafting Compelling Subject Lines & Email Copy</li>
                            <li>Designing Responsive Email Templates</li>
                            <li>Setting Up Automation Workflows & Triggers</li>
                            <li>Personalization & Dynamic Content Strategies</li>
                            <li>Campaign Performance (Open Rate, CTR, Conversions)</li>
                            <li>Avoiding Spam Filters & Ensuring Deliverability</li>
                            <li>Email Marketing Tools: Mailchimp, HubSpot, and Others</li>
                        </ul>
                    </div>
                </div>

                <!-- Item 25 -->
                <div class="curr-item">
                    <button class="curr-header" aria-expanded="false">
                        <span>Content Marketing</span>
                        <svg class="chev" viewBox="0 0 24 24">
                            <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="curr-content">
                        <ul>
                            <li>Introduction to Content Marketing</li>
                            <li>Audience Personas and Content Intent</li>
                            <li>Planning & Creating a Content Calendar</li>
                            <li>Blogs, Videos, Infographics, & Case Studies</li>
                            <li>Crafting Engaging & SEO-Optimized Content</li>
                            <li>Storytelling Techniques for Brand Connection</li>
                            <li>Content Distribution & Promotion Strategies</li>
                            <li>Repurposing Content for Multiple Platforms</li>
                            <li>Measuring Content Performance and ROI</li>
                            <li>Tools for Content Creation & Management</li>
                        </ul>
                    </div>
                </div>

                <!-- Item 26 -->
                <div class="curr-item">
                    <button class="curr-header" aria-expanded="false">
                        <span>Digital Marketing Tools</span>
                        <svg class="chev" viewBox="0 0 24 24">
                            <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="curr-content">
                        <ul>
                            <li>Introduction to Digital Marketing Tools</li>
                            <li>SEO Tools: SEMrush, Ahrefs, Moz, and Ubersuggest</li>
                            <li>PPC Tools: Google Ads Editor, SpyFu, and Optmyzr</li>
                            <li>Social Media Tools: Buffer, Hootsuite, and Meta Business Suite</li>
                            <li>Analytics Tools: Google Analytics, Microsoft Clarity, and Hotjar</li>
                            <li>Email Marketing Tools: Mailchimp, HubSpot, and Sendinblue</li>
                            <li>Conversion Optimization Tools: Crazy Egg and Optimizely</li>
                            <li>Competitor Analysis and Benchmarking Tools</li>
                            <li>AI-Powered Marketing Tools and Automation Platforms</li>
                        </ul>
                    </div>
                </div>

                <!-- Item 28 -->
                <div class="curr-item">
                    <button class="curr-header" aria-expanded="false">
                        <span>Conversion Rate Optimization (CRO)</span>
                        <svg class="chev" viewBox="0 0 24 24">
                            <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="curr-content">
                        <ul>
                            <li>Introduction to Conversion Rate Optimization</li>
                            <li>Understanding User Behavior and Conversion</li>
                            <li>Conversion Barriers Using Analytics Tools</li>
                            <li>Effective Landing Pages for Higher Conversions</li>
                            <li>A/B Testing and Multivariate Testing</li>
                            <li>Crafting Persuasive CTAs and Page Copy</li>
                            <li>Using Heatmaps and Session Recordings</li>
                            <li>Mobile Optimization for Better Conversions</li>
                            <li>Tracking and Measuring CRO Metrics</li>
                            <li>Continuous Improvement Strategies</li>
                        </ul>
                    </div>
                </div>

                <!-- Item 29 -->
                <div class="curr-item">
                    <button class="curr-header" aria-expanded="false">
                        <span>E-commerce Marketing</span>
                        <svg class="chev" viewBox="0 0 24 24">
                            <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="curr-content">
                        <ul>
                            <li>Introduction to E-commerce Marketing</li>
                            <li>Online Buyer’s Journey</li>
                            <li>Set Up & Optimize Product Listings</li>
                            <li>SEO for E-commerce Websites (Product & Category Pages)</li>
                            <li>Running Google Shopping and Meta Ads for Products</li>
                            <li>Email Automation for Cart Recovery</li>
                            <li>Conversion Rate Optimization for Stores</li>
                            <li>Integrating Payment Gateways and Trust Signals</li>
                            <li>Analytics and Tracking for Performance</li>
                            <li>Scaling Sales Through Affiliate Marketing</li>
                        </ul>
                    </div>
                </div>

                <!-- Item 30 -->
                <div class="curr-item">
                    <button class="curr-header" aria-expanded="false">
                        <span>Sales Funnel</span>
                        <svg class="chev" viewBox="0 0 24 24">
                            <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="curr-content">
                        <ul>
                            <li>Sales Funnels & Their Importance</li>
                            <li>Understanding Stages: Awareness, Interest, Decision & Action</li>
                            <li>Mapping Customer Journeys</li>
                            <li>Create Lead Magnets and Landing Pages</li>
                            <li>Email Nurturing Sequences</li>
                            <li>Retargeting Strategies to Re-engage Prospects</li>
                            <li>Optimizing Each Funnel for Maximum Conversions</li>
                            <li>Tracking Funnel Performance Using Analytics</li>
                            <li>Automating Funnels with CRM and Marketing</li>
                            <li>Scaling and Refining Funnels Based on Data</li>
                        </ul>
                    </div>
                </div>

                <!-- Item 30 -->
                <div class="curr-item">
                    <button class="curr-header" aria-expanded="false">
                        <span>Microsoft Clarity</span>
                        <svg class="chev" viewBox="0 0 24 24">
                            <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="curr-content">
                        <ul>
                            <li>Introduction to Microsoft Clarity</li>
                            <li>Set Up Clarity on Your Website</li>
                            <li>Understanding Heatmaps & Click Tracking</li>
                            <li>Session Recordings: Analyzing User Behavior</li>
                            <li>Identifying Rage Clicks, Dead Clicks, and Issues</li>
                            <li>Integrating Clarity with Google Analytics Insights</li>
                            <li>Using Filters to Segment and Analyze User Data</li>
                            <li>Tracking Conversions & User Journeys</li>
                            <li>Leveraging Insights to Improve UX</li>
                            <li>Best Practices for Website Optimization</li>
                        </ul>
                    </div>
                </div>


                <!-- Continue same structure for all remaining items -->
                <!-- LinkedIn, Twitter, Pinterest, WhatsApp, Performance, YouTube, Canva, Blogging, Video Editing, Influencer, Affiliate, Meta Ads, AdSense, Email, Content, Advanced Tools, Tag Manager, CRO, E-commerce, Sales Funnel, Microsoft Clarity -->
            </div>
        </div>
    </section>
    <section class="Benefit-coursepage">
        <div class="container">
            <h2 class="frame-800 text-center">Who Can Benefit from Our Digital Marketing Course in <span
                    class="text-violet">Bangalore?</span></h2>
            <p class="text-center frame-800">Our digital marketing course in Bangalore is designed for people who want to
                become market-ready digital marketing professionals. We provide industry-recognized certification and
                hands-on skills to help you excel in your career. </p>

            <!-- Swiper CSS -->


            <section class="user-type-section">
                <div class="container">
                    <div class="swiper user-type-slider">
                        <div class="swiper-wrapper">

                            <!-- Slide 1 -->
                            <div class="swiper-slide">
                                <div class="user-card">
                                    <div class="imgbox">
                                        <img src="{{ asset('frontend/assets/images/courses/student.svg')}}"
                                            alt="Digital Marketing Course in Bangalore for Students & Graduates">
                                    </div>
                                    <h4>Students & Graduates</h4>

                                </div>
                            </div>

                            <!-- Slide 2 -->
                            <div class="swiper-slide">
                                <div class="user-card">
                                    <div class="imgbox">
                                        <img src="{{ asset('frontend/assets/images/courses/content.png')}}"
                                            alt="Digital Marketing Course in Bangalore for Content Creators & Bloggers">
                                    </div>

                                    <h4>Content Creators & Bloggers</h4>
                                </div>
                            </div>

                            <!-- Slide 3 -->
                            <div class="swiper-slide">
                                <div class="user-card">
                                    <div class="imgbox">
                                        <img src="{{ asset('frontend/assets/images/courses/Business.png')}}"
                                            alt="Digital Marketing Course in Bangalore for Business Owners">
                                    </div>

                                    <h4>Business Owners</h4>
                                </div>
                            </div>


                            <div class="swiper-slide">
                                <div class="user-card">
                                    <div class="imgbox">

                                        <img src="{{ asset('frontend/assets/images/courses/Startup.png')}}"
                                            alt="Startup Founders">
                                    </div>

                                    <h4>Startup Founders</h4>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="user-card">
                                    <div class="imgbox">

                                        <img src="{{ asset('frontend/assets/images/courses/Startup.png')}}"
                                            alt="Digital Marketing Course in Bangalore for Startup Founders">
                                    </div>

                                    <h4>Startup Founders</h4>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="user-card">
                                    <div class="imgbox">

                                        <img src="{{ asset('frontend/assets/images/courses/jobseeker.png')}}"
                                            alt="Digital Marketing Course in Bangalore for Job Seekers">
                                    </div>

                                    <h4>Job Seekers</h4>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="user-card">
                                    <div class="imgbox">

                                        <img src="{{ asset('frontend/assets/images/courses/Startup.png')}}"
                                            alt="Digital Marketing Course in Bangalore for Career Changers">
                                    </div>

                                    <h4>Career Changers</h4>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="user-card">
                                    <div class="imgbox">

                                        <img src="{{ asset('frontend/assets/images/courses/Startup.png')}}"
                                            alt="Digital Marketing Course in Bangalore for Homemakers">
                                    </div>

                                    <h4>Homemakers</h4>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </section>

            <!-- Swiper JS -->


        </div>
    </section>
    <section class="Costs-coursepage">
        <div class="container">
            <h2 class="text-center mb-4 frame-800">Professional Digital Marketing Training in Bangalore at <span
                    class="text-violet">Affordable Costs</span></h2>
            <p class="text-center frame-800 mb-5">At BrandStory Academy, we provide the most affordable digital marketing
                training in Bangalore. You can avail easy EMI and part payment options along with industry-grade
                certifications and a placement guarantee. </p>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="row b-box">
                        <div class="col-lg-8 col-6 px-0">
                            <div class="grid-two">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/g-w.svg')}}" alt="Digital Marketing Course in Bangalore Details">
                                    <p>30+ Modules</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/g-w.svg')}}" alt="Digital Marketing Course in Bangalore Details">
                                    <p>14+ Certifications</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/g-w.svg')}}" alt="Digital Marketing Course in Bangalore Details">
                                    <p>20+ Live Projects</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/g-w.svg')}}" alt="Digital Marketing Course in Bangalore Details">
                                    <p>6 Month Course</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/g-w.svg')}}" alt="Digital Marketing Course in Bangalore Details">
                                    <p>10+ Case Studies</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/g-w.svg')}}" alt="Digital Marketing Course in Bangalore Details">
                                    <p>30+ Tools </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 px-0">
                            <img src="{{ asset('frontend/assets/images/courses/classroom-learning.png')}}" class="img-fluid msm">

                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="row b-box">
                        <div class="col-lg-8 col-6 px-0">
                            <div class="grid-two">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/self.svg')}}" alt="">
                                    <p>30+ Modules</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/self.svg')}}" alt="Self-paced Digital Marketing Course in Bangalore Details">
                                    <p>14+ Certifications</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/self.svg')}}" alt="Self-paced Digital Marketing Course in Bangalore Details">
                                    <p>20+ Live Projects</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/self.svg')}}" alt="Self-paced Digital Marketing Course in Bangalore Details">
                                    <p>6 Month Course</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/self.svg')}}" alt="Self-paced Digital Marketing Course in Bangalore Details">
                                    <p>10+ Case Studies</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/self.svg')}}" alt="Self-paced Digital Marketing Course in Bangalore Details">
                                    <p>30+ Tools </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 px-0">
                            <img src="{{ asset('frontend/assets/images/courses/self-paced-learning.png')}}" class="img-fluid msm">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="Certified-coursepage sp-100">

        <div class="container">
            <h2 class="text-center frame mb-4">From Fresher to Experienced Professional Get
                Certified as a <span class="text-violet">Digital Marketing Expert!</span></h2>
            <p class="text-center frame mb-5">Earn a recognized digital marketing certificate from Brandstory Academy after
                completing digital marketing course in Bangalore. With our certificate highlighting your expertise, you can
                always standout in the job market.</p>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/courses/certificate.webp')}}"
                        alt="certificate">
                </div>
                <div class="col-12 col-lg-6">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/courses/certificate-2.webp')}}"
                        alt="certificate">
                </div>
            </div>

        </div>
    </section>
    <section class="Tools-coursepage">
        <div class="container">
            <h2 class="text-center mb-4 frame">Earn Certificates for Latest <span class="text-violet">Industry-oriented
                    Tools</span></h2>

            <div class="grid-four">
                <div class="img-box">
                    <img src="{{ asset('frontend/assets/images/courses/googleanalytics.png')}}" alt="googleanalytics" />
                </div>
                <div class="img-box">
                    <img src="{{ asset('frontend/assets/images/courses/semrush.png')}}" alt="semrush" />
                </div>
                <div class="img-box">
                    <img src="{{ asset('frontend/assets/images/courses/hubspot.png')}}" alt="hubspot" />
                </div>
                <div class="img-box">
                    <img src="{{ asset('frontend/assets/images/courses/g-ads.png')}}" alt="gads" />
                </div>

            </div>

        </div>
    </section>


<section class="sp-100 Marketing-Tools-coursepage">
        <div class="container">
            <h2 class="text-center ">Learn Latest AI Automation & <span class="text-violet">Digital <br>Marketing Tools</span></h2>
            <p class="text-center mb-5">Get hands-on experience of 30+ advanced marketing tools</p>
            <div class="swiper brandlogo1" data-aos="fade-up">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/g-analytics.png')}}"
                                class="img-fluid" alt="Digital Marketing Course Curriculum Tools - Google Analytics 4">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/ahrefs.png')}}"
                                class="img-fluid" alt="Digital Marketing Course Curriculum Tools - Ahrefs">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/surfer.png')}}"
                                class="img-fluid" alt="Digital Marketing Course Curriculum Tools - Surfer SEO">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/rivierside.png')}}"
                                class="img-fluid" alt="Digital Marketing Course Curriculum Tools - RivierSide">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/active-campaign.png')}}"
                                class="img-fluid" alt="Digital Marketing Course Curriculum Tools - Active Campaign">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/semrush.png')}}"
                                class="img-fluid" alt="Digital Marketing Course Curriculum Tools - SEMrush">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/adcreativeai.png')}}"
                                class="img-fluid" alt="Digital Marketing Course Curriculum Tools - Ad Creative AI">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/buzzsumo.png')}}"
                                class="img-fluid" alt="Digital Marketing Course Curriculum Tools - Buzzsumo">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/canva.png')}}"
                                class="img-fluid" alt="Digital Marketing Course Curriculum Tools - Canva">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/chatgpt.png')}}"
                                class="img-fluid" alt="Digital Marketing Course Curriculum Tools - ChatGPT">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/gmbeverywhere.png')}}"
                                class="img-fluid" alt="Digital Marketing Course Curriculum Tools - GMB Everywhere">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/google-ads.png')}}"
                                class="img-fluid" alt="Digital Marketing Course Curriculum Tools - Google Ads">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/google-business-profile.png')}}"
                                class="img-fluid" alt="Digital Marketing Course Curriculum Tools - Google Business Profile">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/google-search-console.png')}}"
                                class="img-fluid" alt="Digital Marketing Course Curriculum Tools - Google Search Console">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/grammarly.png')}}"
                                class="img-fluid" alt="Digital Marketing Course Curriculum Tools - Grammarly">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/hootsuite.png')}}"
                                class="img-fluid" alt="Digital Marketing Course Curriculum Tools - Hootsuite">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/hubspot.png')}}"
                                class="img-fluid" alt="Digital Marketing Course Curriculum Tools - Hubspot">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/mailchimp.png')}}"
                                class="img-fluid" alt="Digital Marketing Course Curriculum Tools - MailChimp">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/meta.png')}}"
                                class="img-fluid" alt="Digital Marketing Course Curriculum Tools - Meta Ads Manager">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/microsoft-clarity.png')}}"
                                class="img-fluid" alt="Digital Marketing Course Curriculum Tools - Microsoft Clarity">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/moz-pro.png')}}"
                                class="img-fluid" alt="Digital Marketing Course Curriculum Tools - Moz Pro">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/screaming-frog.png')}}"
                                class="img-fluid" alt="Digital Marketing Course Curriculum Tools - Screaming Frog">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/socialbee.png')}}"
                                class="img-fluid" alt="Digital Marketing Course Curriculum Tools - Social Bee">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/spyfu.png')}}"
                                class="img-fluid" alt="Digital Marketing Course Curriculum Tools - SpyFu">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/wordstream.png')}}"
                                class="img-fluid" alt="Digital Marketing Course Curriculum Tools - WordStream">
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

<section class="spb-100 bg-lightblue1">
        <div class="container">
            <div class="placement-partner">
                <p>Our Placement </p>
                <p style="color: #A184F9;">Partners</p>
            </div>
            <div class="swiper brandlogo1" data-aos="fade-up">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/placement/brand1.svg')}}"
                                class="img-fluid" alt="Our Partner Company for Placements">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/placement/brand2.svg')}}"
                                class="img-fluid" alt="Our Partner Company for Placements">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/placement/brand3.svg')}}"
                                class="img-fluid" alt="Our Partner Company for Placements">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/placement/brand4.svg')}}"
                                class="img-fluid" alt="Our Partner Company for Placements">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/placement/brand5.svg')}}"
                                class="img-fluid" alt="Our Partner Company for Placements">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/placement/brand6.svg')}}"
                                class="img-fluid" alt="Our Partner Company for Placements">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/placement/brand7.svg')}}"
                                class="img-fluid" alt="Our Partner Company for Placements">
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <section class="testimonial-section" id="testimony">
        <h2 class="text-center mb-4">See What Our <span class="text-violet">Alumni Say</span></h2>
        <div class="testimonial-row left-to-right">
            <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>Recently had the pleasure of experiencing BrandStory Academy, and I must say, it exceeded my expectations. From the moment I enrolled, the academy’s dedication to nurturing professional growth and providing high-quality education was evident.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Jerophin Jeevitha
                </div>
            </div>
             <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>BrandStory Academy offers a strong foundation in digital marketing through a hands-on approach. Right from the start, I worked on real agency projects, gaining practical experience that many other courses lack. The six-month internship following the course was a transformative experience, allowing me to refine my skills in a real work environment.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Sandra R
                </div>
            </div>
             <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>I recently completed my Digital Marketing course at Brandstory Academy, and it was an excellent choice for my professional growth. The program was structured effectively, addressing all the key components of digital marketing. What impressed me the most was the 6-month internship offered with Brandstory Digital Marketing company.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Ayesha Ms
                </div>
            </div>
             <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>BrandStory Academy stands out for its focus on practical training, engaging students with real client projects from day one for an immersive learning experience. The trainers are both knowledgeable and approachable, and the extended six-month internship offers valuable industry exposure. It’s an excellent place to start a career in digital marketing!</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Maria Sherly
                </div>
            </div>
             <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>Enrolling at Brandstory Academy was an eye-opening experience. The course combines academic rigor with hands-on practice for the Indian market. With dedicated mentors and real projects, my digital marketing skills have flourished, inspiring my ambitions.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Gowtham AG
                </div>
            </div> 
            <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>Brandstory Academy is a leading digital marketing institute with a practical curriculum. They teach the fundamentals of digital marketing, offer a 6-month internship, and assist with placements. Joining is a decision you won’t regret.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Shobika Akilan
                </div>
            </div>
            
            <!-- duplicate for smooth infinite loop -->
            <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>Recently had the pleasure of experiencing BrandStory Academy, and I must say, it exceeded my expectations. From the moment I enrolled, the academy’s dedication to nurturing professional growth and providing high-quality education was evident.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Jerophin Jeevitha
                </div>
            </div>
             <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>BrandStory Academy offers a strong foundation in digital marketing through a hands-on approach. Right from the start, I worked on real agency projects, gaining practical experience that many other courses lack. The six-month internship following the course was a transformative experience, allowing me to refine my skills in a real work environment.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Sandra R
                </div>
            </div>
             <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>I recently completed my Digital Marketing course at Brandstory Academy, and it was an excellent choice for my professional growth. The program was structured effectively, addressing all the key components of digital marketing. What impressed me the most was the 6-month internship offered with Brandstory Digital Marketing company.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Ayesha Ms
                </div>
            </div>
             <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>BrandStory Academy stands out for its focus on practical training, engaging students with real client projects from day one for an immersive learning experience. The trainers are both knowledgeable and approachable, and the extended six-month internship offers valuable industry exposure. It’s an excellent place to start a career in digital marketing!</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Maria Sherly
                </div>
            </div>
             <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>Enrolling at Brandstory Academy was an eye-opening experience. The course combines academic rigor with hands-on practice for the Indian market. With dedicated mentors and real projects, my digital marketing skills have flourished, inspiring my ambitions.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Gowtham AG
                </div>
            </div> 
            <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>Brandstory Academy is a leading digital marketing institute with a practical curriculum. They teach the fundamentals of digital marketing, offer a 6-month internship, and assist with placements. Joining is a decision you won’t regret.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Shobika Akilan
                </div>
            </div>
        </div>
{{-- 
        <div class="testimonial-row right-to-left">
            <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>Brandstory Academy has greatly enhanced my career. Their digital marketing course combines theoretical knowledge with practical projects focused on the Indian market. With their expert guidance, I now feel ready to excel in the digital world.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Anand G
                </div>
            </div>
             <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>Brandstory Academy's 6-month internship was a pivotal moment in my career. I gained hands-on experience working on live projects with top brands, and the expert mentorship helped me excel in digital marketing and secure my future.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Stuart Nithin
                </div>
            </div>
             <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>Brandstory's digital marketing course reflected their years of experience in the field. Instead of opting a course in an educational institution, acquiring practical knowledge and skills from an agency with inhand experience, helped me to experience the real world of digital marketing. The course stood by its advertisements and its name.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Nicholina Sandra
                </div>
            </div>
             <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>This academy in Bangalore is one of the best, featuring a supportive culture and passionate, dedicated trainers. The up-to-date curriculum, combined with a 6-month internship, greatly aids in skill development and securing the right job. Their placement support from the very beginning makes the journey even smoother.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Vishnu Vijayakumar
                </div>
            </div>
             <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>I recently completed my digital marketing course at this institution and I am very satisfied. I highly recommend them if you are a fresher because they are providing a 6-month internship with Brandstory company.  </p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Jachin Bakhtsingh
                </div>
            </div>
             <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>One of the best digital marketing course provider in bangalore. They cover all areas of digital marketing and start the courses from the beginner levels as well as advanced levels. It was really fun learning from Brandstory academy. </p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Prethasha K.R
                </div>
            </div>
         
            <!-- duplicate -->
            <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>I recently completed my Digital Marketing course at Brandstory Academy, and it was an excellent choice
                    for my professional growth. The program was structured effectively, addressing all the key components of
                    digital marketing. What impressed me the most was the 6-month internship offered with Brandstory Digital
                    Marketing company.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Ayesha Ms
                </div>
            </div>
            <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>I recently completed my Digital Marketing course at Brandstory Academy, and it was an excellent choice
                    for my professional growth. The program was structured effectively, addressing all the key components of
                    digital marketing. What impressed me the most was the 6-month internship offered with Brandstory Digital
                    Marketing company.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Ayesha Ms
                </div>
            </div>
             <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>I recently completed my Digital Marketing course at Brandstory Academy, and it was an excellent choice
                    for my professional growth. The program was structured effectively, addressing all the key components of
                    digital marketing. What impressed me the most was the 6-month internship offered with Brandstory Digital
                    Marketing company.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Ayesha Ms
                </div>
            </div>
             <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>I recently completed my Digital Marketing course at Brandstory Academy, and it was an excellent choice
                    for my professional growth. The program was structured effectively, addressing all the key components of
                    digital marketing. What impressed me the most was the 6-month internship offered with Brandstory Digital
                    Marketing company.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Ayesha Ms
                </div>
            </div>
             <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>I recently completed my Digital Marketing course at Brandstory Academy, and it was an excellent choice
                    for my professional growth. The program was structured effectively, addressing all the key components of
                    digital marketing. What impressed me the most was the 6-month internship offered with Brandstory Digital
                    Marketing company.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Ayesha Ms
                </div>
            </div>
        </div> --}}
    </section>
    <div class="spb-100">
       <x-our-success-stories :videos="[
  'https://www.instagram.com/p/DNiDU0ExHZI',
  'https://www.instagram.com/p/DNk72CQRPXZ',
  'https://www.instagram.com/p/DNpgwppR5qy',
  'https://www.instagram.com/p/DLsC-H9xQVg'
]" />
    </div>
    <div class="pt-100">
    <x-blog-component />
</div>
    <section class="sp-100 ">
        <div class="container">
            <h2 class="mb-lg-5 mb-4 text-center">Course Related FAQs</h2>
            <div class="row gx-md-3">
                <div class="col-lg-6">
                    <div class="faq-main mb-lg-0 mb-4">
                        <div class="faq-head">
                            <p class="text-violet mb-0 fw-500 fs-16">Course/Content</p>
                        </div>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        Which is the best digital marketing academy in Bangalore?
                                    </button>
                                </h4>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">At BrandStory Academy, we are proud to be among the top digital marketing 
                                            institute in Bangalore, offering practical, industry-focused courses. Our students gain hands-on 
                                            experience through real client projects, 6 month internships, and expert-led training. We also provide 
                                            dedicated placement support to help them start successful careers in the digital marketing industry.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        Who will be teaching digital marketing courses in BrandStory Academy?
                                    </button>
                                </h4>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul class="mb-0">
                                            <p class="mb-0 fs-16">our digital marketing courses are led by seasoned industry 
                                                professionals who bring years of real-world experience. Our trainers are passionate
                                                 about guiding students and offer direct access with personalized 1-to-1 mentorship. 
                                                 This ensures every learner receives tailored support, practical insights, and the 
                                                 confidence to succeed.</p>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        Who can enroll in the digital marketing course?
                                    </button>
                                </h4>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">Anyone interested in building or advancing their career 
                                            in digital marketing can enroll in our courses. Whether you’re a student exploring 
                                            career options, a working professional looking to upskill, an entrepreneur wanting 
                                            to grow your business, or someone seeking a career change, BrandStory Academy’s digital 
                                            marketing course is designed to meet your needs. No prior experience is required—just a 
                                            willingness to learn and grow.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingfour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapsefour" aria-expanded="false"
                                        aria-controls="flush-collapsefour">
                                        What digital marketing courses do BrandStory Academy offer?
                                    </button>
                                </h4>
                                <div id="flush-collapsefour" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p class="fs-16">At BrandStory Academy, we offer three specialized digital marketing courses designed to 
                                            meet different career goals:</p>
                                        <ul>
                                            <li class="fs-16">Digital Marketing MASTERY with Artificial Intelligence (AI) – 2.5 months training + 6 months internship</li>
                                            <li class="fs-16">Advanced Digital Marketing Boot Camp – 3.5 months training + 6 months internship</li>
                                            <li class="fs-16">360° Digital Marketing – 4 months training + 6 months internship</li>
                                        </ul>
                                        <p class="mb-0 fs-16">Each program focuses on practical learning, real client projects, and agency-style training. By the end of your 
                                            chosen course, you’ll gain hands-on experience, build a strong portfolio, and be career-ready for the fast-growing digital marketing 
                                            industry.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingfive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapsefive" aria-expanded="false"
                                        aria-controls="flush-collapsefive">
                                        What are the timings at your digital marketing academy in Bangalore?
                                    </button>
                                </h4>
                                <div id="flush-collapsefive" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">Our digital marketing academy in Bangalore runs Monday to Friday, from 9:30 
                                            AM to 6:00 PM. The schedule includes a 30-minute lunch break and two short 15-minute breaks for 
                                            a comfortable learning experience.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingseven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseseven" aria-expanded="false"
                                        aria-controls="flush-collapseseven">
                                        I’m a working professional. Can I get flexible hours?
                                    </button>
                                </h4>
                                <div id="flush-collapseseven" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingseven" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">Absolutely! We understand the needs of working professionals, so we offer a self-paced learning option 
                                            that allows you to study at your own convenience.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingeight">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseeight" aria-expanded="false"
                                        aria-controls="flush-collapseeight">
                                        Do I get future assistance after completing the course?
                                    </button>
                                </h4>
                                <div id="flush-collapseeight" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingeight" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">Yes! At BrandStory Academy, we provide ongoing support even after you complete 
                                            your course. Our team offers career guidance, mentorship, and access to updated resources to help 
                                            you stay ahead in the ever-changing digital marketing industry.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-main mb-lg-3 mb-4">
                        <div class="faq-head">
                            <p class="text-violet mb-0 fw-500 fs-16">Job/clarification/Certification</p>
                        </div>
                        <div class="accordion accordion-flush" id="accordionFlushExample1">
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingnine">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapsenine" aria-expanded="false"
                                        aria-controls="flush-collapsenine">
                                        Will I receive a certificate after completing the Digital Marketing Academy program
                                        in Bangalore?
                                    </button>
                                </h4>
                                <div id="flush-collapsenine" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingnine" data-bs-parent="#accordionFlushExample1">
                                    <div class="accordion-body">
                                        <ul class="mb-0">
                                            <p class="mb-0 fs-16">Yes, you will receive two industry-recognized certifications from BrandStory Academy: 
                                                a Course Completion Certificate and an Internship Completion Certificate. These certifications 
                                                validate your skills, hands-on experience, and readiness for a successful career in digital 
                                                marketing.</p>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingten">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseten" aria-expanded="false"
                                        aria-controls="flush-collapseten">
                                        What placement support do you provide after completing the course?
                                    </button>
                                </h4>
                                <div id="flush-collapseten" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingten" data-bs-parent="#accordionFlushExample1">
                                    <div class="accordion-body">
                                        <ul class="mb-0">
                                            <p class="mb-0 fs-16">We partner with 1,000+ global companies to offer strong placement 
                                                opportunities for our students. Our dedicated team connects you with top employers 
                                                and guides you through the hiring process, ensuring a smooth start to your digital 
                                                marketing career.</p>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingeleven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseeleven" aria-expanded="false"
                                        aria-controls="flush-collapseeleven">
                                        How long is the internship after completing the course?
                                    </button>
                                </h4>
                                <div id="flush-collapseeleven" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingeleven" data-bs-parent="#accordionFlushExample1">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">We offer a 6-month paid internship after the course, providing hands-on experience 
                                            with real client projects and agency-style training. This ensures you gain practical skills, industry 
                                            exposure, and a strong portfolio to kick-start your career.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="faq-main">
                        <div class="faq-head">
                            <p class="text-violet mb-0 fw-500 fs-16">Fee/payments</p>
                        </div>
                        <div class="accordion accordion-flush" id="accordionFlushExample2">
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingtwelve">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapsetwelve" aria-expanded="false"
                                        aria-controls="flush-collapsetwelve">
                                        What payment methods are available in your Digital Marketing Academy?
                                    </button>
                                </h4>
                                <div id="flush-collapsetwelve" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingtwelve" data-bs-parent="#accordionFlushExample2">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">At BrandStory Academy, we accept various payment methods for
                                            your convenience, including UPI (Google Pay, PhonePe, Paytm, and more), cash,
                                            credit cards, and net banking.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingthirteen">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapsethirteen" aria-expanded="false"
                                        aria-controls="flush-collapsethirteen">
                                        Is EMI-based fee convenience available in your digital marketing institute?
                                    </button>
                                </h4>
                                <div id="flush-collapsethirteen" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingthirteen" data-bs-parent="#accordionFlushExample2">
                                    <div class="accordion-body">
                                        <p class="mb-0">Yes, we offer EMI options to make the course more accessible. For
                                            detailed information about course fees and EMI options, feel free to contact our
                                            team at +91 88584 58584.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingfourteen">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapsefourteen" aria-expanded="false"
                                        aria-controls="flush-collapsefourteen">
                                        What are the course fees for each program?
                                    </button>
                                </h4>
                                <div id="flush-collapsefourteen" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingfourteen" data-bs-parent="#accordionFlushExample2">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">Our course fees vary depending on the program you choose. Please contact our admissions team 
                                            for detailed pricing and current offers on Digital Marketing MASTERY with AI, Advanced Digital Marketing Boot Camp, 
                                            and 360° Digital Marketing Program. We ensure our fees are competitive while offering maximum value with hands-on 
                                            training, paid internships, and career support.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".user-type-slider", {
            slidesPerView: 4,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                0: { slidesPerView: 1 },
                768: { slidesPerView: 2 },
                992: { slidesPerView: 3 },
                1200: { slidesPerView: 4 },
            },
        });
    </script>
    <script>
        document.querySelectorAll(".curr-header").forEach((header) => {
            header.addEventListener("click", () => {
                const expanded = header.getAttribute("aria-expanded") === "true";
                // collapse all others (optional)
                document.querySelectorAll(".curr-header").forEach((btn) => {
                    btn.setAttribute("aria-expanded", "false");
                    btn.nextElementSibling.style.maxHeight = null;
                });
                // toggle this one
                header.setAttribute("aria-expanded", !expanded);
            });
        });
    </script>
@endsection