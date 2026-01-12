@extends('frontend.partial.app')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 col-md-7 text-md-start text-center align-self-center mt-3">
                    <h2 class="mb-3 text-blue">Discover Free 1-Day Session Courses & Workshops in Bangalore: Your Ultimate Guide</h2>
                    <p class="mb-2">Explore the best free 1-day session courses and workshops in Bangalore designed to help you learn new skills, gain practical exposure, and explore career options. This ultimate guide highlights top training programs, expert-led workshops, and hands-on sessions available across Bangalore.</p>
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

<section class="pointing-data tech-capital">
  <div class="container">
        <h2 class="text-center mx-auto mb-3 pt-5">
            Why Choose Free 1-Day Sessions?<span class="text-violet"><br>Unlock New Skills & Opportunities</span>
        </h2>
        <p class="mx-auto text-center mb-4" style="max-width:900px">
            Free 1-day sessions offer a smart way to experience learning without long-term commitment. They provide quick skill acquisition, hands-on exposure, and valuable networking opportunities, making them ideal for career exploration and informed decision-making.
        </p>   
    <div class="row g-5" style="min-height: 450px;">

      <!-- Image Column -->
      <div class="col-lg-5 col-md-6 order-2 order-md-1 mb-md-0 text-center text-md-start d-flex flex-column justify-content-md-end">
        <img 
          src="http://brandstory-academy.test/frontend/assets/images/courses/girl-pointing.png" 
          alt="Girl pointing" 
          class="img-fluid pointing-girl">
      </div>

      <!-- Points Column -->
      <div class="col-lg-7 col-md-6 order-1 order-md-2">
        <div class="pointing-item mb-4">
          <h3 class="pointing-title">The Advantage of Quick Skill Introduction</h3>
          <p class="pointing-text">These workshops deliver a rapid skill boost with a low barrier to entry. Participants gain practical insights, tool familiarity, and foundational knowledge in a short, focused format.</p>
        </div>    

        <div class="pointing-item mb-4">
          <h3 class="pointing-title">Networking & Career Exploration Opportunities</h3>
          <p class="pointing-text">Free workshops connect you with industry experts, mentors, and peers. They offer real-world perspectives, professional connections, and clarity on career paths and industry expectations.</p>
        </div>    

        <div class="pointing-item">
          <h3 class="pointing-title">Zero Cost, Maximum Value: Test Drive Your Learning</h3>
          <p class="pointing-text">With zero fees involved, learners can explore new domains risk-free. These sessions act as an introductory offer, helping you evaluate interest and learning style before enrolling in full courses.</p>
        </div>
      </div>

    </div>
  </div>
</section>



