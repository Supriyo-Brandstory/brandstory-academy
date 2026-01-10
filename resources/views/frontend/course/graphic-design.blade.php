@extends('frontend.partial.app')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 col-md-7 text-md-start text-center align-self-center mt-3">
                    <h2 class="mb-3 text-blue">The Best Graphic Design Courses in Bangalore: Your Ultimate Guide to Top Institutes & Programs</h2>
                    <p class="mb-2">Discover the best graphic design courses in Bangalore and find top institutes offering industry-focused training, hands-on projects, and expert mentorship. This ultimate guide helps you choose the right program to build creative skills, a strong portfolio, and a successful design career.</p>
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
                    Why Choose Graphic Design<span class="text-violet">in Bangalore?</span>
                </h2>
                <p class="mt-3 ms-lg-5">
                    Bangalore is India’s design capital and a thriving tech hub, making it the perfect place to build a graphic design career. The city’s growing creative industry in Bangalore offers abundant opportunities to work with startups, global brands, and digital agencies, providing real-world exposure and long-term career growth.
                </p>
                <div class="mt-4 mt-lg-5 ms-lg-5 violet-btn d-flex justify-content-center justify-content-md-start">
                    <a href="http://brandstory-academy.test/about">Know About Us</a>
                </div>
            </div>
            
            <!-- Left side boxes - Shows second on mobile -->
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="bg-white shadow-lg p-4 rounded-4 mb-4 me-lg-5 border-start border-5" style="border-color: #855EF7 !important;">
                    <h4>Bangalore’s Creative Hub Advantage</h4>
                    <p>Bangalore is a thriving creative ecosystem where design, technology, and innovation come together. With a strong presence of startups, IT companies, and design agencies, the city offers unmatched exposure, collaboration opportunities, and real-world projects for aspiring graphic designers.</p>
                </div>
                <div class="bg-white shadow-lg p-4 rounded-4 ms-lg-5 border-start border-5" style="border-color: #855EF7 !important;">
                    <h4>Career Scope for Graphic Designers in Bangalore</h4>
                    <p>Graphic designers in Bangalore enjoy diverse career options across branding, digital marketing, UI design, advertising, and media. The city’s fast-growing business landscape ensures steady demand, competitive salaries, and opportunities for career advancement.</p>
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
                    Top Graphic Design Institutes in Bangalore: 
                    <span class="text-violet">An Unbiased Comparison</span>
                </h2>
            </div>
            <div class="col-12 col-lg-7">
                <p class="lead-sm">
                    Choosing from the best graphic design schools Bangalore requires a clear, unbiased approach. This comparison evaluates leading institutes based on curriculum quality, faculty expertise, practical exposure, placements, and student outcomes, helping learners identify top programs aligned with industry needs and current institute rankings.
                </p>
            </div>
        </div>

        <div class="row p-0">
            <div class="col-md-7 p-0">
                <div class="row gap-4">
                    
                    <div class="col-12">
                            <img class="mb-3" src="http://brandstory-academy.test/frontend/assets/images/digital-marketing-with-ai-j/image009.svg" alt="Schedule Icon" width="40">
                            <h3 class="h5 fw-bold">How We Evaluated Bangalore’s Best Institutes</h3>
                            <p>Institutes were assessed on course structure, industry relevance, trainer experience, hands-on projects, portfolio development, certifications, placement support, and verified student feedback to ensure a fair and transparent evaluation.</p>
                            <img class="mt-2 w-100" src="http://brandstory-academy.test/frontend/assets/images/digital-marketing-with-ai-j/image014.svg" alt="Divider Line">
                    </div>

                    <div class="col-12">
                            <img class="mb-3" src="http://brandstory-academy.test/frontend/assets/images/digital-marketing-with-ai-j/image011.svg" alt="Online Icon" width="40">
                            <h3 class="h5 fw-bold">Student Reviews & Alumni Testimonials</h3>
                            <p>Student reviews highlight practical learning, supportive faculty, and strong career guidance. Alumni testimonials often emphasize portfolio growth, confidence building, and successful placements across agencies, startups, and corporate design teams.</p>
                            <img class="mt-2 w-100" src="http://brandstory-academy.test/frontend/assets/images/digital-marketing-with-ai-j/image016.svg" alt="Divider Line">
                    </div>

                </div>
            </div>

            <!-- Right Column (Tall Card) -->
            <div class="col-md-5 px-2 px-md-5 mt-4 mt-md-5">
                <div class="h-100">
                    <img class="mb-3" src="http://brandstory-academy.test/frontend/assets/images/digital-marketing-with-ai-j/image010.svg" alt="Bootcamp Icon" width="40">
                    <h3 class="h5">Leading Institutes & Their Unique Offerings</h3>
                    <p>Top institutes stand out through specialized programs, modern tools, real-world projects, strong industry connections, and consistent student success in creative careers.</p>
                    <h5>Brandstory Academy – Specializations & Highlights</h5>
                    <p>Brandstory Academy offers industry-driven graphic design training with expert mentors, real-world projects, portfolio-focused learning, flexible batches, and strong career support tailored for Bangalore’s creative industry.</p>
                    <img class="mt-2 w-100" src="http://brandstory-academy.test/frontend/assets/images/digital-marketing-with-ai-j/image015.svg" alt="Divider Line">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="spb-100 violet-bg text-white capsule-section">
    <div class="container pt-5">
        <h2 class="mb-3 text-lg-center text-center frame-700 mx-auto mt-5 capsule-heading-max">
            Decoding Graphic Design Course 
            <span class="text-violet"> Types in Bangalore</span>
        </h2>

        <p class="frame-700 text-center mx-auto capsule-para-max">
            AUnderstanding the right course format is essential when choosing graphic design education in Bangalore. From graphic design degree vs diploma programs to short-term courses and online learning, each option suits different career goals, time commitments, and budgets within the city’s growing creative ecosystem.
        </p>

        <div class="row g-5 pt-3">

            <div class="col-12 col-md-6">
                <div class="capsule-card d-flex align-items-center">
                    <img src="https://picsum.photos/100?random=11" class="capsule-img" alt="">
                    <div>
                        <h3 class="fs-5 mb-1">Bachelor’s Degree (B.Des) in Graphic Design</h3>
                        <p class="mb-0">A B.Des offers in-depth theoretical knowledge, creative exploration, and long-term academic learning. It is ideal for students seeking a structured foundation, design thinking skills, and broad career opportunities in the creative industry.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="capsule-card d-flex align-items-center">
                    <img src="https://picsum.photos/100?random=12" class="capsule-img" alt="">
                    <div>
                        <h3 class="fs-5 mb-1">Graphic Design Diplomas</h3>
                        <p class="mb-0">Diploma programs focus on practical skills and industry tools. These courses are shorter, career-oriented, and suitable for students and professionals who want quick entry into the design workforce.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="capsule-card d-flex align-items-center">
                    <img src="https://picsum.photos/100?random=13" class="capsule-img" alt="">
                    <div>
                        <h3 class="fs-5 mb-1">Professional Certifications & Short-Term Courses</h3>
                        <p class="mb-0">Short-term certifications emphasize hands-on training, real-world projects, and portfolio development. They are perfect for upskilling, career switching, or gaining specialized design expertise quickly.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="capsule-card d-flex align-items-center">
                    <img src="https://picsum.photos/100?random=14" class="capsule-img" alt="">
                    <div>
                        <h3 class="fs-5 mb-1">Online Graphic Design Courses Bangalore</h3>
                        <p class="mb-0">Online courses offer flexible learning with live sessions, recorded modules, and remote mentorship. They suit working professionals and students seeking quality design education without location constraints.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-5 my-5">
    <div class="container">
        <h2 class="text-center mx-auto mb-3">
            Essential Factors: <span class="text-violet">Fees, Placements & Eligibility</span>
        </h2>
        <p class="mx-auto text-center mb-4" style="max-width:900px">
            When choosing a graphic design course, understanding graphic design course cost, job placement graphic design, and eligibility criteria is crucial. These factors help students make informed decisions by balancing budget, career outcomes, and academic requirements before enrolling in the right program.
        </p>

        <div class="row g-4 align-items-stretch">
            <div class="col-md-4">
                <div class="h-100 p-3" style="border-radius:14px;border:1px solid #dee2e6;border-bottom:4px solid #855ef7;">
                    <h5 class="fw-bold">Graphic Design Course Fees in Bangalore: A Detailed Breakdown</h5>
                    <p class="mb-0">Graphic design course fees in Bangalore vary based on course type, duration, and institute reputation. Degree programs generally cost more, while diplomas and short-term certifications offer affordable, skill-focused training with flexible payment options.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="h-100 p-3" style="border-radius:14px;border:1px solid #dee2e6;border-bottom:4px solid #855ef7;">
                    <h5 class="fw-bold">Placement Assistance & Career Success Stories</h5>
                    <p class="mb-0">Top institutes provide placement support through portfolio development, interview training, and industry connections. Strong career success stories reflect how practical learning and mentorship help students secure roles in agencies, startups, and corporate teams.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="h-100 p-3" style="border-radius:14px;border:1px solid #dee2e6;border-bottom:4px solid #855ef7;">
                    <h5 class="fw-bold">Eligibility for Graphic Design Courses After 12th & Beyond</h5>
                    <p class="mb-0">Most graphic design courses are open to students after 12th from any stream. Diploma and certification programs also welcome graduates, working professionals, and career switchers with a creative interest.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sp-100">
    <div class="container">
        <h2 class="text-center mx-auto mb-3">
            Niche & Advanced Graphic <span class="text-violet">Design Specializations</span>
        </h2>
        <p class="mx-auto text-center mb-4" style="max-width:900px">
            As the design industry evolves, design specializations and interdisciplinary design are shaping modern creative careers. Advanced programs focus on emerging trends that combine creativity with technology, opening new opportunities beyond traditional graphic design roles.
        </p>

        <div class="h-scroll">

            <div class="card">
                <h3>UX UI Design Courses</h3>
                <p>teach designers to create intuitive, user-centered digital products that balance aesthetics, functionality, and business goals.</p>
                <div class="card-img" style="background-image:url('https://images.unsplash.com/photo-1561070791-2526d30994b5?w=400&h=250&fit=crop');"></div>
            </div>

            <div class="card">
                <h3>Multimedia & Animation Design</h3>
                <p>This specialization combines graphic design with motion graphics, video, and animation. It prepares designers for dynamic storytelling across digital platforms, advertising, media, and interactive content creation.</p>
                <div class="card-img" style="background-image:url('https://images.unsplash.com/photo-1626785774573-4b799315345d?w=400&h=250&fit=crop');"></div>
            </div>

            <div class="card">
                <h3>AI & Sustainable Design</h3>
                <p>Modern programs cover AI-powered design tools, automation, and data-driven creativity. Sustainable and ethical design practices are also emphasized, helping designers create impactful, future-ready visual solutions.</p>
                <div class="card-img" style="background-image:url('https://images.unsplash.com/photo-1677442136019-21780ecad995?w=400&h=250&fit=crop');"></div>
            </div>

        </div>
    </div>
