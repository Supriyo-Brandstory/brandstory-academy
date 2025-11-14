@extends('frontend.partial.app')
@section('content')

    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 text-md-start text-center">
                    <h1 class="mb-3">Best <span class="text-violet">Digital Marketing Institute in Bangalore</span> for Career-focused Courses</h1>
                    <p class="mb-4"><span >At BrandStory Academy, you can learn the A-Z of
                        digital marketing, work on live projects, and get certified to launch your career as a digital
                        marketing expert. Learn, work, and certify your skills in 6 months</span>
                        with digital marketing, SEO, PPC courses in Bangalore.</p>
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
            <h5 class="text-center mb-5 fw-600">Our Learners Placed In <span class="text-orange">1,000+</span> Global
                Companies</h5>
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

     <section class="aboutacademy-sec spb-100">
        <div class="container position-relative">
            <div class="row">
                <div class="col-md-6">
                </div>
                <div class="col-lg-6">
                    <h2 class="mb-3 text-lg-start text-center">About BrandStory <span class="text-violet">Academy</span>
                    </h2>
                    <img class="w-100 d-lg-none d-block mb-3"
                        src="{{asset('frontend/assets/images/home/about-academy-img.webp')}}" alt="Digital Marketing training Institute in Bangalore - BrandStory Academy">
                    <p><b>BrandStory Academy</b> was founded in 2018 with a vision to redefine how digital marketing is taught. As a leading digital marketing training institute in 
                        Bangalore, we believe learning should spark curiosity, creativity, and confidence. Our classrooms are collaborative spaces where ideas can flow freely, challenges 
                        are embraced, and innovation is celebratedp</p>
                    <p class="mb-0">We are among the <b>top-rated digital marketing Institutes</b> in Bangalore offering advanced and industry-relevant course curriculum. Our digital marketing 
                        courses are designed to transform you into job-ready professionals and secure placements with <b>1,000+ global companies</b>.</p>
                    <div class="violet-btn d-flex me-lg-5 mb-lg-0 mb-4 mt-4 justify-content-md-start justify-content-center">
                            <a href="{{route('about')}}">Know About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <!-- ====== Modal Structure ====== -->
    <div id="videoModal" class="video-modal">
        <div class="video-modal-content">
            <span class="video-close">&times;</span>
            <iframe id="youtubeVideo" width="100%" height="400" src="" frameborder="0" allow="autoplay; encrypted-media"
                allowfullscreen>
            </iframe>
        </div>
    </div>



    <section class="dm-course-section spb-100">
        <div class="container">
            <h2 class="text-center db"><span class="text-violet">Best</span> Digital Marketing Institute in Bangalore</h2>
            <p class="max-1000 text-center">BrandStory Academy, the best digital marketing training institute in Bangalore is offering most affordable and advanced 
                <a href="https://www.brandstoryacademy.com/courses" style="color: black; font-size: 18px; text-decoration: underline;"><b>digital marketing courses</b></a> in Bangalore that cover everything from the fundamentals to expert-level learning. We prepare aspiring 
                professionals with a well-structured curriculum, experienced faculty, and practical learning.</p>
            <div class="dm-course-main mt-5">
                <ul class="nav nav-pills mb-md-5 mb-4 d-flex justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-course1-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-course1" type="button" role="tab" aria-controls="pills-course1"
                            aria-selected="true">Mastery</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-course2-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-course2" type="button" role="tab" aria-controls="pills-course2"
                            aria-selected="false">Advanced</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-course3-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-course3" type="button" role="tab" aria-controls="pills-course3"
                            aria-selected="false">Expert</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <!-- Course 1 start -->
                    <div class="tab-pane fade show active" id="pills-course1" role="tabpanel"
                        aria-labelledby="pills-course1-tab">
                        <div class="row">
                            <div class="col-lg-6">
                                <img class="w-100 mb-lg-0 mb-3 d-lg-block d-none"
                                    src="{{asset('frontend/assets/images/home/course1.webp')}}" alt="Digital Marketing Mastery with Artificial Intelligence(AI) Course - BrandStory Academy">
                                <img class="w-100 mb-lg-0 mb-3 d-lg-none d-block"
                                    src="{{asset('frontend/assets/images/home/mbl-course1.webp')}}">
                            </div>
                            <div class="col-lg-6 d-flex">
                                <div class="course-main d-flex flex-column w-100">
                                    <h4 class="mb-3 text-blue">Digital Marketing MASTERY With <span
                                            class="text-violet">Artificial Intelligence(AI)</span></h4>
                                    <p class="mb-lg-5 mb-4 fw-500 fs-16">Duration: 2.5 Months + 6 Months Internship</p>
                                    <ul class="mb-0 list-unstyled p-0">
                                        <li class="mb-4"><img class="me-2"
                                                src="{{asset('frontend/assets/images/home/course1-icon.svg')}}">Professional
                                            Level Certification</li>
                                        <li class="mb-4"><img class="me-2"
                                                src="{{asset('frontend/assets/images/home/course1-icon.svg')}}">AI-Led
                                            Digital Marketing</li>
                                        <li class="mb-4"><img class="me-2"
                                                src="{{asset('frontend/assets/images/home/course1-icon.svg')}}">8+ Live
                                            Projects</li>
                                        <li class="mb-4"><img class="me-2"
                                                src="{{asset('frontend/assets/images/home/course1-icon.svg')}}">6 Months
                                            Internship</li>
                                    </ul>
                                    <div class="coursebtns one mt-auto">
                                        <a class="text-decoration-none d-block w-100 text-center bg-violet"
                                            href="{{route('course_digital_marketing')}}">Enroll Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Course 1 End -->

                    <!-- Course 2 start -->
                    <div class="tab-pane fade" id="pills-course2" role="tabpanel" aria-labelledby="pills-course2-tab">
                        <div class="row">
                            <div class="col-lg-6">
                                <img class="w-100 mb-lg-0 mb-3 d-lg-block d-none"
                                    src="{{asset('frontend/assets/images/home/course2.webp')}}" alt="Advanced Digital Marketing Boot Camp Course - BrandStory Academy">
                                <img class="w-100 mb-lg-0 mb-3 d-lg-none d-block"
                                    src="{{asset('frontend/assets/images/home/mbl-course2.webp')}}">
                            </div>
                            <div class="col-lg-6 d-flex">
                                <div class="course-main d-flex flex-column w-100">
                                    <h4 class="mb-3 text-blue">Advanced Digital Marketing <span class="text-lightblue">Boot
                                            Camp</span></h4>
                                    <p class="mb-lg-5 mb-3 fw-500 fs-16">Duration: 3.5 Month + Internship of 6 Months</p>
                                    <ul class="mb-0 list-unstyled p-0">
                                        <li class="mb-4"><img class="me-2"
                                                src="{{asset('frontend/assets/images/home/course2-icon.svg')}}">Advanced-Level
                                            Certification</li>
                                        <li class="mb-4"><img class="me-2"
                                                src="{{asset('frontend/assets/images/home/course2-icon.svg')}}">Full-Stack
                                            Digital Marketing</li>
                                        <li class="mb-4"><img class="me-2"
                                                src="{{asset('frontend/assets/images/home/course2-icon.svg')}}">AI &
                                            Automation</li>
                                        <li class="mb-4"><img class="me-2"
                                                src="{{asset('frontend/assets/images/home/course2-icon.svg')}}">Video
                                            Editing & Podcasting</li>
                                        <li class="mb-4"><img class="me-2"
                                                src="{{asset('frontend/assets/images/home/course2-icon.svg')}}">Studio
                                            Techniques</li>
                                        <li class="mb-4"><img class="me-2"
                                                src="{{asset('frontend/assets/images/home/course2-icon.svg')}}">10+ Live
                                            Projects</li>
                                    </ul>
                                    <div class="coursebtns one mt-auto">
                                        <a class="text-decoration-none d-block w-100 text-center bg-violet"
                                            href="{{route('advanced_digital_marketing_boot_camp')}}">Enroll Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Course 2 End -->

                    <!-- Course 3 Start -->
                    <div class="tab-pane fade" id="pills-course3" role="tabpanel" aria-labelledby="pills-course3-tab">
                        <div class="row">
                            <div class="col-lg-6">
                                <img class="w-100 mb-lg-0 mb-3 d-lg-block d-none"
                                    src="{{asset('frontend/assets/images/home/course3.webp')}}" alt="Digital Marketing Course in Bangalore - BrandStory Academy">
                                <img class="w-100 mb-lg-0 mb-3 d-lg-none d-block"
                                    src="{{asset('frontend/assets/images/home/mbl-course3.webp')}}">
                            </div>
                            <div class="col-lg-6 d-flex">
                                <div class="course-main d-flex flex-column w-100">
                                    <h4 class="mb-3 text-blue">360° Digital <span class="text-yellow">Marketing Course</span></h4>
                                    <p class="mb-lg-5 mb-4 fw-500 fs-16">Duration: 4 Months + 6 Months Internship</p>
                                    <ul class="mb-0 list-unstyled p-0">
                                        <li class="mb-4"><img class="me-2"
                                                src="{{asset('frontend/assets/images/home/course3-icon.svg')}}">Master-Level
                                            Certification</li>
                                        <li class="mb-4"><img class="me-2"
                                                src="{{asset('frontend/assets/images/home/course3-icon.svg')}}">E-Commerce
                                            Growth Marketing</li>
                                        <li class="mb-4"><img class="me-2"
                                                src="{{asset('frontend/assets/images/home/course3-icon.svg')}}">Full-Stack
                                            Digital Marketing</li>
                                        <li class="mb-4"><img class="me-2"
                                                src="{{asset('frontend/assets/images/home/course3-icon.svg')}}">SEO & Google Ads</li>
                                        <li class="mb-4"><img class="me-2"
                                                src="{{asset('frontend/assets/images/home/course3-icon.svg')}}">Content Production & Social Media
                                            </li>
                                        <li class="mb-4"><img class="me-2"
                                                src="{{asset('frontend/assets/images/home/course3-icon.svg')}}">E-mail Marketing & Perf. Marketing</li>
                                        <li class="mb-4"><img class="me-2"
                                                src="{{asset('frontend/assets/images/home/course3-icon.svg')}}">20+ Live
                                            Projects</li>
                                    </ul>
                                    <div class="coursebtns one mt-auto">
                                        <a class="text-decoration-none d-block w-100 text-center bg-violet"
                                            href="{{route('course_360_degree_digital_marketing')}}">Enroll Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Course 3 End -->
                </div>
            </div>
        </div>
    </section>

        <section class="course_list spb-100">
        <div class="container">
            <h2 class="text-center db">Digital Marketing <span class="text-violet">Certificate Courses</span></h2>
                        <p class="max-1000 text-center">Dive Deep into Core Marketing Concepts and Transform Your Skillset</p>
            <div class="course_grid">
                <div class="grid_box">
                    <img class="main-bg-img" src="{{ asset('frontend/assets/images/courses/Digital-Marketing.webp') }}"
                        alt="Digital Marketing">
                    <div class="content">
                        <h3>Digital Marketing</h3>

                        <div class="badge-bg">
                            <div>
                                <img src="{{ asset('frontend/assets/images/courses/time.svg') }}">Duration - 4 Months

                            </div>
                            <div>
                                <img src="{{ asset('frontend/assets/images/courses/mony.svg') }}">Course Fees - 40,000

                            </div>
                        </div>
                        <ul>
                            <li>Become Zero to Hero in Digital Marketing </li>
                        </ul>
                        <div class="btn-grup">
                            <a href="{{route('contact')}}" class="outline-btn">Talk To Mentor</a>
                            <a href="{{route('new_digital_marketing')}}" class="violet-btn">Explore Details </a>
                        </div>
                    </div>
                </div>
                <div class="grid_box">
                    <img class="main-bg-img"
                        src="{{ asset('frontend/assets/images/courses/Search-Engine-Optimization.webp') }}"
                        alt="Digital Marketing Executive">
                    <div class="content">
                        <h3>Search Engine Optimization (SEO)</h3>

                        <div class="badge-bg">
                            <div>
                                <img src="{{ asset('frontend/assets/images/courses/time.svg') }}">Duration - 2 Months

                            </div>
                            <div>
                                <img src="{{ asset('frontend/assets/images/courses/mony.svg') }}">Course Fees - 30,000

                            </div>
                        </div>
                        <ul>
                            <li>Gain Real-world Experience by Working on Live SEO Projects </li>
                        </ul>
                        <div class="btn-grup">
                            <a href="{{route('contact')}}" class="outline-btn">Talk To Mentor</a>
                            <a href="{{route('seo_course_in_bangalore')}}" class="violet-btn">Explore Details </a>
                        </div>
                    </div>
                </div>
                <div class="grid_box">
                    <img class="main-bg-img" src="{{ asset('frontend/assets/images/courses/Pay-Per-Click-PPC).webp') }}"
                        alt="Digital Marketing Executive">
                    <div class="content">
                        <h3>Pay Per Click (PPC)</h3>

                        <div class="badge-bg">
                            <div>
                                <img src="{{ asset('frontend/assets/images/courses/time.svg') }}">Duration - 2 Months

                            </div>
                            <div>
                                <img src="{{ asset('frontend/assets/images/courses/mony.svg') }}">Course Fees - 25,000

                            </div>
                        </div>
                        <ul>
                            <li>Build Strategy and Launch High-impact PPC Campaigns </li>
                        </ul>
                        <div class="btn-grup">
                            <a href="{{route('contact')}}" class="outline-btn">Talk To Mentor</a>
                            <a href="{{route('ppc_course_in_bangalore')}}" class="violet-btn">Explore Details </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>



    <section class="mentorship-section">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12 col-md-8">
                    <h3 class="mb-md-4 mb-3 fw-600 text-md-start text-center">Courses Designed<span
                            class="text-lightblue"> for Your Success</span></h3>
                    <p class="fs-20 mbl-fs-16 fw-500 mb-4 text-md-start text-center">Explore our digital marketing courses at the best digital 
                        <span class="db">marketing traning institute in Bangalore, designed to</span> <span class="db">equip you with the expert-level skills and knowledge.</span>
                    </p>
                    <div class="mentorship-btn d-flex justify-content-md-start justify-content-center">
                        <a class="btn-font" href="{{route('course.list')}}">Explore Our Courses</a>
                    </div>
                </div>
            </div>
            <div class="mentorship-img">
                <img src="{{asset('frontend/assets/images/home/mentorship-img-newn.webp')}}" alt="Expert-led mentorship by industry experts - BrandStory Academy">
            </div>
        </div>
    </section>

    <section class="placement-coursepage">
        <div class="container">
            <h2 class="text-center">Proud Achievements of <span class="text-violet">Our Alumni</span></h2>
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
                    <div class="col-12 col-lg-4">
                        <img src="{{ asset('frontend/assets/images/courses/placement-student-1.webp') }}" class="img-fluid" alt="Our Student Placement - Sandra R placed at FedEx"/>
                    </div>
                    <div class="col-12 col-lg-4">
                        <img src="{{ asset('frontend/assets/images/courses/placement-student-2.webp') }}" class="img-fluid" lt="Our Student Placement - Gautham AG placed at Amazon"/>
                    </div>
                    <div class="col-12 col-lg-4">
                        <img src="{{ asset('frontend/assets/images/courses/placement-student-3.webp') }}" class="img-fluid" lt="Our Student Placement - Nithin Reddy placed at Wallmart"/>
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

    <section class="tech-capital sp-100">
        <div class="container">
            <h2 class="text-center mb-4">Why Learn <span class="text-violet">Digital Marketing</span> at BrandStory Academy</h2>
            <p class="mb-4 text-center">BrandStory Academy, located at Domlur, Bangalore, is a hub for some of the best digital
                <span class="db">marketing courses in India. If you are seeking to explore career opportunities in </span>
                <span class="db">digital marketing, this is the place to start.</span>
            </p>
            <div class="row">
                <div class="col-lg-6">
                    <img class="w-100 d-lg-block d-none mb-lg-0 mb-3"
                        src="{{asset('frontend/assets/images/home/tech-capital-img.webp')}}" alt="BrandStory Academy is the best digital marketing institute in Bangalore">
                    <img class="w-100 d-lg-none d-block mb-lg-0 mb-3"
                        src="{{asset('frontend/assets/images/home/tech-capital-img-mbl.webp')}}">
                </div>
                <div class="col-lg-6">
                    <div class="d-flex justify-content-end mb-lg-5 mb-4">
                        <div class="tech-capital-main">
                            <div class="d-flex mb-4">
                                <img class="me-2" src="{{asset('frontend/assets/images/home/tech-capital-icon1.svg')}}">
                                <h3 class="text-green mb-0">Shape Your Career</h3>
                            </div>
                            <p class="mb-0">Our courses will help a beginner to become pro, grow skills, and land exciting roles in the
                                fast-paced digital world.</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start mb-lg-5 mb-4">
                        <div class="tech-capital-main">
                            <div class="d-flex mb-4">
                                <img class="me-2" src="{{asset('frontend/assets/images/home/tech-capital-icon2.svg')}}">
                                <h3 class="text-red mb-0">Grow Skills and Network</h3>
                            </div>
                            <p class="mb-0">Learn from top mentors, connect with industry professionals, and build
                                relationships that will accelerate your career and skills.</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <div class="tech-capital-main">
                            <div class="d-flex mb-4">
                                <img class="me-2" src="{{asset('frontend/assets/images/home/tech-capital-icon3.svg')}}">
                                <h3 class="text-orange1 mb-0">All-Inclusive Course Modules</h3>
                            </div>
                            <p class="mb-0">From SEO, content, and copywriting to PPC and social media marketing in
                                Bangalore, tailored to meet individual needs and industry standards and enhance learners’
                                career growth.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="spb-100">
        <div class="container">
            <h2 class="text-center mb-lg-5 mb-4">BrandStory Academy -<span class="text-violet">Digital Marketing Institute Highlights</span></h2>
            <div class="row col-reverse">
                <div class="col-lg-5">
                    <div class="key-highlight-main">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        1.Training
                                    </button>
                                </h4>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <h2 class="text-blue mb-2">Expert-Led Training</h2>
                                        <p class="mb-0">At BrandStory Academy, we break down world-class digital marketing
                                            strategies into simple, actionable lessons. From creating viral content to
                                            driving conversions, gain in-demand skills from experts who put you ahead of
                                            what brands look for.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        2. Modules
                                    </button>
                                </h4>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <h2 class="text-blue mb-2">50+ Modules Covered</h2>
                                        <p class="mb-0">Knowledge is power, but applying it changes careers. We cover
                                            everything from the fundamentals of digital marketing to advanced topics with
                                            50+ modules.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="headingthree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
                                        3. Internship
                                    </button>
                                </h4>
                                <div id="collapsethree" class="accordion-collapse collapse" aria-labelledby="headingthree"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <h2 class="text-blue mb-2">6-Month Internship</h2>
                                        <p class="mb-0">Forget outdated case studies; work on real campaigns, analyze real
                                            data, and solve real business challenges (B2B and B2C). Gain practical
                                            experience working with top brands, implement strategies in active projects, and
                                            develop a portfolio that demonstrates your capabilities.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="headingfour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                        4. Placement
                                    </button>
                                </h4>
                                <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <h2 class="text-blue mb-2">Placement Support</h2>
                                        <p class="mb-0">We collaborate with 1000+ top-level companies to place our students.
                                            We provide professional grooming and placement assistance to help students land
                                            a successful career in digital marketing.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <img class="w-100 mb-lg-0 mb-3" src="{{asset('frontend/assets/images/home/key-highlight-newn.webp')}}" alt="Best digital marketing courses in Bangalore - BrandStory Academy">
                </div>
            </div>
        </div>
    </section>

    <section class="agency-experience-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-4"></div>
                <div class="col-lg-6 col-md-8">
                    <h2 class="text-white mb-4 text-md-start text-center">Are you looking to gain real-time agency
                        experience and work with clients?</h2>
                    <div class="coursebtns one d-flex justify-content-md-start justify-content-center" bis_skin_checked="1">
                        <a class="text-decoration-none bg-violet" href="{{route('contact')}}">Start Learning Today with
                            us!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sp-100">
        <div class="container">
            <h2 class="text-center mb-lg-5 mb-4">Anyone Can Enroll & Start Their Digital Marketing
                <span class="db">Career with Us - <span class="text-violet">Digital Marketing Academy</span></span>
            </h2>
            <div class="position-relative">
                <div class="swiper dmcareersld">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="dm-career-main one">
                                <img class="mb-lg-5 mb-4 ms-auto me-auto"
                                    src="{{asset('frontend/assets/images/home/dm-career1-newn.webp')}}">
                                <h4 class="mb-2 text-blue">Students and Career Changers</h4>
                                <p class="mb-2">If you're someone looking for something new or just trying to figure out
                                    your next move, Bangalore's best digital marketing is waiting for you.</p>
                                <a class="d-flex text-violet fw-500 text-decoration-none mt-auto"
                                    href="{{route('contact')}}">Join Now</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="dm-career-main two">
                                <img class="mb-lg-5 mb-4 ms-auto me-auto"
                                    src="{{asset('frontend/assets/images/home/dm-career2-newn.webp')}}">
                                <h4 class="mb-2 text-blue">Current Practitioners</h4>
                                <p class="mb-2">If you're a professional looking to sharpen your skills in SEO, social
                                    media, content creation, and digital strategy.</p>
                                <a class="d-flex text-violet fw-500 text-decoration-none mt-auto"
                                    href="{{route('contact')}}">Join Now</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="dm-career-main three">
                                <img class="mb-lg-5 mb-4 ms-auto me-auto"
                                    src="{{asset('frontend/assets/images/home/dm-career3-newn.webp')}}">
                                <h4 class="mb-2 text-blue">Freelancers and Newcomers</h4>
                                <p class="mb-2">If you're someone aiming to upskill their practical knowledge and gain
                                    real-world experience working with clients.</p>
                                <a class="d-flex text-violet fw-500 text-decoration-none mt-auto"
                                    href="{{route('contact')}}">Join Now</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="dm-career-main four">
                                <img class="mb-lg-5 mb-4 ms-auto me-auto"
                                    src="{{asset('frontend/assets/images/home/dm-career4-newn.webp')}}">
                                <h4 class="mb-2 text-blue">Aspiring Digital Marketing Managers</h4>
                                <p class="mb-2">If you're someone who wants to take marketing knowledge to the next level
                                    and manage campaigns for top brands.</p>
                                <a class="d-flex text-violet fw-500 text-decoration-none mt-auto"
                                    href="{{route('contact')}}">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination dmcareer-pagi"></div>
            </div>
        </div>
    </section>

    <section class="spb-100">
        <div class="container">
            <div class="row col-reverse">
                <div class="col-lg-6">
                    <h2 class="mb-4">Learning from Top Digital Marketing Institute <span
                            class="text-violet">Will Help You</span></h2>
                    <ul class="list-unstyled p-0 mb-0 pt-2">
                        <li class="mb-4 fs-20 mbl-fs-16"><img class="me-2"
                                src="{{asset('frontend/assets/images/home/help-icon1.svg')}}">Run ads that boost sales.</li>
                        <li class="mb-4 fs-20 mbl-fs-16"><img class="me-2"
                                src="{{asset('frontend/assets/images/home/help-icon2.svg')}}">Design landing pages that
                            convert.</li>
                        <li class="mb-4 fs-20 mbl-fs-16"><img class="me-2"
                                src="{{asset('frontend/assets/images/home/help-icon3.svg')}}">Build engaging websites and
                            content.</li>
                        <li class="mb-4 fs-20 mbl-fs-16"><img class="me-2"
                                src="{{asset('frontend/assets/images/home/help-icon4.svg')}}">Create content that keeps
                            customers coming back.</li>
                        <li class="mb-4 fs-20 mbl-fs-16"><img class="me-2"
                                src="{{asset('frontend/assets/images/home/help-icon5.svg')}}">Master social media growth and
                            trends.</li>
                        <li class="mb-4 fs-20 mbl-fs-16"><img class="me-2"
                                src="{{asset('frontend/assets/images/home/help-icon6.svg')}}">Start a freelancing career
                            with ease.</li>
                        <li class="mb-4 fs-20 mbl-fs-16"><img class="me-2"
                                src="{{asset('frontend/assets/images/home/help-icon7.svg')}}">Secure internships and job
                            opportunities.</li>
                        <li class="mb-0 fs-20 mbl-fs-16"><img class="me-2"
                                src="{{asset('frontend/assets/images/home/help-icon8.svg')}}">Learn from expert trainers and
                            get placement support.</li>
                    </ul>
                </div>
                <div class="col-lg-6 align-self-center">
                    <img class="w-100 mb-lg-0 mb-3" src="{{asset('frontend/assets/images/home/dm-help.webp')}}" alt="Best Marketing Course - BrandStory Academy">
                </div>
            </div>
        </div>
    </section>

    <section class="spb-100">
        <div class="container">
            <h2 class="text-center mb-lg-5 mb-4">Learning Modes at Our <span class="text-violet">Digital
                    <span class="db">Marketing Institute</span></span></h2>
            <div class="learning-modes-main">
                <div class="dm-course-main">
                    <ul class="nav nav-pills mb-lg-5 mb-4 d-flex justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-site-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-site" type="button" role="tab" aria-controls="pills-site"
                                aria-selected="true">On-site Learning</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-self-tab" data-bs-toggle="pill" data-bs-target="#pills-self"
                                type="button" role="tab" aria-controls="pills-self" aria-selected="false">Self-Paced
                                Learning</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <!-- Course 1 start -->
                        <div class="tab-pane fade show active" id="pills-site" role="tabpanel"
                            aria-labelledby="pills-site-tab">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img class="w-100 d-lg-block d-none"
                                        src="{{asset('frontend/assets/images/home/learning-modes.webp')}}" alt="On-site classes at BrandStory Academy">
                                    <img class="w-100 d-lg-none d-block mb-3"
                                        src="{{asset('frontend/assets/images/home/learning-modes-mbl.webp')}}">
                                </div>
                                <div class="col-lg-6 align-self-center">
                                    <div class="modesmin d-flex flex-column w-100">
                                        <h4 class="text-blue fw-500 mb-md-5 mb-4 text-md-start text-center">On-site Learning
                                        </h4>
                                        <ul class="mb-lg-5 mb-3 list-unstyled p-0">
                                            <li class="mb-3 d-flex align-items-start"><img class="me-2 mt-1"
                                                    src="{{asset('frontend/assets/images/home/modes-icon.svg')}}">Interactive
                                                classroom sessions with industry experts creative learning experience</li>
                                            <li class="mb-3 d-flex align-items-start"><img class="me-2 mt-1"
                                                    src="{{asset('frontend/assets/images/home/modes-icon.svg')}}">Hands-on
                                                projects and real-world case studies</li>
                                            <li class="mb-3 d-flex align-items-start"><img class="me-2 mt-1"
                                                    src="{{asset('frontend/assets/images/home/modes-icon.svg')}}">Build
                                                connections with fellow students, instructors, and professionals</li>
                                            <li class="mb-3 d-flex align-items-start"><img class="me-2 mt-1"
                                                    src="{{asset('frontend/assets/images/home/modes-icon.svg')}}">Flexible
                                                batch schedules to suit your needs</li>
                                        </ul>
                                        <div class="coursebtns one mt-auto" bis_skin_checked="1">
                                            <a class="text-decoration-none d-block w-100 text-center bg-blue mt-auto"
                                                href="{{route('contact')}}">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Course 1 End -->

                        <!-- Course 2 start -->
                        <div class="tab-pane fade" id="pills-self" role="tabpanel" aria-labelledby="pills-self-tab">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img class="w-100 d-lg-block d-none"
                                        src="{{asset('frontend/assets/images/home/learning-modes2n.webp')}}" alt="Self Paced Learning at BrandStory Academy">
                                    <img class="w-100 d-lg-none d-block"
                                        src="{{asset('frontend/assets/images/home/learning-modes-mbl2.webp')}}">
                                </div>
                                <div class="col-lg-6 align-self-center">
                                    <div class="modesmin d-flex flex-column w-100">
                                        <h4 class="text-blue fw-500 mb-md-5 mb-4 text-md-start text-center">Self-Paced
                                            Learning</h4>
                                        <ul class="mb-lg-5 mb-3 list-unstyled p-0">
                                            <li class="mb-3 d-flex align-items-start"><img class="me-2 mt-1"
                                                    src="{{asset('frontend/assets/images/home/modes-icon.svg')}}">Flexible,
                                                online courses designed for self-paced learning</li>
                                            <li class="mb-3 d-flex align-items-start"><img class="me-2 mt-1"
                                                    src="{{asset('frontend/assets/images/home/modes-icon.svg')}}">Access to
                                                expert-led video modules and resources</li>
                                            <li class="mb-3 d-flex align-items-start"><img class="me-2 mt-1"
                                                    src="{{asset('frontend/assets/images/home/modes-icon.svg')}}">Access to
                                                materials and updates till the course completion</li>
                                            <li class="mb-3 d-flex align-items-start"><img class="me-2 mt-1"
                                                    src="{{asset('frontend/assets/images/home/modes-icon.svg')}}">Virtual
                                                support and guidance are available</li>
                                        </ul>
                                        <div class="coursebtns one mt-auto" bis_skin_checked="1">
                                            <a class="text-decoration-none d-block w-100 text-center bg-blue mt-auto"
                                                href="{{route('contact')}}">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Course 2 End -->
                    </div>
                </div>
            </div>
        </div>
    </section>