<section class="spb-100 violet-bg text-white capsule-section">
    <div class="container pt-5">
        <h2 class="mb-3 text-lg-center text-center frame-700 mx-auto mt-5 capsule-heading-max">
            Explore Free 1-Day Technical & 
            <span class="text-violet"> IT Workshops in Bangalore</span>
        </h2>

        <p class="frame-700 text-center mx-auto capsule-para-max">
            Bangalore hosts a wide range of tech workshops in Bangalore and IT training Bangalore programs designed to introduce learners to high-demand technologies. These free 1-day sessions offer practical exposure, expert guidance, and hands-on demos across AI, cloud computing, DevOps, and modern software development.
        </p>

        <div class="row g-5 pt-3">

            <div class="col-12 col-md-6">
                <div class="capsule-card d-flex align-items-center">
                    <img src="https://picsum.photos/100?random=11" class="capsule-img" alt="">
                    <div>
                        <h3 class="fs-5 mb-1">Free AI, Machine Learning & Data Analytics Workshops</h3>
                        <p class="mb-0">Get hands-on exposure to AI concepts, Gemini demos, and data analytics basics through compact sessions. Learners explore practical tools, real use cases, and beginner-friendly exercises that reveal how intelligent systems operate.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="capsule-card d-flex align-items-center">
                    <img src="https://picsum.photos/100?random=12" class="capsule-img" alt="">
                    <div>
                        <h3 class="fs-5 mb-1">Cloud Computing (AWS, Azure, GCP) & DevOps Free Sessions</h3>
                        <p class="mb-0">Learn foundational cloud skills with AWS starter modules and guided introductions to Azure and GCP services. Topics include CI/CD pipelines, version control, automation practices, and core DevOps workflows explained widelyusers ok</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="capsule-card d-flex align-items-center">
                    <img src="https://picsum.photos/100?random=13" class="capsule-img" alt="">
                    <div>
                        <h3 class="fs-5 mb-1">Software Testing & Quality Assurance Demos</h3>
                        <p class="mb-0">Understand manual and automation testing through structured QA demos that explain test cases, reports, tools, and workflows. Learners gain clarity on QA practices, tester roles, and realistic processes used across companies today.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="capsule-card d-flex align-items-center">
                    <img src="https://picsum.photos/100?random=14" class="capsule-img" alt="">
                    <div>
                        <h3 class="fs-5 mb-1">Open Source & Emerging Technologies</h3>
                        <p class="mb-0">Explore open-source tools, community initiatives, and new tech trends through collaborative demo sessions. These events highlight developer opportunities, learning paths, and innovation driven by open sharing across domainspresen.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="sp-100">
  <div class="container">
    <div class="row col-reverse">
      
      <div class="col-lg-6">
        <h2 class="mb-4">
          Free 1-Day Finance & Investment Awareness 
          <span class="text-violet">Programs in Bangalore</span>
        </h2>

        <!-- Block 1 -->
        <h4 class="mb-3 mt-4 text-violet">Stock Market & Trading Fundamentals</h4>
        <ul class="list-unstyled p-0 mb-0 pt-2">
          <li class="mb-3 fs-20 mbl-fs-16">
            <img class="me-2" src="http://brandstory-academy.test/frontend/assets/images/home/help-icon1.svg">
            Understand how the stock market works
          </li>
          <li class="mb-3 fs-20 mbl-fs-16">
            <img class="me-2" src="http://brandstory-academy.test/frontend/assets/images/home/help-icon2.svg">
            Learn risk management basics
          </li>
          <li class="mb-3 fs-20 mbl-fs-16">
            <img class="me-2" src="http://brandstory-academy.test/frontend/assets/images/home/help-icon3.svg">
            Identify trends & price movements
          </li>
          <li class="mb-4 fs-20 mbl-fs-16">
            <img class="me-2" src="http://brandstory-academy.test/frontend/assets/images/home/help-icon4.svg">
            Explore beginner-friendly trading approaches
          </li>
        </ul>

        <!-- Block 2 -->
        <h4 class="mb-3 mt-4 text-violet">Personal Finance & Financial Freedom Masterclasses</h4>
        <ul class="list-unstyled p-0 mb-0 pt-2">
          <li class="mb-3 fs-20 mbl-fs-16">
            <img class="me-2" src="http://brandstory-academy.test/frontend/assets/images/home/help-icon5.svg">
            Learn budgeting & expense tracking
          </li>
          <li class="mb-3 fs-20 mbl-fs-16">
            <img class="me-2" src="http://brandstory-academy.test/frontend/assets/images/home/help-icon6.svg">
            Understand savings & emergency planning
          </li>
          <li class="mb-3 fs-20 mbl-fs-16">
            <img class="me-2" src="http://brandstory-academy.test/frontend/assets/images/home/help-icon7.svg">
            Set practical financial goals
          </li>
          <li class="mb-0 fs-20 mbl-fs-16">
            <img class="me-2" src="http://brandstory-academy.test/frontend/assets/images/home/help-icon8.svg">
            Explore long-term wealth-building strategies
          </li>
        </ul>

      </div>

      <div class="col-lg-6 align-self-center">
        <img class="w-100 mb-lg-0 mb-3" 
             src="http://brandstory-academy.test/frontend/assets/images/home/dm-help.webp" 
             alt="Finance Programs - BrandStory Academy">
      </div>

    </div>
  </div>