</section>
<section class="sp-100" style="background-color:#BDBDBD1A">
  <div class="container">
    <h2 class="text-center mx-auto mb-3">
      Niche & Advanced Graphic <span class="text-violet">Design Specializations</span>
    </h2>
    <p class="mx-auto text-center mb-4" style="max-width:900px">
      As the design industry evolves, design specializations and interdisciplinary design are shaping modern creative careers. Advanced programs focus on emerging trends that combine creativity with technology, opening new opportunities beyond traditional graphic design roles.
    </p>

    <div class="row g-5 align-items-stretch">
      <div class="col-lg-6">
        <div class="bg-white shadow-lg p-4 rounded-4 border-start border-5 h-100" style="border-color:#855EF7 !important;">
          <h4>Key Questions to Ask Before Enrolling</h4>
          <p>Before enrolling, evaluate course curriculum, faculty expertise, industry exposure, placement support, batch flexibility, and portfolio development. Ask how the program supports real-world projects, tools training, and career guidance.</p>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="bg-white shadow-lg p-4 rounded-4 border-start border-5 h-100" style="border-color:#855EF7 !important;">
          <h4>Building Your Portfolio & Kickstarting Your Career</h4>
          <p>A strong portfolio is key to launching a design career. Choose courses that focus on hands-on projects, real client work, mentorship, and portfolio reviews to showcase your skills confidently to employers.</p>
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
                    <!-- <div class="faq-head">
                        <p class="text-violet mb-0 fw-500 fs-16">Graphic Design Courses in Bangalore</p>
                    </div> -->

                    <div class="accordion accordion-flush" id="accordionFlushExample">

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Why is Bangalore a good city to study graphic design?
                                </button>
                            </h4>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        Bangalore is India’s design and tech hub, offering exposure to startups, global companies, creative agencies, and real-world projects. Its vibrant creative ecosystem provides excellent learning, networking, and career opportunities for graphic design students.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Which are the best graphic design institutes in Bangalore?
                                </button>
                            </h4>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        Bangalore is home to several reputed graphic design institutes known for industry-focused curriculum, experienced faculty, hands-on training, and strong placement support. Choosing the right institute depends on course structure, portfolio development, and career guidance offered.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    What are the different types of graphic design courses?
                                </button>
                            </h4>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        Graphic design courses include bachelor's degrees, diplomas, professional certifications, short-term courses, and online programs. Each format caters to different learning goals, time commitments, and career stages.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                    What is the average graphic design course fee?
                                </button>
                            </h4>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        Course fees vary based on duration, institute, and course type. Degree programs typically cost more, while diploma and short-term certification courses offer more affordable options with flexible payment plans.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                    Can graphic design skills be applied to UX UI design?
                                </button>
                            </h4>
                            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        Yes, graphic design skills such as visual hierarchy, typography, and color theory are highly transferable to UX UI design. Many designers successfully transition into UX UI roles with additional training in usability and user experience principles.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="flush-headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                    What factors should I consider when selecting a graphic design course?
                                </button>
                            </h4>
                            <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-16">
                                        Key factors include curriculum relevance, faculty experience, practical projects, portfolio development, placement support, course fees, and alignment with your career goals.
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
