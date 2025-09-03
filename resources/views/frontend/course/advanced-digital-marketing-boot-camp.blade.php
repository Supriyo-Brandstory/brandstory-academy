@extends('frontend.partial.app')
@section('content')
<section class="banner-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-7 text-md-start text-center align-self-center">
                <h1 class="mb-3 text-blue">Advanced Digital Marketing Boot Camp</h1>
                <p class="mb-2">BrandStory Academy offers the most Advanced Digital Marketing Course Boot Camp in Bangalore. Master Digital Marketing, Video Editing, Podcasting, Studio Techniques, and in-demand AI Skills. <br>The advanced digital marketing course is designed to help students with expert-led training, modern classrooms, live projects, and hands-on experience with the latest tools and technologies. We create job-ready digital marketers with the best training and support.</p>
                <p class="mb-4"><span class="text-blue fw-600">Duration:</span> 3.5 Months + 6 Months Internship</p>
                <div class="d-md-flex align-items-center">
                    <div class="violet-btn d-flex me-lg-5 mb-lg-0 mb-4 justify-content-md-start justify-content-center">
                        <a href="{{route('contact')}}">Start Learning</a>
                    </div>
                    <div class="student-main mb-md-0 mb-5 text-center">
                        <img class="mb-0" src="{{asset('frontend/assets/images/adm-bootcamp/course-review.png')}}">
                        <p class="mb-0 fs-12">Course Reviews</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-5">
                <img class="w-100" src="{{asset('frontend/assets/images/adm-bootcamp/course-banner.jpg')}}">
            </div>
        </div>
    </div>
</section>

<section class="sp-100">
    <div class="container">
        <h3 class="text-center mb-lg-5 mb-4 fw-600">Our Learners Placed In <span class="text-orange">1,000+</span> Global Companies</h3>
        <div class="swiper brandlogo1" data-aos="fade-up">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="brandsmain">
                    <img src="https://brandstory.in/resources/digital/assets/images/video-production/brand1.svg" class="img-fluid" alt="Video production Service">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="brandsmain">
                    <img src="https://brandstory.in/resources/digital/assets/images/video-production/brand2.svg" class="img-fluid" alt="Video production Service">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="brandsmain">
                    <img src="https://brandstory.in/resources/digital/assets/images/video-production/brand3.svg" class="img-fluid" alt="Video production Service">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="brandsmain">
                    <img src="https://brandstory.in/resources/digital/assets/images/video-production/brand4.svg" class="img-fluid" alt="Video production Service">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="brandsmain">
                    <img src="https://brandstory.in/resources/digital/assets/images/video-production/brand5.svg" class="img-fluid" alt="Video production Service">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="brandsmain">
                    <img src="https://brandstory.in/resources/digital/assets/images/video-production/brand6.svg" class="img-fluid" alt="Video production Service">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="brandsmain">
                    <img src="https://brandstory.in/resources/digital/assets/images/video-production/brand7.svg" class="img-fluid" alt="Video production Service">
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    </div>
</section>
  <section class="pb-5 mb-t-space">
        <div class="container lesson-box-shadow">
            <h2 class="mb-lg-5 mb-4 ">Advanced Digital Marketing Course <span class="text-violet">Overview</span></h2>
            
            <p>BrandStory Academy offers the most advanced digital marketing course in Bangalore, designed to train aspiring marketers. Gain industry-relevant skills in video editing, content creation, and podcasting.  At the best <a
                    href="{{route('home')}}" class="fw-600 text-blue fs-18" style="text-decoration: unset">digital marketing institute</a>, you’ll learn to optimize websites, social channels, and paid ads from seasoned mentors and industry experts. </p>
            <p>From social media growth to creating viral videos to editing high-quality podcasts and films, this AI-driven digital marketing course arms you with leading AI tools for smarter, faster, and result-driven content creation and marketing.</p>
            <p>And more importantly, the theme of our academy is that you don’t just learn theories- you gain real project experience through internship and apply new experiments and techniques on live client projects. We offer the most advanced digital marketing course equipped with the latest curriculum, where you can learn, explore, practice, and become a professional.</p>
        </div>

    </section>