</section>
<section class="py-5">
  <div class="container">
    <div class="row align-items-start justify-content-between">

      <!-- LEFT SIDE: Heading + Text -->
      <div class="col-lg-5 mb-4 mb-lg-0">
        <h2 class="mb-3">
          Free 1-Day Training with 
          <span class="text-violet">Job Placement Focus in Bangalore</span>
        </h2>

        <p class="text-muted">
          Free 1-day training programs in Bangalore are designed to introduce career-oriented 
          training with a clear focus on employability. These job placement workshops help 
          learners understand industry expectations, explore employment opportunities, and 
          prepare for future career-focused learning paths.
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
                  How 1-Day Sessions Boost Your Employability
                </h3>
                <p class="text-secondary">
                  These sessions offer quick skill upgrades, exposure to real-world tools, and valuable 
                  networking with industry professionals. Participants gain insights into:
                </p>
                <ul class="list-unstyled mt-4">
                  <li class="mb-3 d-flex align-items-start">
                    <span class="badge bg-success-subtle text-success me-3 p-2 fs-6">✓</span>
                    <span>Portfolio building</span>
                  </li>
                  <li class="mb-3 d-flex align-items-start">
                    <span class="badge bg-success-subtle text-success me-3 p-2 fs-6">✓</span>
                    <span>Interview preparation</span>
                  </li>
                  <li class="mb-3 d-flex align-items-start">
                    <span class="badge bg-success-subtle text-success me-3 p-2 fs-6">✓</span>
                    <span>Skills employers actually look for</span>
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
                  Intro to IT Careers with Placement Guidance (1-Day Overview)
                </h3>
                <p class="text-secondary">
                  This overview session provides structured IT career guidance, explaining job roles, 
                  required skills, and placement pathways. Learners receive clarity on:
                </p>
                <ul class="list-unstyled mt-4">
                  <li class="mb-3 d-flex align-items-start">
                    <span class="badge bg-primary-subtle text-primary me-3 p-2 fs-6">→</span>
                    <span>Placement assistance processes</span>
                  </li>
                  <li class="mb-3 d-flex align-items-start">
                    <span class="badge bg-primary-subtle text-primary me-3 p-2 fs-6">→</span>
                    <span>Job roles in the IT industry</span>
                  </li>
                  <li class="mb-3 d-flex align-items-start">
                    <span class="badge bg-primary-subtle text-primary me-3 p-2 fs-6">→</span>
                    <span>Next steps toward securing relevant roles</span>
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