<!--<section class="industry-experts-section sp-100 ">
    <div class="container">
        <div class="row mb-md-5 mb-4">
            <div class="col-md-6">
                <h3 class="mb-md-0 mb-3 text-md-start text-center">Digital Marketing Curriculum 
                <span class="db text-violet">Vetted By Our Expert Educators</span></h3>
            </div>
            <div class="col-md-6 d-flex justify-content-md-end justify-content-center">
                <div class="violet-btn  d-flex justify-content-md-start justify-content-center" bis_skin_checked="1">
                    <a id="downloadCurriculumBtn" style="cursor: pointer;" class="text-decoration-none bg-violet d-flex align-items-center"  ><img class="me-2" src="{{asset('frontend/assets/images/adm-bootcamp/download-icon.svg')}}">Download Curriculum</a>
                </div>
            </div>
        </div>
        <div class="row g-4" id="industryExpertsContainer">
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">INTRODUCTION TO DIGITAL MARKETING</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">OPPORTUNITIES IN DIGITAL MARKETING</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">BASICS OF INTERNET</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">GSUITE MASTERY</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">MARKETING FOUNDATION CONCEPTS</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">WEBSITE GRAPHIC DESIGNING</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">VIDEO CONTENT CREATIONS</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">WEBSITE CREATION - WORDPRESS</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">DIGITAL MARKETING ECOSYSTEM</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">INTRODUCTION TO SEO</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">KEYWORD RESEARCH</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">TECHNICAL SEO</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">OFFPAGE SEO</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">GOOGLE SEARCH CONSOLE</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">WEBSITE AUDITS</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">LOCAL SEO</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">INTERNATIONAL SEO</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">CREATING LANDING PAGES</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">AFFILIATE MARKETING</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">INTRODUCTION TO WEB ANALYTICS</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">DIGITAL CONSUMER BEHAVIOUR</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">INTRODUCTION TO GOOGLE ADS</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">GOOGLE SEARCH ADS</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">GOOGLE DISPLAY ADS</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">GOOGLE VIDEO ADS</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">FACEBOOK PAGE OPTIMIZATION</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">FACEBOOK ADS</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">INSTAGRAM ADS</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">LINKEDIN ADS</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">TWITTER ADS</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">EMAIL MARKETING</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">GOOGLE DISPLAY REMARKETING</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">GOOGLE SHOPPING ADS</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">QUORA MARKETING (PAID)</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">DIGITAL MARKETING STRATEGY</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">ONLINE REPUTATION MANAGEMENT</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">CONVERSION RATE OPTIMIZATION</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">GOOGLE ANALYTICS</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">GOOGLE TAG MANAGER</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">GROWTH HACKING</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">INTEGRATED MARKETING PLAN DEVELOPMENT</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">MARKETING AUTOMATION</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">INTRODUCTION TO SOCIAL MEDIA</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">INSTAGRAM MARKETING</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">LINKEDIN OPTIMIZATION</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">TWITTER ACCOUNT OPTIMIZATION</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">YOUTUBE OPTIMIZATION AND MARKETING</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">SOCIAL MEDIA STRATEGY</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">SOCIAL MEDIA MANAGEMENT</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">PINTEREST MARKETING (ORGANIC)</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">INTERVIEW PREPARATION</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">GENERATIVE AI FOR MARKETING</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">CONTENT MARKETING IDEAS USING AI</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">VIDEO / IMAGE GENERATION TOOLS</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">FREE AND PAID TOOLS OVERVIEW</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">AI FOR EMAIL MARKETING</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">Introduction to Video Marketing & Production</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">Storytelling & Scripting for Video Content</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">AI-Powered Video Editing & Automation Tools</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">Adobe Premiere Pro Essentials for Beginners</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">Advanced Video Editing in Adobe Premiere Pro</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">Motion Graphics & Special Effects in Video Editing</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">YouTube Growth & AI-Based Video SEO Strategies</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">AI-Powered Personalized Video Content for Ads</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">AI-Based A/B Testing for Video Engagement</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">Instagram Reels & Short-Form Video Marketing</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">AI-Based Video Transcription & Auto-Captions</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">Dynamic Video Ads & Personalized Content Targeting</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">Live Streaming & Webinar Production for Businesses</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">Video Analytics & AI-Based Performance Tracking</p>
                </div>
            </div>

            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">Monetizing Video Content (YouTube Ads, Sponsorships, UGC)</p>
                </div>
            </div><div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">Introduction to Podcasting & Audio Storytelling</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">AI-Powered Podcast Planning & Content Structuring</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">Setting Up a Professional Podcast Studio & Equipment Guide</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">AI-Enhanced Audio Recording & Editing Techniques</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">Best Software for Podcast Editing (Audacity, Descript, Adobe Audition)</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">AI-Based Background Noise Reduction & Sound Optimization</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">Hosting & Distributing Podcasts Across Platforms</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">AI-Powered Podcast Marketing & Audience Growth Strategies</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">Monetizing Podcasts (Sponsorships, Ads, Premium Subscriptions)</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">AI-Based Podcast Transcription & SEO Optimization</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">YouTube Podcasting & Video-Based Podcasting Strategies</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">AI-Generated Podcast Voice Cloning & Automation</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">ECOMMERCE PERFORMANCE MARKETING - IDEATION</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">ECOMMERCE PERFORMANCE MARKETING - PLANNING</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">ECOMMERCE PERFORMANCE MARKETING - STRATEGY</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">CAMPAIGN CREATION</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">AD OPTIMIZATION</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">REPORT CREATION</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">TRACKING</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">DATA ANALYSIS</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">MARKETPLACE SELLER ONBOARDING & ACCOUNT SETUP</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">NAVIGATING SELLER DASHBOARD</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">MARKETPLACE PACKAGING STRATEGIES</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">LEVERAGING SELLER SUPPORT</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">CATEGORY AND BRAND APPROVALS</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">KEYWORD ANALYSIS FOR PRODUCT LISTINGS</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">OPTIMIZING CONTENT FOR PRODUCT LISTINGS</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">PRICING STRATEGIES</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">EFFICIENT ORDER FULFILMENT AND TRACKING</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">ENGAGING IN DEALS AND PROMOTIONS</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">WAREHOUSE ONBOARDING(FBF & FBA)</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">CONSIGNMENT CREATION & INVENTORY MANAGEMENT</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">WAREHOUSE INVENTORY PLANNING AND MANAGEMENT</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">CUSTOMER EXPERIENCE & PERFORMANCE OVERVIEW</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">PAYMENTS AND FINANCIAL MANAGEMENT</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">GENERATING AND ANALYZING REPORTS</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">TYPES OF REPORTS SELLER DASHBOARD</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">DATA MANAGEMENT AND ENTRY</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">FORMULAS AND FUNCTIONS</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">DATA ANALYSIS TOOLS</p>
                </div>
            </div>
            <div class="col-md-4 d-flex industry-experts-container">
                <div class="industry-experts-main d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-16 text-center">INTERMEDIATE FORMULAS AND FUNCTIONS</p>
                </div>
            </div>
        </div>