<section>
    <div class="container">
        <h2 class="mb-lg-5 mb-4 text-center">Advanced Digital 
 <span class="text-violet">Marketing Boot Camp</span></h2>
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <img class="w-100 mb-lg-0 mb-3 d-lg-block d-none" src="{{asset('frontend/assets/images/adm-bootcamp/course-description.jpg')}}">
                <img class="w-100 mb-3 d-lg-none d-block" src="{{asset('frontend/assets/images/adm-bootcamp/course-description-mbl.jpg')}}">
            </div>
            <div class="col-lg-6">
                <p class="fs-16">The Advanced Digital Marketing Boot Camp course is curated for aspiring marketers, entrepreneurs, business owners, and career-switchers who want to stand out in today’s digital-first world.
</p>
                 <ul class="fs-16">
                        <li class="fs-16">Full-Stack Digital Marketing</li>
                        <li class="fs-16">AI & Automation</li>
                        <li class="fs-16">Video Editing & Podcasting</li>
                        <li class="fs-16">Studio Techniques</li>
                        <li class="fs-16">10+ Live Projects</li>

                    </ul>
                <p class="fs-16 para-clr mb-3"><span class="text-blue">Duration:</span> 3.5 Months + 6 Months Internship</p>
                <div class="violet-btn  d-flex justify-content-md-start justify-content-center" bis_skin_checked="1">
                    <a class="text-decoration-none bg-violet" href="{{route('contact')}}">Start Learning Today with us!</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="video-production-section sp-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <img class="w-100 d-lg-none d-block mb-3" src="{{asset('frontend/assets/images/adm-bootcamp/video-production-mbl.svg')}}">
                <h2 class="mb-3 text-md-start text-center">Tools: Digital Marketing and <span class="text-violet">Video Production</span></h2>
                <p class="mb-4 text-md-start text-center">This course covers digital marketing and video production tools such as 
                    <span class="text-blue">
                        <a target="_blank" class="fs-18" href="https://surferseo.com/" rel="nofollow">Surfer SEO</a>, 
                        <a class="fs-18" target="_blank" href="https://ahrefs.com/" rel="nofollow">Ahrefs</a>, 
                        <a class="fs-18" target="_blank" href="https://www.semrush.com/" rel="nofollow">SEMrush</a>, 
                        <a class="fs-18" target="_blank" href="https://analytics.google.com/" rel="nofollow">Google Analytics</a>, 
                        <a class="fs-18" target="_blank" href="https://www.squadcast.com/" rel="nofollow">SquadCast</a>, 
                        <a class="fs-18" target="_blank" href="https://www.adobe.com/in/" rel="nofollow">Adobe Suite</a>, 
                        <a class="fs-18" target="_blank" href="https://riverside.fm/" rel="nofollow">Riverside</a>,
                    </span> and more.
                </p>
                
                <div class="violet-btn  d-flex justify-content-md-start justify-content-center" bis_skin_checked="1">
                    <a class="text-decoration-none bg-violet" href="{{route('contact')}}">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mentorship-section">
    <div class="container position-relative">
        <div class="row">
            <div class="col-lg-12 col-md-8">
                <h3 class="mb-md-4 mb-3 fw-600 text-md-start text-center">Secure Spot in India's Premier Digital 
                    <span class="db">Marketing + <span class="text-orange1">AI + Media Mastery Program</span></span></h3>
                <p class="fs-16 fw-500 mb-4 text-md-start text-center">Be the first to know when the course begins. Fill out the form below & take 
                    <span class="db">your skills on Filmmaking, & Podcasting to the next level</span></p>
                <div class="mentorship-btn d-flex justify-content-md-start justify-content-center">
                    <a class="btn-font" href="{{route('contact')}}">Join the Waitlist</a>
                </div>
