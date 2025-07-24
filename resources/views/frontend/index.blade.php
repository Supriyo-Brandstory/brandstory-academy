@extends('frontend.partial.app')
@section('content')

    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 text-md-start text-center">
                    <h1 class="mb-3">6-Month <span class="text-violet">Digital Marketing Course:</span> Learn, Work, and
                        Certify Your Skills</h1>
                    <p class="mb-4"><span class="text-blue fw-600">Learn, work, and certify your skills in 6 months</span>
                        with the best digital marketing courses in Bangalore. At BrandStory Academy, you’ll learn the A-Z of
                        digital marketing, work on live projects, and become certified to launch your career in digital
                        marketing.</p>
                    <div class="d-lg-flex align-items-center">
                        <div class="violet-btn d-flex me-lg-5 mb-lg-0 mb-4 justify-content-md-start justify-content-center">
                            <a href="{{route('contact')}}">Enquire Now today!</a>
                        </div>
                        <div class="student-main mb-md-0 mb-5">
                            <img class="mb-1" src="{{asset('frontend/assets/images/home/students.png')}}">
                            <p class="mb-0 fs-12">Trusted by 1000+ Students</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <img class="w-100" src="{{asset('frontend/assets/images/home/banner-img.png')}}">
                </div>
            </div>
            <div class="container mt-5">
                <div class="bannerform">
                    <div class="row align-items-center">
                        <div class="col-lg-2">
                            <p class="mb-0 fw-600 fs-16 text-lg-start text-center mb-lg-0 mb-4">Join the internship now</p>
                        </div>
                        <div class="col-lg-10">
                            <div class="banner-form-main">
                                <form id="enquiry" action="{{ route('enquiry.store') }}" method="post"
                                    class="d-md-flex justify-content-between text-md-start text-center">
                                    @csrf
                                    <div class="d-md-flex gap-2 flex-grow-1">
                                        <input type="text" class="form-control" id="name" name="firstName"
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
                            <img src="https://brandstory.in/resources/digital/assets/images/video-production/brand1.svg"
                                class="img-fluid" alt="Video production Service">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="https://brandstory.in/resources/digital/assets/images/video-production/brand2.svg"
                                class="img-fluid" alt="Video production Service">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="https://brandstory.in/resources/digital/assets/images/video-production/brand3.svg"
                                class="img-fluid" alt="Video production Service">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="https://brandstory.in/resources/digital/assets/images/video-production/brand4.svg"
                                class="img-fluid" alt="Video production Service">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="https://brandstory.in/resources/digital/assets/images/video-production/brand5.svg"
                                class="img-fluid" alt="Video production Service">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="https://brandstory.in/resources/digital/assets/images/video-production/brand6.svg"
                                class="img-fluid" alt="Video production Service">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="https://brandstory.in/resources/digital/assets/images/video-production/brand7.svg"
                                class="img-fluid" alt="Video production Service">
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>


    <section class="dm-course-section spb-100">
        <div class="container">
            <h2 class="text-center db">Best <span class="text-violet">Digital Marketing Training</span> Institute in
                Bangalore for Certificate Courses</h2>
            <p class="max-1000 text-center">BrandStory Academy is the top-rated digital marketing institute in Bangalore,
                offering affordable digital marketing courses. You’ll learn everything, from the basics to advanced-level
                concepts, and gain practical experience through live projects at various stages of training. We offer the
                best digital marketing course curriculum, top-tier faculty in the city, and industry-focused training that
                equips students with real-world skills.</p>
            <div class="dm-course-main mt-5">
                <ul class="nav nav-pills mb-md-5 mb-4 d-flex justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-course1-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-course1" type="button" role="tab" aria-controls="pills-course1"
                            aria-selected="true">Course 1</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-course2-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-course2" type="button" role="tab" aria-controls="pills-course2"
                            aria-selected="false">Course 2</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-course3-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-course3" type="button" role="tab" aria-controls="pills-course3"
                            aria-selected="false">Course 3</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <!-- Course 1 start -->
                    <div class="tab-pane fade show active" id="pills-course1" role="tabpanel"
                        aria-labelledby="pills-course1-tab">
                        <div class="row">
                            <div class="col-lg-6">
                                <img class="w-100 mb-lg-0 mb-3 d-lg-block d-none"
                                    src="{{asset('frontend/assets/images/home/course1.jpg')}}">
                                <img class="w-100 mb-lg-0 mb-3 d-lg-none d-block"
                                    src="{{asset('frontend/assets/images/home/mbl-course1.jpg')}}">
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
                                            href="{{route('course_digital_marketing')}}">Learn More</a>
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
                                    src="{{asset('frontend/assets/images/home/course2.jpg')}}">
                                <img class="w-100 mb-lg-0 mb-3 d-lg-none d-block"
                                    src="{{asset('frontend/assets/images/home/mbl-course2.jpg')}}">
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
                                            href="{{route('advanced_digital_marketing_boot_camp')}}">Learn More</a>
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
                                    src="{{asset('frontend/assets/images/home/course3.jpg')}}">
                                <img class="w-100 mb-lg-0 mb-3 d-lg-none d-block"
                                    src="{{asset('frontend/assets/images/home/mbl-course3.jpg')}}">
                            </div>
                            <div class="col-lg-6 d-flex">
                                <div class="course-main d-flex flex-column w-100">
                                    <h4 class="mb-3 text-blue">360° Digital <span class="text-yellow">Marketing</span></h4>
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
                                                src="{{asset('frontend/assets/images/home/course3-icon.svg')}}">AI & Data
                                            Analytics</li>
                                        <li class="mb-4"><img class="me-2"
                                                src="{{asset('frontend/assets/images/home/course3-icon.svg')}}">Content
                                            Production</li>
                                        <li class="mb-4"><img class="me-2"
                                                src="{{asset('frontend/assets/images/home/course3-icon.svg')}}">Excel for
                                            E-Commerce</li>
                                        <li class="mb-4"><img class="me-2"
                                                src="{{asset('frontend/assets/images/home/course3-icon.svg')}}">10+ Live
                                            Projects</li>
                                    </ul>
                                    <div class="coursebtns one mt-auto">
                                        <a class="text-decoration-none d-block w-100 text-center bg-violet"
                                            href="{{route('course_360_degree_digital_marketing')}}">Learn More</a>
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

    <section class="mentorship-section">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12 col-md-8">
                    <h3 class="mb-md-4 mb-3 fw-600 text-md-start text-center">Book Free <span
                            class="text-lightblue">Mentorship Session</span></h3>
                    <p class="fs-20 mbl-fs-16 fw-500 mb-4 text-md-start text-center">Get in touch with your digital
                        marketing mentor to
                        <span class="db">know more about course</span>
                    </p>
                    <div class="mentorship-btn d-flex justify-content-md-start justify-content-center">
                        <a class="btn-font" href="{{route('contact')}}">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="mentorship-img">
                <img src="{{asset('frontend/assets/images/home/mentorship-img-newn.png')}}">
            </div>
        </div>
    </section>

    <section class="aboutacademy-sec spt-100">
        <div class="container position-relative">
            <div class="row">
                <div class="col-md-6">
                </div>
                <div class="col-lg-6">
                    <h2 class="mb-3 text-lg-start text-center">About BrandStory <span class="text-violet">Academy</span>
                    </h2>
                    <img class="w-100 d-lg-none d-block mb-3"
                        src="{{asset('frontend/assets/images/home/about-academy-img.png')}}">
                    <p>BrandStory Academy, Bangalore, was founded in 2018 with a vision to train aspirants to become
                        successful digital marketing professionals. Our goal is to offer a practical learning environment
                        where students apply their knowledge to live projects, build skills, and grow into industry-ready
                        experts. We have expert trainers with 10+ years of hands-on experience and proven expertise in the
                        industry.</p>
                    <p class="mb-0">BrandStory Academy is the only digital marketing training Institute in Bangalore that
                        offers a modern, industry-relevant curriculum with hands-on live client projects. From learning to
                        earning, our students modify into job-ready professionals and safeguard placements with 1000+ global
                        companies.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="tech-capital sp-100">
        <div class="container">
            <h2 class="text-center mb-4">Learn <span class="text-violet">Digital Marketing</span> in India’s Tech Capital
                City</h2>
            <p class="mb-4 text-center">Bangalore, a hub for its innovation and tech culture, has some of the best digital
                <span class="db">marketing courses in India. If you are seeking to explore career opportunities in </span>
                <span class="db">digital marketing, this is the place to start. Start here.</span>
            </p>
            <div class="row">
                <div class="col-lg-6">
                    <img class="w-100 d-lg-block d-none mb-lg-0 mb-3"
                        src="{{asset('frontend/assets/images/home/tech-capital-img.jpg')}}">
                    <img class="w-100 d-lg-none d-block mb-lg-0 mb-3"
                        src="{{asset('frontend/assets/images/home/tech-capital-img-mbl.jpg')}}">
                </div>
                <div class="col-lg-6">
                    <div class="d-flex justify-content-end mb-lg-5 mb-4">
                        <div class="tech-capital-main">
                            <div class="d-flex mb-4">
                                <img class="me-2" src="{{asset('frontend/assets/images/home/tech-capital-icon1.svg')}}">
                                <h3 class="text-green mb-0">Shape Your Career</h3>
                            </div>
                            <p class="mb-0">This course will help a beginner to pro, grow, and land exciting roles in the
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
            <h2 class="text-center mb-lg-5 mb-4">Key <span class="text-violet">Highlights</span></h2>
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
                    <img class="w-100 mb-lg-0 mb-3" src="{{asset('frontend/assets/images/home/key-highlight-newn.jpg')}}">
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
            <h2 class="text-center mb-lg-5 mb-4">Anyone can enroll and start their digital marketing
                <span class="db">career with us - <span class="text-violet">open to all!</span></span>
            </h2>
            <div class="position-relative">
                <div class="swiper dmcareersld">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="dm-career-main one">
                                <img class="mb-lg-5 mb-4 ms-auto me-auto"
                                    src="{{asset('frontend/assets/images/home/dm-career1-newn.png')}}">
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
                                    src="{{asset('frontend/assets/images/home/dm-career2-newn.png')}}">
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
                                    src="{{asset('frontend/assets/images/home/dm-career3-newn.png')}}">
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
                                    src="{{asset('frontend/assets/images/home/dm-career4-newn.png')}}">
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
                    <h2 class="mb-4">Learning from Bangalore's top digital marketing training institute <span
                            class="text-violet">will help you</span></h2>
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
                    <img class="w-100 mb-lg-0 mb-3" src="{{asset('frontend/assets/images/home/dm-help.png')}}">
                </div>
            </div>
        </div>
    </section>

    <section class="spb-100">
        <div class="container">
            <h2 class="text-center mb-lg-5 mb-4">Learning Modes at Our <span class="text-violet">Digital
                    <span class="db">Marketing Institute in Bangalore</span></span></h2>
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
                                        src="{{asset('frontend/assets/images/home/learning-modes.jpg')}}">
                                    <img class="w-100 d-lg-none d-block mb-3"
                                        src="{{asset('frontend/assets/images/home/learning-modes-mbl.jpg')}}">
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
                                        src="{{asset('frontend/assets/images/home/learning-modes2n.jpg')}}">
                                    <img class="w-100 d-lg-none d-block"
                                        src="{{asset('frontend/assets/images/home/learning-modes-mbl2.jpg')}}">
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

    <section class="sp-100 intern-section">
        <div class="container">
            <div class="row gx-md-5">
                <div class="col-lg-6">
                    <div class="position-relative">
                        <div class="swiper certificatesld">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="certificatemin">
                                        <img class="w-100" src="{{asset('frontend/assets/images/home/certificate1.png')}}">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="certificatemin">
                                        <img class="w-100" src="{{asset('frontend/assets/images/home/certificate2.png')}}">
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

    <section class="sp-100 mbl-spt-0">
        <div class="container">
            <h2 class="text-center mb-3">Benefits of Joining BrandStory Academy for
                <span class="db">Digital <span class="text-violet">Marketing Courses</span></span>
            </h2>
            <p class="text-center mb-4 max-1000">Brandstory Academy gives you more than just digital marketing courses in
                Bangalore. With our comprehensive digital marketing courses + internship, students will learn the
                fundamentals, work on live projects, and become experts. Our hands-on approach to learning will help you
                apply the knowledge in real-world projects, gain insights, and become a specialist.</p>
            <img class="w-100 mb-4" src="{{asset('frontend/assets/images/home/institute.jpg')}}">
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

    <section class="spb-100">
        <div class="container">
            <h2 class="text-center mb-md-5 mb-4">Some Facts That You <span class="text-violet">Must Know</span></h2>
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
                                            in-demand career options today, both in India and globally. The demand for
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
                    <img class="w-100" src="{{asset('frontend/assets/images/home/fast-img.png')}}">
                </div>
            </div>
        </div>
    </section>

    <section class="ourstudents-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-white mb-md-5 mb-4 text-md-start text-center">What Our Students Say
                        <span class="db">About Us</span>
                    </h2>
                    <div class="ourstudent-main" data-student="1">
                        <div class="ourstudent-inner-main d-flex justify-content-between text-white align-items-center">
                            <div class="ourstudent d-flex align-items-center">
                                <img class="me-3" src="{{asset('frontend/assets/images/home/student-small1.png')}}">
                                <div class="ourstudent-cnt text-white">
                                    <h4 class="mb-2">Shaun Moore</h4>
                                    <p class="mb-0">Digital Marketing Mastery With
                                        <span class="db">Artificial Intelligence (AI)</span>
                                    </p>
                                </div>
                            </div>
                            <div class="student-rates">
                                <p class="mb-0">5.0 <img class="ms-2"
                                        src="{{asset('frontend/assets/images/home/star.png')}}">
                            </div>
                        </div>
                    </div>
                    <div class="ourstudent-main" data-student="2">
                        <div class="ourstudent-inner-main d-flex justify-content-between text-white align-items-center">
                            <div class="ourstudent d-flex align-items-center">
                                <img class="me-3" src="{{asset('frontend/assets/images/home/student-small2.png')}}">
                                <div class="ourstudent-cnt text-white">
                                    <h4 class="mb-2">James Lee</h4>
                                    <p class="mb-0">Advanced Digital Marketing
                                        <span class="db">Boot Camp</span>
                                    </p>
                                </div>
                            </div>
                            <div class="student-rates">
                                <p class="mb-0">5.0 <img class="ms-2"
                                        src="{{asset('frontend/assets/images/home/star.png')}}">
                            </div>
                        </div>
                    </div>
                    <div class="ourstudent-main" data-student="3">
                        <div class="ourstudent-inner-main d-flex justify-content-between text-white align-items-center">
                            <div class="ourstudent d-flex align-items-center">
                                <img class="me-3" src="{{asset('frontend/assets/images/home/student-small3.png')}}">
                                <div class="ourstudent-cnt text-white">
                                    <h4 class="mb-2">Shaun Moore</h4>
                                    <p class="mb-0">360° Digital Marketing</p>
                                </div>
                            </div>
                            <div class="student-rates">
                                <p class="mb-0">5.0 <img class="ms-2"
                                        src="{{asset('frontend/assets/images/home/star.png')}}">
                            </div>
                        </div>
                    </div>
                    <div class="viewallbtn d-flex mt-5 mt-md-4 mb-md-0 mb-4">
                        <a href="">View all</a>
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="student-testi-main text-center" data-student="1">
                        <img class="mb-3" src="{{asset('frontend/assets/images/home/student-large1.png')}}">
                        <p class="mb-4">I was a beginner, but Sparkly’s step-by-step courses made everything simple and easy
                            to grasp</p>
                        <div class="student-detailsmin">
                            <h4 class="mb-2">Shaun Moore</h4>
                            <p class="mb-2">Digital Marketing Mastery With Artificial
                                <span class="db">Intelligence (AI)</span>
                            </p>
                            <img src="{{asset('frontend/assets/images/home/student-review.png')}}">
                        </div>
                    </div>
                    <div class="student-testi-main text-center" data-student="2">
                        <img class="mb-3" src="{{asset('frontend/assets/images/home/student-large2.png')}}">
                        <p class="mb-4">I was a beginner, but Sparkly’s step-by-step courses made everything simple and easy
                            to grasp</p>
                        <div class="student-detailsmin">
                            <h4 class="mb-2">James Lee</h4>
                            <p class="mb-2">Advanced Digital Marketing
                                <span class="db">Boot Camp</span>
                            </p>
                            <img src="{{asset('frontend/assets/images/home/student-review.png')}}">
                        </div>
                    </div>
                    <div class="student-testi-main text-center" data-student="3">
                        <img class="mb-3" src="{{asset('frontend/assets/images/home/student-large3.png')}}">
                        <p class="mb-4">I was a beginner, but Sparkly’s step-by-step courses made everything simple and easy
                            to grasp</p>
                        <div class="student-detailsmin">
                            <h4 class="mb-2">Shaun Moore</h4>
                            <p class="mb-2">360° Digital Marketing</p>
                            <img src="{{asset('frontend/assets/images/home/student-review.png')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="sp-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img class="w-100 mb-lg-0 mb-3 d-lg-block d-none"
                        src="{{asset('frontend/assets/images/home/form-imgn.jpg')}}">
                    <img class="w-100 mb-lg-0 mb-3 d-lg-none d-block"
                        src="{{asset('frontend/assets/images/home/form-img-mbl.jpg')}}">
                </div>
                <div class="col-lg-6">
                    <div class="homeform-main form-main normal">
                        <h4 class="mb-4 text-blue text-md-start text-center">You might be a perfect fit! Enroll today!</h4>
                        <form id="enquiryForm" action="contact_enquiry.php" method="post">
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
                            <fieldset class="mb-3 d-lg-flex">
                                <div class="radio-button-sec">
                                    <legend class="col-form-label pt-0 pe-3">Program</legend>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="program" id="program1_normal"
                                            value="Digital Marketing Mastery" required>
                                        <label class="form-check-label" for="program1_normal">Digital Marketing
                                            Mastery</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="program" id="program3_normal"
                                            value="Advanced Digital Marketing Boot Camp" required>
                                        <label class="form-check-label" for="program3_normal">Advanced Digital Marketing
                                            Boot Camp</label>
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
                            <input type="hidden" id="recaptcha_response" name="recaptcha_response"
                                class="recaptcha_response">
                            <button type="submit" class="btn d-block w-100 text-center bg-violet">Submit</button>
                        </form>



                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sp-100 bg-lightblue1">
        <div class="container">
            <h2 class="mb-lg-5 mb-4 text-center">FAQ</h2>
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
                                        <p class="mb-0 fs-16">The Brandstory Academy stands out for its practical approach.
                                            Bringing in expert trainers, multiple courses, and real-time clients, the
                                            students are equipped with skills needed to succeed in the fast-paced digital
                                            world.</p>
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
                                            <li class="fs-16">At BrandStory, the courses taught by our instructors are
                                                seasoned professionals. These instructors are passionate and aim to share
                                                their knowledge and help learners like you succeed.</li>
                                            <li class="fs-16">Our professionals are supportive, and learners can have access
                                                to them directly throughout the course.</li>
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
                                        <p class="mb-0 fs-16">The digital marketing course at Brandstory Academy is open to
                                            all. Either you want to try something new or are looking to upskill, we have no
                                            restrictions in people enrolling.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingfour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapsefour" aria-expanded="false"
                                        aria-controls="flush-collapsefour">
                                        How long is the Digital Marketing Academy program, and what can I expect during this
                                        time?
                                    </button>
                                </h4>
                                <div id="flush-collapsefour" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p class="fs-16">At BrandStory, our digital marketing program is a 6-month duration
                                            designed to give you more than just theoretical knowledge. Over the course of
                                            six months</p>
                                        <ul>
                                            <li class="fs-16">Work on real projects, gaining hands-on experience with actual
                                                clients.</li>
                                            <li class="fs-16">Experience what it’s like to work in an agency setting, as if
                                                you’re an intern.</li>
                                            <li class="fs-16">You’ll learn through practical tasks and challenges, building
                                                skills you can directly apply to the digital marketing industry.</li>
                                        </ul>
                                        <p class="mb-0 fs-16">By the end, you’ll have a strong portfolio to help you stand
                                            out in your digital marketing career.</p>
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
                                        <p class="mb-0 fs-16">Our digital marketing academy runs on weekdays from 9.30 AM to
                                            6 PM. During this timing, you’ll have a 30 mins lunch break and two short
                                            15-minute breaks throughout the day to recharge.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingsix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapsesix" aria-expanded="false"
                                        aria-controls="flush-collapsesix">
                                        Who can enroll in the digital marketing course?
                                    </button>
                                </h4>
                                <div id="flush-collapsesix" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingsix" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">The digital marketing course at Brandstory Academy is open to
                                            all. Either you want to try something new or are looking to upskill, we have no
                                            restrictions in people enrolling.</p>
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
                                        <p class="mb-0 fs-16">Absolutely. There's no restriction on anybody working. We
                                            offer flexible class timings, including weekend and self-paced options, so you
                                            can learn at your own convenience.</p>
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
                                        <p class="mb-0 fs-16">At BrandStory Academy, our digital marketing courses have no
                                            restrictions based on time zones. You can attend the course at your own pace and
                                            convenience, wherever you are in the world.</p>
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
                                            <li>Yes, you'll receive a digital marketing certificate upon completion.</li>
                                            <li>This 6-month program goes beyond a traditional course – it’s like a real
                                                internship.</li>
                                            <li>You’ll gain hands-on experience working on live client projects, simulating
                                                an agency environment.</li>
                                            <li>By the end, you’ll have a portfolio to showcase to the world, proving you’ve
                                                worked as an intern and gained valuable industry experience.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingten">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseten" aria-expanded="false"
                                        aria-controls="flush-collapseten">
                                        Who will be teaching digital marketing courses in BrandStory Academy?
                                    </button>
                                </h4>
                                <div id="flush-collapseten" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingten" data-bs-parent="#accordionFlushExample1">
                                    <div class="accordion-body">
                                        <ul class="mb-0">
                                            <li class="fs-16">At BrandStory, the courses taught by our instructors are
                                                seasoned professionals. These instructors are passionate and aim to share
                                                their knowledge and help learners like you succeed.</li>
                                            <li class="fs-16">Our professionals are supportive, and learners can have access
                                                to them directly throughout the course.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingeleven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseeleven" aria-expanded="false"
                                        aria-controls="flush-collapseeleven">
                                        Who can enroll in the digital marketing course?
                                    </button>
                                </h4>
                                <div id="flush-collapseeleven" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingeleven" data-bs-parent="#accordionFlushExample1">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">The digital marketing course at Brandstory Academy is open to
                                            all. Either you want to try something new or are looking to upskill, we have no
                                            restrictions in people enrolling.</p>
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
                                        Who can enroll in the digital marketing course?
                                    </button>
                                </h4>
                                <div id="flush-collapsefourteen" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingfourteen" data-bs-parent="#accordionFlushExample2">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">The digital marketing course at Brandstory Academy is open to
                                            all. Either you want to try something new or are looking to upskill, we have no
                                            restrictions in people enrolling.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection