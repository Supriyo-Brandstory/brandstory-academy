@extends('frontend.partial.app')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 col-md-7 text-md-start text-center align-self-center mt-3">
                    <h2 class="mb-3 text-blue">Web Design Course in Bangalore</h2>
                    <p class="mb-2">Unlock your creativity with our Web Design Course in Bangalore, where theory meets hands-on practice. Learn modern design tools, user-centric layouts, and responsive websites to kickstart your digital career.</p>
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




    <section class="curicullmn-coursepage py-5">
  <div class="container">

    <h2 class="text-center mt-4">
      Why Choose a <span class="text-violet">Web Design<br>Course</span> in Bangalore
    </h2>
    
    <p class="text-center mx-auto mt-4" style="max-width:900px;">
      Bangalore offers the perfect environment to launch your web design career, combining world-class tech infrastructure with hands-on learning opportunities. Gain skills in high demand while connecting with India's leading startups and IT companies.
    </p>

    <div class="cards-wrapper">
    
      <div class="hover-card" tabindex="0" role="article" aria-label="Card 1">
        <img src="https://plus.unsplash.com/premium_photo-1683147638125-fd31a506a429?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Mountain landscape" class="card-image">
        <div class="overlay"></div>
        <div class="content">
          <h3>The Booming Tech Hub of Bangalore</h3>
          <p>Known as the Silicon Valley of India, Bangalore is a hotspot for innovation, IT companies, and startups. Its vibrant tech ecosystem ensures endless opportunities for aspiring designers and developers.</p>
        </div>
      </div>

      <div class="hover-card" tabindex="0" role="article" aria-label="Card 2">
        <img src="https://plus.unsplash.com/premium_photo-1678566153919-86c4ba4216f1?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8d2ViJTIwZGVzaWdufGVufDB8fDB8fHww" alt="Mountain peak" class="card-image">
        <div class="overlay"></div>
        <div class="content">
          <h3>High Demand for Skilled Web Professionals</h3>
          <p>The city has a growing need for web designer jobs in Bangalore. With a widening digital skill gap, skilled professionals are highly sought after across industries and emerging startups.</p>
        </div>
      </div>

      <div id="last-card" class="hover-card" tabindex="0" role="article" aria-label="Card 3">
        <img src="https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8d2ViJTIwZGVzaWdufGVufDB8fDB8fHww" alt="Mountain ridge" class="card-image">
        <div class="overlay"></div>
        <div class="content">
          <h3>Benefits of Professional Web Design Certification</h3>
          <p>Earning a web design certification in Bangalore validates your expertise and enhances credibility. Become a certified web designer with an industry-recognized certificate to boost career opportunities and professional growth.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="py-5 my-5">
    <div class="container">
        <h2 class="text-center mx-auto mb-3">
            Comprehensive Web Design & <span class="text-violet">Development Curriculum</span>
        </h2>
        <p class="mx-auto text-center mb-4" style="max-width:900px">
            Our Web Design & Development course in Bangalore covers everything from coding fundamentals to advanced design principles. Learn core technologies, responsive design, and real-world project implementation to build a strong foundation and a professional portfolio.
        </p>

        <div class="row g-4 align-items-stretch">
            <div class="col-md-4">
                <div class="h-100 p-3" style="border-radius:14px;border:1px solid #dee2e6;border-bottom:4px solid #855ef7;">
                    <h5 class="fw-bold">Core Fundamentals: HTML, CSS, JavaScript</h5>
                    <p class="mb-0">Master HTML, CSS, and JavaScript to create interactive and visually appealing websites. This front-end basics course in Bangalore builds strong coding fundamentals essential for every web designer.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="h-100 p-3" style="border-radius:14px;border:1px solid #dee2e6;border-bottom:4px solid #855ef7;">
                    <h5 class="fw-bold">Responsive Design & Mobile-First Approach</h5>
                    <p class="mb-0">Learn to build responsive, mobile-friendly websites that adapt seamlessly across devices. Our training ensures cross-device compatibility, essential for modern web development.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="h-100 p-3" style="border-radius:14px;border:1px solid #dee2e6;border-bottom:4px solid #855ef7;">
                    <h5 class="fw-bold">UI/UX Principles for Intuitive Interfaces</h5>
                    <p class="mb-0">Integrate UI/UX design principles to craft user-friendly interfaces. Gain hands-on experience with wireframing, prototyping, and user experience design in Bangalore.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="h-100 p-3" style="border-radius:14px;border:1px solid #dee2e6;border-bottom:4px solid #855ef7;">
                    <h5 class="fw-bold">Back-End Basics & Database Integration</h5>
                    <p class="mb-0">Get introduced to backend development basics, including server-side scripting and database management, to create dynamic, functional websites.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="h-100 p-3" style="border-radius:14px;border:1px solid #dee2e6;border-bottom:4px solid #855ef7;">
                    <h5 class="fw-bold">Project-Based Learning & Portfolio Development</h5>
                    <p class="mb-0">Apply your skills on real web design projects and develop a professional portfolio. Gain practical hands-on experience that prepares you for the job market.</p>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="spb-100">
    <div class="container">
        
        <div class="row align-items-center pb-3">
            <div class="col-md-5">
                <h2 class="fw-bold">
                    Specialized Web Design Tracks & Advanced 
                    <span class="text-violet" style="color: #8a2be2;">Skills</span>
                </h2>
            </div>
            <div class="col-md-7">
                <p class="text-muted mb-0">
                    Take your web design expertise to the next level with specialized tracks in UI/UX, front-end, full-stack development, and graphic integration. These advanced modules in Bangalore equip you with in-demand skills to stand out in the competitive digital industry.
                </p>
            </div>
        </div>

        <div class="row col-reverse">
            <div class="col-lg-5">
                <div class="key-highlight-main">
                    <div class="accordion" id="accordionExampleWeb">
                        
                        <!-- 1 -->
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="webHeadingOne">
                                <button class="accordion-button text-violet" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#webCollapseOne" aria-expanded="true" aria-controls="webCollapseOne">
                                    UI/UX
                                </button>
                            </h4>
                            <div id="webCollapseOne" class="accordion-collapse collapse show" aria-labelledby="webHeadingOne"
                                data-bs-parent="#accordionExampleWeb">
                                <div class="accordion-body">
                                    <h3 class="mb-2">UI/UX Design Masterclass</h3>
                                    <p class="mb-0">
                                        Deep dive into advanced UI/UX strategies with hands-on user research, wireframing, and prototyping. This UI UX design course in Bangalore prepares you to create intuitive and engaging user experiences.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 2 -->
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="webHeadingTwo">
                                <button class="accordion-button collapsed text-violet" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#webCollapseTwo" aria-expanded="false" aria-controls="webCollapseTwo">
                                    Front-End
                                </button>
                            </h4>
                            <div id="webCollapseTwo" class="accordion-collapse collapse" aria-labelledby="webHeadingTwo"
                                data-bs-parent="#accordionExampleWeb">
                                <div class="accordion-body">
                                    <h3 class="mb-2">Front-End Development Specialization</h3>
                                    <p class="mb-0">
                                        Master modern front-end frameworks like React JS, Angular, and Vue JS. Our front-end development course in Bangalore empowers you to build dynamic, high-performance web applications.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 3 -->
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="webHeadingThree">
                                <button class="accordion-button collapsed text-violet" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#webCollapseThree" aria-expanded="false" aria-controls="webCollapseThree">
                                    Full-Stack
                                </button>
                            </h4>
                            <div id="webCollapseThree" class="accordion-collapse collapse" aria-labelledby="webHeadingThree"
                                data-bs-parent="#accordionExampleWeb">
                                <div class="accordion-body">
                                    <h3 class="mb-2">Full Stack Web Development Bootcamp</h3>
                                    <p class="mb-0">
                                        Learn end-to-end web application development with MERN stack and Node.js. The full stack web development course in Bangalore covers both front-end and back-end to make you a complete developer.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 4 -->
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="webHeadingFour">
                                <button class="accordion-button collapsed text-violet" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#webCollapseFour" aria-expanded="false" aria-controls="webCollapseFour">
                                    Graphics
                                </button>
                            </h4>
                            <div id="webCollapseFour" class="accordion-collapse collapse" aria-labelledby="webHeadingFour"
                                data-bs-parent="#accordionExampleWeb">
                                <div class="accordion-body">
                                    <h3 class="mb-2">Graphic & Web Design Fusion</h3>
                                    <p class="mb-0">
                                        Combine graphic design skills with web development using Adobe Photoshop, Illustrator, and web graphics tools. This graphic and web design course in Bangalore enhances creativity and website aesthetics.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div> <!-- accordion -->
                </div>
            </div>

            <div class="col-lg-7">
                <img class="w-100 mb-lg-0 mb-3" src="{{asset('frontend/assets/images/courses/ui-ux-1.webp')}}" alt="Web Design Specializations - BrandStory Academy">
            </div>
        </div>
    </div>
</section>

<section class="spb-100 violet-bg text-white capsule-section">
    <div class="container pt-5">
        <h2 class="mb-3 text-lg-center text-center frame-700 mx-auto mt-5 capsule-heading-max">
            Flexible Learning Options:
            <span class="text-violet"> Online & Classroom Training</span>
        </h2>

        <p class="frame-700 text-center mx-auto capsule-para-max">
            At Brandstory Academy, we offer flexible web design learning in Bangalore with in-person, 
            online, and hybrid options. Choose the mode that fits your schedule while receiving the 
            same high-quality instruction and hands-on experience.
        </p>

        <div class="row gap-5 pt-3">

            <div class="col-12 col-md-6">
                <div class="capsule-card d-flex align-items-center">
                    <img src="https://picsum.photos/100?random=11" class="rounded-circle me-3 capsule-img" alt="">
                    <div>
                        <h3 class="fs-5 mb-1">1. Immersive Classroom Training</h3>
                        <p class="mb-0">Instructor-led classes with real-time guidance and collaboration.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="capsule-card d-flex align-items-center">
                    <img src="https://picsum.photos/100?random=12" class="rounded-circle me-3 capsule-img" alt="">
                    <div>
                        <h3 class="fs-5 mb-1">2. Interactive Online Training</h3>
                        <p class="mb-0">Live virtual sessions, flexible access, and mentor support.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="capsule-card d-flex align-items-center">
                    <img src="https://picsum.photos/100?random=13" class="rounded-circle me-3 capsule-img" alt="">
                    <div>
                        <h3 class="fs-5 mb-1">3. Hybrid Learning Model</h3>
                        <p class="mb-0">Blend of classroom and online learning for flexibility.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="capsule-card d-flex align-items-center">
                    <img src="https://picsum.photos/100?random=14" class="rounded-circle me-3 capsule-img" alt="">
                    <div>
                        <h3 class="fs-5 mb-1">4. LMS & Student Support</h3>
                        <p class="mb-0">Access materials, track progress, and get dedicated support.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="spb-100 why-enroll-coursepage">
    <div class="container">
        <h2 class="mb-3 pt-5 text-lg-center text-center frame-700">Web Design Career Opportunities & Placement  
            <span class="text-violet ">Assistance in Bangalore</span>
        </h2>
        <p style="max-width:900px" class="mx-auto text-center">Kickstart your web design career in Bangalore with industry-relevant skills and strong placement support. Our program prepares you for in-demand roles and provides guidance, mentorship, and real-world experience to ensure you step confidently into the digital workforce.</p>
        
        <div class="row whychoose-boxes ">
            
            <div class="col-12 col-lg-3 mb-4 d-flex">
                <div class="box y-top flex-fill">
                    <img src="http://brandstory-academy.test/frontend/assets/images/courses/certificate.svg">
                    <h4>In-Demand Web Design Job Roles</h4>
                    <p>Explore exciting opportunities such as UI Designer, UX Researcher, Web Developer, and Front-End Developer. Gain skills that match the evolving web developer jobs in Bangalore market.</p>
                </div>
            </div>
            
            <div class="col-12 col-lg-3 mb-4 d-flex">
                <div class="box g-top flex-fill">
                    <img src="http://brandstory-academy.test/frontend/assets/images/courses/live.svg">
                    <h4>Dedicated Placement Support & Industry Connections</h4>
                    <p>Receive placement assistance, career counseling, and interview preparation through our strong industry connections. Our web design placement services in Bangalore help you secure your dream role.</p>
                </div>
            </div>
            
            <div class="col-12 col-lg-3 mb-4 d-flex">
                <div class="box s-top flex-fill">
                    <img src="http://brandstory-academy.test/frontend/assets/images/courses/career.svg">
                    <h4>Building a Powerful Web Design Portfolio</h4>
                    <p>Create a standout web design portfolio by showcasing live projects and practical assignments. Learn essential portfolio tips to impress recruiters and land interviews.</p>
                </div>
            </div>
            
            <div class="col-12 col-lg-3 mb-4 d-flex">
                <div class="box s-top flex-fill">
                    <img src="http://brandstory-academy.test/frontend/assets/images/courses/g-w.svg">
                    <h4>Success Stories & Alumni Network</h4>
                    <p>Join a vibrant alumni network of successful web designers. Read student testimonials and success stories in Bangalore that highlight career growth and achievements after completing our course.</p>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="sp-100">
    <div class="container text-center pt-5">
        <h2 class="mb-3 frame-700">
            Your Guide to Choosing the Best Web Design 
            <span class="text-violet ">Institute in Bangalore</span>
        </h2>
        <p style="max-width:900px" class="mx-auto">
            Selecting the right institute is key to building a successful web design career in Bangalore. Consider factors like course quality, practical experience, faculty expertise, and placement support to make an informed decision.
        </p>

        <div class="flip-circle-wrapper">

            <!-- CIRCLE 1 -->
            <div class="flip-circle" onclick="this.classList.toggle('flipped');">
                <div class="circle-front" style="background:#855EF7">
                <h4>
                    Key Factors to Consider Before Enrolling
                </h4>    
                </div>
                <div class="circle-back" style="background:#222">
                    Look for best web design institutes in Bangalore with transparent course fees, experienced faculty, and a strong placement record to ensure a rewarding learning journey.
                </div>
            </div>

            <!-- CIRCLE 2 -->
            <div class="flip-circle" onclick="this.classList.toggle('flipped');">
                <div class="circle-front" style="background:#0EA5E9">
                <h4>
                    How Our Institute Stands Out
                </h4>    
                </div>
                <div class="circle-back" style="background:#1E293B">
                    Brandstory Academy offers expert faculty, industry-aligned curriculum, and hands-on projects, making it one of the most trusted institutes for aspiring web designers in Bangalore.
                </div>
            </div>

            <!-- CIRCLE 3 -->
            <div class="flip-circle" onclick="this.classList.toggle('flipped');">
                <div class="circle-front" style="background:#10B981">
                    <h4>
                        Student Testimonials & Reviews
                    </h4>
                </div>
                <div class="circle-back" style="background:#0F172A">
                    Hear from our learners through web design course reviews, alumni feedback, and student experiences, showcasing the real impact of our programs on careers.
                </div>
            </div>

        </div>
    </div>
</section>

<!-- mini faq -->
<section class="sp-100">
    <div class="container">

        <div class="row gx-3">
            <div class="col-12 col-md-6 ">
                <h2>
                    Start Your Web Design <span class="text-violet">Journey Today!</span>
                </h2>
                <p>
                    Take the first step towards a rewarding web design career in Bangalore with Brandstory Academy. Explore our courses, connect with mentors, and gain the skills that top companies are looking for.
                </p>
            </div>
            <div class="col-12 col-md-6">
                <div class="faq-main mb-lg-0 mb-4">
                    <!-- <div class="faq-head">
                        <p class="text-violet mb-0 fw-500 fs-16">Web Design / UI UX Course FAQ</p>
                    </div> -->

                    <div class="accordion accordion-flush" id="accordionFlushExample">

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Web Design Course Duration & Batches
                                </button>
                            </h4>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        Our web design course duration and fees in Bangalore include flexible batch timings to suit working professionals and students. Typical courses range from a few weeks to several months, depending on the track chosen.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Transparent Web Development Training Fees
                                </button>
                            </h4>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        We provide clear web design course fees in Bangalore with multiple payment plans to make learning accessible. No hidden charges—just straightforward pricing for quality education.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Eligibility & Enrollment Process
                                </button>
                            </h4>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        Our programs are open to beginners and professionals with basic computer knowledge. The web design course eligibility is simple, and the admission process is smooth, ensuring you can start learning quickly.
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

