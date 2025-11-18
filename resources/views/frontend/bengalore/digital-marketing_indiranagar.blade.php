@extends('frontend.partial.app')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 text-md-start text-center">
                    <h1 class="mb-3">AI-Enabled <span class="text-violet"> Digital Marketing Course</span> in Indiranagar, Bangalore</h1>
                    <p class="mb-4"><span >Step into the next era of marketing with the AI-Driven Digital Marketing Program in Indiranagar offered by 
                        BrandStory Academy. This course is designed to help learners master modern marketing skills by combining foundational digital 
                        strategies with powerful AI applications that are reshaping the industry.</p>
                    <div class="d-lg-flex align-items-center">
                        <div class="violet-btn d-flex me-lg-5 mb-lg-0 mb-4 justify-content-md-start justify-content-center">
                            <a href="{{route('contact')}}">Enquire Now!</a>
                        </div>
                        <div class="student-main mb-md-0 mb-5">
                            <img class="mb-1" src="{{asset('frontend/assets/images/home/students.webp')}}" alt="Our Students - BrandStory Academy">
                            <p class="mb-0 fs-12">Trusted by 10,000+ Students</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <img class="w-100" src="{{asset('frontend/assets/images/home/banner-img.webp')}}" alt="Digital Marketing training Institute in Bangalore - BrandStory Academy">
                </div>
            </div>
            <div class="container mt-5">
                <div class="bannerform">
                    <div class="row align-items-center">
                        <div class="col-lg-2">
                            <p class="mb-0 fw-600 fs-16 text-lg-start text-center mb-lg-0 mb-4">Enroll for Courses</p>
                        </div>
                        <div class="col-lg-10">
                            <div class="banner-form-main">
                                <form  action="{{ route('enquiry.store') }}" method="post"
                                    class="d-md-flex justify-content-between text-md-start text-center enquiry-form">
                                    @csrf
                                    <div class="d-md-flex gap-2 flex-grow-1">

                                        <input type="text" name="firstname" id="name" class="form-control"
                                            placeholder="Name" pattern="[A-Za-z\s]+"
                                            title="Only alphabets and spaces are allowed" required>

                                        <input type="tel" class="form-control" id="mobile" name="phone"
                                            placeholder="Mobile Number" pattern="[0-9]+" title="Only numbers are allowed"
                                            required>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Mail"
                                            required>
                                    </div>
                                    <input type="hidden" id="recaptcha_response" name="recaptcha_response">
                                    <input type="hidden" id="page_url" name="page_url" value="{{ url()->current() }}">
                                    <input type="hidden" name="formFragment" value="enquiry"> <!-- or "enquiry" -->

                                    <button type="submit" class="btn">Join the Academy</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sp-100">
        <div class="container">
            <h2 class="mb-3 text-lg-start text-center">About <span class="text-violet">BrandStory Academy</span> </h2>
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 px-2 text-center text-lg-start order-2 order-lg-1">
                    <p>Founded in 2018, <a href="https://www.brandstoryacademy.com" style="color: black; font-size: 18px; text-decoration: underline;"><b>BrandStory Academy</a></b>
                         has grown into one of Indiranagar’s trusted destinations for digital marketing education, <b>trained 10,000+ students</b>. Built by industry professionals from BrandStory, 
                         the academy focuses on practical, <b>agency-style learning</b> that equips students with real skills that employers look for.