</div>
</div>
        <div class="mentorship-img">
            <img src="{{asset('frontend/assets/images/adm-bootcamp/media-mastery.png')}}">
        </div>
    </div>
</section>


<section class="learn-section sp-100">
    <div class="container">
        <h2 class="text-center">What You’ll <span class="text-violet">Learn</span></h2>
        <div class="learn-tab-main mt-md-5 mt-4">
        <div class="nav-wrapper">
    <ul class="nav nav-pills mb-lg-5 mb-4 d-flex flex-nowrap justify-content-between" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-lesson1-tab" data-bs-toggle="pill" data-bs-target="#pills-lesson1" type="button" role="tab" aria-controls="pills-lesson1" aria-selected="true">
                <span class="fs-16 fw-600" style="color:#75BAF9;">Lesson 1</span><br>
                <span class="learnh fs-14">Foundations of AI in Creating <br> Digital Media and Marketing</span>
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-lesson2-tab" data-bs-toggle="pill" data-bs-target="#pills-lesson2" type="button" role="tab" aria-controls="pills-lesson2" aria-selected="false">
                <span class="fs-16 fw-600" style="color:#845EF7;">Lesson 2</span><br>
                <span class="learnh fs-14">AI-Driven Video Editing & <br> Production</span>
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-lesson3-tab" data-bs-toggle="pill" data-bs-target="#pills-lesson3" type="button" role="tab" aria-controls="pills-lesson3" aria-selected="false">
                <span class="fs-16 fw-600" style="color:#EA7D30;">Lesson 3</span><br>
                <span class="learnh fs-14">Smart SEO & AI-Powered <br> Content Marketing</span>
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-lesson4-tab" data-bs-toggle="pill" data-bs-target="#pills-lesson4" type="button" role="tab" aria-controls="pills-lesson4" aria-selected="false">
                <span class="fs-16 fw-600" style="color:#1BC6AF;">Lesson 4</span><br>
                <span class="learnh fs-14">Podcasting & Studio <br> Techniques with AI</span>
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-lesson5-tab" data-bs-toggle="pill" data-bs-target="#pills-lesson5" type="button" role="tab" aria-controls="pills-lesson5" aria-selected="false">
                <span class="fs-16 fw-600" style="color:#E6B33D;">Lesson 5</span><br>
                <span class="learnh fs-14">Mastering AI for Branding & <br> Career Growth</span>
            </button>
        </li>
    </ul>
