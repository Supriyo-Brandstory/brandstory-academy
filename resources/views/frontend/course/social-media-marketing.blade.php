@extends('frontend.partial.app')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 col-md-7 text-md-start text-center align-self-center mt-3">
                    <h1 class="mb-3 text-blue">Best SEO Course in Bangalore- SEO Training Institute Bangalore</h1>
                    <p class="mb-2">Enroll in the best SEO course and training institute in Bangalore to gain real-world
                        expertise in Search
                        Engine Optimization. Our SEO course covers on-page, off-page, and technical SEO to help you get
                        industry-grade knowledge. We provide 1,000+ Placement Partners, 99% Placement Assurance, and 15+
                        Industry Certifications.
                    </p>
                    <div class="d-md-flex align-items-center">
                        <div class="outline-btn d-flex me-lg-5 mb-lg-0 my-4 justify-content-md-start justify-content-center">
                            <a href="{{ route('about') }}"><strong>About Academy</strong></a>
                        </div>
                        <div class="violet-btn d-flex me-lg-5 mb-lg-0 my-4 justify-content-md-start justify-content-center">
                            <a href="{{ route('contact') }}">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 col-md-5">
                    <img class="w-100" src="{{ asset('frontend/assets/images/courses/seo-course-in-bangalore.webp') }}"
                        alt="SEO Course in Bangalore by BrandStory Academy">
                </div>
            </div>
        </div>
    </section>
    <section class="sp-100">
        <div class="container">
            <h2 class="mb-3 text-lg-start text-center">About <span class="text-violet">BrandStory Academy</span> </h2>
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 px-2 text-center text-lg-start order-2 order-lg-1">
                    <p><a href="https://www.brandstoryacademy.com"
                            style="color: black; font-size: 18px; text-decoration: underline;"><b>BrandStory Academy</a></b>
                        is among the best digital marketing & <b>SEO training institutes in Bangalore</b>. We provide
                        industry-oriented SEO courses in Bangalore, both
                        offline and self-paced learning options. We have 5+ years of expertise in training students and
                        providing them with placement opportunities
                        in <b>1000+ global brands</b>.</p>
                    <p>Our SEO course in Bangalore covers everything from on-page SEO, off-page SEO, <b>technical SEO
                            implementation</b>, and link-building strategies. With
                        BrandStory Academy, you can avail <b>online and self-paced learning options</b> at your convenience.
                        Through our Google Search Engine Optimization course,
                        students can gain real-world expertise in SEO as well as digital marketing. We are the top institute
                        <b>offering SEO courses for 5+ years</b>, ensuring
                        nothing is missed. We value each candidate and their career prospect with utmost priority.</p>

                </div>
                <div class="col-12 col-lg-6  order-1 order-lg-2">
                    <img src="{{ asset('frontend/assets/images/courses/certificate.webp') }}" class="img-fluid"
                        alt="SEO Course Completion Certificate by BrandStory Academy" />
                </div>
            </div>
        </div>
    </section>
    <section class="spb-100 why-enroll-coursepage">
        <div class="container">
            <h2 class="mb-3 text-lg-center text-center frame-700">Why Enroll in BrandStory Academy for
                <span class="text-violet ">SEO Course in Bangalore?</span>
            </h2>
            <p class="frame-700 text-center">BrandStory Academy is the best <b>SEO training institute</b> to help you master
                all essentials with real project experience. Our SEO course in Bangalore
                is designed by the most seasoned industry professionals, ensuring you gain <b>job-ready skills</b> and
                hands-on learning experience. </p>
            <div class="row whychoose-boxes ">
                <div class="col-12 col-lg-4 mb-4 ">
                    <div class="box y-top">
                        <img src="{{ asset('frontend/assets/images/courses/certificate.svg') }}" />
                        <h4>Hands-on Training</h4>
                        <p>Master useful SEO tools like Semrush, Ahrefs, Google Search Console, Google Analytics, Tag
                            Manager, etc. Our expert trainers will guide
                            you through real industry workflow and practical sessions. </p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mb-4">
                    <div class="box g-top">
                        <img src="{{ asset('frontend/assets/images/courses/live.svg') }}" />
                        <h4>One-on-One Mentorship</h4>
                        <p>Get mentorship from the real industry professionals who guide you through setting up competitor
                            audit, keyword research, and strategy for live SEO projects.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mb-4">
                    <div class="box s-top">
                        <img src="{{ asset('frontend/assets/images/courses/career.svg') }}" />
                        <h4>Interview Readiness Program</h4>
                        <p>Participate in various career grooming programs and sessions regarding SEO interview questions,
                            presenting a portfolio, and communication skill development.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mb-4">
                    <div class="box r-top">
                        <img src="{{ asset('frontend/assets/images/courses/interview.svg') }}" />
                        <h4>Networking Opportunities</h4>
                        <p>PConnect with expert marketing professionals and various recruiters through personalized
                            workshops and webinars to help you expand your career network. </p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mb-4">
                    <div class="box v-top">
                        <img src="{{ asset('frontend/assets/images/courses/mentorship.svg') }}" />
                        <h4>Placement Assurance</h4>
                        <p>BrandStory Academy offers 100% placement assurance for students pursuing the SEO course in
                            Bangalore. Secure placement in top companies across India with us.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mb-4">
                    <div class="box o-top">
                        <img src="{{ asset('frontend/assets/images/courses/soft-skill.svg') }}" />
                        <h4>Professional Certification</h4>
                        <p>Earn global recognition and certification from HubSpot, Ahrefs, Semrush, etc. These credentials
                            strengthen your digital expertise and make your resume stand out.</p>
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
                        <img src="{{ asset('frontend/assets/images/courses/placed-student-1.webp') }}" class="img-fluid"
                            alt="Our Student Placement - Harsha placed at FedEx" />
                    </div>
                    <div class="col-12 col-lg-4">
                        <img src="{{ asset('frontend/assets/images/courses/placed-student-2.webp') }}" class="img-fluid"
                            lt="Our Student Placement - Roshan placed at Amazon" />
                    </div>
                    <div class="col-12 col-lg-4">
                        <img src="{{ asset('frontend/assets/images/courses/placed-student-3.webp') }}" class="img-fluid"
                            lt="Our Student Placement - Maria Sherly placed at Wallmart" />
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
            <img src="{{ asset('frontend/assets/images/courses/journy.webp') }}" class="img-fluid mt-5"
                alt="Your SEO Learning Journey at BrandStory Academy" />
        </div>
    </section>
    <section class="curicullmn-coursepage spb-100">
        <div class="container">
            <h2 class="text-center">All-inclusive SEO Course <span class="text-violet">Syllabus</span></h2>
            <p class="frame-1100 text-center">
                Our full-suite SEO course in Bangalore includes <b>13+ expertly designed modules</b> to make you an
                industry-ready professional. <b>“Full-suite”</b> means we start from the fundamentals to the advanced
                strategies of search engine optimization.
            </p>

            <div class="curriculum-grid">
                <div class="grup-col">
                    <!-- Item 1 -->
                    <div class="curr-item">
                        <button class="curr-header" aria-expanded="false">
                            <span>Introduction to SEO & Search Engines</span>
                            <svg class="chev" viewBox="0 0 24 24">
                                <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <div class="curr-content">
                            <ul>
                                <li>What is SEO and Why It Matters</li>
                                <li>Search Engines Crawling, Indexing, and Ranking</li>
                                <li>Understanding SERPs and Search Intent</li>
                                <li>SEO Terminology and Concepts</li>
                                <li>Difference Between On-Page, Off-Page, and Technical SEO</li>
                                <li>How Algorithms Influence Search Rankings</li>
                                <li>User Experience and Site Performance</li>
                                <li>White Hat & Black Hat SEO Practices</li>
                                <li>Evolution of SEO and Future Trends</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="curr-item">
                        <button class="curr-header" aria-expanded="false">
                            <span>Keyword Research & Analysis</span>
                            <svg class="chev" viewBox="0 0 24 24">
                                <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <div class="curr-content">
                            <ul>
                                <li>Introduction to Keyword Research</li>
                                <li>Understanding Search Intent & User Behavior</li>
                                <li>Keyword Types: Short-Tail, Long-Tail, and LSI</li>
                                <li>Keyword Research Tools (Google Keyword Planner, Ahrefs, SEMrush, etc.)</li>
                                <li>Keyword Difficulty, Volume, and Competition</li>
                                <li>Content Gaps and Keyword Opportunity</li>
                                <li>Competitor Keyword Analysis Techniques</li>
                                <li>Mapping Keywords to Website Pages</li>
                                <li>Creating a Keyword Strategy for Better ROI</li>
                                <li>Tracking Keyword Performance and Refining Strategy</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="curr-item">
                        <button class="curr-header" aria-expanded="false">
                            <span>On-Page Optimization</span>
                            <svg class="chev" viewBox="0 0 24 24">
                                <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <div class="curr-content">
                            <ul>
                                <li>Introduction to On-Page SEO and Its Role</li>
                                <li>Title Tags, Meta Descriptions, and Header Tags</li>
                                <li>Practices for Keyword Placement and Density</li>
                                <li>Image Optimization (Alt Text, File Names, Compression)</li>
                                <li>Creating SEO-Friendly URLs and Internal Linking</li>
                                <li>Improving Content Readability and Structure</li>
                                <li>Enhancing Page Speed and Core Web Vitals</li>
                                <li>Mobile-Friendliness and Responsive Design</li>
                                <li>Schema Markup and Rich Snippets Implementation</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="curr-item">
                        <button class="curr-header" aria-expanded="false">
                            <span>Technical SEO</span>
                            <svg class="chev" viewBox="0 0 24 24">
                                <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <div class="curr-content">
                            <ul>
                                <li>Introduction to Technical SEO</li>
                                <li>How Search Engines Crawl & Index Websites</li>
                                <li>XML Sitemaps and Robots.txt Configuration</li>
                                <li>Fixing Crawl Errors and Broken Links</li>
                                <li>Implementing HTTPS Secure Protocols</li>
                                <li>Improving Site Speed and Core Web Vitals</li>
                                <li>Mobile-First Indexing & Responsive Design</li>
                                <li>Canonical Tags & Duplicate Content Management</li>
                                <li>Structured Data and Schema Markup Setup</li>
                                <li>Performing Technical SEO Audits</li>
                                <li>Technical SEO Tools</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Item 5 -->
                    <div class="curr-item">
                        <button class="curr-header" aria-expanded="false">
                            <span>Off-Page SEO & Link Building</span>
                            <svg class="chev" viewBox="0 0 24 24">
                                <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <div class="curr-content">
                            <ul>
                                <li>Off-Page SEO and Its Role in Ranking</li>
                                <li>Backlinks and Domain Authority</li>
                                <li>Types of Backlinks: Dofollow, Nofollow, and Sponsored</li>
                                <li>Strategies for High-Quality Link Building</li>
                                <li>Guest Posting, Outreach, and Blogger Collaboration</li>
                                <li>Social Bookmarking and Directory Submissions</li>
                                <li>Using PR and Influencer Outreach</li>
                                <li>Competitor Backlink Analysis with SEO Tools</li>
                                <li>Avoiding Toxic Links and Google Penalties</li>
                                <li>Tracking Backlink Performance and DA Growth</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Item 6 -->
                    <div class="curr-item">
                        <button class="curr-header" aria-expanded="false">
                            <span>Local SEO & Google Business Profile</span>
                            <svg class="chev" viewBox="0 0 24 24">
                                <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <div class="curr-content">
                            <ul>
                                <li>Local SEO and Its Business Benefits</li>
                                <li>Set Up & Optimizing Your Google Business Profile</li>
                                <li>Importance of Name, Address, Phone Consistency</li>
                                <li>Localized Content for Better Visibility</li>
                                <li>Managing Reviews & Building Online Reputation</li>
                                <li>Local Keyword Research & Optimization</li>
                                <li>Building Local Citations and Directory Listings</li>
                                <li>Adding Photos, Posts, and Offers to GBP</li>
                                <li>Tracking Local Rankings & Performance Metrics</li>
                                <li>Running Local Ads & Leveraging GBP Insights</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Item 7 -->
                    <div class="curr-item">
                        <button class="curr-header" aria-expanded="false">
                            <span>Mobile SEO Optimization</span>
                            <svg class="chev" viewBox="0 0 24 24">
                                <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <div class="curr-content">
                            <ul>
                                <li>Introduction to Mobile SEO and Its Importance</li>
                                <li>Understanding Mobile-First Indexing</li>
                                <li>Responsive Web Design Best Practices</li>
                                <li>Optimizing Page Speed for Mobile</li>
                                <li>Mobile-Friendly Navigation and UX Enhancements</li>
                                <li>AMP (Accelerated Mobile Pages) Implementation</li>
                                <li>Images, Fonts, and Media for Mobile Devices</li>
                                <li>Ensuring Proper Indexing of Mobile Versions</li>
                                <li>Testing with Google’s Mobile-Friendly Test Tool</li>
                                <li>Tracking Mobile SEO Performance and Analytics</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="grup-col">
                    <!-- Item 8 -->
                    <div class="curr-item">
                        <button class="curr-header" aria-expanded="false">
                            <span>SEO Tools & Analytics</span>
                            <svg class="chev" viewBox="0 0 24 24">
                                <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <div class="curr-content">
                            <ul>
                                <li>SEO Tools and Their Role in Optimization</li>
                                <li>Google Analytics, Search Console, Ahrefs, and SEMrush</li>
                                <li>Keyword Research Tools for Data-Driven Insights</li>
                                <li>Competitor and Backlink Analysis Tools</li>
                                <li>Website Audit Tools for Technical SEO</li>
                                <li>Rank Tracking & Keyword Performance Monitoring</li>
                                <li>Measuring Organic Traffic, CTR, & Bounce Rate</li>
                                <li>Set Up Goals and Conversion Tracking</li>
                                <li>Reporting & Visualizing SEO Data for Clients</li>
                                <li>Tools for Comprehensive SEO Insights</li>
                            </ul>
                        </div>
                    </div>


                    <!-- Item 9 -->
                    <div class="curr-item">
                        <button class="curr-header" aria-expanded="false">
                            <span>Competitor & Website SEO Audit</span>
                            <svg class="chev" viewBox="0 0 24 24">
                                <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <div class="curr-content">
                            <ul>
                                <li>Introduction to SEO Audit & Its Importance</li>
                                <li>Identifying and Analyzing Key Competitors</li>
                                <li>Competitor Keywords, Backlinks, & Content Strategies</li>
                                <li>Performing Comprehensive On-Page and Off-Page Audits</li>
                                <li>Assessing Technical SEO Health (Speed, Indexing, Mobile, etc.)</li>
                                <li>Checking Domain Authority, Trust Flow, and Site Structure</li>
                                <li>Identifying Content Gaps and Opportunities</li>
                                <li>SEMrush, Ahrefs, and Screaming Frog for Website Audits</li>
                                <li>Creating Audit Reports with Actionable Insights</li>
                                <li>Implementing Audit Findings to Improve Overall SEO</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Item 10 -->
                    <div class="curr-item">
                        <button class="curr-header" aria-expanded="false">
                            <span>Voice Search Optimization</span>
                            <svg class="chev" viewBox="0 0 24 24">
                                <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <div class="curr-content">
                            <ul>
                                <li>Introduction to Voice Search & Its Growth</li>
                                <li>How Voice Assistants Work (Google Assistant, Siri, Alexa)</li>
                                <li>Understanding Voice Search Algorithms</li>
                                <li>Difference Between Text and Voice Queries</li>
                                <li>Optimizing for Conversational Keywords</li>
                                <li>Keyword Strategy for Voice Search</li>
                                <li>Content for Question-Based Searches</li>
                                <li>Role of Featured Snippets in Voice SEO</li>
                                <li>Using Schema Markup for Voice Optimization</li>
                                <li>Mobile Optimization for Voice Search</li>
                                <li>Local SEO & “Near Me” Voice Queries</li>
                                <li>Page Speed & Technical Factors for Voice SEO</li>
                                <li>Creating FAQ and Conversational Content</li>
                                <li>Measuring Voice Search Performance</li>
                                <li>Future Trends in Voice Search & AI Integration</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Item 11 -->
                    <div class="curr-item">
                        <button class="curr-header" aria-expanded="false">
                            <span>AI SEO</span>
                            <svg class="chev" viewBox="0 0 24 24">
                                <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <div class="curr-content">
                            <ul>
                                <li>Introduction to AI in SEO</li>
                                <li>Role of AI in Google Algorithms (RankBrain, BERT, Gemini)</li>
                                <li>Using AI for Keyword Research & Clustering</li>
                                <li>Content Generation with AI Tools</li>
                                <li>Optimizing Content with NLP (Natural Language Processing)</li>
                                <li>AI-Powered On-Page Optimization</li>
                                <li>Predictive SEO & Trend Forecasting</li>
                                <li>Automating Meta Tags and Descriptions with AI</li>
                                <li>AI Tools for Competitor Analysis</li>
                                <li>Image & Voice Search Optimization with AI</li>
                                <li>Using ChatGPT & Gemini for SEO Strategy</li>
                                <li>Data Analysis & Reporting with AI Tools</li>
                                <li>Ethical Use of AI in SEO</li>
                                <li>Future of AI-Driven SEO Strategies</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Item 12 -->
                    <div class="curr-item">
                        <button class="curr-header" aria-expanded="false">
                            <span>E-commerce SEO</span>
                            <svg class="chev" viewBox="0 0 24 24">
                                <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <div class="curr-content">
                            <ul>
                                <li>Introduction to E-commerce SEO</li>
                                <li>E-commerce Search Intent</li>
                                <li>Keyword Research for Product & Category Pages</li>
                                <li>On-Page Optimization for Product Listings</li>
                                <li>Optimizing Product Titles, Descriptions & Meta Tags</li>
                                <li>Structured Data & Schema for E-commerce Sites</li>
                                <li>Image Optimization for Online Stores</li>
                                <li>Technical SEO for E-commerce Platforms</li>
                                <li>URL Structure & Internal Linking Best Practices</li>
                                <li>Handling Duplicate Content & Canonical Tags</li>
                                <li>Mobile Optimization for E-commerce</li>
                                <li>User Experience (UX) & Conversion Optimization</li>
                                <li>Link Building for E-commerce Websites</li>
                                <li>Product Reviews & Rich Snippets Optimization</li>
                                <li>Measuring Performance with Google Analytics</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Item 13 -->
                    <div class="curr-item">
                        <button class="curr-header" aria-expanded="false">
                            <span>Reporting & Performance Tracking</span>
                            <svg class="chev" viewBox="0 0 24 24">
                                <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <div class="curr-content">
                            <ul>
                                <li>Introduction to SEO Reporting</li>
                                <li>Performance Report on Google Analytics 4</li>
                                <li>Key SEO Metrics (Clicks, CTR, Impressions, Position)</li>
                                <li>Traffic Source Analysis</li>
                                <li>Keyword Ranking Reports</li>
                                <li>Landing Page Performance Tracking</li>
                                <li>Conversion Tracking & Goal Setup</li>
                                <li>Creating Custom Dashboards</li>
                                <li>Competitor Performance Comparison</li>
                                <li>Bounce Rate & User Behavior Analysis</li>
                                <li>Measuring ROI of SEO Campaigns</li>
                                <li>Monthly & Weekly Report Structuring</li>
                                <li>Automated Reporting Tools Overview</li>
                                <li>Interpreting Data for Strategic Decisions</li>
                                <li>Insights to Clients & Stakeholders</li>
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
            <h2 class="frame-800 text-center">Who Can Benefit from Our SEO Course in <span
                    class="text-violet">Bangalore?</span></h2>
            <p class="text-center frame-800">We provide the best SEO course and training in Bangalore for students,
                business owners,
                and working professionals. With BrandStory Academy SEO course you can gain the <a
                    href="https://brandstoryacademy.com/blogs/key-digital-marketing-skills-youll-master-in-a-digital-marketing-course"
                    style="color: black; font-size: 18px; text-decoration: underline;"><strong>hands-on skills</strong></a>
                of local SEO, e-commerce SEO,
                AI SEO, and advanced SEO strategies like nowhere before. We help you become a <b>beginner to pro</b> under a
                nurturing ecosystem led
                by renowned SEO professionals.
            </p>

            <!-- Swiper CSS -->


            <section class="user-type-section">
                <div class="container">
                    <div class="swiper user-type-slider">
                        <div class="swiper-wrapper">

                            <!-- Slide 1 -->
                            <div class="swiper-slide">
                                <div class="user-card">
                                    <div class="imgbox">
                                        <img src="{{ asset('frontend/assets/images/courses/student.svg') }}"
                                            alt="SEO Course in Bangalore for Students & Graduates">
                                    </div>
                                    <h4>Students & Graduates</h4>

                                </div>
                            </div>

                            <!-- Slide 2 -->
                            <div class="swiper-slide">
                                <div class="user-card">
                                    <div class="imgbox">
                                        <img src="{{ asset('frontend/assets/images/courses/content.png') }}"
                                            alt="SEO Course in Bangalore for Content Creators & Bloggers">
                                    </div>

                                    <h4>Content Creators & Bloggers</h4>
                                </div>
                            </div>

                            <!-- Slide 3 -->
                            <div class="swiper-slide">
                                <div class="user-card">
                                    <div class="imgbox">
                                        <img src="{{ asset('frontend/assets/images/courses/Business.png') }}"
                                            alt="SEO Course in Bangalore for Business Owners">
                                    </div>

                                    <h4>Business Owners</h4>
                                </div>
                            </div>


                            <div class="swiper-slide">
                                <div class="user-card">
                                    <div class="imgbox">

                                        <img src="{{ asset('frontend/assets/images/courses/Startup.png') }}"
                                            alt="SEO Course in Bangalore for Business Owners">
                                    </div>

                                    <h4>Startup Founders</h4>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="user-card">
                                    <div class="imgbox">

                                        <img src="{{ asset('frontend/assets/images/courses/jobseeker.png') }}"
                                            alt="SEO Course in Bangalore for Job Seekers">
                                    </div>

                                    <h4>Job Seekers</h4>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="user-card">
                                    <div class="imgbox">

                                        <img src="{{ asset('frontend/assets/images/courses/Career.png') }}"
                                            alt="SEO Course in Bangalore for Career Changers">
                                    </div>

                                    <h4>Career Changers</h4>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="user-card">
                                    <div class="imgbox">

                                        <img src="{{ asset('frontend/assets/images/courses/Freelancers.png') }}"
                                            alt="SEO Course in Bangalore for Freelancers">
                                    </div>

                                    <h4>Freelancers</h4>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="user-card">
                                    <div class="imgbox">

                                        <img src="{{ asset('frontend/assets/images/courses/Homemakers.png') }}"
                                            alt="SEO Course in Bangalore for Homemakers">
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
            <h2 class="text-center mb-4 frame-800">Professional SEO Training in Bangalore at <span
                    class="text-violet">Affordable Costs</span></h2>
            <p class="text-center frame-800 mb-5">Our modern-day SEO training institute in Bangalore equips you with
                industry-grade learning at affordable costs.
                We provide you with the latest SEO tools, advanced strategies, case studies, real projects, conceptual
                learning, globally recognized certification,
                and <a href="https://brandstoryacademy.com/placement"
                    style="color: white; font-size: 18px; text-decoration: underline;"><strong>100% placement
                        support</strong></a>
                because we provide the best SEO course in Bangalore.
            </p>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="row b-box">
                        <div class="col-lg-8 col-6 px-0">
                            <div class="grid-two">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/g-w.svg') }}"
                                        alt="SEO Course in Bangalore Details">
                                    <p>13+ Modules</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/g-w.svg') }}"
                                        alt="SEO Course in Bangalore Details">
                                    <p>10+ Certifications</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/g-w.svg') }}"
                                        alt="SEO Course in Bangalore Details">
                                    <p>20+ Live Projects</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/g-w.svg') }}"
                                        alt="SEO Course in Bangalore Details">
                                    <p>6 Month Course</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/g-w.svg') }}"
                                        alt="SEO Course in Bangalore Details">
                                    <p>10+ Case Studies</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/g-w.svg') }}"
                                        alt="SEO Course in Bangalore Details">
                                    <p>20+ Tools </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 px-0">
                            <a href="{{ url('/contact-us') }}">
                                <img src="{{ asset('frontend/assets/images/courses/classroom-learning.png') }}"
                                    class="img-fluid msm" alt="Best SEO Course in Bangalore">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="row b-box">
                        <div class="col-lg-8 col-6 px-0">
                            <div class="grid-two">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/self.svg') }}"
                                        alt="Self-paced SEO Course in Bangalore Details">
                                    <p>13+ Modules</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/self.svg') }}"
                                        alt="Self-paced SEO Course in Bangalore Details">
                                    <p>10+ Certifications</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/self.svg') }}"
                                        alt="Self-paced SEO Course in Bangalore Details">
                                    <p>20+ Live Projects</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/self.svg') }}"
                                        alt="Self-paced SEO Course in Bangalore Details">
                                    <p>6 Month Course</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/self.svg') }}"
                                        alt="Self-paced SEO Course in Bangalore Details">
                                    <p>10+ Case Studies</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/courses/self.svg') }}"
                                        alt="Self-paced SEO Course in Bangalore Details">
                                    <p>20+ Tools </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 px-0">
                            <a href="{{ url('/contact-us') }}">
                                <img src="{{ asset('frontend/assets/images/courses/self-paced-learning.png') }}"
                                    class="img-fluid msm" alt="Self-paced SEO Course in Bangalore">
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
                Certified as a <span class="text-violet">SEO Expert!</span></h2>
            <p class="text-center frame mb-5">After completing our SEO course in Bangalore at BrandStory Academy, you’ll
                get a
                certificate that is recognized by all agencies across India & abroad. We provide <b>1 training
                    certificate</b> along
                with <b>1 internship certificate</b>, where you become an SEO expert certified by <b>BrandStory</b>.</p>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/courses/certificate.webp') }}"
                        alt="Digital marketing certificate course in Bangalore">
                </div>
                <div class="col-12 col-lg-6">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/courses/certificate-2.webp') }}"
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
                    <img src="{{ asset('frontend/assets/images/courses/googleanalytics.png') }}"
                        alt="Digital Marketing Certification on Google Analytics 4" />
                </div>
                <div class="img-box">
                    <img src="{{ asset('frontend/assets/images/courses/semrush.png') }}"
                        alt="SEO Certification on Semrush" />
                </div>
                <div class="img-box">
                    <img src="{{ asset('frontend/assets/images/courses/hubspot.png') }}"
                        alt="SEO Certification on Hubspot" />
                </div>
                <div class="img-box">
                    <img src="{{ asset('frontend/assets/images/courses/ahrefs.png') }}"
                        alt="SEO Certification on Ahrefs" />
                </div>

            </div>

        </div>
    </section>


    <section class="sp-100 Marketing-Tools-coursepage">
        <div class="container">
            <h2 class="text-center ">Learn Latest AI Automation & <span class="text-violet">SEO <br>Marketing
                    Tools</span></h2>
            <p class="text-center mb-5">Get hands-on experience of 30+ advanced marketing tools</p>
            <div class="swiper brandlogo1" data-aos="fade-up">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{ asset('frontend/assets/images/tools/g-analytics.png') }}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - Google Analytics 4">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{ asset('frontend/assets/images/tools/ahrefs.png') }}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - Ahrefs">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{ asset('frontend/assets/images/tools/surfer.png') }}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - Surfer SEO">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{ asset('frontend/assets/images/tools/rivierside.png') }}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - RivierSide">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{ asset('frontend/assets/images/tools/active-campaign.png') }}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - Active Campaign">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{ asset('frontend/assets/images/tools/semrush.png') }}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - SEMrush">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{ asset('frontend/assets/images/tools/adcreativeai.png') }}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - Ad Creative AI">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{ asset('frontend/assets/images/tools/buzzsumo.png') }}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - Buzzsumo">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{ asset('frontend/assets/images/tools/canva.png') }}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - Canva">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{ asset('frontend/assets/images/tools/chatgpt.png') }}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - ChatGPT">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{ asset('frontend/assets/images/tools/gmbeverywhere.png') }}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - GMB Everywhere">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{ asset('frontend/assets/images/tools/google-ads.png') }}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - Google Ads">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{ asset('frontend/assets/images/tools/google-business-profile.png') }}"
                                class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - Google Business Profile">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{ asset('frontend/assets/images/tools/google-search-console.png') }}"
                                class="img-fluid" alt="Digital Marketing Course Curriculum Tools - Google Search Console">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{ asset('frontend/assets/images/tools/grammarly.png') }}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - Grammarly">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{ asset('frontend/assets/images/tools/hootsuite.png') }}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - Hootsuite">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{ asset('frontend/assets/images/tools/hubspot.png') }}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - Hubspot">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{ asset('frontend/assets/images/tools/mailchimp.png') }}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - MailChimp">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{ asset('frontend/assets/images/tools/meta.png') }}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - Meta Ads Manager">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{ asset('frontend/assets/images/tools/microsoft-clarity.png') }}"
                                class="img-fluid" alt="Digital Marketing Course Curriculum Tools - Microsoft Clarity">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{ asset('frontend/assets/images/tools/moz-pro.png') }}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - Moz Pro">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{ asset('frontend/assets/images/tools/screaming-frog.png') }}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - Screaming Frog">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{ asset('frontend/assets/images/tools/socialbee.png') }}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - Social Bee">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{ asset('frontend/assets/images/tools/spyfu.png') }}" class="img-fluid"
                                alt="Digital Marketing Course Curriculum Tools - SpyFu">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{ asset('frontend/assets/images/tools/wordstream.png') }}" class="img-fluid"
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
                            <img src="{{ asset('frontend/assets/images/placement/brand1.svg') }}" class="img-fluid"
                                alt="Our Partner Company for Placements">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{ asset('frontend/assets/images/placement/brand2.svg') }}" class="img-fluid"
                                alt="Our Partner Company for Placements">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{ asset('frontend/assets/images/placement/brand3.svg') }}" class="img-fluid"
                                alt="Our Partner Company for Placements">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{ asset('frontend/assets/images/placement/brand4.svg') }}" class="img-fluid"
                                alt="Our Partner Company for Placements">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{ asset('frontend/assets/images/placement/brand5.svg') }}" class="img-fluid"
                                alt="Our Partner Company for Placements">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{ asset('frontend/assets/images/placement/brand6.svg') }}" class="img-fluid"
                                alt="Our Partner Company for Placements">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{ asset('frontend/assets/images/placement/brand7.svg') }}" class="img-fluid"
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
                <img src="{{ asset('frontend/assets/images/quoteicon.png') }}" class="img-fluid mb-4" width="40">
                <p>Recently had the pleasure of experiencing BrandStory Academy, and I must say, it exceeded my
                    expectations. From the moment I enrolled, the academy’s dedication to nurturing professional growth and
                    providing high-quality education was evident.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Jerophin Jeevitha
                </div>
            </div>
            <div class="testimonial">
                <img src="{{ asset('frontend/assets/images/quoteicon.png') }}" class="img-fluid mb-4" width="40">
                <p>BrandStory Academy offers a strong foundation in SEO through a hands-on approach. Right
                    from the start, I worked on real agency projects, gaining practical experience that many other courses
                    lack. The six-month internship following the course was a transformative experience, allowing me to
                    refine my skills in a real work environment.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Sandra R
                </div>
            </div>
            <div class="testimonial">
                <img src="{{ asset('frontend/assets/images/quoteicon.png') }}" class="img-fluid mb-4" width="40">
                <p>I recently completed my SEO course in Bangalore at Brandstory Academy, and it was an excellent choice
                    for my professional growth. The program was structured effectively, addressing all the key components of
                    digital marketing. What impressed me the most was the 6-month internship offered with Brandstory Digital
                    Marketing company.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Ayesha Ms
                </div>
            </div>
            <div class="testimonial">
                <img src="{{ asset('frontend/assets/images/quoteicon.png') }}" class="img-fluid mb-4" width="40">
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
                <img src="{{ asset('frontend/assets/images/quoteicon.png') }}" class="img-fluid mb-4" width="40">
                <p>Enrolling at Brandstory Academy was an eye-opening experience. The course combines academic rigor with
                    hands-on practice for the Indian market. With dedicated mentors and real projects, my digital marketing
                    skills have flourished, inspiring my ambitions.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Gowtham AG
                </div>
            </div>
            <div class="testimonial">
                <img src="{{ asset('frontend/assets/images/quoteicon.png') }}" class="img-fluid mb-4" width="40">
                <p>Brandstory Academy is a leading digital marketing institute with a practical curriculum. They teach the
                    fundamentals of SEO, offer a 6-month internship, and assist with placements. Joining is a
                    decision you won’t regret.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Shobika Akilan
                </div>
            </div>

            <!-- duplicate for smooth infinite loop -->
            <div class="testimonial">
                <img src="{{ asset('frontend/assets/images/quoteicon.png') }}" class="img-fluid mb-4" width="40">
                <p>Recently had the pleasure of experiencing BrandStory Academy, and I must say, it exceeded my
                    expectations. From the moment I enrolled in SEO Course, the academy’s dedication to nurturing
                    professional growth and
                    providing high-quality education was evident.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Jerophin Jeevitha
                </div>
            </div>
            <div class="testimonial">
                <img src="{{ asset('frontend/assets/images/quoteicon.png') }}" class="img-fluid mb-4" width="40">
                <p>BrandStory Academy offers a strong foundation in SEO through a hands-on approach. Right
                    from the start, I worked on real agency projects, gaining practical experience that many other courses
                    lack. The six-month internship following the course was a transformative experience, allowing me to
                    refine my skills in a real work environment.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Sandra R
                </div>
            </div>
            <div class="testimonial">
                <img src="{{ asset('frontend/assets/images/quoteicon.png') }}" class="img-fluid mb-4" width="40">
                <p>I recently completed my SEO course at Brandstory Academy, and it was an excellent choice
                    for my professional growth. The program was structured effectively, addressing all the key components of
                    digital marketing. What impressed me the most was the 6-month internship offered with Brandstory Digital
                    Marketing company.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Ayesha Ms
                </div>
            </div>
            <div class="testimonial">
                <img src="{{ asset('frontend/assets/images/quoteicon.png') }}" class="img-fluid mb-4" width="40">
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
                <img src="{{ asset('frontend/assets/images/quoteicon.png') }}" class="img-fluid mb-4" width="40">
                <p>Enrolling at Brandstory Academy was an eye-opening experience. The course combines academic rigor with
                    hands-on practice for the Indian market. With dedicated mentors and real projects, my digital marketing
                    skills have flourished, inspiring my ambitions.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Gowtham AG
                </div>
            </div>
            <div class="testimonial">
                <img src="{{ asset('frontend/assets/images/quoteicon.png') }}" class="img-fluid mb-4" width="40">
                <p>Brandstory Academy is a leading SEO institute with a practical curriculum. They teach the
                    fundamentals of SEO, offer a 6-month internship, and assist with placements. Joining is a
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
                            <img src="{{ asset('frontend/assets/images/gallery/gallery-1.webp') }}" class="img-fluid"
                                alt="Classroom Image 1" />
                            <img src="{{ asset('frontend/assets/images/gallery/gallery-2.webp') }}"
                                class="img-fluid mt-4" alt="Classroom Image 2" />
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('frontend/assets/images/gallery/gallery-3.webp') }}" class="img-fluid"
                                alt="Classroom Image 3" />
                            <img src="{{ asset('frontend/assets/images/gallery/gallery-4.webp') }}"
                                class="img-fluid mt-4" alt="Classroom Image 4" />
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('frontend/assets/images/gallery/gallery-5.webp') }}" class="img-fluid"
                                alt="Classroom Image 5" />
                            <img src="{{ asset('frontend/assets/images/gallery/gallery-6.webp') }}"
                                class="img-fluid mt-4" alt="Classroom Image 6" />
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
                                        Why Do Businesses Need SEO Today?
                                    </button>
                                </h4>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">In today’s digital-first world, visibility is everything. SEO
                                            helps businesses
                                            appear on top of search results, attract the right audience, and build trust
                                            with potential customers.
                                            Unlike paid ads, SEO drives long-term growth through organic reach, making it
                                            one of the most cost-effective
                                            and sustainable marketing strategies. Businesses that invest in SEO gain a
                                            strong competitive advantage in their
                                            industry.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        Is Coding Knowledge Necessary for Learning SEO?
                                    </button>
                                </h4>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul class="mb-0">
                                            <p class="mb-0 fs-16">No, coding is not mandatory to master SEO. While a basic
                                                understanding of website structure and HTML tags can help, SEO is more about
                                                strategy,
                                                creativity, content, and data interpretation. Our instructors guide you
                                                step-by-step,
                                                ensuring you understand both the technical and non-technical aspects with
                                                ease.
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
                                        Can I Take The SEO Course Online?
                                    </button>
                                </h4>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">Yes, BrandStory Academy offers both online and classroom
                                            learning options.
                                            The online sessions are live and interactive, allowing you to engage directly
                                            with mentors,
                                            ask questions in real-time, and participate in practical exercises- just like in
                                            a classroom setup.
                                            You can choose the format that best suits your schedule and learning
                                            preferences.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingfour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapsefour" aria-expanded="false"
                                        aria-controls="flush-collapsefour">
                                        Why Should I Choose BrandStory Academy for SEO Training?
                                    </button>
                                </h4>
                                <div id="flush-collapsefour" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">At BrandStory Academy, we focus on job-oriented and practical
                                            learning.
                                            Our trainers are industry professionals who share real-world insights, case
                                            studies, and proven
                                            strategies. You’ll gain hands-on experience through live projects, performance
                                            tracking, and exposure
                                            to premium tools- ensuring you graduate not just with knowledge, but with the
                                            skills employers truly
                                            value.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingfive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapsefive" aria-expanded="false"
                                        aria-controls="flush-collapsefive">
                                        What Topics are Covered in The SEO Course?
                                    </button>
                                </h4>
                                <div id="flush-collapsefive" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">The course includes On-page SEO, Off-page SEO, Technical SEO,
                                            Keyword Research,
                                            Local SEO, Mobile SEO, Voice SEO, E-commerce SEO, and SEO Reporting.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingseven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseseven" aria-expanded="false"
                                        aria-controls="flush-collapseseven">
                                        I’m a Working Professional. Can I Get Flexible Learning Hours?
                                    </button>
                                </h4>
                                <div id="flush-collapseseven" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingseven" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">Yes, BrandStory Academy provides flexible batch timings and
                                            online
                                            options to ensure working professionals can learn conveniently.</p>
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
                                        What Certifications Will I Receive After The Course?
                                    </button>
                                </h4>
                                <div id="flush-collapsenine" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingnine" data-bs-parent="#accordionFlushExample1">
                                    <div class="accordion-body">
                                        <ul class="mb-0">
                                            <p class="mb-0 fs-16">After successfully completing the program, you will
                                                receive an industry-recognized
                                                BrandStory Academy SEO Certification. In addition, we guide you to earn free
                                                and valuable certifications
                                                from Google, HubSpot, and Semrush, which further strengthen your
                                                professional portfolio and credibility
                                                in the job market.
                                            </p>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingten">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseten" aria-expanded="false"
                                        aria-controls="flush-collapseten">
                                        Does BrandStory Academy Provide Placement Assistance?
                                    </button>
                                </h4>
                                <div id="flush-collapseten" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingten" data-bs-parent="#accordionFlushExample1">
                                    <div class="accordion-body">
                                        <ul class="mb-0">
                                            <p class="mb-0 fs-16">Absolutely, we provide dedicated <b>100% placement
                                                    assistance</b> to help
                                                students transition smoothly into the industry. From resume-building and
                                                mock interviews
                                                to connecting you with hiring partners and agencies, our team ensures you’re
                                                ready to take
                                                on real-world roles in digital marketing. We have <b>1000+ dedicated
                                                    placement partners</b> to help
                                                you land a good job just after completing the course and internship.
                                            </p>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingten">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseten" aria-expanded="false"
                                        aria-controls="flush-collapseten">
                                        What Job Roles Can I Expect after Completing The SEO Course?
                                    </button>
                                </h4>
                                <div id="flush-collapseten" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingten" data-bs-parent="#accordionFlushExample1">
                                    <div class="accordion-body">
                                        <ul class="mb-0">
                                            <p class="mb-0 fs-16">After completing the course, you can explore diverse
                                                roles such as
                                                SEO Executive, Digital Marketing Analyst, Content Strategist, SEO
                                                Copywriter, or SEO Manager.
                                                With experience, you can also progress into specialized roles like Technical
                                                SEO Specialist,
                                                SEO Consultant, or Digital Marketing Lead. The <b>demand for SEO
                                                    professionals is growing</b> rapidly
                                                across all industries.
                                            </p>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingten">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseten" aria-expanded="false"
                                        aria-controls="flush-collapseten">
                                        What’s The Average Salary for an SEO Professional in India?
                                    </button>
                                </h4>
                                <div id="flush-collapseten" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingten" data-bs-parent="#accordionFlushExample1">
                                    <div class="accordion-body">
                                        <ul class="mb-0">
                                            <p class="mb-0 fs-16">Salaries in SEO depend on experience, skills, and
                                                performance. Beginners can
                                                expect a starting package of <b>₹2.5 LPA to ₹6.5 LPA</b>, while experienced
                                                professionals can earn
                                                anywhere from ₹8 LPA to ₹15 LPA or even higher in managerial roles. With
                                                experience and continuous
                                                learning, SEO professionals can build a highly rewarding career in digital
                                                marketing.</p>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingeleven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseeleven" aria-expanded="false"
                                        aria-controls="flush-collapseeleven">
                                        Is SEO Still a Good Career Choice in 2025?
                                    </button>
                                </h4>
                                <div id="flush-collapseeleven" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingeleven" data-bs-parent="#accordionFlushExample1">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">Definitely, as businesses increasingly shift online, SEO
                                            remains one of the most sought-after
                                            digital marketing skills. Companies across industries are actively looking for
                                            SEO experts who can help them
                                            grow visibility, generate leads, and outperform competitors. It’s a career that
                                            combines creativity, strategy,
                                            and analytics- and offers tremendous growth opportunities.
                                        </p>
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
                                        What Payment Methods are Available in Your Academy?
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
                                <h4 class="accordion-header" id="flush-headingfourteen">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapsefourteen" aria-expanded="false"
                                        aria-controls="flush-collapsefourteen">
                                        What is The Course Fees for SEO Course in Bangalore?
                                    </button>
                                </h4>
                                <div id="flush-collapsefourteen" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingfourteen" data-bs-parent="#accordionFlushExample2">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">The SEO Course in Bangalore at BrandStory Academy is
                                            <b>priced at ₹30,000</b>, offering excellent value through
                                            practical training, live projects, and placement support.</p>
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
                0: {
                    slidesPerView: 1
                },
                768: {
                    slidesPerView: 2
                },
                992: {
                    slidesPerView: 3
                },
                1200: {
                    slidesPerView: 4
                },
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
