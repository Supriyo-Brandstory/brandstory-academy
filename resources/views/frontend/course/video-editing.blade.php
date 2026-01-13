@extends('frontend.partial.app')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 col-md-7 text-md-start text-center align-self-center mt-3">
                    <h2 class="mb-3 text-blue">Best Video Editing Course in Bangalore: <span class="text-violet">Professional Classes, Training & Job Placement</span></h2>
                    <p class="mb-2">Learn industry-ready video editing skills with the best video editing course in Bangalore, featuring professional classes, hands-on training, and real-world projects. Gain expert mentorship, build a strong portfolio, and receive job placement support to launch a successful career in media and digital content creation.</p>
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
    <div class="container lesson-box-shadow">
        <div class="row align-items-stretch g-5">

            <div class="col-md-6 d-flex">
                <div class="w-100"> 
                    <img src="https://picsum.photos/id/297/500/200" 
                         alt="video-editing" 
                         class="img-fluid rounded-4 w-100 h-100 object-fit-cover">
                </div>
            </div>

            <div class="col-md-6">
                <h2>Why Choose a <span class="text-violet">Video Editing Course</span> in Bangalore?</h2>
                <br>
                <p>Bangalore is a fast-growing media and tech hub, making it an ideal city to learn video editing in Bangalore. With rising demand for digital content, OTT platforms, and marketing videos, the city offers strong opportunities for a career in video editing Bangalore and access to diverse video editor jobs Bangalore across industries.</p>
            </div>

        </div>
    </div>