Show More/Less Button
<div class="d-flex justify-content-center mt-4">
    <button id="toggleButtonb" class="btn fs-16 text-violet fw-500 industryexpertbtn d-flex align-items-center justify-content-center gap-2">
        Load More <img src="{{asset('frontend/assets/images/adm-bootcamp/loadmore-icon.svg')}}" id="toggleIcon">
    </button>
</div>


    </div>
</section>-->

    <section class="sp-100 intern-section">
        <div class="container">
            <div class="row gx-md-5">
                <div class="col-lg-6">
                    <div class="position-relative">
                        <div class="swiper certificatesld">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="certificatemin">
                                        <img class="w-100" src="{{asset('frontend/assets/images/home/certificate1.webp')}}" alt="industry recognized certficate for course completion- BrandStory Academy">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="certificatemin">
                                        <img class="w-100" src="{{asset('frontend/assets/images/home/certificate2.webp')}}" alt="Industry recognized cerficate for internship completion - BrandStory Academy">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination certificatepagi"></div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex mt-lg-0 mt-5 pt-lg-0 pt-4">
                    <div class="inter-main">
                        <p class="mb-2 text-violet text-md-start text-center">How will it benefit your career?</p>
                        <h4 class="mb-md-5 mb-4 text-md-start text-center">From Fresher to Experienced Professional Get
                            <span class="db">Certified as an Agency Intern today!</span>
                        </h4>
                        <div class="mb-5">
                            <div class="d-flex mb-3">
                                <img class="me-2" src="{{asset('frontend/assets/images/home/inter-icon1.svg')}}">
                                <h5 class="mb-0 text-blue fw-600">Get Certified</h5>
                            </div>
                            <p class="mb-0">Earn a recognized digital marketing certificate from Brandstory Academy.</p>
                        </div>
                        <div class="mb-5">
                            <div class="d-flex mb-3">
                                <img class="me-2" src="{{asset('frontend/assets/images/home/inter-icon2.svg')}}">
                                <h5 class="mb-0 text-blue fw-600">Real-World Experience</h5>
                            </div>
                            <p class="mb-0">Learning through hands-on workshops and real-world projects helps you build your
                                skills.</p>
                        </div>
                        <div class="mb-0">
                            <div class="d-flex mb-3">
                                <img class="me-2" src="{{asset('frontend/assets/images/home/inter-icon3.svg')}}">
                                <h5 class="mb-0 text-blue fw-600">Market Recognition</h5>
                            </div>
                            <p class="mb-0">With a certificate highlighting your expertise, you can always standout in the
                                job market.</p>
                        </div>
                    </div>
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

    <section class="sp-100 mbl-spt-0">
        <div class="container">
            <h2 class="text-center my-3">Benefits of Joining BrandStory Academy for
                <span class="db">Digital <span class="text-violet">Marketing Courses</span></span>
            </h2>
            <p class="text-center mb-4 max-1000">Brandstory Academy gives you more than just <a href="https://brandstoryacademy.com/digital-marketing-course-in-bangalore" style="color: black; font-size: 18px; text-decoration: underline;"><b>digital marketing courses in
                Bangalore</b></a>. With our comprehensive digital marketing courses + internship, students will learn the
                fundamentals, work on live projects, and become experts. Our hands-on approach to learning will help you
                apply the knowledge in real-world projects, gain insights, and become a specialist.</p>
            <img class="w-100 mb-4" src="{{asset('frontend/assets/images/home/institute.webp')}}" alt="Best Digital marketing Training Institute in Bangalore  - BrandStory Academy">
            <ul class="d-lg-flex mb-0 list-unstyled p-0 justify-content-center">
                <li class="mb-4 me-md-5 me-0"><img class="me-2"
                        src="{{asset('frontend/assets/images/home/institute-icon1.svg')}}">Fully hands-on practical sessions
                </li>
                <li class="mb-4 me-md-5 me-0 "><img class="me-2"
                        src="{{asset('frontend/assets/images/home/institute-icon2.svg')}}">10+ years of industry expertise
                </li>
                <li class="mb-4 me-md-5 me-0"><img class="me-2"
                        src="{{asset('frontend/assets/images/home/institute-icon3.svg')}}">Recognized certifications</li>
                <li class="mb-4"><img class="me-2"
                        src="{{  asset('frontend/assets/images/home/institute-icon4.svg')}}">Agency-enabled training</li>
            </ul>
            <ul class="d-lg-flex mb-0 list-unstyled p-0 justify-content-center">
                <li class="mb-lg-0 mb-4 me-md-5 me-0"><img class="me-2"
                        src="{{asset('frontend/assets/images/home/institute-icon5.svg')}}">Real-time projects and case
                    studies</li>
                <li class="mb-lg-0 mb-4 me-md-5 me-0"><img class="me-2"
                        src="{{asset('frontend/assets/images/home/institute-icon6.svg')}}">Affordable pricing with easy
                    installment plans</li>
                <li class="mb-0"><img class="me-2"
                        src="{{asset('frontend/assets/images/home/institute-icon7.svg')}}">Personalized mentorship for every
                    student</li>
            </ul>
        </div>
    </section>

    <section class="sp-100 mbl-spt-0">
    <div class="container">
        <h2 class="text-center db">Life at<span class="text-violet">BrandStory Academy</span></h2>
        <p class="max-1000 text-center my-5">
            At <span class="fw-600">BrandStory Academy</span>, our classrooms are designed to foster collaboration and hands-on experience. From interactive lectures to real-world projects, our gallery captures the energy and enthusiasm that define every session at BrandStory Academy.
        </p>

        <div class="tab-content" id="pills-tabContent">
            <!-- Course 1 start -->
            <div class="tab-pane fade show active" id="pills-course1" role="tabpanel" aria-labelledby="pills-course1-tab">
                <div class="row">
                    <div class="col-4">
                        <img src="{{asset('frontend/assets/images/gallery/gallery-1.webp')}}" class="img-fluid" alt="Classroom Image 1"/>
                        <img src="{{asset('frontend/assets/images/gallery/gallery-2.webp')}}" class="img-fluid mt-4" alt="Classroom Image 2"/>
                    </div>
                    <div class="col-4">
                        <img src="{{asset('frontend/assets/images/gallery/gallery-3.webp')}}" class="img-fluid" alt="Classroom Image 3"/>
                        <img src="{{asset('frontend/assets/images/gallery/gallery-4.webp')}}" class="img-fluid mt-4" alt="Classroom Image 4"/>
                    </div>
                    <div class="col-4">
                        <img src="{{asset('frontend/assets/images/gallery/gallery-5.webp')}}" class="img-fluid" alt="Classroom Image 5"/>
                        <img src="{{asset('frontend/assets/images/gallery/gallery-6.webp')}}" class="img-fluid mt-4" alt="Classroom Image 6"/>
                    </div>
                </div>
            </div>
            <!-- Course 1 end -->
        </div>
    </div>
