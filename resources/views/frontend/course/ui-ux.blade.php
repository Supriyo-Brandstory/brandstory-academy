@extends('frontend.partial.app')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 col-md-7 text-md-start text-center align-self-center mt-3">
                    <h2 class="mb-3 text-blue">Best UI/UX Design Course in Bangalore with 100% Placement Support – Learn UI/UX Online & Offline</h2>
                    <p class="mb-2">Unlock your creative potential with Brandstory Academy, the Best UI/UX Design Course in Bangalore, offering comprehensive online and offline training. Gain hands-on experience and enjoy 100% placement support to kickstart your career in UI/UX design.</p>
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

    <section class="spb-100 py-5 tech-capital">
    <div class="container position-relative">
        <div class="row py-5">
            <!-- Right side content - Shows first on mobile -->
            <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
                <h2 class="mb-3 text-center text-lg-start ms-lg-5">
                    Why Choose a UI/UX Design Course <span class="text-violet">in Bangalore?</span>
                </h2>
                <p class="mt-3 ms-lg-5">
                    Bangalore, India's tech hub, is ideal for building a UI/UX career. With high demand for skilled designers, learners gain expertise in user research, prototyping, and interaction design, along with real-world project exposure. Brandstory Academy offers industry-focused training, access to top companies, and 100% placement support, helping you launch a successful UI/UX design career in a city driving digital innovation.
                </p>
                <div class="mt-4 mt-lg-5 ms-lg-5 violet-btn d-flex justify-content-center justify-content-md-start">
                    <a href="{{route('about')}}">Know About Us</a>
                </div>
            </div>
            
            <!-- Left side boxes - Shows second on mobile -->
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="bg-white shadow-lg p-4 rounded-4 mb-4 me-lg-5 border-start border-5" style="border-color: #855EF7 !important;">
                    <h4>Growing Demand for UI/UX Designers in Bangalore</h4>
                    <p>Bangalore's booming IT ecosystem drives strong demand for UI/UX designers across startups and top companies like Infosys and Flipkart. UI/UX design fuels business success by enhancing user experience, boosting conversions, strengthening brand value, and driving innovation, making it a high-impact, well-paid career choice.</p>
                </div>
                <div class="bg-white shadow-lg p-4 rounded-4 ms-lg-5 border-start border-5" style="border-color: #855EF7 !important;">
                    <h4>Growing Demand for UI/UX Designers in Bangalore</h4>
                    <p>Bangalore's booming IT ecosystem drives strong demand for UI/UX designers across startups and top companies like Infosys and Flipkart. UI/UX design fuels business success by enhancing user experience, boosting conversions, strengthening brand value, and driving innovation, making it a high-impact, well-paid career choice.</p>
                </div>
            </div>
        </div>
    </div>
