@extends('frontend.partial.app')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 text-md-start text-center align-self-center">
                    <h1 class="mb-3 text-blue">Expert-led Digital Marketing Course in Bangalore for Job-ready Learning</h1>
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
                <div class="col-lg-6 col-md-5">
                    <img class="w-100" src="{{asset('frontend/assets/images/courses/Digital-Marketing.webp')}}">
                </div>
            </div>
        </div>
    </section>
    <section class="sp-100">
        <div class="container">
            <h2 class="mb-3 text-lg-start text-center">About <span class="text-violet">BrandStory Academy</span> </h2>
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 px-0">
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
                <div class="col-12 col-lg-6 px-0">
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
                <div class="row">
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
                placement support.
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
                            <li>Understanding website hierarchy</li>
                            <li>SEO-friendly site planning</li>
                            <li>Optimizing for user experience</li>
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
                            <li>Campaign setup and structure</li>
                            <li>Keyword bidding strategy</li>
                            <li>Ad copy optimization</li>
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
                            <li>Keyword research and mapping</li>
                            <li>On-page & off-page optimization</li>
                            <li>SEO tools and analytics</li>
                        </ul>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="curr-item">
                    <button class="curr-header" aria-expanded="false">
                        <span>Google Business Profile</span>
                        <svg class="chev" viewBox="0 0 24 24">
                            <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="curr-content">
                        <ul>
                            <li>Profile setup and optimization</li>
                            <li>Local SEO strategies</li>
                            <li>Customer review management</li>
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
                            <li>Performance tracking</li>
                            <li>Fixing crawl issues</li>
                            <li>Keyword impressions & CTR</li>
                        </ul>
                    </div>
                </div>

                <!-- Item 6 -->
                <div class="curr-item">
                    <button class="curr-header" aria-expanded="false">
                        <span>Google Analytics</span>
                        <svg class="chev" viewBox="0 0 24 24">
                            <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="curr-content">
                        <ul>
                            <li>Tracking website performance</li>
                            <li>Audience & traffic analysis</li>
                            <li>Goal and event setup</li>
                        </ul>
                    </div>
                </div>

                <!-- Item 7 -->
                <div class="curr-item">
                    <button class="curr-header" aria-expanded="false">
                        <span>Google Tag Manager</span>
                        <svg class="chev" viewBox="0 0 24 24">
                            <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="curr-content">
                        <ul>
                            <li>Implementing tracking codes</li>
                            <li>Trigger & variable setup</li>
                            <li>Integration with analytics</li>
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
                            <li>Page creation & optimization</li>
                            <li>Facebook Ads campaigns</li>
                            <li>Audience insights</li>
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
                                            alt="Students & Graduates">
                                    </div>
                                    <h4>Students & Graduates</h4>

                                </div>
                            </div>

                            <!-- Slide 2 -->
                            <div class="swiper-slide">
                                <div class="user-card">
                                    <div class="imgbox">
                                        <img src="{{ asset('frontend/assets/images/courses/content.png')}}"
                                            alt="Content Creators & Bloggers">
                                    </div>

                                    <h4>Content Creators & Bloggers</h4>
                                </div>
                            </div>

                            <!-- Slide 3 -->
                            <div class="swiper-slide">
                                <div class="user-card">
                                    <div class="imgbox">
                                        <img src="{{ asset('frontend/assets/images/courses/Business.png')}}"
                                            alt="Business Owners">
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
                training in Kolkata. You can avail easy EMI and part payment options along with industry-grade
                certifications and a placement guarantee. </p>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="row b-box">
                        <div class="col-8 px-0">
                            <div class="grid-two">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/g-w.svg')}}" alt="">
                                    <p>30+ Modules Covered</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/g-w.svg')}}" alt="">
                                    <p>14+ Certifications</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/g-w.svg')}}" alt="">
                                    <p>Work on Live Projects</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/g-w.svg')}}" alt="">
                                    <p>6 Months Program</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/g-w.svg')}}" alt="">
                                    <p>10+ Case Studies</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/g-w.svg')}}" alt="">
                                    <p>30+ Industry Tools </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 px-0">
                            <img src="{{ asset('frontend/assets/images/courses/classroom.webp')}}" class="img-fluid msm">

                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="row b-box">
                        <div class="col-8 px-0">
                            <div class="grid-two">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/g-w.svg')}}" alt="">
                                    <p>30+ Modules Covered</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/g-w.svg')}}" alt="">
                                    <p>14+ Certifications</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/g-w.svg')}}" alt="">
                                    <p>Work on Live Projects</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/g-w.svg')}}" alt="">
                                    <p>6 Months Program</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/g-w.svg')}}" alt="">
                                    <p>10+ Case Studies</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/g-w.svg')}}" alt="">
                                    <p>30+ Industry Tools </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 px-0">
                            <img src="{{ asset('frontend/assets/images/courses/classroom.webp')}}" class="img-fluid msm">

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
            <p class="text-center mb-5">30+ digital marketing tools tools logo </p>
            <div class="swiper brandlogo1" data-aos="fade-up">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/g-analytics.png')}}"
                                class="img-fluid" alt="Our Partner Company for Placements">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/ahrefs.png')}}"
                                class="img-fluid" alt="Our Partner Company for Placements">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/surfer.png')}}"
                                class="img-fluid" alt="Our Partner Company for Placements">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/tools/rivierside.png')}}"
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
                            <img src="{{asset('frontend/assets/images/tools/semrush.png')}}"
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
    <style>
        .outline-btn a {
            border: solid 1px #845EF7;
            border-radius: 200px;
            padding: 15px 24px;
            text-decoration: unset;
            color: #845EF7;
            width: 180px;
            display: flex;
            justify-content: center;
        }

        .why-enroll-coursepage {

            .frame-700 {
                width: 700px;
                margin: 0 auto;
            }

            .whychoose-boxes {
                margin-top: 50px;

                h4 {
                    color: #302357;
                }

                p {
                    color: #444242;
                }

                .box {
                    background: white;
                    padding: 20px;
                    border-radius: 6px;
                    box-shadow: 0px 4px 15px 0px #0000001A;
                    display: flex;
                    flex-direction: column;
                    overflow: hidden;
                    gap: 5px;
                    position: relative;
                    border: solid;
                    border-width: 3px 0 0 0;


                    img {
                        width: 70px;
                        height: 70px;
                        object-fit: contain;
                        margin-bottom: 20px;
                    }


                }

                .y-top {
                    border-color: #FFC700;
                }

                .o-top {
                    border-color: #EA7D30
                }

                .v-top {
                    border-color: #8280FF;
                }

                .r-top {
                    border-color: #EC696A;
                }

                .s-top {
                    border-color: #31ACFE;
                }

                .g-top {
                    border-color: #2EE6CD;
                }
            }
        }

        .placement-coursepage {
            background: #BDBDBD1A;
            padding: 100px 0px;

            .violet-btn a {
                display: inline-block;
                margin-top: 20px;
            }
        }

        .journy-couresepage {
            .frame-700 {
                width: 700px;
                margin: 0 auto;
            }
        }

        .curicullmn-coursepage {
            .frame-1100 {
                width: 1100px;
                margin: 0 auto;
            }

            .curriculum-grid {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
                margin-top: 40px;
            }

            .curr-item {
                border: 1px solid #e5e5e5;
                border-radius: 6px;
                overflow: hidden;
                background: #fff;
                transition: all 0.3s ease;
            }

            .curr-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                width: 100%;
                background: #fff;
                padding: 18px 20px;
                font-weight: 500;
                border: none;
                outline: none;
                cursor: pointer;
                font-size: 16px;
                color: #222;
                text-align: left;
                transition: all 0.2s ease;
            }

            .curr-header:hover {
                background: #f8f8ff;
            }

            .chev {
                width: 18px;
                height: 18px;
                transition: transform 0.25s ease;
            }

            .curr-header[aria-expanded="true"] .chev {
                transform: rotate(180deg);
            }

            /* === Content === */
            .curr-content {
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.4s ease, padding 0.3s ease;
                padding: 0 20px;
                background: #fafafa;
            }

            .curr-header[aria-expanded="true"]+.curr-content {
                max-height: 300px;
                padding: 15px 20px 20px;
            }

            /* Bullet list */
            .curr-content ul {
                /* custom bullet icon */
                list-style-position: inside;
                margin: 0;
                padding-left: 0;
            }

            .curr-content li {
                font-size: 15px;
                color: #555;
                margin: 6px 0;
                line-height: 1.5;
            }
        }

        .Benefit-coursepage {
            .frame-800 {
                width: 800px;
                margin: 0 auto;
            }

            .user-type-section {
                padding: 80px 0;
                background: #fff;
            }

            .user-card {
                /* box-shadow: 0 4px 20px #edf1ff; */
                text-align: center;
                transition: all 0.3s ease;

            }

            .imgbox {
                border-radius: 20px;
                padding: 40px 25px;
                margin-bottom: 10px;
                box-shadow: 0px 40px 60px -2px #5E89FF23;
                border: 1px solid transparent;
                background:
                    linear-gradient(white, white) padding-box,
                    linear-gradient(180deg, rgba(234, 240, 255, 0.7) -0.27%, rgba(234, 240, 255, 0) 100%) border-box;
            }

            .user-card img {
                width: 200px;
                height: 150px;
                margin: 0 auto 0px;
                display: block;
                object-fit: contain;
            }

            .user-card h4 {
                font-size: 16px;
                color: #444242;
                font-weight: 400;
                margin: 0;
            }



            .swiper-pagination-bullet {
                background: #8a6ff7;
                opacity: 0.5;
            }

            .swiper-pagination-bullet-active {
                opacity: 1;
            }

            .swiper {
                height: 310px;
                padding: 0 10px;
            }

        }

        .Costs-coursepage {
            background: #271C45;
            color: #fff;
            padding: 80px 0px;

            .frame-800 {
                width: 1000px;
                margin: 0 auto;
            }

            .b-box {
                background: #4A338E;
                border-radius: 10px;
                padding: 0px 10px;
                align-items: center
            }

            .grid-two {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;

                p {
                    margin: 0;
                    font-size: 15px;
                }

            }

            .msm {
                height: 200px !important;
                object-fit: contain;
            }
        }

        .Certified-coursepage {
            .frame {
                width: 800px;
                margin: 0 auto;
            }
        }

        .Tools-coursepage {
            background: #271C45;
            color: #fff;
            padding: 80px 0px;

            .grid-four {
                display: grid;
                grid-template-columns: repeat(4, 140px);
                /* 4 equal boxes */
                gap: 20px;
                justify-content: center;
                /* centers the whole grid */
                align-items: center;
                /* centers vertically inside the section */
                margin: 0 auto;
                /* ensures it's centered as a block */
                text-align: center;

                .img-box {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    background: #fff;
                    padding: 20px;
                    width: 140px;

                    img {
                        width: 110px;
                        height: 70px;
                        object-fit: contain;
                    }
                }
            }

        }
        .Marketing-Tools-coursepage{
            img{
                width: 129px;
                height: 45px;
                object-fit: contain;
            }
        }
    </style>

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