</div>

            <div class="tab-content" id="pills-tabContent">
                <!-- Lesson 1 start -->
                <div class="tab-pane fade show active" id="pills-lesson1" role="tabpanel" aria-labelledby="pills-lesson1-tab">
                    <div class="lesson-min">
                        <h4 class="mb-4 text-md-start text-center">Foundations of AI in Creating <span class="text-lightblue1">Digital Media and Marketing</span></h4>
                        <ul class="list-unstyled p-0 mb-0">
                            <li class="mb-4 d-flex align-items-start"><img class="me-2 mt-1" src="{{asset('frontend/assets/images/adm-bootcamp/learn-icon1.svg')}}">Introduction to AI in Marketing and Media: AI's role in video editing and content creation (its place in digital marketing).</li>
                            <li class="mb-4 d-flex align-items-start"><img class="me-2 mt-1" src="{{asset('frontend/assets/images/adm-bootcamp/learn-icon1.svg')}}">Essential AI Tools for Marketing and Media Work: An overview of tools like Surfer, SEMrush, Ahrefs, Google Analytics, Adobe, Firefly, and Runway and ways in which AI has helped create new possibilities for thinking creatively.</li>
                            <li class="mb-4 d-flex align-items-start"><img class="me-2 mt-1" src="{{asset('frontend/assets/images/adm-bootcamp/learn-icon1.svg')}}">How AI Enhances Creativity: AI-driven automation (people no longer need to spend time on repetitive data entry), AI predicted analyses, and AI personalised content.</li>
                        </ul>
                    </div>
                </div>
                <!-- Lesson 1 End -->

                <!-- Lesson 2 start -->
                <div class="tab-pane fade" id="pills-lesson2" role="tabpanel" aria-labelledby="pills-lesson2-tab">
                    <div class="lesson-min">
                        <h4 class="mb-4 text-md-start text-center">AI-Driven Video Editing & <span class="text-violet">Production</span></h4>
                        <ul class="list-unstyled p-0 mb-0">
                            <li class="mb-4 d-flex align-items-start"><img class="me-2 mt-1" src="{{asset('frontend/assets/images/adm-bootcamp/learn-icon2.svg')}}">AI-Powered Editing Techniques: Explore Premiere Pro Auto Edit, DaVinci Resolve AI tools, and Adobe Audition for audio enhancements.</li>
                            <li class="mb-4 d-flex align-items-start"><img class="me-2 mt-1" src="{{asset('frontend/assets/images/adm-bootcamp/learn-icon2.svg')}}">Creating High-Impact Video Content: Leveraging AI to automate captions, improve visual effects, and enhance storytelling.</li>
                            <li class="mb-4 d-flex align-items-start"><img class="me-2 mt-1" src="{{asset('frontend/assets/images/adm-bootcamp/learn-icon2.svg')}}">From Raw Footage to Viral Videos: Real-world applications of AI in video production and content strategy.</li>
                        </ul>
                    </div>
                </div>
                <!-- Lesson 2 End -->

                <!-- Lesson 3 Start -->
                <div class="tab-pane fade" id="pills-lesson3" role="tabpanel" aria-labelledby="pills-lesson3-tab">
                    <div class="lesson-min">
                        <h4 class="mb-4 text-md-start text-center">Smart SEO & AI-Powered <span class="text-orange1">Content Marketing</span></h4>
                        <ul class="list-unstyled p-0 mb-0">
                            <li class="mb-4 d-flex align-items-start"><img class="me-2 mt-1" src="{{asset('frontend/assets/images/adm-bootcamp/learn-icon3.svg')}}">AI for SEO & Content Optimization: Master Surfer SEO, SEMrush, and Ahrefs for keyword research and ranking strategies.</li>
                            <li class="mb-4 d-flex align-items-start"><img class="me-2 mt-1" src="{{asset('frontend/assets/images/adm-bootcamp/learn-icon3.svg')}}">Automated Content Creation: Using AI for blog writing, social media posts, and video scripts.</li>
                            <li class="mb-4 d-flex align-items-start"><img class="me-2 mt-1" src="{{asset('frontend/assets/images/adm-bootcamp/learn-icon3.svg')}}">Data-Driven Marketing Strategies: Leveraging Google Analytics & predictive insights for performance tracking.</li>
                        </ul>
                    </div>
                </div>
                <!-- Lesson 3 End -->

                <!-- Lesson 4 Start -->
                <div class="tab-pane fade" id="pills-lesson4" role="tabpanel" aria-labelledby="pills-lesson4-tab">
                    <div class="lesson-min">
                        <h4 class="mb-4 text-md-start text-center">Podcasting & Studio <span class="text-green">Techniques with AI</span></h4>
                        <ul class="list-unstyled p-0 mb-0">
                            <li class="mb-4 d-flex align-items-start"><img class="me-2 mt-1" src="{{asset('frontend/assets/images/adm-bootcamp/learn-icon4.svg')}}">AI in podcast editing and production:  Create professional audio content using Riverside, SquadCast, and Adobe Audition.</li>
                            <li class="mb-4 d-flex align-items-start"><img class="me-2 mt-1" src="{{asset('frontend/assets/images/adm-bootcamp/learn-icon4.svg')}}">Automated Transcription & Voice Enhancements: AI-powered tools for clear, studio-quality sound.</li>
                            <li class="mb-4 d-flex align-items-start"><img class="me-2 mt-1" src="{{asset('frontend/assets/images/adm-bootcamp/learn-icon4.svg')}}">Building & Monetising Your Podcast: Growth strategies, audience engagement, and sponsorships.</li>
                        </ul>
                    </div>
                </div>
                <!-- Lesson 4 End -->

                <!-- Lesson 5 Start -->
                <div class="tab-pane fade" id="pills-lesson5" role="tabpanel" aria-labelledby="pills-lesson5-tab">
                    <div class="lesson-min">
                        <h4 class="mb-4 text-md-start text-center">Mastering AI for Branding & <span class="text-yellow1">Career Growth</span></h4>
                        <ul class="list-unstyled p-0 mb-0">
                            <li class="mb-4 d-flex align-items-start"><img class="me-2 mt-1" src="{{asset('frontend/assets/images/adm-bootcamp/learn-icon5.svg')}}">AI for Personal & Business Branding: Create unique brand identities, automate marketing, optimise ad targeting, and enhance engagement with AI driven strategies and tools.</li>
                            <li class="mb-4 d-flex align-items-start"><img class="me-2 mt-1" src="{{asset('frontend/assets/images/adm-bootcamp/learn-icon5.svg')}}">Emerging Career Paths in AI & Digital Marketing: Wide variety of opportunities, such as regular jobs, freelancing, and entrepreneurship in AI-powered content creation.</li>
                            <li class="mb-4 d-flex align-items-start"><img class="me-2 mt-1" src="{{asset('frontend/assets/images/adm-bootcamp/learn-icon5.svg')}}">Networking & Industry Trends: Connect with AI leaders and explore trends like generative AI, automation, and data-driven branding.</li>
                        </ul>
                    </div>
                </div>
                <!-- Lesson 5 End -->
            </div>
        </div>
    </div>