<section class="dm-course-section spb-100 mt-5">
    <div class="container">
        <h2 class="text-center db"><span class="text-violet">Finding Free 1-Day Courses</span> Near You in Bangalore</h2>
        <p class="max-1000 text-center">Finding courses near me in Bangalore is easier with the city’s wide network of training centers and learning communities. Many institutes regularly host free 1-day sessions across major Bangalore localities, making quality learning accessible close to home or work.</p>
        
        <div class="dm-course-main mt-5">
            <ul class="nav nav-pills mb-md-5 mb-4 d-flex justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-course1-tab" data-bs-toggle="pill" data-bs-target="#pills-course1" type="button" role="tab" aria-controls="pills-course1" aria-selected="true">Local Workshops</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-course2-tab" data-bs-toggle="pill" data-bs-target="#pills-course2" type="button" role="tab" aria-controls="pills-course2" aria-selected="false">Key Localities</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-course3-tab" data-bs-toggle="pill" data-bs-target="#pills-course3" type="button" role="tab" aria-controls="pills-course3" aria-selected="false">Platforms & Partners</button>
                </li>
            </ul>
            
            <div class="tab-content" id="pills-tabContent">
                <!-- Tab 1: Local Workshops -->
                <div class="tab-pane fade active show" id="pills-course1" role="tabpanel" aria-labelledby="pills-course1-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <img class="w-100 mb-lg-0 mb-3 d-lg-block d-none" src="http://brandstory-academy.test/frontend/assets/images/home/course1.webp" alt="Free 1-Day Digital Marketing Workshops in Bangalore">
                            <img class="w-100 mb-lg-0 mb-3 d-lg-none d-block" src="http://brandstory-academy.test/frontend/assets/images/home/mbl-course1.webp">
                        </div>
                        <div class="col-lg-6 d-flex">
                            <div class="course-main d-flex flex-column w-100">
                                <h4 class="mb-3 text-blue">Free 1-Day <span class="text-violet">Digital Marketing Workshops</span></h4>
                                <p class="mb-lg-5 mb-4 fw-500 fs-16">Duration: 1 Day (Short Sessions & Hands-On Demos)</p>
                                <ul class="mb-0 list-unstyled p-0">
                                    <li class="mb-4"><img class="me-2" src="http://brandstory-academy.test/frontend/assets/images/home/course1-icon.svg">Intro to Digital Marketing Basics</li>
                                    <li class="mb-4"><img class="me-2" src="http://brandstory-academy.test/frontend/assets/images/home/course1-icon.svg">AI Tools Overview & Quick Wins</li>
                                    <li class="mb-4"><img class="me-2" src="http://brandstory-academy.test/frontend/assets/images/home/course1-icon.svg">Live Demo Sessions</li>
                                    <li class="mb-4"><img class="me-2" src="http://brandstory-academy.test/frontend/assets/images/home/course1-icon.svg">Networking with Local Experts</li>
                                </ul>
                                <div class="coursebtns one mt-auto">
                                    <a class="text-decoration-none d-block w-100 text-center bg-violet" href="https://www.eventbrite.com/d/india--bengaluru/free--events/digital-marketing/">Check Upcoming Free Sessions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Tab 2: Key Localities -->
                <div class="tab-pane fade" id="pills-course2" role="tabpanel" aria-labelledby="pills-course2-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <img class="w-100 mb-lg-0 mb-3 d-lg-block d-none" src="http://brandstory-academy.test/frontend/assets/images/home/course2.webp" alt="Free Workshops in Marathahalli, Koramangala & More - Bangalore">
                            <img class="w-100 mb-lg-0 mb-3 d-lg-none d-block" src="http://brandstory-academy.test/frontend/assets/images/home/mbl-course2.webp">
                        </div>
                        <div class="col-lg-6 d-flex">
                            <div class="course-main d-flex flex-column w-100">
                                <h4 class="mb-3 text-blue">Free Workshops & Training in <span class="text-lightblue">Marathahalli & Other Key Localities</span></h4>
                                <p class="mb-lg-5 mb-3 fw-500 fs-16">Duration: 1 Day (Local & Accessible Sessions)</p>
                                <ul class="mb-0 list-unstyled p-0">
                                    <li class="mb-4"><img class="me-2" src="http://brandstory-academy.test/frontend/assets/images/home/course2-icon.svg">Marathahalli – Tech Hub Workshops</li>
                                    <li class="mb-4"><img class="me-2" src="http://brandstory-academy.test/frontend/assets/images/home/course2-icon.svg">Koramangala – Startup-Focused Demos</li>
                                    <li class="mb-4"><img class="me-2" src="http://brandstory-academy.test/frontend/assets/images/home/course2-icon.svg">Jayanagar – Community Skill Sessions</li>
                                    <li class="mb-4"><img class="me-2" src="http://brandstory-academy.test/frontend/assets/images/home/course2-icon.svg">HSR Layout – Practical Marketing Insights</li>
                                    <li class="mb-4"><img class="me-2" src="http://brandstory-academy.test/frontend/assets/images/home/course2-icon.svg">No Long Travel Required</li>
                                </ul>
                                <div class="coursebtns one mt-auto">
                                    <a class="text-decoration-none d-block w-100 text-center bg-violet" href="https://www.eventbrite.com/d/india--bengaluru/free--events/">Explore Local Free Events</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Tab 3: Platforms & Partners -->
                <div class="tab-pane fade" id="pills-course3" role="tabpanel" aria-labelledby="pills-course3-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <img class="w-100 mb-lg-0 mb-3 d-lg-block d-none" src="http://brandstory-academy.test/frontend/assets/images/home/course3.webp" alt="Free Digital Marketing Sessions via Platforms in Bangalore">
                            <img class="w-100 mb-lg-0 mb-3 d-lg-none d-block" src="http://brandstory-academy.test/frontend/assets/images/home/mbl-course3.webp">
                        </div>
                        <div class="col-lg-6 d-flex">
                            <div class="course-main d-flex flex-column w-100">
                                <h4 class="mb-3 text-blue">Partner Institutes & Platforms Offering <span class="text-yellow">Free Sessions</span></h4>
                                <p class="mb-lg-5 mb-4 fw-500 fs-16">Duration: 1 Day (Demo & Intro Workshops)</p>
                                <ul class="mb-0 list-unstyled p-0">
                                    <li class="mb-4"><img class="me-2" src="http://brandstory-academy.test/frontend/assets/images/home/course3-icon.svg">Eventbrite – Listed Free Digital Marketing Events</li>
                                    <li class="mb-4"><img class="me-2" src="http://brandstory-academy.test/frontend/assets/images/home/course3-icon.svg">TechSarvam – Free Training & Demo Sessions</li>
                                    <li class="mb-4"><img class="me-2" src="http://brandstory-academy.test/frontend/assets/images/home/course3-icon.svg">Cherry Institute – Occasional Free Workshops</li>
                                    <li class="mb-4"><img class="me-2" src="http://brandstory-academy.test/frontend/assets/images/home/course3-icon.svg">Career-Focused & Skill-Based Topics</li>
                                    <li class="mb-4"><img class="me-2" src="http://brandstory-academy.test/frontend/assets/images/home/course3-icon.svg">Regular Updates on Upcoming Local Events</li>
                                </ul>
                                <div class="coursebtns one mt-auto">
                                    <a class="text-decoration-none d-block w-100 text-center bg-violet" href="https://www.eventbrite.com/d/india--bengaluru/free--events/digital-marketing/">Discover Free Sessions Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mentorship-section dm-mastery spb-100">
    <div class="container position-relative">
        <div class="row">
            <div class="col-lg-12 col-md-8">
                <h3 class="mb-md-4 mb-3 fw-600 text-md-start text-center">How to Make the Most of  <span class="text-green1"> Your Free 1-Day Session</span></h3>
                <div class="row">
    <!-- Card 1: Preparation & Mindset -->
    <div class="col-12 col-md-4 mb-4">
        <div class="card h-100 border-0 shadow-lg overflow-hidden" style="border-radius: 20px; transition: transform 0.3s;">
            <div class="card-body p-4">
                <div class="d-flex align-items-center mb-3">
                    <div class="me-3 flex-shrink-0">
                        <span style="font-size: 2.8rem;">🧠</span>
                    </div>
                    <h5 class="card-title fw-bold text-green1 mb-0">Preparation & Mindset for Optimal Learning</h5>
                </div>
                <p class="card-text text-muted mt-3">
                    Before the session, review the agenda, note your learning objectives, and brush up on basic concepts if needed. Arrive with an open mindset, curiosity, and readiness to ask questions for effective learning.
                </p>
            </div>
        </div>
    </div>

    <!-- Card 2: Engaging & Post-Workshop -->
    <div class="col-12 col-md-4 mb-4">
        <div class="card h-100 border-0 shadow-lg overflow-hidden" style="border-radius: 20px; transition: transform 0.3s;">
            <div class="card-body p-4">
                <div class="d-flex align-items-center mb-3">
                    <div class="me-3 flex-shrink-0">
                        <span style="font-size: 2.8rem;">🚀</span>
                    </div>
                    <h5 class="card-title fw-bold text-green1 mb-0">Engaging During the Session & Post-Workshop Application</h5>
                </div>
                <p class="card-text text-muted mt-3">
                    Actively participate in discussions, hands-on activities, and networking opportunities. After the workshop, apply what you learned through practice, further study, or enrolling in advanced courses to reinforce new skills.
                </p>
            </div>
        </div>
    </div>