</section>



    <section class="curicullmn-coursepage py-5 pb-5">
  <div class="container pb-5">

    <!-- Heading -->
    <h2 class="text-center mt-4">
      Comprehensive UI/UX Design
      <span class="text-violet">Course Curriculum</span>
    </h2>
    
    <p class="text-center mt-4 mx-auto" style="max-width:1100px;">
      At Brandstory Academy, the UI UX course syllabus in Bangalore blends design principles,
      real-world projects, and industry tools to build job-ready professionals. Learners master
      design thinking, user research, wireframing & prototyping, information architecture,
      interaction design, visual design, usability testing, HCI fundamentals, UX psychology,
      and user-centered methodologies for impactful, business-driven design.
    </p>

    <!-- GRID -->
    <div class="row g-4 mt-5">

      <!-- COLUMN 1 -->
      <div class="col-lg-4 col-md-6 col-12">
        <div class="accordion" id="uiuxColOne">

          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#uxFoundations">
                Mastering Essential UI/UX Tools
              </button>
            </h3>
            <div id="uxFoundations" class="accordion-collapse collapse" data-bs-parent="#uiuxColOne">
              <div class="accordion-body">
                <p>Our hands-on UI/UX training in Bangalore builds expertise in industry-standard design tools. Learn Figma for collaborative design and prototyping, Adobe XD for interaction workflows, Sketch for interface design, wireframing tools, Miro for ideation, and Illustrator for UI assets and visual systems.</p>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- COLUMN 2 -->
      <div class="col-lg-4 col-md-6 col-12">
        <div class="accordion" id="uiuxColTwo">

          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#visualDesign">
                Specialized Modules: Mobile & Web Application Design
              </button>
            </h3>
            <div id="visualDesign" class="accordion-collapse collapse" data-bs-parent="#uiuxColTwo">
              <div class="accordion-body">
                <p>
                    This module builds platform-specific UI/UX expertise, covering mobile app design best practices, web UX and conversion-focused layouts, responsive design, iOS UI guidelines, Android Material Design, and PWA plus cross-platform UI/UX strategies for consistent, high-performing digital experiences.
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- COLUMN 3 -->
      <div class="col-lg-4 col-md-6 col-12">
        <div class="accordion" id="uiuxColThree">

          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#mobileWeb">
                The Future of Design: AI Integration in UI/UX
              </button>
            </h3>
            <div id="mobileWeb" class="accordion-collapse collapse" data-bs-parent="#uiuxColThree">
              <div class="accordion-body">
                <p>Stay future-ready with AI-powered UI/UX skills, including AI-driven UX research, generative design systems, automated prototyping, machine learning–based personalization, and ethical AI design to create intelligent, user-centric digital experiences.</p>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<section class="py-5 my-5">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-12 col-lg-5">
                <h2 class="fw-bold">
                    Flexible UI/UX Course Formats & 
                    <span class="text-violet">Online Learning in Bangalore</span>
                </h2>
            </div>
            <div class="col-12 col-lg-7">
                <p class="lead-sm">
                    At Brandstory Academy, we offer an online UI UX design course Bangalore, UI UX certification, and diploma in UI UX through multiple formats to suit every learner. Choose from <strong>evening UI UX classes</strong>, <strong>weekend courses</strong>, or <strong>hybrid models</strong> for maximum flexibility, ensuring you can learn at your own pace.
                </p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-4 pt-3">
                <div class="h-100 p-3">
                    <img class="mb-3" src="http://brandstory-academy.test/frontend/assets/images/digital-marketing-with-ai-j/image009.svg" alt="Schedule Icon" width="40">
                    <h3 class="h5 fw-bold">Full-Time, Part-Time & Weekend</h3>
                    <p>Our flexible schedule includes full-time design training, part-time UI UX courses, evening batches UI UX, and Saturday-Sunday UI UX classes, catering to both professionals and students seeking a flexible UI UX schedule.</p>
                    <img class="mt-2 w-100" src="http://brandstory-academy.test/frontend/assets/images/digital-marketing-with-ai-j/image014.svg" alt="Divider Line">
                </div>
            </div>

            <div class="col-md-4 pt-3">
                <div class="h-100 p-3">
                    <img class="mb-3" src="http://brandstory-academy.test/frontend/assets/images/digital-marketing-with-ai-j/image010.svg" alt="Bootcamp Icon" width="40">
                    <h3 class="h5 fw-bold">Intensive Bootcamps & Workshops</h3>
                    <p>Accelerate your learning with UI UX crash course Bangalore, design sprint workshops, and intensive UI UX training. Short-term, practical UI UX workshops provide fast-track skill acquisition for career-ready results.</p>
                    <img class="mt-2 w-100" src="http://brandstory-academy.test/frontend/assets/images/digital-marketing-with-ai-j/image015.svg" alt="Divider Line">
                </div>
            </div>

            <div class="col-md-4 pt-3">
                <div class="h-100 p-3">
                    <img class="mb-3" src="http://brandstory-academy.test/frontend/assets/images/digital-marketing-with-ai-j/image011.svg" alt="Online Icon" width="40">
                    <h3 class="h5 fw-bold">Virtual Academy & Online Certs</h3>
                    <p>Learn remotely with our virtual UI UX academy and online UI UX certification Bangalore. Flexible work from home UI UX courses allow Bangalore residents to access professional online design education without location constraints.</p>
                    <img class="mt-2 w-100" src="http://brandstory-academy.test/frontend/assets/images/digital-marketing-with-ai-j/image016.svg" alt="Divider Line">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="spb-100">
        <div class="container">
            <h2 class="text-center mb-lg-5 mb-4">UI/UX Design Course Fees & Flexible  <br><span class="text-violet">Financing Options in Bangalore</span></h2>
            <div class="row col-reverse">
                <div class="col-lg-5">
                    <div class="key-highlight-main">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        course description
                                    </button>
                                </h4>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="mb-0">At Brandstory Academy, we provide clear UI UX design course fees in Bangalore along with flexible payment solutions. Our programs are competitively priced, catering to students and professionals seeking quality design education without financial stress, ensuring affordability through EMI options and scholarships.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        1. Course Structure
                                    </button>
                                </h4>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <h3 class="text-blue mb-2">Transparent Course Fee Structure</h3>
                                        <p class="mb-0">Our UI UX tuition fees and design course price are clearly outlined with a detailed fee breakdown UI UX, ensuring no hidden costs. Students know exactly what their program investment covers, from tools to mentorship.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="headingthree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
                                        2. Affordability
                                    </button>
                                </h4>
                                <div id="collapsethree" class="accordion-collapse collapse" aria-labelledby="headingthree"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <h3 class="text-blue mb-2">Easy EMI Options & Scholarships</h3>
                                        <p class="mb-0">We offer interest-free EMI for UI UX courses, education loans for design, and scholarships for UI UX students. Our flexible payment plans make professional learning accessible to everyone, supporting financial ease without compromising course quality.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="headingfour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                        3. Schedules
                                    </button>
                                </h4>
                                <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <h3 class="text-blue mb-2">UI/UX Course Duration & Batch Schedules</h3>
                                        <p class="mb-0">Choose from multiple formats with clear UI UX course length and class timings Bangalore. Our batch start dates and course calendar help students plan ahead for full-time, part-time, or weekend training.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <img class="w-100 mb-lg-0 mb-3" src="{{asset('frontend/assets/images/courses/ui-ux-1.webp')}}" alt="Best digital marketing courses in Bangalore - BrandStory Academy">
                </div>
            </div>
        </div>
    </section>

    <section class="tech-capital sp-100">
        <div class="container">
            <h2 class="text-center mb-4">Assured UI/UX Placement & Career  <span class="text-violet">Opportunities in Bangalore</span></h2>
            <p class="mb-4 text-center">At Brandstory Academy, our UI UX design course with placement in Bangalore ensures students are career-ready. We provide comprehensive job assistance UI UX, mentorship, and industry connections to help learners secure UI UX designer jobs Bangalore. Graduates benefit from enhanced career prospects and competitive UI UX designer salary Bangalore, backed by expert design career guidance Bangalore.
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
                                <h4 class="text-green mb-0">Careers</h4>
                            </div>
                            <p class="mb-0">Our placement cell partners with top firms for resumes, interviews, and direct hiring, ensuring students access real-world opportunities.</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start mb-lg-5 mb-4">
                        <div class="tech-capital-main">
                            <div class="d-flex mb-4">
                                <img class="me-2" src="{{asset('frontend/assets/images/home/tech-capital-icon2.svg')}}">
                                <h4 class="text-red mb-0">Growth</h4>
                            </div>
                            <p class="mb-0">We offer insights into entry-level salaries and senior-role progression, helping students navigate and lead in Bangalore’s competitive market.</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <div class="tech-capital-main">
                            <div class="d-flex mb-4">
                                <img class="me-2" src="{{asset('frontend/assets/images/home/tech-capital-icon3.svg')}}">
                                <h4 class="text-orange1 mb-0">Versatility</h4>
                            </div>
                            <p class="mb-0">Skills transition into UX research, product management, and strategy, offering diverse career paths beyond traditional design roles.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

   <section class="spb-100">
    <div class="container">
        <h2 class="text-center mb-md-5 mb-4">Build an Industry-Ready <span class="text-violet">UI/UX Portfolio</span></h2>
        <p class="frame-900">At Brandstory Academy, students learn to create a professional UI UX portfolio that stands out to employers. Our portfolio development course Bangalore emphasizes design case study creation, personal branding for designers, and structured portfolio review to ensure graduates showcase real-world skills and creative problem-solving effectively.</p>
        
        <div class="row col-reverse">
            <div class="col-md-6">
                <div class="key-highlight-main facts">
                    <div class="accordion" id="accordionExample1">
                        
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="headingfOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsefOne" aria-expanded="true" aria-controls="collapsefOne">
                                    <img class="me-2" src="{{asset('frontend/assets/images/home/fact-icon1.svg')}}">
                                    Hands-on Projects & Real-World Case Studies
                                </button>
                            </h4>
                            <div id="collapsefOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingfOne" data-bs-parent="#accordionExample1">
                                <div class="accordion-body">
                                    <p class="mb-0">Work on live projects UI UX, capstone projects, and industry-standard design challenges. Gain experience with client projects UI UX that form the foundation of a strong, career-ready portfolio.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="headingfTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsefTwo" aria-expanded="false" aria-controls="collapsefTwo">
                                    <img class="me-2" src="{{asset('frontend/assets/images/home/fact-icon2.svg')}}">
                                    Portfolio Development Workshops & Expert Feedback
                                </button>
                            </h4>
                            <div id="collapsefTwo" class="accordion-collapse collapse" aria-labelledby="headingfTwo"
                                data-bs-parent="#accordionExample1">
                                <div class="accordion-body">
                                    <p class="mb-0">Receive structured guidance through portfolio review sessions, UX portfolio coaching, and design resume tips. Learn to present your work confidently with expert feedback and interview presentation skills.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="headingfthree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsefthree" aria-expanded="false"
                                    aria-controls="collapsefthree">
                                    <img class="me-2" src="{{asset('frontend/assets/images/home/fact-icon3.svg')}}">
                                    Showcasing Your Work: Interactive Student Gallery
                                </button>
                            </h4>
                            <div id="collapsefthree" class="accordion-collapse collapse" aria-labelledby="headingfthree"
                                data-bs-parent="#accordionExample1">
                                <div class="accordion-body">
                                    <p class="mb-0">Display your achievements in our student UI UX projects Bangalore gallery. Highlight best UI UX student work, visual design examples, and student success stories UI UX, inspiring prospective employers and learners alike.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img class="w-100" src="{{asset('frontend/assets/images/home/fast-img.webp')}}" alt="UI UX Portfolio Development at BrandStory Academy">
            </div>
        </div>
    </div>
