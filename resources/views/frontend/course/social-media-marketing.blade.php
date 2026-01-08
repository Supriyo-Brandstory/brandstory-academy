@extends('frontend.partial.app')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 col-md-7 text-md-start text-center align-self-center mt-3">
                    <h2 class="mb-3 text-blue">Best Social Media Marketing Course in Bangalore | SMM Training & Certification</h2>
                    <p class="mb-2">Learn practical, industry-focused social media marketing from expert trainers at Brandstory Academy, designed for real business growth. Get hands-on projects, certification, and job-ready skills to build powerful campaigns across major platforms.</p>
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
    <section class="zig-zag">
        <div class="container">
            <h2 class="mt-5">
                Why Choose Our Social Media Marketing<span class="text-violet"> Training in Bangalore?</span>
            </h2>
            <div class="zig-box zig-reverse">
                <div class="zig-image">
                    <img src="https://images.unsplash.com/photo-1683721003111-070bcc053d8b?q=80&w=1700&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="sm-1">
                </div>
                <div class="zig-desc">
                    <h3 >
                        Industry-Expert Faculty & Live Projects
                    </h3>
                    <p>Our program is led by experienced SMM trainers in Bangalore professionals who’ve worked with leading brands, agencies, and startups. Many of our faculty members bring 7 to 12+ years of experience in running paid campaigns, organic growth strategies, influencer partnerships, content calendars, and performance optimization.</p>
                    <p>Instead of only studying case studies, you’ll work on real-world SMM case studies and live campaigns.</p>
                </div>
            </div>
            <div class="zig-box">
                <div class="zig-image">
                    <img src="https://plus.unsplash.com/premium_photo-1684341008757-3b456034e943?q=80&w=1632&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="sm-2">
                </div>
                <div class="zig-desc">
                    <h3>
                        Hands-On Learning & Portfolio Building
                    </h3>
                    <p>We believe employers hire skills - and proof of those skills. That’s why our course focuses heavily on interactive SMM workshops and guided execution.</p>
                    <p>You’ll practice with major SMM tools such as Meta Business Suite, Google Analytics, Canva, Hootsuite, and more - while learning how to plan, launch, track, and scale campaigns. </p>
                </div>
            </div>
            <div class="zig-box  zig-reverse">
                <div class="zig-image">
                    <img src="https://images.unsplash.com/photo-1675352161865-27816c76141a?q=80&w=1632&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="sm-3">
                </div>
                <div class="zig-desc">
                    <h3>
                        Recognized SMM Certification
                    </h3>
                    <p>Upon completion, you earn an industry-recognized SMM certificate from Brandstory Academy, validating your skills and commitment to professional growth. Our social media marketing accreditation helps enhance your resume, strengthens your credibility with employers.</p>
                    <p>This career-boosting certification is aligned with global best practices, making it valuable whether you aim to work in agencies, corporate teams, or freelance as an independent strategist.</p>    
                </div>
            </div>
        </div>
    </section>

    <section class="curicullmn-coursepage spb-100">
    <div class="container">
        <h2 class="text-center">
            Comprehensive Social Media Marketing 
            <span class="text-violet">Course Curriculum</span>
        </h2>

        <p class="frame-1100 text-center mt-5">
            At <b>Brandstory Academy</b>, our <b>Comprehensive Social Media Marketing (SMM) Course Curriculum</b> is designed to equip learners in <b>Bangalore and across India</b> with industry-ready skills. This in-depth SMM training blends strategy, creativity, analytics, and paid advertising to prepare students for real-world marketing challenges.
        </p>

        <p class="frame-1100 text-center mb-2 mt-2">
            Our <b>social media marketing syllabus</b> focuses on practical learning, live projects, agency tools, and real brand case studies. By the end of the course, learners gain the confidence to plan, execute, analyze, and scale social media campaigns across multiple platforms.
        </p>

        <div class="curriculum-grid">

            <!-- LEFT COLUMN -->
            <div class="grup-col">

                <!-- Module 1 -->
                <div class="curr-item">
                    <button class="curr-header" aria-expanded="false">
                        <span>Core Social Media Platforms Mastery</span>
                        <svg class="chev" viewBox="0 0 24 24">
                            <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="curr-content">
                        <p>This module focuses on mastering the most important social media platforms used by brands today. Students receive hands-on training in <b>platform-specific strategies</b> to understand how each channel works and how to use it effectively for marketing goals.</p>
                        <ul>
                            <li>Facebook Marketing: Page optimization, organic reach & community building</li>
                            <li>Instagram Marketing: Reels strategy, Stories, hashtags & visual branding</li>
                            <li>LinkedIn Marketing: Personal branding & B2B lead generation</li>
                            <li>Twitter (X) Marketing: Trend marketing & audience engagement</li>
                            <li>YouTube Marketing: Channel optimization & video SEO</li>
                            <li>Pinterest Marketing: Pins strategy & traffic generation</li>
                            <li>Platform-specific algorithms & best practices</li>
                        </ul>
                    </div>
                </div>

                <!-- Module 3 -->
                <div class="curr-item">
                    <button class="curr-header" aria-expanded="false">
                        <span>Content Creation & Curation for Social Media</span>
                        <svg class="chev" viewBox="0 0 24 24">
                            <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="curr-content">
                        <p>
                            Content is the backbone of social media success. This module teaches students how to create, curate, and manage high-performing content across platforms.
                        </p>
                        <p>
                            Students learn:
                        </p>
                        <ul>
                            <li>Social media copywriting techniques</li>
                            <li>Visual content creation using design tools</li>
                            <li>Video marketing for Reels, Shorts & Stories</li>
                            <li>Brand storytelling frameworks</li>
                            <li>Content curation strategies</li>
                            <li>Content calendar planning & automation tools</li>
                        </ul>
                    </div>
                </div>

                <!-- Module 5 -->
                <div class="curr-item">
                    <button class="curr-header" aria-expanded="false">
                        <span>Paid Social Media Advertising</span>
                        <svg class="chev" viewBox="0 0 24 24">
                            <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="curr-content">
                        <p>This advanced module focuses on performance marketing on social media, preparing students for high-demand paid advertising roles.</p>
                        <p>Topics covered include:</p>
                        <ul>
                            <li>Meta Ads (Facebook & Instagram Ads) setup</li>
                            <li>Campaign objectives & funnel-based advertising</li>
                            <li>Audience targeting, retargeting & lookalike audiences</li>
                            <li>Budget planning & ad scaling strategies</li>
                            <li>Influencer marketing campaigns</li>
                            <li>Google Ads basics & social integration</li>
                        </ul>
                    </div>
                </div>

            </div>

            <!-- RIGHT COLUMN -->
            <div class="grup-col">

                <!-- Module 2 -->
                <div class="curr-item">
                    <button class="curr-header" aria-expanded="false">
                        <span>Social Media Strategy & Planning</span>
                        <svg class="chev" viewBox="0 0 24 24">
                            <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="curr-content">
                        <p>A successful campaign starts with a strong strategy. In this module, students learn social media strategy development from scratch, aligning business goals with digital marketing outcomes.</p>
                        <p>Key learning areas include:</p>
                        <ul>
                            <li>Audience research & buyer persona creation</li>
                            <li>SMART goal setting for campaigns</li>
                            <li>End-to-end social media campaign planning</li>
                            <li>Content calendar creation & scheduling</li>
                            <li>Competitor analysis & benchmarking</li>
                            <li>Platform selection based on business goals</li>
                        </ul>
                    </div>
                </div>

                <!-- Module 4 -->
                <div class="curr-item">
                    <button class="curr-header" aria-expanded="false">
                        <span>Social Media Analytics & Reporting Fundamentals</span>
                        <svg class="chev" viewBox="0 0 24 24">
                            <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="curr-content">
                        <p>Data-driven decision-making is critical in modern SMM roles. This module introduces students to social media analytics tools and reporting techniques.</p>
                        <p>Learners will understand:</p>
                        <ul>
                            <li>Key performance metrics: reach, engagement, CTR & conversions</li>
                            <li>ROI tracking for social media campaigns</li>
                            <li>Native platform analytics dashboards</li>
                            <li>Campaign performance analysis</li>
                            <li>Optimization using data insights</li>
                            <li>Client-ready reporting formats</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

    <!-- <section class="sp-100">
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
    </section> -->
    <!-- <section class="spb-100 why-enroll-coursepage">
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
    </section> -->
    <!-- <section class="placement-coursepage">
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

    </section> -->
    <!-- <section class="journy-couresepage sp-100">
        <div class="container">
            <h2 class="text-center frame-700">Map Your Journey from Beginner to <span class="text-violet">Successful
                    Marketer </span></h2>
            <img src="{{ asset('frontend/assets/images/courses/journy.webp') }}" class="img-fluid mt-5"
                alt="Your SEO Learning Journey at BrandStory Academy" />
        </div>
    </section> -->
    <!-- <section class="Benefit-coursepage">
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



            <section class="user-type-section">
                <div class="container">
                    <div class="swiper user-type-slider">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="user-card">
                                    <div class="imgbox">
                                        <img src="{{ asset('frontend/assets/images/courses/student.svg') }}"
                                            alt="SEO Course in Bangalore for Students & Graduates">
                                    </div>
                                    <h4>Students & Graduates</h4>

                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="user-card">
                                    <div class="imgbox">
                                        <img src="{{ asset('frontend/assets/images/courses/content.png') }}"
                                            alt="SEO Course in Bangalore for Content Creators & Bloggers">
                                    </div>

                                    <h4>Content Creators & Bloggers</h4>
                                </div>
                            </div>

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



        </div>
    </section> -->
    <!-- <section class="Costs-coursepage">
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
    </section> -->
    <!-- <section class="Certified-coursepage sp-100">

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
    </section> -->
    <!-- <section class="Tools-coursepage">
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
    </section> -->


    <!-- <section class="sp-100 Marketing-Tools-coursepage">
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
    </section> -->

    <!-- <section class="spb-100 bg-lightblue1">
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
    </section> -->


    <!-- <section class="testimonial-section" id="testimony">
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
    </section> -->

    <!-- <section class="spb-100 mbl-spt-0">
        <div class="container">
            <h2 class="text-center db">Learning in Action- <span class="text-violet">Our Classroom</span></h2>
            <p class="max-1000 text-center my-5">
                At <span class="fw-600">BrandStory Academy</span>, our classrooms are designed to foster collaboration and
                hands-on experience. From interactive lessons to hands-on projects, our gallery captures the energy and
                enthusiasm that define every session at BrandStory Academy.
            </p>

            <div class="tab-content" id="pills-tabContent">
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
            </div>
        </div>
    </section> -->

    <!-- <div class="pt-100">
        <x-blog-component />
    </div> -->