</section>


    <section class="spb-100">
        <div class="container">
            <h2 class="text-center mb-md-5 mb-4">Why Digital Marketing is <span class="text-violet">The Best Career Choice</span></h2>
            <div class="row col-reverse">
                <div class="col-md-6">
                    <div class="key-highlight-main facts">
                        <div class="accordion" id="accordionExample1">
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="headingfOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsefOne" aria-expanded="true" aria-controls="collapsefOne">
                                        <img class="me-2" src="{{asset('frontend/assets/images/home/fact-icon1.svg')}}">The
                                        Industry
                                    </button>
                                </h4>
                                <div id="collapsefOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingfOne" data-bs-parent="#accordionExample1">
                                    <div class="accordion-body">
                                        <p class="mb-0">Digital marketing is a booming industry with 25-30% annual growth.
                                            The digital advertising industry alone is valued at over ₹30,000 crore in 2024,
                                            and it is expected to double in the next 3–4 years.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="headingfTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsefTwo" aria-expanded="false" aria-controls="collapsefTwo">
                                        <img class="me-2"
                                            src="{{asset('frontend/assets/images/home/fact-icon2.svg')}}">Career Growth
                                    </button>
                                </h4>
                                <div id="collapsefTwo" class="accordion-collapse collapse" aria-labelledby="headingfTwo"
                                    data-bs-parent="#accordionExample1">
                                    <div class="accordion-body">
                                        <p class="mb-0">Digital marketing is widely recognized as one of the top 10 most
                                            in-demand career options in 2025, both in India and globally. The demand for
                                            qualified digital marketing professionals is also rising with time.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="headingfthree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsefthree" aria-expanded="false"
                                        aria-controls="collapsefthree">
                                        <img class="me-2"
                                            src="{{asset('frontend/assets/images/home/fact-icon3.svg')}}">Skills to Learn
                                    </button>
                                </h4>
                                <div id="collapsefthree" class="accordion-collapse collapse" aria-labelledby="headingfthree"
                                    data-bs-parent="#accordionExample1">
                                    <div class="accordion-body">
                                        <p class="mb-0">The most demanding skills to learn in digital marketing are Search
                                            Engine Optimization, Meta Ads, Google Ads, Video production, and E-commerce
                                            marketing. These skills will help you land a successful career in digital
                                            marketing.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="headingffour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseffour" aria-expanded="false" aria-controls="collapseffour">
                                        <img class="me-2"
                                            src="{{asset('frontend/assets/images/home/fact-icon4.svg')}}">Latest Trends
                                    </button>
                                </h4>
                                <div id="collapseffour" class="accordion-collapse collapse" aria-labelledby="headingffour"
                                    data-bs-parent="#accordionExample1">
                                    <div class="accordion-body">
                                        <p class="mb-0">A large proportion of consumers prefer buying from businesses that
                                            have a good online presence. People now engage with more brands that have a
                                            strong social media influence.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="w-100" src="{{asset('frontend/assets/images/home/fast-img.webp')}}" alt="Mentor taking classes at BrandStory Academy">
                </div>
            </div>
        </div>
    </section>

   <!-- <section class="ourstudents-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-white mb-md-5 mb-4 text-md-start text-center">What Our Students Say
                        <span class="db">About Us</span>
                    </h2>
                    <div class="ourstudent-main" data-student="1">
                        <div class="ourstudent-inner-main d-flex justify-content-between text-white align-items-center">
                            <div class="ourstudent d-flex align-items-center">
                                <img class="me-3" src="{{asset('frontend/assets/images/home/student-small1.webp')}}">
                                <div class="ourstudent-cnt text-white">
                                    <h4 class="mb-2">Gowtham AG</h4>
                                    <p class="mb-0">Digital Marketing Mastery With
                                        <span class="db">Artificial Intelligence (AI)</span>
                                    </p>
                                </div>
                            </div>
                            <div class="student-rates">
                                <p class="mb-0">5.0 <img class="ms-2"
                                        src="{{asset('frontend/assets/images/home/star.webp')}}">
                            </div>
                        </div>
                    </div>
                    <div class="ourstudent-main" data-student="2">
                        <div class="ourstudent-inner-main d-flex justify-content-between text-white align-items-center">
                            <div class="ourstudent d-flex align-items-center">
                                <img class="me-3" src="{{asset('frontend/assets/images/home/student-small2.webp')}}">
                                <div class="ourstudent-cnt text-white">
                                    <h4 class="mb-2">Anand G</h4>
                                    <p class="mb-0">Advanced Digital Marketing
                                        <span class="db">Boot Camp</span>
                                    </p>
                                </div>
                            </div>
                            <div class="student-rates">
                                <p class="mb-0">5.0 <img class="ms-2"
                                        src="{{asset('frontend/assets/images/home/star.webp')}}">
                            </div>
                        </div>
                    </div>
                    <div class="ourstudent-main" data-student="3">
                        <div class="ourstudent-inner-main d-flex justify-content-between text-white align-items-center">
                            <div class="ourstudent d-flex align-items-center">
                                <img class="me-3" src="{{asset('frontend/assets/images/home/student-small3.webp')}}">
                                <div class="ourstudent-cnt text-white">
                                    <h4 class="mb-2">Stuart Nithin</h4>
                                    <p class="mb-0">360° Digital Marketing
                                        <span class="db">Course</span>
                                    </p>
                                </div>
                            </div>
                            <div class="student-rates">
                                <p class="mb-0">5.0 <img class="ms-2"
                                        src="{{asset('frontend/assets/images/home/star.webp')}}">
                            </div>
                        </div>
                    </div>
                    <div class="viewallbtn d-flex mt-5 mt-md-4 mb-md-0 mb-4">
                        <a href="https://share.google/BADxZDIqjq23KozCl">View All Reviews</a>
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="student-testi-main text-center" data-student="1">
                        <img class="mb-3" src="{{asset('frontend/assets/images/home/student-large1.webp')}}">
                        <p class="mb-4">Enrolling at Brandstory Academy was an eye-opening experience. The course combines academic rigor with hands-on practice on real-time projects.</p>
                        <div class="student-detailsmin">
                            <h4 class="mb-2"> Gowtham AG</h4>
                            <p class="mb-2">Digital Marketing Mastery With Artificial
                                <span class="db">Intelligence (AI)</span>
                            </p>
                            <img src="{{asset('frontend/assets/images/home/student-review.webp')}}">
                        </div>
                    </div>
                    <div class="student-testi-main text-center" data-student="2">
                        <img class="mb-3" src="{{asset('frontend/assets/images/home/student-large2.webp')}}">
                        <p class="mb-4">Their digital marketing course combines theoretical knowledge with practical projects focused on the job market.</p>
                        <div class="student-detailsmin">
                            <h4 class="mb-2">Anand G</h4>
                            <p class="mb-2">Advanced Digital Marketing
                                <span class="db">Boot Camp</span>
                            </p>
                            <img src="{{asset('frontend/assets/images/home/student-review.webp')}}">
                        </div>
                    </div>
                    <div class="student-testi-main text-center" data-student="3">
                        <img class="mb-3" src="{{asset('frontend/assets/images/home/student-large3.webp')}}">
                        <p class="mb-4">Brandstory Academy's 6-month internship was a pivotal moment in my career. I gained hands-on experience working on live projects with top brands.</p>
                        <div class="student-detailsmin">
                            <h4 class="mb-2">Stuart Nithin</h4>
                            <p class="mb-2">360° Digital Marketing</p>
                            <img src="{{asset('frontend/assets/images/home/student-review.webp')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

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


    <section class="sp-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img class="w-100 mb-lg-0 mb-3 d-lg-block d-none"
                        src="{{asset('frontend/assets/images/home/form-imgn.webp')}}" alt="Enroll in the best digital marketing training instutute - BrandStory Academy">
                    <img class="w-100 mb-lg-0 mb-3 d-lg-none d-block"
                        src="{{asset('frontend/assets/images/home/form-img-mbl.webp')}}">
                </div>
                <div class="col-lg-6">
                    <div id="enquiryForm" class="homeform-main form-main normal ">
                        <h4 class="mb-4 text-blue text-md-start text-center">Elevate your career! Enroll today!</h4>
                           <form class="enquiryFormalternative" action="{{ route('enquiry.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="firstname" required
                                    pattern="[A-Za-z\s]+" title="Only alphabets are allowed">
                            </div>
                            <div class="col-md-6">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="lastname" required
                                    pattern="[A-Za-z\s]+" title="Only alphabets are allowed">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required pattern="[0-9]+"
                                    title="Only numbers are allowed">
                            </div>
                        </div>
                         <fieldset class="mb-3 mb-lg-5 d-lg-flex">
                            <div class="radio-button-sec">
                           <legend class="col-form-label pt-0 pe-3">Program</legend>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="program" id="program1_normal"
                                        value="Digital Marketing Mastery" required>
                                    <label class="form-check-label" for="program1_normal">Digital Marketing Mastery</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="program" id="program3_normal"
                                        value="Advanced Digital Marketing Boot Camp" required>
                                    <label class="form-check-label" for="program3_normal">Advanced Digital Marketing Boot
                                        Camp</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="program" id="program2"
                                        value="360 Degree Digital Marketing" required>
                                    <label class="form-check-label" for="program2">
                                        360 Degree Digital Marketing
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="1"
                                placeholder="Type your message..." required></textarea>
                        </div>
                       
                        
                        <!-- Add class to the input -->
                        <input type="hidden" id="recaptcha_response" name="recaptcha_response" class="recaptcha_response">

                        <input type="hidden" id="page_url" name="page_url" value="{{ url()->current() }}">

                        <button type="submit" class="btn d-block w-100 text-center bg-violet g-recaptcha">Submit</button>
                    </form>

                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show rounded-pill mt-4" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" style="transform: scale(0.85);" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif

                    <!-- Error Messages -->
                    @if($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show rounded-pill mt-4" role="alert">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" style="transform: scale(0.85);" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif



                    </div>
                </div>
            </div>
        </div>
    </section>
    



<div class="pt-100">
    <x-blog-component />
</div>

    <section class="sp-100 bg-lightblue1">
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
                                            <li class="fs-16"><a href="https://brandstoryacademy.com/digital-marketing-course-in-bangalore" style="color: black; font-size: 16px; text-decoration: underline;">Digital Marketing Course</a></li>
                                            <li class="fs-16"><a href="https://brandstoryacademy.com/seo-course-in-bangalore" style="color: black; font-size: 16px; text-decoration: underline;">SEO Course</a></li>
                                            <li class="fs-16"><a href="https://brandstoryacademy.com/ppc-course-in-bangalore" style="color: black; font-size: 16px; text-decoration: underline;">PPC (Pay-Per-Click) Course</a></li>
                                            <li class="fs-16">Social Media Marketing Course</li>
                                            <li class="fs-16">UI/UX Design Course</li>
                                            <li class="fs-16">Web Design Course</li>
                                            <li class="fs-16">Graphics Design Course</li>
                                            <li class="fs-16">Video Editing</li>
                                            <li class="fs-16"><a href="https://brandstoryacademy.com/digital-marketing-mastery-with-artificial-intelligence" style="color: black; font-size: 16px; text-decoration: underline;">Digital Marketing MASTERY with AI</a></li>
                                            <li class="fs-16"><a href="https://brandstoryacademy.com/advanced-digital-marketing-boot-camp" style="color: black; font-size: 16px; text-decoration: underline;">Advanced Digital Marketing Boot Camp</a></li>
                                            <li class="fs-16"><a href="https://brandstoryacademy.com/360-degree-digital-marketing-course" style="color: black; font-size: 16px; text-decoration: underline;">360° Digital Marketing Course</a></li>
                                        </ul>
                                        <p class="mb-0 fs-16">Each course is designed to provide hands-on learning, live project experience, and the 
                                            latest marketing strategies to help you excel in the digital world.
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
                                        <p class="mb-0 fs-16">Our course fees vary depending on the program you choose. For detailed pricing, current offers, 
                                            and exclusive discounts on our <b>Digital Marketing, SEO, PPC, Social Media, etc.</b>, please visit our 
                                            <a href="https://brandstoryacademy.com/courses" style="color: black; font-size: 16px; text-decoration: underline;"><b>course details page</b></a> or contact 
                                            our admissions team. We ensure our fee structure remains competitive while providing hands-on training, paid internships, 
                                            and complete career support to help you succeed in the digital marketing industry.
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

<script>
document.addEventListener("DOMContentLoaded", function () {
    let items = document.querySelectorAll(".industry-experts-container");
    let button = document.getElementById("toggleButtonb");
    let visibleCount = 12; // Initial visible items
    let totalItems = items.length; // Total items count

    // Hide everything beyond the first 12 items
    for (let i = visibleCount; i < totalItems; i++) {
        items[i].classList.add("hiddenb");
    }

    button.addEventListener("click", function () {
        if (visibleCount < totalItems) {
            visibleCount += 12;

            for (let i = 0; i < Math.min(visibleCount, totalItems); i++) {
                items[i].classList.remove("hiddenb");
            }

            // Check if all items are visible, then change button text to "Show Less"
            if (visibleCount >= totalItems) {
                button.innerHTML = `Load Less <img src="{{asset('frontend/assets/images/adm-bootcamp/loadless-icon.svg')}}" id="toggleIcon">`;
            }
        } else {
            // Reset to show only 12 items when "Show Less" is clicked
            visibleCount = 12;
            for (let i = visibleCount; i < totalItems; i++) {
                items[i].classList.add("hiddenb");
            }
            button.innerHTML = `Load More <img src="{{asset('frontend/assets/images/adm-bootcamp/loadmore-icon.svg')}}" id="toggleIcon">`;
        }
    });
});
</script>
    <!-- ====== CSS ====== -->
    <style>
        .video-modal {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
        }

        .video-modal-content {
            position: relative;
            margin: 5% auto;
            width: 80%;
            max-width: 800px;
            background: #000;
            border-radius: 8px;
            overflow: hidden;
        }

        .video-close {
            position: absolute;
            right: 15px;
            top: 10px;
            color: #fff;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
            z-index: 2;
        }
    </style>

    <!-- ====== JavaScript ====== -->

@endsection