</div>
            </div>
        </div>
        <div class="mentorship-img">
            <img src="http://brandstory-academy.test/frontend/assets/images/digital-marketing-with-ai-j/image003.png">
        </div>
    </div>
</section>
<section class="spb-100 ">
    <div class="container">
        <h2 class="mb-lg-5 mb-4 text-center">FAQs</h2>

        <div class="row gx-md-3">
            <div class="col-lg-12">
                <div class="faq-main mb-lg-0 mb-4">
                    <!-- <div class="faq-head">
                        <p class="text-violet mb-0 fw-500 fs-16">Free 1-Day Courses in Bangalore</p>
                    </div> -->

                    <div class="accordion accordion-flush" id="accordionFlushExample">

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    What are free 1-day courses in Bangalore?
                                </button>
                            </h4>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        Free 1-day courses are introductory workshops or training sessions that provide a foundational understanding or hands-on experience in a specific skill. These sessions usually last a few hours to a full day and help learners explore new skills quickly at no cost.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Who can attend these free workshops?
                                </button>
                            </h4>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        Most free workshops are open to anyone interested in learning new skills, exploring career options, or upgrading knowledge. Some sessions may have basic prerequisites or specific age group requirements, which are mentioned in the workshop details.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    How do I register for a free 1-day session?
                                </button>
                            </h4>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        Registration is typically done through an online form on the institute’s website, event platforms like Eventbrite or Townscript, or government portals. Since seats are limited, early registration is recommended to secure a spot.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                    Do I get a certificate after completing a free 1-day workshop?
                                </button>
                            </h4>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        Many free 1-day workshops offer a certificate of participation or completion. However, this may vary by session and is usually mentioned clearly in the workshop information.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                    Can these free sessions help with job placement?
                                </button>
                            </h4>
                            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        While free 1-day sessions do not usually provide direct job placement, they improve employability by offering new skills, networking opportunities, and career guidance insights that support future job readiness.
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