</section>

<section class="industry-experts-section sp-100">
    <div class="container">
        <div class="row mb-md-5 mb-4">
            <div class="col-md-6">
                <h3 class="mb-md-0 mb-3 text-md-start text-center">Latest Curriculum Vetted By 
                <span class="db text-violet">Industry Experts</span></h3>
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

<!-- Show More/Less Button -->
<div class="d-flex justify-content-center mt-4">
    <button id="toggleButtonb" class="btn fs-16 text-violet fw-500 industryexpertbtn d-flex align-items-center justify-content-center gap-2">
        Load More <img src="{{asset('frontend/assets/images/adm-bootcamp/loadmore-icon.svg')}}" id="toggleIcon">
    </button>
</div>


    </div>
</section>


<section class="course-certificate-sec sp-100">
    <div class="container">
        <h2 class="text-center mb-lg-5 mb-4">Earn Industry-Recognized Certificates after <span class="text-violet">The Course</span></h2>
        <div class="row">
        <div class="col-md-6">
            <img class="w-100" src="{{asset('frontend/assets/images/adm-bootcamp/certificate1.png')}}">
        </div>
        <div class="col-md-6">
            <img class="w-100" src="{{asset('frontend/assets/images/adm-bootcamp/certificate2.png')}}">
        </div>
        </div>
    </div>
</section>

<section class="course-form-section sp-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img class="w-100 d-lg-block d-none" src="{{asset('frontend/assets/images/adm-bootcamp/course-form-new.jpg')}}">
                <img class="w-100 d-lg-none d-block mb-3" src="{{asset('frontend/assets/images/adm-bootcamp/course-form-mbl-new.jpg')}}">
            </div>
            <div class="col-lg-6">
                <div class="course-form-main">
                    <h4 class="mb-3 text-blue text-md-start text-center">You might be a perfect fit! Enroll today!</h4>
                        @include('frontend.partial.course-form', ['program' => 'Advanced Digital Marketing Boot Camp'])

                </div>
            </div>
        </div>
    </div>