</section>
<section class="dm-course-section spb-100">
    <div class="container">
        <h2 class="text-center db"><span class="text-violet">Our Comprehensive Video Editing Courses</span> in Bangalore</h2>
        <p class="max-1000 text-center">At Brandstory Academy, our video editing programs are designed to suit beginners, professionals, and career switchers. With hands-on training, industry tools, and expert mentorship, we help students build job-ready skills for today’s media and digital content industry.</p>
        
        <div class="dm-course-main mt-5">
            <ul class="nav nav-pills mb-md-5 mb-4 d-flex justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-course1-tab" data-bs-toggle="pill" data-bs-target="#pills-course1" type="button" role="tab" aria-controls="pills-course1" aria-selected="true">Foundation Course</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-course3-tab" data-bs-toggle="pill" data-bs-target="#pills-course3" type="button" role="tab" aria-controls="pills-course3" aria-selected="false">Short-Term Programs</button>
                </li>
            </ul>
            
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade active show" id="pills-course1" role="tabpanel" aria-labelledby="pills-course1-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <img class="w-100 mb-lg-0 mb-3 d-lg-block d-none" src="http://brandstory-academy.test/frontend/assets/images/home/course1.webp" alt="Foundation & Beginner Video Editing Course in Bangalore">
                            <img class="w-100 mb-lg-0 mb-3 d-lg-none d-block" src="http://brandstory-academy.test/frontend/assets/images/home/mbl-course1.webp">
                        </div>
                        <div class="col-lg-6 d-flex">
                            <div class="course-main d-flex flex-column w-100">
                                <h4 class="mb-3 text-blue">Foundation & <span class="text-violet">Beginner Video Editing Course</span></h4>
                                <p class="mb-lg-5 mb-4 fw-500 fs-16">Duration: Flexible (Structured Modules with Hands-On Practice)</p>
                                <ul class="mb-0 list-unstyled p-0">
                                    <li class="mb-4"><img class="me-2" src="http://brandstory-academy.test/frontend/assets/images/home/course1-icon.svg">Basics of Video Editing & Software Tools</li>
                                    <li class="mb-4"><img class="me-2" src="http://brandstory-academy.test/frontend/assets/images/home/course1-icon.svg">Storytelling Techniques & Narrative Building</li>
                                    <li class="mb-4"><img class="me-2" src="http://brandstory-academy.test/frontend/assets/images/home/course1-icon.svg">Transitions, Effects & Color Correction</li>
                                    <li class="mb-4"><img class="me-2" src="http://brandstory-academy.test/frontend/assets/images/home/course1-icon.svg">Expert Mentorship & Portfolio Development</li>
                                </ul>
                                <div class="coursebtns one mt-auto">
                                    <a class="text-decoration-none d-block w-100 text-center bg-violet" href="https://brandstoryacademy.com/courses">Enroll in Beginner Course</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-course3" role="tabpanel" aria-labelledby="pills-course3-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <img class="w-100 mb-lg-0 mb-3 d-lg-block d-none" src="http://brandstory-academy.test/frontend/assets/images/home/course3.webp" alt="Short-Term & Crash Video Editing Programs in Bangalore">
                            <img class="w-100 mb-lg-0 mb-3 d-lg-none d-block" src="http://brandstory-academy.test/frontend/assets/images/home/mbl-course3.webp">
                        </div>
                        <div class="col-lg-6 d-flex">
                            <div class="course-main d-flex flex-column w-100">
                                <h4 class="mb-3 text-blue">Short-Term & <span class="text-yellow">Crash Video Editing Programs</span></h4>
                                <p class="mb-lg-5 mb-4 fw-500 fs-16">Duration: Fast-Track (Intensive Sessions & Projects)</p>
                                <ul class="mb-0 list-unstyled p-0">
                                    <li class="mb-4"><img class="me-2" src="http://brandstory-academy.test/frontend/assets/images/home/course3-icon.svg">Practical Projects & Real-World Editing</li>
                                    <li class="mb-4"><img class="me-2" src="http://brandstory-academy.test/frontend/assets/images/home/course3-icon.svg">Weekend Video Editing Classes in Bangalore</li>
                                    <li class="mb-4"><img class="me-2" src="http://brandstory-academy.test/frontend/assets/images/home/course3-icon.svg">Flexible Schedules for Working Professionals</li>
                                    <li class="mb-4"><img class="me-2" src="http://brandstory-academy.test/frontend/assets/images/home/course3-icon.svg">Industry Tools & Quick Skill Mastery</li>
                                    <li class="mb-4"><img class="me-2" src="http://brandstory-academy.test/frontend/assets/images/home/course3-icon.svg">Job-Ready Techniques & Career Guidance</li>
                                </ul>
                                <div class="coursebtns one mt-auto">
                                    <a class="text-decoration-none d-block w-100 text-center bg-violet" href="https://brandstoryacademy.com/courses">Book Free Demo & Enroll Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="spb-100 mt-5">
    <div class="container">
        <h2 class="text-center db"><span class="text-violet">Our Comprehensive Video Editing Courses</span> in Bangalore</h2>
        <p class="max-1000 text-center">At Brandstory Academy, our video editing programs are designed to suit beginners, professionals, and career switchers. With hands-on training, industry tools, and expert mentorship, we help students build job-ready skills for today’s media and digital content industry.</p>
        <div class="h-scroll pt-5 d-flex justify-content-start justify-content-md-center">
            <div class="card">
                <h3>DaVinci Resolve Masterclass</h3>
                <p>Our DaVinci Resolve course Bangalore covers professional editing, advanced color grading training, visual effects, and audio workflows. Learn industry-standard techniques used in films, ads, and digital media projects.</p>
                <div class="card-img" style="background-image:url('https://cdn.prod.website-files.com/662b8a4944dbb4e0ccd51a28/687664a4993730796dba12cb_67c96b168b4bab7830112583_davinci-resolve-pricing.png');"></div>
            </div>
            <div class="card">
                <h3>Final Cut Pro X Training</h3>
                <p>The Final Cut Pro course Bangalore focuses on fast, efficient editing for macOS users. Our FCPX training teaches timeline management, effects, motion graphics, and export techniques for professional-quality videos.</p>
                <div class="card-img" style="background-image:url('https://fixthephoto.com/images/content/final-cut-pro-logo.png');"></div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 mb-5">
  <div class="container">
    <div class="row align-items-start justify-content-between">

      <!-- LEFT SIDE: Heading + Text -->
      <div class="col-lg-5 mb-4 mb-lg-0">
        <h2 class="mb-3">
          Launch Your Career: <span class="text-violet">Placements & Job Opportunities in Video Editing</span>
        </h2>

        <p class="text-muted">
          At Brandstory Academy, we focus on turning skills into careers. Our video editing courses are supported by strong placement assistance, helping students confidently step into the media and digital content industry in Bangalore.
        </p>
      </div>

      <!-- RIGHT SIDE: Stacked Cards -->
      <div class="col-lg-6">
        <div class="stacked-cards-container mt-4 mt-lg-0" id="stacked-cards">

          <!-- Card 1 -->
          <div class="stack-card" id="card1">
            <div class="card h-100 shadow-sm border-1 rounded-4">
              <div class="card-body p-4">
                <h3 class="fw-bold mb-4 text-dark">
                  Dedicated Placement Assistance & Job Guarantee
                </h3>
                <p class="text-secondary">
                  We offer structured placement support including portfolio building, interview preparation, and industry referrals. Our programs are designed to help students access video editing job opportunities in Bangalore through dedicated career guidance.
                </p>
                <ul class="list-unstyled mt-4">
                  <li class="mb-3 d-flex align-items-start">
                    <span class="badge bg-success-subtle text-success me-3 p-2 fs-6">✓</span>
                    <span>Portfolio building for standout applications</span>
                  </li>
                  <li class="mb-3 d-flex align-items-start">
                    <span class="badge bg-success-subtle text-success me-3 p-2 fs-6">✓</span>
                    <span>Interview preparation & mock sessions</span>
                  </li>
                  <li class="mb-3 d-flex align-items-start">
                    <span class="badge bg-success-subtle text-success me-3 p-2 fs-6">✓</span>
                    <span>Industry referrals and placement assistance</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="stack-card" id="card2">
            <div class="card h-100 shadow-sm border-1 rounded-4">
              <div class="card-body p-4">
                <h3 class="fw-bold mb-4 text-dark">
                  Career Paths & Industry Demand in Bangalore
                </h3>
                <p class="text-secondary">
                  Bangalore offers growing demand for video editor jobs across digital marketing, media houses, film production, and content platforms. Graduates can explore multiple career paths in video editing, from editors and motion designers to content creators.
                </p>
                <ul class="list-unstyled mt-4">
                  <li class="mb-3 d-flex align-items-start">
                    <span class="badge bg-primary-subtle text-primary me-3 p-2 fs-6">→</span>
                    <span>Video Editor roles in agencies & studios</span>
                  </li>
                  <li class="mb-3 d-flex align-items-start">
                    <span class="badge bg-primary-subtle text-primary me-3 p-2 fs-6">→</span>
                    <span>Motion graphics & content creation positions</span>
                  </li>
                  <li class="mb-3 d-flex align-items-start">
                    <span class="badge bg-primary-subtle text-primary me-3 p-2 fs-6">→</span>
                    <span>Opportunities in digital media & YouTube production</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<section class="sp-100">
    <div class="container">
        <h2 class="mb-lg-5 mb-4 text-center">FAQs</h2>

        <div class="row gx-md-3">
            <div class="col-lg-12">
                <div class="faq-main mb-lg-0 mb-4">
                    <div class="faq-head">
                        <p class="text-violet mb-0 fw-500 fs-16">Video Editing Course in Bangalore</p>
                    </div>

                    <div class="accordion accordion-flush" id="accordionFlushExample">

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Why is Bangalore a good city to learn video editing?
                                </button>
                            </h4>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        Bangalore is a major tech and media hub with growing demand for video content across startups, agencies, OTT platforms, and production houses, offering excellent learning and career opportunities.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Is a video editing course in Bangalore suitable for beginners?
                                </button>
                            </h4>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        Yes, beginner-friendly courses cover editing basics, storytelling, and industry tools, making them ideal for students with no prior experience.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Are there short-term video editing courses available in Bangalore?
                                </button>
                            </h4>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        Yes, many institutes offer short-term, crash, and weekend video editing courses designed for quick skill development and flexible learning.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    Can I learn DaVinci Resolve in Bangalore?
                                </button>
                            </h4>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        Yes, professional DaVinci Resolve courses are available in Bangalore, focusing on editing, color grading, and post-production workflows.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    Are there Final Cut Pro courses available in Bangalore?
                                </button>
                            </h4>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        Yes, Final Cut Pro X training programs are offered in Bangalore, especially for macOS users seeking professional editing skills.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSix" aria-expanded="false"
                                    aria-controls="flush-collapseSix">
                                    Does the video editing course offer a job guarantee?
                                </button>
                            </h4>
                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        Most reputed institutes provide placement assistance and career support. Job guarantee options depend on course structure and eligibility criteria.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSeven" aria-expanded="false"
                                    aria-controls="flush-collapseSeven">
                                    What kind of jobs can I get after a video editing course?
                                </button>
                            </h4>
                            <div id="flush-collapseSeven" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        Graduates can work as video editors, motion graphic designers, content editors, social media video specialists, or freelance creators.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseEight" aria-expanded="false"
                                    aria-controls="flush-collapseEight">
                                    What is the average salary of a video editor in Bangalore?
                                </button>
                            </h4>
                            <div id="flush-collapseEight" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        Entry-level video editors in Bangalore can expect competitive starting salaries, with significant growth as skills and experience increase.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseNine" aria-expanded="false"
                                    aria-controls="flush-collapseNine">
                                    Can I get a demo class before enrolling?
                                </button>
                            </h4>
                            <div id="flush-collapseNine" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        Most training institutes, including Brandstory Academy, offer demo or trial classes so students can experience the teaching approach before enrolling.
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

    <script>
  document.addEventListener('DOMContentLoaded', () => {
    const container = document.getElementById('stacked-cards');
    
    container.addEventListener('click', () => {
      container.classList.toggle('swiped');
    });
  });
</script>
@endsection