</p>
                    <p>With hundreds of successful batches and a growing community of learners who have started careers across agencies, startups, and global brands, BrandStory Academy continues to
                         bridge the gap between training and industry expectations. Every student receives <b>hands-on exposure</b>, <b>guided mentorship</b>, and access to updated tools and techniques used in modern 
                         digital marketing. Our digital marketing institute in Indiranagar offers <b>certification programs</b>, <b>portfolio-building support</b>, and <b>placement guarantee</b> to help learners 
                         take confident steps toward their career goals.</p>

                </div>
                <div class="col-12 col-lg-6  order-1 order-lg-2">
                    <img src="{{asset('frontend/assets/images/courses/certificate.webp')}}" class="img-fluid" alt="Digital Marketing Course Completion Certificate by BrandStory Academy"/>
                </div>
            </div>
        </div>
    </section>
    <section class="spb-100 why-enroll-coursepage">
        <div class="container">
            <h2 class="mb-3 text-lg-center text-center frame-700">Why Enroll in BrandStory Academy for
                <span class="text-violet ">Digital Marketing Course?</span>
            </h2>
            <p class="frame-700 text-center">BrandStory Academy is the <b>best digital marketing institute in Bangalore</b>, offering an expert-led, industry-focused learning 
            experience. We have expert faculty providing practical sessions, project-based learning, and equipping you with industry-oriented AI tools. With <b>1000+ placement 
                partners</b>, we place our students in global agencies.</p>
            <div class="row whychoose-boxes ">
                <div class="col-12 col-lg-4 mb-4 ">
                    <div class="box y-top">
                        <img src="{{ asset('frontend/assets/images/courses/certificate.svg') }}" />
                        <h4>Certifications</h4>
                        <p>Gain internationally recognized certifications from us and from platforms like HubSpot, Google Ads, Semrush, and elevate your digital marketing proficiency. </p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mb-4">
                    <div class="box g-top">
                        <img src="{{ asset('frontend/assets/images/courses/live.svg') }}" />
                        <h4>Live Campaign Experience</h4>
                        <p>Work on live SEO, PPC, and social media campaigns and learn to interpret performance data with step-by-step guidance from experienced trainers at our agency.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mb-4">
                    <div class="box s-top">
                        <img src="{{ asset('frontend/assets/images/courses/career.svg') }}" />
                        <h4>Career Guidance & Placement</h4>
                        <p>Benefit from end-to-end career assistance, including professional resume building, interview practice, and opportunities with top recruiters from diverse sectors.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mb-4">
                    <div class="box r-top">
                        <img src="{{ asset('frontend/assets/images/courses/interview.svg') }}" />
                        <h4>Interview Preparation</h4>
                        <p>Join expert-driven interview workshops designed to sharpen your presentation, problem-solving, and communication skills, ensuring you’re fully job-ready with guidance.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mb-4">
                    <div class="box v-top">
                        <img src="{{ asset('frontend/assets/images/courses/mentorship.svg') }}" />
                        <h4>Mentorship from Industry Experts</h4>
                        <p>Learn from experienced marketing professionals who bring real industry insights into every class. Benefit from both collaborative group sessions and personalized 1-to-1 learning. </p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mb-4">
                    <div class="box o-top">
                        <img src="{{ asset('frontend/assets/images/courses/soft-skill.svg') }}" />
                        <h4>Soft Skills & Personal Branding</h4>
                        <p>Build strong communication, leadership, and personal branding skills that help you shine in the digital space. We make sure you’re prepared and positioned for the right career opportunities.</p>
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
                        <img src="{{ asset('frontend/assets/images/courses/placement1.webp') }}" class="img-fluid" alt="Our Student Placement - Lahasya Reddy placed at FedEx"/>
                    </div>
                    <div class="col-12 col-lg-4">
                        <img src="{{ asset('frontend/assets/images/courses/placement2.webp') }}" class="img-fluid" lt="Our Student Placement - Namitha Nambi placed at Amazon"/>
                    </div>
                    <div class="col-12 col-lg-4">
                        <img src="{{ asset('frontend/assets/images/courses/placement3.webp') }}" class="img-fluid" lt="Our Student Placement - Maria Sherly placed at Wallmart"/>
                    </div>
                </div>
                <div class="text-center ">
                    <div class="violet-btn">
                        <a href="https://brandstoryacademy.com/placement">Explore Placements</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="journy-couresepage sp-100">
        <div class="container">
            <h2 class="text-center frame-700">Map Your Journey from Beginner to <span class="text-violet">Successful
                    Marketer </span></h2>
            <img src="{{ asset('frontend/assets/images/courses/journy.webp') }}" class="img-fluid mt-5" alt="Your Digital Marketing Learning Journey at BrandStory Academy"/>
        </div>
    </section>
    <section class="curicullmn-coursepage spb-100">
        <div class="container">
            <h2 class="text-center">Digital Marketing Course <span class="text-violet">Curriculum</span></h2>
            <p class="frame-1100 text-center">
                With <b>30 carefully crafted, industry-relevant modules</b>, our digital marketing course in Indiranagar gives you a strong foundation and real-world expertise. Recognized 
                among <b>Bangalore’s top training institutes</b>, we provide one of the most advanced learning programs.
            </p>

            <div class="curriculum-grid">
                <div class="grup-col">
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
                </div>
                <div class="grup-col">
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
            <p class="text-center frame-800">Created for those who want to build a strong career in digital marketing, 
                our Bangalore course offers practical learning and industry-approved certifications.</p>

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

                                        <img src="{{ asset('frontend/assets/images/courses/jobseeker.png')}}"
                                            alt="Digital Marketing Course in Bangalore for Job Seekers">
                                    </div>

                                    <h4>Job Seekers</h4>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="user-card">
                                    <div class="imgbox">

                                        <img src="{{ asset('frontend/assets/images/courses/Career.png')}}"
                                            alt="Digital Marketing Course in Bangalore for Career Changers">
                                    </div>

                                    <h4>Career Changers</h4>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="user-card">
                                    <div class="imgbox">

                                        <img src="{{ asset('frontend/assets/images/courses/Freelancers.png')}}"
                                            alt="Digital Marketing Course in Bangalore for Freelancers">
                                    </div>

                                    <h4>Freelancers</h4>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="user-card">
                                    <div class="imgbox">

                                        <img src="{{ asset('frontend/assets/images/courses/Homemakers.png')}}"
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
            <p class="text-center frame-800 mb-5"><b>BrandStory Academy</b> focuses on creating a learning space where students collaborate 
                and apply concepts through <b>real projects</b>. Our gallery reflects the lively sessions and practical experiences that shape each class.</p>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="row b-box">
                        <div class="col-lg-8 col-6 px-0">
                            <div class="grid-two">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/g-w.svg')}}"
                                        alt="Digital Marketing Course in Bangalore Details">
                                    <p>30+ Modules</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/g-w.svg')}}"
                                        alt="Digital Marketing Course in Bangalore Details">
                                    <p>14+ Certifications</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/g-w.svg')}}"
                                        alt="Digital Marketing Course in Bangalore Details">
                                    <p>20+ Live Projects</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/g-w.svg')}}"
                                        alt="Digital Marketing Course in Bangalore Details">
                                    <p>6 Month Course</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/g-w.svg')}}"
                                        alt="Digital Marketing Course in Bangalore Details">
                                    <p>10+ Case Studies</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/g-w.svg')}}"
                                        alt="Digital Marketing Course in Bangalore Details">
                                    <p>30+ Tools </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 px-0">
                            <a href="{{ url('/contact-us') }}">
                            <img src="{{ asset('frontend/assets/images/courses/classroom-learning.png')}}"
                                class="img-fluid msm" alt="Digital Marketing Course in Bangalore">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="row b-box">
                        <div class="col-lg-8 col-6 px-0">
                            <div class="grid-two">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/self.svg')}}" 
                                    alt="Self-paced Digital Marketing Course in Bangalore Details">
                                    <p>30+ Modules</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/self.svg')}}"
                                        alt="Self-paced Digital Marketing Course in Bangalore Details">
                                    <p>14+ Certifications</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/self.svg')}}"
                                        alt="Self-paced Digital Marketing Course in Bangalore Details">
                                    <p>20+ Live Projects</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/self.svg')}}"
                                        alt="Self-paced Digital Marketing Course in Bangalore Details">
                                    <p>6 Month Course</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/self.svg')}}"
                                        alt="Self-paced Digital Marketing Course in Bangalore Details">
                                    <p>10+ Case Studies</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/self.svg')}}"
                                        alt="Self-paced Digital Marketing Course in Bangalore Details">
                                    <p>30+ Tools </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 px-0">
                            <a href="{{ url('/contact-us') }}">
                            <img src="{{ asset('frontend/assets/images/courses/self-paced-learning.png')}}"
                                class="img-fluid msm" alt="Self-paced Digital Marketing Course in Bangalore">
                            </a>
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
            <p class="text-center frame mb-5">Earn a recognized digital marketing certificate from <b>Brandstory Academy</b> after
                completing digital marketing course in Bangalore. With our certificate highlighting your expertise, you can
                always standout in the job market.</p>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/courses/certificate.webp')}}"
                        alt="Digital marketing certificate course in Bangalore">
                </div>
                <div class="col-12 col-lg-6">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/courses/certificate-2.webp')}}"
                        alt="Digital marketing certificate course in Bangalore">
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
                    <img src="{{ asset('frontend/assets/images/courses/googleanalytics.png')}}" alt="Digital Marketing Certification on Google Analytics 4" />
                </div>
                <div class="img-box">
                    <img src="{{ asset('frontend/assets/images/courses/semrush.png')}}" alt="Digital Marketing Certification on Semrush" />
                </div>
                <div class="img-box">
                    <img src="{{ asset('frontend/assets/images/courses/hubspot.png')}}" alt="Digital Marketing Certification on Hubspot" />
                </div>
                <div class="img-box">
                    <img src="{{ asset('frontend/assets/images/courses/g-ads.png')}}" alt="Digital Marketing Certification on Google Ads" />
                </div>

            </div>

        </div>
    </section>


    <section class="sp-100 Marketing-Tools-coursepage">
        <div class="container">
            <h2 class="text-center ">Learn Latest AI Automation & <span class="text-violet">Digital <br>Marketing
                    Tools</span></h2>
            <p class="text-center mb-5">Get hands-on experience of 30+ advanced marketing tools</p>
            <div class="swiper brandlogo1" data-aos="fade-up">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/g-analytics.png')}}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - Google Analytics 4">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/ahrefs.png')}}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - Ahrefs">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/surfer.png')}}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - Surfer SEO">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/rivierside.png')}}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - RivierSide">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/active-campaign.png')}}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - Active Campaign">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/semrush.png')}}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - SEMrush">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/adcreativeai.png')}}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - Ad Creative AI">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/buzzsumo.png')}}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - Buzzsumo">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/canva.png')}}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - Canva">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/chatgpt.png')}}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - ChatGPT">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/gmbeverywhere.png')}}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - GMB Everywhere">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/google-ads.png')}}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - Google Ads">
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
                            <img src="{{asset('frontend/assets/images/tools/google-search-console.png')}}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - Google Search Console">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/grammarly.png')}}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - Grammarly">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/hootsuite.png')}}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - Hootsuite">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/hubspot.png')}}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - Hubspot">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/mailchimp.png')}}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - MailChimp">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/meta.png')}}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - Meta Ads Manager">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/microsoft-clarity.png')}}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - Microsoft Clarity">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/moz-pro.png')}}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - Moz Pro">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/screaming-frog.png')}}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - Screaming Frog">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/socialbee.png')}}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - Social Bee">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/spyfu.png')}}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - SpyFu">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/wordstream.png')}}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - WordStream">
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section class="spb-100 bg-lightblue1">
        <div class="container">
            <h2 class="text-center pt-4">Our Premium Placement <span class="text-violet"><br>Partners</span></h2>
           
            <div class="swiper brandlogo1" data-aos="fade-up">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/placement/brand1.svg')}}" class="img-fluid"
                                alt="Our Partner Company for Placements">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/placement/brand2.svg')}}" class="img-fluid"
                                alt="Our Partner Company for Placements">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/placement/brand3.svg')}}" class="img-fluid"
                                alt="Our Partner Company for Placements">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/placement/brand4.svg')}}" class="img-fluid"
                                alt="Our Partner Company for Placements">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/placement/brand5.svg')}}" class="img-fluid"
                                alt="Our Partner Company for Placements">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/placement/brand6.svg')}}" class="img-fluid"
                                alt="Our Partner Company for Placements">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/placement/brand7.svg')}}" class="img-fluid"
                                alt="Our Partner Company for Placements">
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
                <p>Recently had the pleasure of experiencing BrandStory Academy, and I must say, it exceeded my
                    expectations. From the moment I enrolled, the academy’s dedication to nurturing professional growth and
                    providing high-quality education was evident.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Jerophin Jeevitha
                </div>
            </div>
            <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>BrandStory Academy offers a strong foundation in digital marketing through a hands-on approach. Right
                    from the start, I worked on real agency projects, gaining practical experience that many other courses
                    lack. The six-month internship following the course was a transformative experience, allowing me to
                    refine my skills in a real work environment.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Sandra R
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
                <p>BrandStory Academy stands out for its focus on practical training, engaging students with real client
                    projects from day one for an immersive learning experience. The trainers are both knowledgeable and
                    approachable, and the extended six-month internship offers valuable industry exposure. It’s an excellent
                    place to start a career in digital marketing!</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Maria Sherly
                </div>
            </div>
            <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>Enrolling at Brandstory Academy was an eye-opening experience. The course combines academic rigor with
                    hands-on practice for the Indian market. With dedicated mentors and real projects, my digital marketing
                    skills have flourished, inspiring my ambitions.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Gowtham AG
                </div>
            </div>
            <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>Brandstory Academy is a leading digital marketing institute with a practical curriculum. They teach the
                    fundamentals of digital marketing, offer a 6-month internship, and assist with placements. Joining is a
                    decision you won’t regret.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Shobika Akilan
                </div>
            </div>

            <!-- duplicate for smooth infinite loop -->
            <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>Recently had the pleasure of experiencing BrandStory Academy, and I must say, it exceeded my
                    expectations. From the moment I enrolled, the academy’s dedication to nurturing professional growth and
                    providing high-quality education was evident.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Jerophin Jeevitha
                </div>
            </div>
            <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>BrandStory Academy offers a strong foundation in digital marketing through a hands-on approach. Right
                    from the start, I worked on real agency projects, gaining practical experience that many other courses
                    lack. The six-month internship following the course was a transformative experience, allowing me to
                    refine my skills in a real work environment.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Sandra R
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
                <p>BrandStory Academy stands out for its focus on practical training, engaging students with real client
                    projects from day one for an immersive learning experience. The trainers are both knowledgeable and
                    approachable, and the extended six-month internship offers valuable industry exposure. It’s an excellent
                    place to start a career in digital marketing!</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Maria Sherly
                </div>
            </div>
            <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>Enrolling at Brandstory Academy was an eye-opening experience. The course combines academic rigor with
                    hands-on practice for the Indian market. With dedicated mentors and real projects, my digital marketing
                    skills have flourished, inspiring my ambitions.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Gowtham AG
                </div>
            </div>
            <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>Brandstory Academy is a leading digital marketing institute with a practical curriculum. They teach the
                    fundamentals of digital marketing, offer a 6-month internship, and assist with placements. Joining is a
                    decision you won’t regret.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Shobika Akilan
                </div>
            </div>
        </div>
    </section>

    <section class="spb-100 mbl-spt-0">
        <div class="container">
            <h2 class="text-center db">Learning in Action- <span class="text-violet">Our Classroom</span></h2>
            <p class="max-1000 text-center my-5">
                At <span class="fw-600">BrandStory Academy</span>, our classrooms are designed to foster collaboration and
                hands-on experience. From interactive lessons to hands-on projects, our gallery captures the energy and
                enthusiasm that define every session at BrandStory Academy.
            </p>

            <div class="tab-content" id="pills-tabContent">
                <!-- Course 1 start -->
                <div class="tab-pane fade show active" id="pills-course1" role="tabpanel"
                    aria-labelledby="pills-course1-tab">
                    <div class="row">
                        <div class="col-4">
                            <img src="{{asset('frontend/assets/images/gallery/gallery-1.webp')}}" class="img-fluid"
                                alt="Classroom Image 1" />
                            <img src="{{asset('frontend/assets/images/gallery/gallery-2.webp')}}" class="img-fluid mt-4"
                                alt="Classroom Image 2" />
                        </div>
                        <div class="col-4">
                            <img src="{{asset('frontend/assets/images/gallery/gallery-3.webp')}}" class="img-fluid"
                                alt="Classroom Image 3" />
                            <img src="{{asset('frontend/assets/images/gallery/gallery-4.webp')}}" class="img-fluid mt-4"
                                alt="Classroom Image 4" />
                        </div>
                        <div class="col-4">
                            <img src="{{asset('frontend/assets/images/gallery/gallery-5.webp')}}" class="img-fluid"
                                alt="Classroom Image 5" />
                            <img src="{{asset('frontend/assets/images/gallery/gallery-6.webp')}}" class="img-fluid mt-4"
                                alt="Classroom Image 6" />
                        </div>
                    </div>
                </div>
                <!-- Course 1 end -->
            </div>
        </div>
    </section>

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
                                        What is Digital Marketing, and Why is It Essential Today?
                                    </button>
                                </h4>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">Digital marketing refers to promoting products or services using online 
                                            channels such as search engines, social media, email, websites, and digital ads. It is essential 
                                            because businesses today rely heavily on digital platforms to reach their audience, build brand 
                                            awareness, and drive sales.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        Why Should I Choose BrandStory Academy for Digital Marketing Training?
                                    </button>
                                </h4>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                       
                                            <p class="mb-0 fs-16">BrandStory Academy stands out because the training is built by industry 
                                                professionals from the BrandStory agency, giving students real-world exposure instead of 
                                                theoretical learning. You get hands-on training, access to updated tools, personalized mentoring, 
                                                flexible class schedules, and 100% placement support. The curriculum is designed to match current 
                                                industry demands, making it easier for students to start strong career paths.</p>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        Can I Work as a Freelancer after Completing This Course?
                                    </button>
                                </h4>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">Yes, absolutely. The course equips you with practical skills in 
                                            SEO, PPC, social media marketing, content strategy, and more, making it easy to 
                                            take up projects from clients. Many learners choose freelancing as a flexible work 
                                            option, and BrandStory Academy guides you on how to build your portfolio, pitch clients, 
                                            and deliver results effectively.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingfour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapsefour" aria-expanded="false"
                                        aria-controls="flush-collapsefour">
                                        What Kind of Support Will I Receive after Finishing The Course?
                                    </button>
                                </h4>
                                <div id="flush-collapsefour" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p class="fs-16">Students receive ongoing support even after completing the program. This includes 
                                            placement assistance, access to hiring partners, resume-building help, interview training, and guidance 
                                            on career paths like freelancing, agency jobs, or startup opportunities. You remain part of our learning 
                                            community and can always return for clarification or help.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingfive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapsefive" aria-expanded="false"
                                        aria-controls="flush-collapsefive">
                                        What Makes This Course Career- and Job-oriented?
                                    </button>
                                </h4>
                                <div id="flush-collapsefive" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">Our comprehensive digital marketing course is structured to make you industry-ready from day one. 
                                            You will work on live projects, learn using real marketing tools, and practice creating campaigns across SEO, Google Ads, 
                                            and social media. The focus is on hands-on application, not just theory. Combined with interview preparation and placement 
                                            support, the course ensures you leave with the skills and confidence needed to secure a job.</p>
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
                                            <p class="mb-0 fs-16">Yes, you will receive two industry-recognized
                                                certifications from BrandStory Academy:
                                                a Course Completion Certificate and an Internship Completion Certificate.
                                                These certifications
                                                validate your skills, hands-on experience, and readiness for a successful
                                                career in digital
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
                                            <p class="mb-0 fs-16">We partner with 1,000+ global companies to offer strong
                                                placement
                                                opportunities for our students. Our dedicated team connects you with top
                                                employers
                                                and guides you through the hiring process, ensuring a smooth start to your
                                                digital
                                                marketing career.</p>
                                        </ul>
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
            autoplay: {
            delay: 2500, // time between slides in ms (2.5 seconds)
            disableOnInteraction: false, // keeps autoplay running after user interaction
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