<section class="sp-100" style="background: linear-gradient(to bottom right, #4b3b80 0%, #1c1437 100%); color:#fff">
    <div class="container">
        <h2>
            Start Your Web Design Journey Today!
        </h2>
        <p>
            Take the first step towards a rewarding web design career in Bangalore with Brandstory Academy. Explore our courses, connect with mentors, and gain the skills that top companies are looking for.
        </p>

       <div class="row mt-5 gy-4 gx-0 gy-md-0 gx-md-4">

            <div class="col-12 col-md-4">
                <div class="d-flex flex-column justify-content-between h-100">
                    <p style="font-weight:100">
                        Book a free web design demo or career counseling session to understand the course structure, learning outcomes, and career opportunities before you enroll.
                    </p>
                    <div class="outline-btn">
                        <a class='w-100' href="{{ route('about') }}">Request a Free Demo / Counseling</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="d-flex flex-column justify-content-between h-100">
                    <p style="font-weight:100">
                        Get your web design course brochure to access the complete syllabus, detailed curriculum, and course features anytime for easy reference.
                    </p>
                    <div class="violet-btn py-3">
                        <a href="{{ route('contact') }}">Download Course Brochure</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="d-flex flex-column justify-content-between h-100">
                    <!-- Add content if needed -->
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
                        <p class="text-violet mb-0 fw-500 fs-16">Web Design / UI UX Course FAQ</p>
                    </div>

                    <div class="accordion accordion-flush" id="accordionFlushExample">

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    What are the benefits of a web design certification?
                                </button>
                            </h4>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        A certification validates your skills, boosts credibility, and improves job opportunities in the web design industry.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    What programming languages will I learn?
                                </button>
                            </h4>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        You will learn HTML, CSS, JavaScript, along with basics of back-end technologies depending on your chosen track.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Does the course cover responsive web design?
                                </button>
                            </h4>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        Yes, the course includes responsive and mobile-first web design for cross-device compatibility.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    Will I learn about back-end development?
                                </button>
                            </h4>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        Yes, you’ll be introduced to server-side concepts, databases, and back-end basics.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    What makes the UI/UX masterclass different?
                                </button>
                            </h4>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        It focuses on advanced UX strategies, user research, wireframing, and prototyping with real-world applications.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSix" aria-expanded="false"
                                    aria-controls="flush-collapseSix">
                                    What front-end frameworks are taught?
                                </button>
                            </h4>
                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        You’ll learn popular frameworks like React JS, and gain exposure to Angular and Vue JS.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSeven" aria-expanded="false"
                                    aria-controls="flush-collapseSeven">
                                    What is covered in the Full Stack Bootcamp?
                                </button>
                            </h4>
                            <div id="flush-collapseSeven" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        The bootcamp covers front-end, back-end, databases, and the MERN stack, enabling full web application development.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseEight" aria-expanded="false"
                                    aria-controls="flush-collapseEight">
                                    What are typical job roles after completion?
                                </button>
                            </h4>
                            <div id="flush-collapseEight" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        Common roles include Web Designer, UI Designer, UX Researcher, Front-End Developer, and Full Stack Developer.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseNine" aria-expanded="false"
                                    aria-controls="flush-collapseNine">
                                    Do you offer 100% placement assistance?
                                </button>
                            </h4>
                            <div id="flush-collapseNine" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        Yes, we provide dedicated placement support, including interview preparation and job assistance.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingTen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTen" aria-expanded="false"
                                    aria-controls="flush-collapseTen">
                                    Why is your institute considered one of the best?
                                </button>
                            </h4>
                            <div id="flush-collapseTen" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTen" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        Our expert faculty, industry-aligned curriculum, hands-on projects, and strong placement support set us apart.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingEleven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseEleven" aria-expanded="false"
                                    aria-controls="flush-collapseEleven">
                                    How can I get more detailed information?
                                </button>
                            </h4>
                            <div id="flush-collapseEleven" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingEleven" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        You can request a free demo, download the course brochure, or speak with our counselors for complete details.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div><!-- /accordion -->

                </div>
            </div>
        </div>
    </div>
</section>


@endsection