<!-- <section class="sp-100">
<div class="container">

    <h2 class="text-center">
      Flexible Learning Options: Online, Classroom &
      <span class="text-violet">Weekend SMM Classes</span>
    </h2>

    <p class="frame-900 text-center mt-5">
      At Brandstory Academy, we understand that every learner has a unique schedule, learning style, and career goal. That’s why our Social Media Marketing (SMM) course in Bangalore is offered through multiple flexible learning modes—online, classroom, and weekend classes. These flexible SMM programs are designed to support students, working professionals, entrepreneurs, and freelancers across Bangalore and India, without compromising on quality or outcomes.
    </p>

    <p class="frame-900 text-center mt-2">
      Whether you prefer learning from home, engaging in face-to-face classroom sessions, or upskilling on weekends, Brandstory Academy provides a hybrid SMM course structure that ensures consistent curriculum, expert mentorship, hands-on projects, and industry-recognized certification across all formats.
    </p>

    <div class="row mt-5 g-4">
        <div class="col-lg-7 ">
            <div class="ratio ratio-21x9 mb-3">
                <img 
                src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1415&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                class="img-fluid rounded-4 object-fit-cover"
                alt="Online SMM Course">
            </div>
            <h4><span class="text-violet">Online</span> Social Media Marketing Course with Certification</h4>
            <p>
              Our online SMM course in Bangalore with certification is ideal for learners who want flexibility without sacrificing depth or interaction. Delivered through a robust virtual learning platform, this program combines live instructor-led sessions with recorded modules for self-paced revision.
            </p>
        </div>
        <div class="col-lg-5">
            <h5>Key features of our online SMM training include:</h5>
            <ul class="mt-3">
                <li><p>Live interactive virtual SMM classes with industry experts</p></li>
                <li><p>Access to recorded sessions for lifetime learning</p></li>
                <li><p>Real-time doubt-clearing and mentorship support</p></li>
                <li><p>Hands-on assignments, live projects, and case studies</p></li>
                <li><p>Online assessments and project-based evaluations</p></li>
                <li><p>Industry-recognized certification from Brandstory Academy</p></li>
            </ul>
            <p>
              This mode is perfect for remote learners, outstation students, and professionals seeking flexible online learning in social media marketing.
            </p>
        </div>
    </div>
    <div class="row g-4">
        <div class="col-lg-5">
            <h5>Highlights of our classroom-based SMM course:</h5>
            <ul class="mt-3 ">
                <li><p>Small batch sizes for personalized attention</p></li>
                <li><p>Live demonstrations and practical lab sessions</p></li>
                <li><p>Direct interaction with trainers and mentors</p></li>
                <li><p>Collaborative learning through group activities</p></li>
                <li><p>Access to campus facilities and learning resources</p></li>
                <li><p>Real-world case studies and agency-style workflows</p></li>
            </ul>
            <p>
              This in-person SMM course in Bangalore is ideal for students and fresh graduates who value structured learning and hands-on classroom exposure.
            </p>
        </div>
        <div class="col-lg-7 ">
            <div class="ratio ratio-21x9 mb-3">
                <img 
                src="https://images.unsplash.com/photo-1557838923-2985c318be48?q=80&w=2662&auto=format&fit=crop"
                class="img-fluid rounded-4 object-fit-cover"
                alt="Classroom SMM Training">
            </div>
            <h4><span class="text-violet">Interactive Classroom</span> SMM Training in Bangalore</h4>
            <p>
              For learners who thrive in face-to-face environments, our classroom SMM training in Bangalore offers an immersive, interactive learning experience. Conducted at our well-equipped training center, this format emphasizes direct instructor interaction, practical exposure, and peer collaboration.
            </p>
        </div>
    </div>
    <p class="frame-900 text-center mt-2">
      With Brandstory Academy’s flexible learning options, you can choose the format that best fits your lifestyle while gaining in-demand social media marketing skills, expert mentorship, and a recognized certification-making you industry-ready in today’s competitive digital landscape.
    </p>
