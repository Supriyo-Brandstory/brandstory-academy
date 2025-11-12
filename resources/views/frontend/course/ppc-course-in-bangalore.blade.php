@extends('frontend.partial.app')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 col-md-7 text-md-start text-center align-self-center mt-3">
                    <h1 class="mb-3 text-blue">Top-rated PPC Course in Bangalore for Job-ready Learning</h1>
                    <p class="mb-2">Start your digital advertising career with the best PPC Course in Bangalore. At BrandStory Academy, 
                        we help you master every aspect of Pay-Per-Click advertising, from Google Ads and Meta Ads to YouTube and Display
                         Ad campaigns. With 10+ advanced modules, 20+ AI-powered tools, and 10+ industry certifications, you’ll learn how 
                         to attract, convert, and retain prospects.
                    </p>
                    <div class="d-md-flex align-items-center">
                        <div
                            class="outline-btn d-flex me-lg-5 mb-lg-0 my-4 justify-content-md-start justify-content-center">
                            <a href="{{route('about')}}"><strong>About Academy</strong></a>
                        </div>
                        <div class="violet-btn d-flex me-lg-5 mb-lg-0 my-4 justify-content-md-start justify-content-center">
                            <a href="{{route('contact')}}">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 col-md-5">
                    <img class="w-100" src="{{asset('frontend/assets/images/courses/Digital-Marketing.webp')}}" alt="Digital Marketing Course in Bangalore by BrandStory Academy">
                </div>
            </div>
        </div>
    </section>
    <section class="sp-100">
        <div class="container">
            <h2 class="mb-3 text-lg-start text-center">About <span class="text-violet">BrandStory Academy</span> </h2>
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 px-2 text-center text-lg-start order-2 order-lg-1">
                    <p><a href="https://www.brandstoryacademy.com" style="color: black; font-size: 18px; text-decoration: underline;"><b>BrandStory Academy</a></b>
                        is a leading digital marketing institute in Bangalore known for providing world-class, job-oriented training programs. 
                        Backed by <b>BrandStory Digital</b>, one of Bangalore’s most successful digital marketing agencies, BrandStory Academy combines strategic expertise with 
                        project-based learning.</p>
                    <p>The digital marketing industry is continuously evolving at a rapid pace. Students enrolling in PPC course in Bangalore get the opportunity to work on <b>real PPC projects</b> by handling actual campaigns advertising budgets on <b>Google, Meta, and 
                        YouTube</b> platforms. We’ve been training aspirants for over 5 years, and our alumni are now working with leading agencies and global clients. At <b>BrandStory Academy</b>, 
                        we treat every student as an individual learner, guiding them to achieve personal success and professional growth.
                    </p>

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
                <span class="text-violet ">PPC Course in Bangalore?</span>
            </h2>
            <p class="frame-700 text-center">Choosing the right training institute can shape your future, and at BrandStory Academy, we focus on providing real <b>project-based learning</b>. 
                Our PPC training in Bangalore course consists of a series of expert-led sessions designed by professionals with <b>hands-on experience</b> managing successful campaigns across
                 diverse industries.
            </p>
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
                        <p>Master the art of creating keyword strategies, budget control, and performance analysis. 
                            Under expert mentorship, you will be allowed to optimize the live Google Ads campaigns.</p>
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
            <h2 class="text-center">All-inclusive PPC Course <span class="text-violet">Curriculum</span></h2>
            <p class="frame-1100 text-center">
                Our PPC course in Bangalore covers all aspects of paid marketing- from creating campaigns to optimizing conversions. 
                With over <b>10+ modules</b> designed by industry professionals, you’ll gain a 360° understanding of PPC platforms, <b>bidding 
                strategies</b>, <b>automation</b>, and data analytics.
            </p>

            <div class="curriculum-grid">
                <div class="grup-col">
                    <!-- Item 1 -->
                    <div class="curr-item">
                        <button class="curr-header" aria-expanded="false">
                            <span>Introduction to PPC Advertising</span>
                            <svg class="chev" viewBox="0 0 24 24">
                                <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <div class="curr-content">
                            <ul>
                                <li>What is PPC & Why It Matters</li>
                                <li>Paid vs Organic Marketing</li>
                                <li>Ad Auctions & Real-Time Bidding</li>
                                <li>Understanding CPC, CPM, CPA & ROAS</li>
                                <li>PPC Channels: Search, Display, Social & Video</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="curr-item">
                        <button class="curr-header" aria-expanded="false">
                            <span>Google Ads Mastery</span>
                            <svg class="chev" viewBox="0 0 24 24">
                                <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <div class="curr-content">
                            <ul>
                                <li>Account Setup & Navigation</li>
                                <li>Keyword Match Types (Broad, Phrase, Exact)</li>
                                <li>Creating Campaigns: Search, Display, Shopping & Performance Max</li>
                                <li>Developing High-Converting Ad Copies</li>
                                <li>By Using Extensions (Sitelink, Callout, Structured Snippets)</li>
                                <li>Knowing Quality Score</li>
                                <li>Smart Bidding Strategies: Target CPA, ROAS, Maximize Conversions</li>
                                <li>GTM Conversion Tracking</li>
                                <li>Bid Optimization & Budget Allocation</li>
                                <li>Ad Scheduling & Geo Targeting</li>
                                <li>Audience Segmentation & Retargeting</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="curr-item">
                        <button class="curr-header" aria-expanded="false">
                            <span>Meta (Facebook & Instagram) Ads</span>
                            <svg class="chev" viewBox="0 0 24 24">
                                <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <div class="curr-content">
                            <ul>
                                <li>Meta Business Suite & Ads Manager Overview</li>
                                <li>Audience Insights & Targeting</li>
                                <li>Ad Objectives: Awareness, Consideration, Conversion</li>
                                <li>Creative Strategy: Ad Copywriting & Design</li>
                                <li>Facebook Pixel Setup & Event Tracking</li>
                                <li>A/B Testing and Dynamic Ads</li>
                                <li>Retargeting Campaign Setup</li>
                                <li>Campaign Budget Optimization</li>
                                <li>Reading Reports & Interpreting KPIs</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="curr-item">
                        <button class="curr-header" aria-expanded="false">
                            <span>YouTube Advertising</span>
                            <svg class="chev" viewBox="0 0 24 24">
                                <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <div class="curr-content">
                            <ul>
                                <li>YouTube Ad Formats</li>
                                <li>Creating Compelling Video Ads</li>
                                <li>Targeting Based on Intent & Behavior</li>
                                <li>Budget Planning for Video Campaigns</li>
                                <li>Analyzing Watch Time, CTR & Conversion Metrics</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Item 5 -->
                    <div class="curr-item">
                        <button class="curr-header" aria-expanded="false">
                            <span>Google Display Network (GDN)</span>
                            <svg class="chev" viewBox="0 0 24 24">
                                <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <div class="curr-content">
                            <ul>
                                <li>How Display Ads Work</li>
                                <li>Targeting by Topics, Placements, & Interests</li>
                                <li>Responsive Display Ads Creation</li>
                                <li>Best Practices for Visual Banners</li>
                                <li>Managing Remarketing Campaigns</li>
                            </ul>
                        </div>
                    </div>

                    </div>
                    <div class="grup-col">
                    <!-- Item 8 -->
                    <div class="curr-item">
                        <button class="curr-header" aria-expanded="false">
                            <span>Ads Keyword Research & Planning</span>
                            <svg class="chev" viewBox="0 0 24 24">
                                <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <div class="curr-content">
                            <ul>
                                <li>Using Google Keyword Planner</li>
                                <li>Competitor Keyword Analysis</li>
                                <li>Long-tail vs Short-tail Keyword Strategy</li>
                                <li>Grouping & Mapping Keywords</li>
                                <li>Negative Keyword Implementation</li>
                            </ul>
                        </div>
                    </div>
                
                    
                    <!-- Item 9 -->
                    <div class="curr-item">
                        <button class="curr-header" aria-expanded="false">
                            <span>Conversion Tracking & Analytics</span>
                            <svg class="chev" viewBox="0 0 24 24">
                                <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <div class="curr-content">
                            <ul>
                                <li>Using Google Tag Manager (GTM)</li>
                                <li>Setting Up Goals in Google Analytics 4 (GA4)</li>
                                <li>Monitoring User Actions: Clicks, Scrolls, Form Fills</li>
                                <li>ROI & Attribution Models Explained</li>
                                <li>Report Creation & Data Interpretation</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Item 10 -->
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
                                <li>Creating Multi-Channel Campaigns</li>
                                <li>Retargeting & Funnel Optimization</li>
                                <li>Audience Segmentation for Higher ROI</li>
                                <li>Attribution Models (Last Click, Data-Driven)</li>
                                <li>Leveraging AI & Automation Tools</li>
                                <li>Scaling Profitable Campaigns</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Item 11 -->
                    <div class="curr-item">
                        <button class="curr-header" aria-expanded="false">
                            <span>Spy & Automation Tools</span>
                            <svg class="chev" viewBox="0 0 24 24">
                                <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <div class="curr-content">
                            <ul>
                                <li>Competitor Analysis with SpyFu & SEMrush</li>
                                <li>Using Optmyzr for Bid Automation</li>
                                <li>Monitoring Campaigns with SimilarWeb & AdEspresso</li>
                                <li>AI Tools for Ad Copy Optimization</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Item 12 -->
                    <div class="curr-item">
                        <button class="curr-header" aria-expanded="false">
                            <span>Project-based Expertise</span>
                            <svg class="chev" viewBox="0 0 24 24">
                                <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <div class="curr-content">
                            <ul>
                                <li>Create & Run Live Google Ads Campaign</li>
                                <li>Launch Retargeting & Shopping Ads</li>
                                <li>Measure & Report Campaign Performance</li>
                                <li>Present Campaign Report for Evaluation</li>
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
            <h2 class="frame-800 text-center">Who Can Benefit from Our PPC Course in <span
                    class="text-violet">Bangalore?</span></h2>
            <p class="text-center frame-800">Our PPC course in Bangalore is designed for people who want to
                become market-ready digital marketing professionals. We provide industry-recognized certification and
                <a href="https://brandstoryacademy.com/blogs/key-digital-marketing-skills-youll-master-in-a-digital-marketing-course" style="color: black; font-size: 18px; text-decoration: underline;"><strong>hands-on skills</strong></a> to help you excel in your career. </p>

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
                                            alt="PPC Course in Bangalore for Students & Graduates">
                                    </div>
                                    <h4>Students & Graduates</h4>

                                </div>
                            </div>

                            <!-- Slide 2 -->
                            <div class="swiper-slide">
                                <div class="user-card">
                                    <div class="imgbox">
                                        <img src="{{ asset('frontend/assets/images/courses/content.png')}}"
                                            alt="PPC Course in Bangalore for Content Creators & Bloggers">
                                    </div>

                                    <h4>Content Creators & Bloggers</h4>
                                </div>
                            </div>

                            <!-- Slide 3 -->
                            <div class="swiper-slide">
                                <div class="user-card">
                                    <div class="imgbox">
                                        <img src="{{ asset('frontend/assets/images/courses/Business.png')}}"
                                            alt="PPC Course in Bangalore for Business Owners">
                                    </div>

                                    <h4>Business Owners</h4>
                                </div>
                            </div>


                            <div class="swiper-slide">
                                <div class="user-card">
                                    <div class="imgbox">

                                        <img src="{{ asset('frontend/assets/images/courses/Startup.png')}}"
                                            alt="PPC Course in Bangalore for Startup Founders">
                                    </div>

                                    <h4>Startup Founders</h4>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="user-card">
                                    <div class="imgbox">

                                        <img src="{{ asset('frontend/assets/images/courses/jobseeker.png')}}"
                                            alt="PPC Course in Bangalore for Job Seekers">
                                    </div>

                                    <h4>Job Seekers</h4>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="user-card">
                                    <div class="imgbox">

                                        <img src="{{ asset('frontend/assets/images/courses/Career.png')}}"
                                            alt="PPC Course in Bangalore for Career Changers">
                                    </div>

                                    <h4>Career Changers</h4>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="user-card">
                                    <div class="imgbox">

                                        <img src="{{ asset('frontend/assets/images/courses/Freelancers.png')}}"
                                            alt="PPC Course in Bangalore for Freelancers">
                                    </div>

                                    <h4>Freelancers</h4>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="user-card">
                                    <div class="imgbox">

                                        <img src="{{ asset('frontend/assets/images/courses/Homemakers.png')}}"
                                            alt="PPC Course in Bangalore for Homemakers">
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
            <h2 class="text-center mb-4 frame-800">Professional PPC Training in Bangalore at <span
                    class="text-violet">Affordable Costs</span></h2>
            <p class="text-center frame-800 mb-5">Our pay-per-click course has been designed in such a way that aspiring candidates can avail a flexible EMI or installment option, 
                thus ensuring that no learner is forced to postpone or give up their dream. You can avail industry-recognized
                certifications and <a href="https://brandstoryacademy.com/placement" style="color: white; font-size: 18px; text-decoration: underline;"><strong>100% placement guarantee</strong></a>. </p>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="row b-box">
                        <div class="col-lg-8 col-6 px-0">
                            <div class="grid-two">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/g-w.svg')}}"
                                        alt="PPC Course in Bangalore Details">
                                    <p>10+ Modules</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/g-w.svg')}}"
                                        alt="PPC Course in Bangalore Details">
                                    <p>10+ Certifications</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/g-w.svg')}}"
                                        alt="PPC Course in Bangalore Details">
                                    <p>20+ Live Projects</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/g-w.svg')}}"
                                        alt="PPC Course in Bangalore Details">
                                    <p>6 Month Course</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/g-w.svg')}}"
                                        alt="PPC Course in Bangalore Details">
                                    <p>10+ Case Studies</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/g-w.svg')}}"
                                        alt="PPC Course in Bangalore Details">
                                    <p>10+ Tools </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 px-0">
                            <a href="{{ url('/contact-us') }}">
                            <img src="{{ asset('frontend/assets/images/courses/classroom-learning.png')}}"
                                class="img-fluid msm" alt="PPC Course in Bangalore">
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
                                    alt="Self-paced PPC Course in Bangalore Details">
                                    <p>30+ Modules</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/self.svg')}}"
                                        alt="Self-paced PPC Course in Bangalore Details">
                                    <p>14+ Certifications</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/self.svg')}}"
                                        alt="Self-paced PPC Course in Bangalore Details">
                                    <p>20+ Live Projects</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/self.svg')}}"
                                        alt="Self-paced PPC Course in Bangalore Details">
                                    <p>6 Month Course</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/self.svg')}}"
                                        alt="Self-paced PPC Course in Bangalore Details">
                                    <p>10+ Case Studies</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/self.svg')}}"
                                        alt="Self-paced PPC Course in Bangalore Details">
                                    <p>30+ Tools </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 px-0">
                            <a href="{{ url('/contact-us') }}">
                            <img src="{{ asset('frontend/assets/images/courses/self-paced-learning.png')}}"
                                class="img-fluid msm" alt="Self-paced PPC Course in Bangalore">
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
                Certified as a <span class="text-violet">PPC Expert!</span></h2>
            <p class="text-center frame mb-5">Earn a recognized PPC certificate from <b>Brandstory Academy</b> after
                completing PPC course in Bangalore. With our certificate highlighting your expertise, you can
                always standout in the job market.</p>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/courses/certificate.webp')}}"
                        alt="PPC certificate course in Bangalore">
                </div>
                <div class="col-12 col-lg-6">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/courses/certificate-2.webp')}}"
                        alt="PPC certificate course in Bangalore">
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
                    <img src="{{ asset('frontend/assets/images/courses/googleanalytics.png')}}" alt="PPC Certification on Google Analytics 4" />
                </div>
                <div class="img-box">
                    <img src="{{ asset('frontend/assets/images/courses/semrush.png')}}" alt="PPC Certification on Semrush" />
                </div>
                <div class="img-box">
                    <img src="{{ asset('frontend/assets/images/courses/meta-ads.png')}}" alt="PPC Certification on Meta Ads" />
                </div>
                <div class="img-box">
                    <img src="{{ asset('frontend/assets/images/courses/g-ads.png')}}" alt="PPC Certification on Google Ads" />
                </div>

            </div>

        </div>
    </section>


    <section class="sp-100 Marketing-Tools-coursepage">
        <div class="container">
            <h2 class="text-center ">Learn Latest AI Automation & <span class="text-violet">PPC <br>Marketing
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
                <p>BrandStory Academy offers a strong foundation in PPC through a hands-on approach. Right
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
                <p>I recently completed my PPC course at Brandstory Academy, and it was an excellent choice
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
                <p>I recently completed my PPC course at Brandstory Academy, and it was an excellent choice
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
                                        Who Can Enroll in the PPC Course?
                                    </button>
                                </h4>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">PPC training course at BrandStory Academy is open to any looking for a career
                                             upgrade, a student or a business owner, without any restrictions. No marketing or technology
                                              background is necessary.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        Is PPC a Good Career in 2025 and Beyond?
                                    </button>
                                </h4>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul class="mb-0">
                                            <p class="mb-0 fs-16">Absolutely, PPC continues to be one of the most in-demand 
                                                skills in digital marketing. With businesses increasingly investing in paid advertising 
                                                across Google, Meta, and other digital platforms, skilled PPC professionals are highly 
                                                sought after. As brands compete for visibility and measurable ROI, PPC experts play a key 
                                                role in driving conversions, optimizing ad spend, and maximizing performance.
                                            </p>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        Do I Need Technical Knowledge to Learn PPC?
                                    </button>
                                </h4>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">No, you don’t need a technical background to learn PPC. Our PPC Course 
                                            in Bangalore is designed for beginners and focuses on understanding ad platforms, audience 
                                            targeting, bidding strategies, and performance analytics. With guided practical sessions, 
                                            anyone whether from a marketing, business, or non-technical background can easily master 
                                            PPC skills.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingfour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapsefour" aria-expanded="false"
                                        aria-controls="flush-collapsefour">
                                        Will I Work on Live Campaigns During the Course?
                                    </button>
                                </h4>
                                <div id="flush-collapsefour" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">Yes, practically every student has the opportunity to engage 
                                            with actual Google Ads and Meta Ads programs, in which they examine real-time 
                                            results and adjust for conversions under expert mentorship and guidance.
                                        </p>
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
                                        <p class="mb-0 fs-16">Our digital marketing academy in Bangalore runs Monday to
                                            Friday, from 9:30
                                            AM to 6:00 PM. The schedule includes a 30-minute lunch break and two short
                                            15-minute breaks for
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
                                        <p class="mb-0 fs-16">Absolutely! We understand the needs of working professionals,
                                            so we offer a self-paced learning option
                                            that allows you to study at your own convenience.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingeight">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseeight" aria-expanded="false"
                                        aria-controls="flush-collapseeight">
                                        Do I Get Future Assistance after Completing The Course?
                                    </button>
                                </h4>
                                <div id="flush-collapseeight" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingeight" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">Yes! At BrandStory Academy, we provide ongoing support even
                                            after you complete
                                            your course. Our team offers career guidance, mentorship, and access to updated
                                            resources to help
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
                                        Will I Receive a Certificate after Completing the PPC Course
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
                                        What Placement Support Do You Provide after Completing The Course?
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
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingeleven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseeleven" aria-expanded="false"
                                        aria-controls="flush-collapseeleven">
                                        How Long is The Internship After Completing The Course?
                                    </button>
                                </h4>
                                <div id="flush-collapseeleven" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingeleven" data-bs-parent="#accordionFlushExample1">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">We offer a 6-month paid internship after the course, providing
                                            hands-on experience
                                            with real client projects and agency-style training. This ensures you gain
                                            practical skills, industry
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
                                        What Payment Methods are Available in Your Digital Marketing Academy?
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
                                        Is EMI-based Fee Convenience Available in Your Digital Marketing Institute?
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
                                        What is The Course Fees for PPC Course?
                                    </button>
                                </h4>
                                <div id="flush-collapsefourteen" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingfourteen" data-bs-parent="#accordionFlushExample2">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16"> The PPC course fee at BrandStory Academy is <b>₹25,000</b>, which 
                                            includes live project training, internship, and placement support.</p>
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