@extends('frontend.partial.app')

@section('content')
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 text-md-start text-center align-self-center">
                    <h1 class="mb-3 text-blue">Digital Marketing Courses</h1>
                    <p class="mb-2">We Have Placed 1000+ Learners in Global Agencies</p>
                    <div class="d-md-flex align-items-center">
                        <div class="violet-btn d-flex me-lg-5 mb-lg-0 mb-4 justify-content-md-start justify-content-center">
                            <a href="{{route('contact')}}">Hire from</a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <img class="w-100" src="{{asset('frontend/assets/images/courselist-banner.webp')}}">
                </div>
            </div>
        </div>
    </section>

    <section class="sp-100 course_list">
        <div class="container">
            <h2 class="text-center db">Category 1: <span class="text-violet">Bundle Courses</span></h2>
            <div class="course_grid">
                <div class="grid_box">
                    <img class="main-bg-img"
                        src="{{ asset('frontend/assets/images/courses/Digital-Marketing-Executive-banner.webp') }}"
                        alt="Digital Marketing Executive">
                    <div class="content">
                        <h3>Digital Marketing Mastery</h3>

                        <div class="badge-bg">
                            <img src="{{ asset('frontend/assets/images/courses/time.svg') }}">2.5 Months + 6 Months
                            Internship
                        </div>
                        <ul>
                            <li>Professional Level Certification</li>
                            <li>Expert Mentorship</li>
                            <li>Expert Mentorship</li>
                            <li>8+ Live Projects</li>
                            <li>6 Months Internship</li>
                        </ul>
                        <div class="btn-grup">
                            <a href="{{route('contact')}}" class="outline-btn">Talk To Expert</a>
                            <a href="{{route('course_digital_marketing')}}" class="violet-btn">Explore Details </a>
                        </div>
                    </div>
                </div>

                <div class="grid_box">
                    <img class="main-bg-img"
                        src="{{ asset('frontend/assets/images/courses/Advanced-Digital-Marketing-Boot-Camp.webp') }}"
                        alt="Digital Marketing Executive">
                    <div class="content">
                        <h3>Advanced Digital Marketing Boot Camp</h3>

                        <div class="badge-bg">
                            <img src="{{ asset('frontend/assets/images/courses/time.svg') }}">3.5 Months + 6 Months
                            Internship
                        </div>
                        <ul>
                            <li>Full-Stack Digital Marketing</li>
                            <li>AI & Automation</li>
                            <li>Video Editing & Podcasting</li>
                            <li>Studio Techniques</li>
                            <li>10+ Live Projects</li>
                        </ul>
                        <div class="btn-grup">
                            <a href="{{route('contact')}}" class="outline-btn">Talk To Expert</a>
                            <a href="{{route('advanced_digital_marketing_boot_camp')}}" class="violet-btn">Explore Details </a>
                        </div>
                    </div>
                </div>
                <div class="grid_box">
                    <img class="main-bg-img"
                        src="{{ asset('frontend/assets/images/courses/360-Degree-Digital-Marketing-Course.webp') }}"
                        alt="Digital Marketing Executive">
                    <div class="content">
                        <h3>360 Degree Digital Marketing Course</h3>

                        <div class="badge-bg">
                            <img src="{{ asset('frontend/assets/images/courses/time.svg') }}">4 Months + 6 Months Internship
                        </div>
                        <ul>
                            <li>Professional Level Certification</li>
                            <li>E-Commerce Growth Marketing</li>
                            <li>Full-Stack Digital Marketing</li>
                            <li>AI & Data Analytics</li>
                            <li>Content Production</li>

                        </ul>
                        <div class="btn-grup">
                            <a href="{{route('contact')}}" class="outline-btn">Talk To Expert</a>
                            <a href="{{route('course_360_degree_digital_marketing')}}" class="violet-btn">Explore Details </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section class="course_list">
        <div class="container">
            <h2 class="text-center db">Category 2: <span class="text-violet">Subject-Specific Courses</span></h2>
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
                                <img src="{{ asset('frontend/assets/images/courses/mony.svg') }}">Course Fees - 30,000

                            </div>
                        </div>
                        <ul>
                            <li>Become Zero to Hero in Digital Marketing </li>
                        </ul>
                        <div class="btn-grup">
                            <a href="{{route('contact')}}" class="outline-btn">Talk To Expert</a>
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
                                <img src="{{ asset('frontend/assets/images/courses/mony.svg') }}">Course Fees - 11,000

                            </div>
                        </div>
                        <ul>
                            <li>Gain Real-world Experience by Working on Live SEO Projects </li>
                        </ul>
                        <div class="btn-grup">
                            <a href="{{route('contact')}}" class="outline-btn">Talk To Expert</a>
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
                                <img src="{{ asset('frontend/assets/images/courses/mony.svg') }}">Course Fees - 15,000

                            </div>
                        </div>
                        <ul>
                            <li>Build Strategy and Launch High-impact PPC Campaigns </li>
                        </ul>
                        <div class="btn-grup">
                            <a href="#" class="outline-btn">Talk To Expert</a>
                            <a href="{{route('contact')}}" class="violet-btn">Explore Details </a>
                        </div>
                    </div>
                </div>
                <div class="grid_box">
                    <img class="main-bg-img" src="{{ asset('frontend/assets/images/courses/Social-Media-Marketing.webp') }}"
                        alt="Digital Marketing Executive">
                    <div class="content">
                        <h3>Social Media Marketing</h3>

                        <div class="badge-bg">
                            <div>
                                <img src="{{ asset('frontend/assets/images/courses/time.svg') }}">Duration - 2 Months

                            </div>
                            <div>
                                <img src="{{ asset('frontend/assets/images/courses/mony.svg') }}">Course Fees - 12,000

                            </div>
                        </div>
                        <ul>
                            <li>Learn Proven Social Media Growth Tactics</li>
                        </ul>
                        <div class="btn-grup">
                            <a href="#" class="outline-btn">Talk To Expert</a>
                            <a href="{{route('contact')}}" class="violet-btn">Explore Details </a>
                        </div>
                    </div>
                </div>
                <div class="grid_box">
                    <img class="main-bg-img" src="{{ asset('frontend/assets/images/courses/UX-UI-Design.webp') }}"
                        alt="Digital Marketing Executive">
                    <div class="content">
                        <h3>UX/UI Design</h3>

                        <div class="badge-bg">
                            <div>
                                <img src="{{ asset('frontend/assets/images/courses/time.svg') }}">Duration - 3 Months

                            </div>
                            <div>
                                <img src="{{ asset('frontend/assets/images/courses/mony.svg') }}">Course Fees - 49,999

                            </div>
                        </div>
                        <ul>
                            <li>Master user-focused design through practical UX/UI training</li>
                        </ul>
                        <div class="btn-grup">
                            <a href="#" class="outline-btn">Talk To Expert</a>
                            <a href="{{route('contact')}}" class="violet-btn">Explore Details </a>
                        </div>
                    </div>
                </div>
                <div class="grid_box">
                    <img class="main-bg-img" src="{{ asset('frontend/assets/images/courses/Web-Design.webp') }}"
                        alt="Digital Marketing Executive">
                    <div class="content">
                        <h3>Web Design</h3>

                        <div class="badge-bg">
                            <div>
                                <img src="{{ asset('frontend/assets/images/courses/time.svg') }}">Duration - 3 Months

                            </div>
                            <div>
                                <img src="{{ asset('frontend/assets/images/courses/mony.svg') }}">Course Fees - 29,000

                            </div>
                        </div>
                        <ul>
                            <li>Create impactful websites with hands-on web design training</li>
                        </ul>
                        <div class="btn-grup">
                            <a href="#" class="outline-btn">Talk To Expert</a>
                            <a href="{{route('contact')}}" class="violet-btn">Explore Details </a>
                        </div>
                    </div>
                </div>
                <div class="grid_box">
                    <img class="main-bg-img" src="{{ asset('frontend/assets/images/courses/Graphic-Design.webp') }}"
                        alt="Digital Marketing Executive">
                    <div class="content">
                        <h3>Graphic Design</h3>

                        <div class="badge-bg">
                            <div>
                                <img src="{{ asset('frontend/assets/images/courses/time.svg') }}">Duration - 3 Months

                            </div>
                            <div>
                                <img src="{{ asset('frontend/assets/images/courses/mony.svg') }}">Course Fees - 21,000

                            </div>
                        </div>
                        <ul>
                            <li>Design creative visuals with practical graphic design training</li>
                        </ul>
                        <div class="btn-grup">
                            <a href="#" class="outline-btn">Talk To Expert</a>
                            <a href="{{route('contact')}}" class="violet-btn">Explore Details </a>
                        </div>
                    </div>
                </div>
                <div class="grid_box">
                    <img class="main-bg-img" src="{{ asset('frontend/assets/images/courses/video-editing.webp') }}"
                        alt="Digital Marketing Executive">
                    <div class="content">
                        <h3>Video Editing</h3>

                        <div class="badge-bg">
                            <div>
                                <img src="{{ asset('frontend/assets/images/courses/time.svg') }}">Duration - 3 Months

                            </div>
                            <div>
                                <img src="{{ asset('frontend/assets/images/courses/mony.svg') }}">Course Fees - 31,500

                            </div>
                        </div>
                        <ul>
                            <li>Master video creation using professional editing tools</li>
                        </ul>
                        <div class="btn-grup">
                            <a href="#" class="outline-btn">Talk To Expert</a>
                            <a href="{{route('contact')}}" class="violet-btn">Explore Details </a>
                        </div>
                    </div>
                </div>
                <div class="grid_box">
                    <img class="main-bg-img" src="{{ asset('frontend/assets/images/courses/Free-1-Day-Session.webp') }}"
                        alt="Digital Marketing Executive">
                    <div class="content">
                        <h3>Free 1 Day Session</h3>

                        <div class="badge-bg">
                            <div>
                                <img src="{{ asset('frontend/assets/images/courses/time.svg') }}">Free 1 Day Session

                            </div>
                            <div>
                                <img src="{{ asset('frontend/assets/images/courses/mony.svg') }}">Nil

                            </div>
                        </div>
                        <ul>
                            <li>Join Our Free 1-day Demo Session to Start Your Journey</li>
                        </ul>
                        <div class="btn-grup">
                            <a href="#" class="outline-btn">Talk To Expert</a>
                            <a href="{{route('contact')}}" class="violet-btn">Explore Details </a>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section>
    <section class="coursecta course-banner">
        <div class="banner-content">
            <div class="text-section">
                <h2>
                    Confused With Which <span>Professional Course To Choose?</span>
                </h2>
                <p>
                    Get Professional Guidance From Our Subject Matter Experts To Choose The Right Fit For You.
                </p>
                <a href="#" class="btn-join">Join the Waitlist</a>
            </div>
            <div class="image-section">
                <img src="{{asset('frontend/assets/images/courses/woman.webp')}}" alt="Student Image" />
            </div>
        </div>
    </section>

    <section class="testimonial-section" id="testimony">
        <h2 class="text-center mb-4"> Inspiring Journeys of<span class="text-violet">Our Achievers</span></h2>
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

    <section class="spb-100">
        <div class="container">
            <h2 class="mb-lg-5 mb-4 text-center">Course Related FAQs</h2>
            <div class="d-flex gx-md-3 align-items-center justify-content-center w-100">
                <div class="w-100 w-lg-50">
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
                                        <p class="mb-0 fs-16">At BrandStory Academy, we are proud to be among the top
                                            digital marketing
                                            institute in Bangalore, offering practical, industry-focused courses. Our
                                            students gain hands-on
                                            experience through real client projects, 6 month internships, and expert-led
                                            training. We also provide
                                            dedicated placement support to help them start successful careers in the digital
                                            marketing industry.</p>
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
                                                professionals who bring years of real-world experience. Our trainers are
                                                passionate
                                                about guiding students and offer direct access with personalized 1-to-1
                                                mentorship.
                                                This ensures every learner receives tailored support, practical insights,
                                                and the
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
                                            in digital marketing can enroll in our courses. Whether you’re a student
                                            exploring
                                            career options, a working professional looking to upskill, an entrepreneur
                                            wanting
                                            to grow your business, or someone seeking a career change, BrandStory Academy’s
                                            digital
                                            marketing course is designed to meet your needs. No prior experience is
                                            required—just a
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
                                        <p class="fs-16">At BrandStory Academy, we offer three specialized digital marketing
                                            courses designed to
                                            meet different career goals:</p>
                                        <ul>
                                            <li class="fs-16">Digital Marketing MASTERY with Artificial Intelligence (AI) –
                                                2.5 months training + 6 months internship</li>
                                            <li class="fs-16">Advanced Digital Marketing Boot Camp – 3.5 months training + 6
                                                months internship</li>
                                            <li class="fs-16">360° Digital Marketing – 4 months training + 6 months
                                                internship</li>
                                        </ul>
                                        <p class="mb-0 fs-16">Each program focuses on practical learning, real client
                                            projects, and agency-style training. By the end of your
                                            chosen course, you’ll gain hands-on experience, build a strong portfolio, and be
                                            career-ready for the fast-growing digital marketing
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
                                        Do I get future assistance after completing the course?
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

            </div>
        </div>
    </section>
    <style>
        .course_list {
            .course_grid {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 20px;
                align-items: center;
                margin-top: 40px;
                overflow: hidden;
            }

            .grid_box {
                display: flex;
                flex-direction: column;
                border: 1px solid #1B1B1B26;

                .main-bg-img {
                    width: 100%;
                    height: 390px;
                    object-fit: cover;
                }

                .content {
                    display: flex;
                    flex-direction: column;
                    padding: 20px;
                    gap: 16px;
                    min-height: 283px;

                    h3 {
                        font-size: 20px;
                        margin: 0px;
                    }

                    .badge-bg {
                        background: #1BC6AF1A;
                        border-radius: 8px;
                        padding: 8px 8px;
                        display: inline-flex;
                        align-items: center;
                        gap: 8px;
                        color: #000;
                        width: 100%;

                        img {
                            width: 18px;
                        }

                        div {
                            display: flex;
                            align-items: center;
                            gap: 5px;
                        }
                    }

                    ul {
                        list-style: none;
                        padding: 0;
                        margin: 0 0 0px 0;

                        li {
                            position: relative;
                            color: #1B1B1B80;
                            font-size: 16px;
                            margin-bottom: 10px;
                        }

                        li:last-child {
                            margin-bottom: 0px;
                        }
                    }

                    .btn-grup {
                        display: flex;
                        gap: 12px;
                        border: solid #1B1B1B1A;
                        border-width: 1px 0 0 0;
                        padding-top: 18px;
                        justify-content: space-between;

                        a.outline-btn {
                            border: 1px solid #845EF7;
                            color: #845EF7;
                            border-radius: 218px;
                            text-decoration: none;
                            width: 100%;
                            align-items: center;
                            display: flex;
                            justify-content: center;
                            height: 48px;
                        }

                        a.outline-btn:hover {
                            background: #845EF7;
                            color: #fff;
                        }

                        a.violet-btn {
                            background: #845EF7;
                            color: #fff;
                            border-radius: 218px;
                            text-decoration: none;
                            width: 100%;
                            align-items: center;
                            display: flex;
                            justify-content: center;
                            height: 48px;
                        }

                        a.violet-btn:hover {
                            background: #fff;
                            color: #845EF7;
                            border: 1px solid #845EF7;
                        }
                    }
                }
            }

        }


        .coursecta.course-banner {
            background: url('/frontend/assets/images/courses/Professional-bg.png');
            background-size: 100% 76%;
            background-position: bottom;
            background-repeat: no-repeat;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;


            .banner-content {
                display: flex;
                align-items: end;
                justify-content: space-between;
                max-width: 1200px;
                width: 100%;
            }

            .text-section {
                width: 55%;
                margin-bottom: 50px;
            }

            .text-section h2 {
                font-size: 38px;
                font-weight: 600;
                color: #111;
                margin-bottom: 20px;
                line-height: 1.3;
            }

            .text-section h2 span {
                color: #00b59c;
            }

            .text-section p {
                font-size: 18px;
                color: #333;
                margin-bottom: 35px;
                line-height: 1.6;
            }

            .btn-join {
                display: inline-block;
                background-color: #1cc6ae;
                color: #fff;
                font-weight: 600;
                padding: 14px 36px;
                border-radius: 50px;
                font-size: 18px;
                text-decoration: none;
                border: 10px solid #a6ede5;
                transition: all 0.3s ease;
            }

            .btn-join:hover {
                background-color: #00a28a;
                box-shadow: 0px 4px 0px #80e3d9;
            }

            .image-section {
                width: 40%;
                display: flex;
                justify-content: flex-end;
            }

            .image-section img {
                width: 100%;
                max-width: 360px;
                height: auto;
                object-fit: contain;
            }
        }

        @media (max-width: 768px) {
            .course_list {
                .course_grid {
                    grid-template-columns: repeat(1, 1fr);
                }
            }

            .coursecta.course-banner {
                background-size: 100% 45.3%;
                .banner-content {
                    flex-direction: column-reverse;
                    padding: 10px;
                }
                .text-section{
                    width: 100%;

                }
                .image-section{
                    width: 100%;
                    margin-bottom: 10px;

                }
            }
        }
    </style>

@endsection