</div>
</section> -->


<section class="dm-course-section spb-100">
    <div class="container">
        <div class="row">
        <div class="col-12 col-lg-5">
            <h2>
                Flexible Learning Options: Online, Classroom &
                <span class="text-violet">Weekend SMM Classes</span>
            </h2>
        </div>
        <div class="col-12 col-lg-7">
                <p>
                    At Brandstory Academy, we understand that every learner has a unique schedule, learning style, and career goal. That's why our Social Media Marketing (SMM) course in Bangalore is offered through multiple flexible learning modes—online, classroom, and weekend classes. These flexible SMM programs are designed to support students, working professionals, entrepreneurs, and freelancers across Bangalore and India, without compromising on quality or outcomes.
                </p>
            </div>
        </div>


        <div class="dm-course-main mt-5">
            <ul class="nav nav-pills mb-md-5 mb-4 d-flex justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-course1-tab" data-bs-toggle="pill" data-bs-target="#pills-course1" type="button" role="tab" aria-controls="pills-course1" aria-selected="true">Online Classroom</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-course2-tab" data-bs-toggle="pill" data-bs-target="#pills-course2" type="button" role="tab" aria-controls="pills-course2" aria-selected="false">Interactive Classroom</button>
                </li>
            </ul>
            <div class="row h-100">
                <div class="col-lg-6 d-flex">
                    <div class="background-image-sms">

                    </div>
                    <!-- <img class="w-100 rounded-4 d-lg-block d-none object-fit-cover" src="{{asset('frontend/assets/images/about/abouttab.jpg')}}"> -->
                    <img class="w-100 rounded-4 d-lg-none d-block mb-3" src="{{asset('frontend/assets/images/about/abouttab-mbl.jpg')}}">
                </div>
                <div class="col-lg-6 d-flex">
                    <div class="tab-content w-100" id="pills-tabContent">
                        <!-- Course 1 start -->
                        <div class="tab-pane fade show active" id="pills-course1" role="tabpanel" aria-labelledby="pills-course1-tab">
                            <div class="abouttab-main">
                                <h4 class="text-violet mb-3">Online Social Media Marketing Course with Certification</h4>
                                <p>Our online SMM course in Bangalore with certification is ideal for learners who want flexibility without sacrificing depth or interaction. Delivered through a robust virtual learning platform, this program combines live instructor-led sessions with recorded modules for self-paced revision.</p>
                                <b>Key features of our online SMM training include:</b>
                                <ul class="mt-2">
                                    <li>Live interactive virtual SMM classes with industry experts</li>
                                    <li>Access to recorded sessions for lifetime learning</li>
                                    <li>Real-time doubt-clearing and mentorship support</li>
                                    <li>Hands-on assignments, live projects, and case studies</li>
                                    <li>Online assessments and project-based evaluations</li>
                                    <li>Industry-recognized certification from Brandstory Academy</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Course 1 End -->

                        <!-- Course 2 start -->
                        <div class="tab-pane fade" id="pills-course2" role="tabpanel" aria-labelledby="pills-course2-tab">
                            <div class="abouttab-main">
                                <h4 class="text-violet mb-3">Interactive Classroom SMM Training in Bangalore</h4>
                                <p>For learners who thrive in face-to-face environments, our classroom SMM training in Bangalore offers an immersive, interactive learning experience. Conducted at our well-equipped training center, this format emphasizes direct instructor interaction and peer collaboration.</p>
                                <b>Highlights of our classroom-based SMM course:</b>
                                <ul class="mt-2">
                                    <li>Small batch sizes for personalized attention</li>
                                    <li>Live demonstrations and practical lab sessions</li>
                                    <li>Direct interaction with trainers and mentors</li>
                                    <li>Collaborative learning through group activities</li>
                                    <li>Access to campus facilities and learning resources</li>
                                    <li>Real-world case studies and agency-style workflows</li>
                                </ul>
                                <p class="mb-0">This in-person SMM course in Bangalore is ideal for students and fresh graduates who value structured learning and hands-on classroom exposure.</p>
                            </div>
                        </div>
                        <!-- Course 2 End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sp-100 bg-lightblue1">
    <div class="container">
        <div class="row pb-4">
            <!-- <div class="col-12 col-lg-5"> -->
                <h2 class="text-center">
                    Flexible Learning Options: Online,<br> Classroom &
                    <span class="text-violet">Weekend SMM Classes</span>
                </h2>
            <!-- </div>
            <div class="col-12 col-lg-7">
                <p>
                    At Brandstory Academy, we understand that every learner has a unique schedule, learning style, and career goal. That's why our Social Media Marketing (SMM) course in Bangalore is offered through multiple flexible learning modes—online, classroom, and weekend classes. These flexible SMM programs are designed to support students, working professionals, entrepreneurs, and freelancers across Bangalore and India, without compromising on quality or outcomes.
                </p>
            </div> -->
        </div>

        <div class="row gx-md-3">

            <!-- LEFT COLUMN -->
            <div class="col-lg-6">
                <div class="faq-main mb-lg-0 p-3">
                    <p>
                        At Brandstory Academy, we understand that every learner has a unique schedule, learning style, and career goal. That's why our Social Media Marketing (SMM) course in Bangalore is offered through multiple flexible learning modes—online, classroom, and weekend classes. These flexible SMM programs are designed to support students, working professionals, entrepreneurs, and freelancers across Bangalore and India, without compromising on quality or outcomes.
                    </p>
                </div>
                <div class="faq-main mb-lg-0 mt-4 mb-4">
                    <div class="faq-head">
                        <p class="text-violet mb-0 fw-500 fs-16">Top SMM Job Roles & Responsibilities</p>
                    </div>
                    <div class="col-12">
                        <!-- <div class="ratio" style="--bs-aspect-ratio: 20%;"> 
                            <img 
                                src="https://plus.unsplash.com/premium_photo-1678917827802-721b5f5b4bf0?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzN8fGpvYnxlbnwwfHwwfHx8MA%3D%3D" 
                                class="img-fluid object-fit-cover" 
                                alt="Extra Wide SMM Header">
                        </div> -->
                    </div>
                    <div class="p-3">
                        <p>
                            After completing the Social Media Marketing course at Brandstory Academy, learners can pursue the following career roles:
                        </p>
                        <ul>
                            <li><span class="text-violet">Social Media Manager:</span> Manages brand presence, content calendars, campaigns, and performance.</li>
                            <li><span class="text-violet">SMM Executive:</span> Executes strategies, posts content, runs ads, and tracks engagement.</li>
                            <li><span class="text-violet">Content Creator:</span> Produces reels, posts, stories, and short videos.</li>
                            <li><span class="text-violet">Community Manager:</span> Handles audience engagement and brand reputation.</li>
                            <li><span class="text-violet">Digital Marketing Executive:</span> Manages SMM along with SEO, email marketing, and influencer outreach.</li>
                        </ul>
                        <p>
                            Ideal for freshers, career switchers, and marketing graduates.
                        </p>
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN -->
            <div class="col-lg-6">
                <div class="faq-main mb-lg-3 mb-4">
                    <div class="faq-head">
                        <p class="text-violet mb-0 fw-500 fs-16">Social Media Marketing Salary Trends in Bangalore</p>
                    </div>
                    <div class="p-3">
                        <p>
                            Salary potential in social media marketing varies based on skills, experience, and specialization.
                            Professionals skilled in paid advertising, performance marketing, analytics, and influencer marketing
                            often command higher packages.
                        </p>
                        <p>
                            Freelancers and consultants can earn additional income through project-based work and retainers.
                            With the right training and portfolio, social media marketing offers one of the fastest-growing
                            salary trajectories in digital marketing.
                        </p>
                    </div>
                </div>

                <!-- PLACEMENT -->
                <div class="faq-main">
                    <div class="faq-head">
                        <p class="text-violet mb-0 fw-500 fs-16">Dedicated Placement Assistance & Career Support</p>
                    </div>
                    <div class="p-3">
                        <p>
                            At Brandstory Academy, we provide strong placement support to make students job-ready.
                            Our placement assistance includes:
                        </p>
                        <ul>
                            <li>Resume & portfolio building for SMM roles</li>
                            <li>Mock interviews & interview preparation</li>
                            <li>Career counseling & role guidance</li>
                            <li>Internship & live project opportunities</li>
                            <li>Access to hiring partners & alumni network</li>
                        </ul>
                        <p>
                            Focused on SMM courses with placement in Bangalore for a smooth career transition.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>


<!-- fAQ -->
    <section class="sp-100 ">
    <div class="container">
        <h2 class="mb-lg-5 mb-4 text-center">FAQs</h2>

        <div class="row gx-md-3">
            <div class="col-lg-12">
                <div class="faq-main mb-lg-0 mb-4">
                    <div class="faq-head">
                        <p class="text-violet mb-0 fw-500 fs-16">Social Media Marketing Course in Bangalore</p>
                    </div>

                    <div class="accordion accordion-flush" id="accordionFlushExample">

                        <!-- FAQ 1 -->
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    What Makes Your Social Media Marketing Course in Bangalore the Best?
                                </button>
                            </h4>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        Brandstory Academy offers an industry-aligned Social Media Marketing curriculum
                                        designed by professionals. The course includes hands-on projects, expert trainers,
                                        real brand case studies, flexible learning modes, and strong career support,
                                        making it one of the most practical SMM courses in Bangalore.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Will I Receive a Certification After Completing the SMM Course?
                                </button>
                            </h4>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        Yes, upon successful completion of the Social Media Marketing course, you will
                                        receive an industry-recognized certification from Brandstory Academy, validating
                                        your skills and practical expertise.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Are There Practical Projects Included in the SMM Training?
                                </button>
                            </h4>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        Yes, the Social Media Marketing course includes live projects, real-world
                                        assignments, and industry case studies. This hands-on approach ensures learners
                                        gain practical experience in executing and managing social media campaigns.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapsefour" aria-expanded="false"
                                    aria-controls="flush-collapsefour">
                                    What Topics Are Covered in the Social Media Marketing Course Curriculum?
                                </button>
                            </h4>
                            <div id="flush-collapsefour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        The curriculum covers core social media platforms, content creation, paid social
                                        media advertising, analytics and reporting, social media strategy planning, and
                                        the use of essential SMM tools required by agencies and brands.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 5 -->
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingfive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapsefive" aria-expanded="false"
                                    aria-controls="flush-collapsefive">
                                    Is Content Creation for Social Media Included in the Course?
                                </button>
                            </h4>
                            <div id="flush-collapsefive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        Yes, content creation is a core part of the Social Media Marketing course. You
                                        will learn copywriting, visual storytelling, video marketing, reels, shorts, and
                                        content calendar management.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 6 -->
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingseven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseseven" aria-expanded="false"
                                    aria-controls="flush-collapseseven">
                                    Do You Offer an Online Social Media Marketing Course in Bangalore?
                                </button>
                            </h4>
                            <div id="flush-collapseseven" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingseven" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        Yes, Brandstory Academy offers a fully interactive online Social Media Marketing
                                        course accessible from Bangalore and across India, with live mentor-led
                                        sessions.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 7 -->
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingeight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseeight" aria-expanded="false"
                                    aria-controls="flush-collapseeight">
                                    What Career Support Is Provided After Completing the SMM Course?
                                </button>
                            </h4>
                            <div id="flush-collapseeight" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingeight" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        We provide resume preparation, interview training, career guidance, and placement
                                        assistance. Graduates can pursue roles such as Social Media Executive, SMM
                                        Specialist, Content Creator, or Social Media Manager.
                                    </p>
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