</section>
<x-our-success-stories :videos="[
 'https://www.instagram.com/p/DNiDU0ExHZI',
  'https://www.instagram.com/p/DNk72CQRPXZ',
  'https://www.instagram.com/p/DNpgwppR5qy',
  'https://www.instagram.com/p/DLsC-H9xQVg'
]" />
<div class="pt-100">
    <x-blog-component />
</div>
    <section class="sp-100 bg-lightblue1">
        <div class="container">
            <h2 class="mb-lg-5 mb-4 text-center">FAQ</h2>
            <div class="row gx-md-3">
                <div class="col-lg-6">
                    <div class="faq-main mb-lg-3 mb-4">
                        <div class="faq-head">
                            <p class="text-violet mb-0 fw-500 fs-16">Generic Questions</p>
                        </div>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        What is digital marketing, and why is it important?

                                    </button>
                                </h4>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">Digital marketing is the process of promoting products or
                                            services online using SEO, social media, paid ads, and other online marketing
                                            strategies. It is important because it helps businesses reach targeted customers
                                            and drive measurable results.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        Which is better: digital marketing course or self-learning?
                                    </button>
                                </h4>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">While self-learning offers flexibility, a structured course
                                            provides expert guidance, live projects, industry-relevant learning, and
                                            certifications that improve career opportunities. <a
                                                href="{{url('blogs/digital-marketing-courses-vs-self-learning-which-is-better')}}"
                                                class="text-violet">Learn more at Digital Marketing Courses vs.
                                                Self-Learning</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        What is the salary of a digital marketer in India?
                                    </button>
                                </h4>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">Entry-level salaries range from ₹3-5 LPA, while experienced
                                            professionals can earn ₹10-20 LPA or more depending on skills and roles. The
                                            demand for digital marketing professionals is growing rapidly, with businesses
                                            shifting to online platforms and AI-driven marketing strategies.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingfour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapsefour" aria-expanded="false"
                                        aria-controls="flush-collapsefour">
                                        Is digital marketing a good career choice in 2025?
                                    </button>
                                </h4>
                                <div id="flush-collapsefour" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p class="fs-16">Absolutely. With the rise of AI and digital-first businesses,
                                            digital marketing is one of the most stable and high-paying career choices.
                                            Almost every industry hires digital marketers, including IT, e-commerce, retail,
                                            healthcare, finance, education, and startups.</p>
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

                        </div>
                    </div>
                    <div class="faq-main">
                        <div class="faq-head">
                            <p class="text-violet mb-0 fw-500 fs-16">Learning Curriculum</p>
                        </div>
                        <div class="accordion accordion-flush" id="accordionFlushExample2">
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingtwelve">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapsetwelve" aria-expanded="false"
                                        aria-controls="flush-collapsetwelve">
                                        What topics are covered in the Digital Marketing Mastery Course?
                                    </button>
                                </h4>
                                <div id="flush-collapsetwelve" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingtwelve" data-bs-parent="#accordionFlushExample2">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">The course covers SEO, SEM, Google Ads, social media
                                            marketing, content strategy, email marketing, web analytics, and AI-driven
                                            marketing tools. We follow a step-wise approach from the basics to advanced
                                            learning. This is the only digital marketing course in Bangalore that combines
                                            theoretical and practical learning under one curriculum.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingthirteen">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapsethirteen" aria-expanded="false"
                                        aria-controls="flush-collapsethirteen">
                                        Is this course updated with the latest trends?
                                    </button>
                                </h4>
                                <div id="flush-collapsethirteen" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingthirteen" data-bs-parent="#accordionFlushExample2">
                                    <div class="accordion-body">
                                        <p class="mb-0">Yes, the curriculum is regularly updated to include the latest
                                            trends in AI, digital marketing platforms, and industry practices. You’ll get to
                                            know all essential skills based on the latest industry trends.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-heading15">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse15" aria-expanded="false"
                                        aria-controls="flush-collapse15">
                                        Does this course teach SEO and Google Ads in depth?
                                    </button>
                                </h4>
                                <div id="flush-collapse15" class="accordion-collapse collapse"
                                    aria-labelledby="flush-heading15" data-bs-parent="#accordionFlushExample2">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">Yes, we teach SEO, SEM, and Google Ads in detail with hands-on
                                            practice to help you manage campaigns independently. The Digital Marketing
                                            Mastery course is divided into dedicated modules for SEO, PPC, and all other
                                            digital marketing vertices. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-heading16">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse16" aria-expanded="false"
                                        aria-controls="flush-collapse16">
                                        Will I learn social media marketing in this course?

                                    </button>
                                </h4>
                                <div id="flush-collapse16" class="accordion-collapse collapse"
                                    aria-labelledby="flush-heading16" data-bs-parent="#accordionFlushExample2">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">Yes, you will master Facebook, Instagram, LinkedIn, and
                                            YouTube marketing strategies along with AI-based automation tools. Starting from
                                            content creation to influencer collaboration, you’ll get to know everything and
                                            become a professional social media marketer. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-heading17">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse17" aria-expanded="false"
                                        aria-controls="flush-collapse17">
                                        How do you ensure practical learning in this course?
                                    </button>
                                </h4>
                                <div id="flush-collapse17" class="accordion-collapse collapse"
                                    aria-labelledby="flush-heading17" data-bs-parent="#accordionFlushExample2">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">We focus on project-based training, case studies, live
                                            campaigns, and practical assignments rather than just theory. We have expert
                                            mentors to guide you through live projects and practical learning sessions. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-heading18">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse18" aria-expanded="false"
                                        aria-controls="flush-collapse18">
                                        What kind of AI tools will I learn in this course?
                                    </button>
                                </h4>
                                <div id="flush-collapse18" class="accordion-collapse collapse"
                                    aria-labelledby="flush-heading18" data-bs-parent="#accordionFlushExample2">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">You will learn ChatGPT, Gemini, AI-powered SEO tools, tools
                                            for programmatic ads, content creation platforms, analytics automation, and
                                            AI-driven ad optimization. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-main mb-lg-3 mb-4">
                        <div class="faq-head">
                            <p class="text-violet mb-0 fw-500 fs-16">Course Information</p>
                        </div>
                        <div class="accordion accordion-flush" id="accordionFlushExample1">
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingnine">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapsenine" aria-expanded="false"
                                        aria-controls="flush-collapsenine">
                                      What is the fee for the Advanced Digital Marketing Boot Camp Course?

                                    </button>
                                </h4>
                                <div id="flush-collapsenine" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingnine" data-bs-parent="#accordionFlushExample1">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">The course fee is ₹45,000, which includes live training, AI skill development, project-based learning, internship opportunities, and placement support.  We offer a comprehensive training program that covers SEO, social media, paid ads, content marketing, video editing skills, and studio techniques to prepare students for modern marketing careers.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingten">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseten" aria-expanded="false"
                                        aria-controls="flush-collapseten">
                                       How long is the Advanced Digital Marketing Boot Camp Course?
                                    </button>
                                </h4>
                                <div id="flush-collapseten" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingten" data-bs-parent="#accordionFlushExample1">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">
                                        The course duration is 9.5 months, including 3.5 months of intensive learning followed by a 6-month internship. At <a
                                                href="https://brandstoryacademy.com/" class="text-violet">BrandStory
                                                Academy</a>, our course is designed to equip you with strong digital marketing fundamentals, studio techniques, AI tools, and hands-on expertise through a 6-month internship. 
    
                                        </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingeleven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseeleven" aria-expanded="false"
                                        aria-controls="flush-collapseeleven">
                                       Is the course certification recognized?
                                    </button>
                                </h4>
                                <div id="flush-collapseeleven" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingeleven" data-bs-parent="#accordionFlushExample1">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">Yes, upon successful completion of the Advanced Digital Marketing Boot Camp Course, you receive industry-recognized certificates in Digital Marketing, AI Skills, and Studio Techniques, highly valued by the top recruiters. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-headingeleven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse12" aria-expanded="false"
                                        aria-controls="flush-collapse12">
                                        What makes this course different from other digital marketing courses?
                                    </button>
                                </h4>
                                <div id="flush-collapse12" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingeleven" data-bs-parent="#accordionFlushExample1">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">Our course combines learning essential AI skills, project-based training, internship, 1000+ placement tie-ups, and mentorship by experienced professionals, ensuring real career outcomes. We offer a complete package along with the course to make you future-ready.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="faq-main">
                        <div class="faq-head">
                            <p class="text-violet mb-0 fw-500 fs-16">Internship & Placement</p>
                        </div>
                        <div class="accordion accordion-flush" id="accordionFlushExample3">
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-heading1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse1" aria-expanded="false"
                                        aria-controls="flush-collapse1">
                                        Do you provide internships after the course?
                                    </button>
                                </h4>
                                <div id="flush-collapse1" class="accordion-collapse collapse"
                                    aria-labelledby="flush-heading1" data-bs-parent="#accordionFlushExample3">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">Yes, we offer <a
                                                href="https://brandstoryacademy.com/blogs/internship-backed-learning-why-theory-isnt-enough-to-get-hired-today"
                                                class="text-violet">6-month internships</a> where students work on real
                                            campaigns and gain practical industry experience. During the internship, you’ll
                                            handle real clients and projects under the guidance of the top industry experts.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-heading2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse2" aria-expanded="false"
                                        aria-controls="flush-collapse2">
                                        What kind of placement support do you provide?

                                    </button>
                                </h4>
                                <div id="flush-collapse2" class="accordion-collapse collapse"
                                    aria-labelledby="flush-heading2" data-bs-parent="#accordionFlushExample3">
                                    <div class="accordion-body">
                                        <p class="mb-0">We provide 100% placement assistance with tie-ups across 1000+
                                            global companies and digital agencies. Our alumni get placement in top companies
                                            like CrowdStrike, HashedIn, Q2, Dover, etc. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse3" aria-expanded="false"
                                        aria-controls="flush-collapse3">
                                        Do you guarantee placements?
                                    </button>
                                </h4>
                                <div id="flush-collapse3" class="accordion-collapse collapse"
                                    aria-labelledby="flush-heading3" data-bs-parent="#accordionFlushExample3">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">We provide assured placement and placement support through our
                                            extensive company tie-ups, interview training, and skill-based matching.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-heading4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse4" aria-expanded="false"
                                        aria-controls="flush-collapse4">
                                        What career opportunities will I have after this course?

                                    </button>
                                </h4>
                                <div id="flush-collapse4" class="accordion-collapse collapse"
                                    aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample3">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">You can work as a Digital Marketing Executive, SEO Specialist,
                                            Social Media Manager, Content Strategist, PPC Analyst, or Marketing Automation
                                            Expert. Know more at <a
                                                href="https://brandstoryacademy.com/blogs/digital-marketing-job-roles-in-2025-what-skills-you-need-to-compete"
                                                class="text-violet">Digital Marketing Job Roles</a> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="flush-heading5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse5" aria-expanded="false"
                                        aria-controls="flush-collapse5">
                                        How does this course improve my long-term career prospects?


                                    </button>
                                </h4>
                                <div id="flush-collapse5" class="accordion-collapse collapse"
                                    aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample3">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-16">By combining digital marketing fundamentals with <a
                                                href="https://brandstoryacademy.com/blogs/how-ai-is-changing-the-way-we-learn-digital-marketing"
                                                class="text-violet">AI-powered skills</a>, you gain future-ready expertise
                                            that ensures long-term career growth. We give you a launchpad where you can
                                            learn, build expertise, and get a job in top global companies.</p>
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
@endsection