</section>
<section class="spb-100 why-enroll-coursepage">
    <div class="container">
        <h2 class="mb-3 text-lg-center text-center frame-700">Why Brandstory Academy is the 
            <span class="text-violet ">Best UI/UX Training Institute in Bangalore</span>
        </h2>
        <p class="frame-700 text-center">Brandstory Academy offers one of the best UI UX design courses in Bangalore, combining expert mentorship, practical training, and industry certification. As a top UI UX training Bangalore provider, we deliver hands-on learning with proven outcomes, making us the leading UI UX institute for professionals and students seeking career-ready skills. Discover why our expert UI UX faculty and comprehensive curriculum make us the preferred choice for design aspirants.</p>
        
        <div class="row whychoose-boxes ">
            <div class="col-12 col-lg-4 mb-4 ">
                <div class="box y-top">
                    <img src="http://brandstory-academy.test/frontend/assets/images/courses/certificate.svg">
                    <h4>Experienced Industry Experts as Trainers</h4>
                    <p>Learn from expert UI UX instructors and industry professional trainers Bangalore with years of hands-on experience. Our design mentors Bangalore and certified UI UX faculty ensure practical insights, real-world guidance, and career-focused training.</p>
                </div>
            </div>
            
            <div class="col-12 col-lg-4 mb-4">
                <div class="box g-top">
                    <img src="http://brandstory-academy.test/frontend/assets/images/courses/live.svg">
                    <h4>State-of-the-Art Infrastructure & Learning Environment</h4>
                    <p>Train in modern design labs Bangalore and tech-enabled classrooms that foster creativity. Our UI UX learning environment includes collaborative design studios and the best facilities for UI UX to maximize skill development.</p>
                </div>
            </div>
            
            <div class="col-12 col-lg-4 mb-4">
                <div class="box s-top">
                    <img src="http://brandstory-academy.test/frontend/assets/images/courses/career.svg">
                    <h4>Strong Alumni Network & Community Support</h4>
                    <p>Join a thriving UI UX alumni network Bangalore and design community that offers ongoing mentorship and post-course support. Benefit from career success stories and guidance through our structured mentorship programs UI UX.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sp-100 ">
    <div class="container">
        <h2 class="mb-lg-5 mb-4 text-center">FAQs</h2>

        <div class="row gx-md-3">
            <div class="col-lg-12">
                <div class="faq-main mb-lg-0 mb-4">
                    <div class="faq-head">
                        <p class="text-violet mb-0 fw-500 fs-16">UI/UX Design Course in Bangalore</p>
                    </div>

                    <div class="accordion accordion-flush" id="accordionFlushExample">

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    What are the career opportunities after a UI/UX design course in Bangalore?
                                </button>
                            </h4>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        Completing a UI/UX course in Bangalore opens doors to roles such as UI/UX Designer, UX Researcher, Product Designer, Interaction Designer, UX Strategist, and Digital Experience Specialist. Graduates can work in startups, IT firms, agencies, or pursue freelancing with competitive salaries.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    How does UI/UX design contribute to business growth?
                                </button>
                            </h4>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        Effective UI/UX design improves user engagement, conversion rates, and customer satisfaction. Businesses benefit from intuitive interfaces, increased retention, and optimized digital products, directly impacting revenue and brand loyalty.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    What software and tools are covered in the UI/UX design course?
                                </button>
                            </h4>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        Students gain hands-on expertise in industry-standard tools like Figma, Adobe XD, Sketch, Miro, and Illustrator, alongside prototyping and wireframing software for collaborative and practical design projects.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapsefour" aria-expanded="false"
                                    aria-controls="flush-collapsefour">
                                    How does AI integrate into the UI/UX design course curriculum?
                                </button>
                            </h4>
                            <div id="flush-collapsefour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        Our curriculum covers AI-powered UX research, generative design, AI-driven prototyping, and personalized user experiences, equipping students with forward-thinking skills for modern digital product design.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingfive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapsefive" aria-expanded="false"
                                    aria-controls="flush-collapsefive">
                                    What is the difference between a UI/UX bootcamp and a regular course?
                                </button>
                            </h4>
                            <div id="flush-collapsefive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        A bootcamp is intensive and fast-paced, focusing on hands-on skills and real-world projects in a short duration. A regular course offers comprehensive coverage of design principles, theory, and practical learning over an extended period.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingsix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapsesix" aria-expanded="false"
                                    aria-controls="flush-collapsesix">
                                    What is the fee structure for the UI/UX design course in Bangalore?
                                </button>
                            </h4>
                            <div id="flush-collapsesix" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingsix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        Brandstory Academy offers a transparent fee structure with no hidden costs. Flexible EMI options, scholarships, and education loans make professional UI/UX training accessible to all learners.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingseven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseseven" aria-expanded="false"
                                    aria-controls="flush-collapseseven">
                                    How will the UI/UX course help me build my design portfolio?
                                </button>
                            </h4>
                            <div id="flush-collapseseven" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingseven" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        The course emphasizes hands-on projects, real-world case studies, capstone projects, and structured portfolio workshops, helping students create professional, job-ready UI UX portfolios.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingeight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseeight" aria-expanded="false"
                                    aria-controls="flush-collapseeight">
                                    What makes Brandstory Academy the best choice for UI/UX training in Bangalore?
                                </button>
                            </h4>
                            <div id="flush-collapseeight" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingeight" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        We combine experienced industry trainers, state-of-the-art labs, practical projects, strong alumni network, and industry-recognized certification to provide unmatched training and career support.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingnine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapsenine" aria-expanded="false"
                                    aria-controls="flush-collapsenine">
                                    What kind of support does Brandstory Academy offer after course completion?
                                </button>
                            </h4>
                            <div id="flush-collapsenine" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingnine" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        Students receive placement assistance, mentorship, portfolio guidance, interview preparation, and access to a community of designers and alumni to ensure long-term career success.
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
