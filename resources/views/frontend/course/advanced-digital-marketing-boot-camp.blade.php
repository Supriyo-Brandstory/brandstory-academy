@extends('frontend.partial.app')
@section('content')
<section class="banner-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-7 text-md-start text-center align-self-center">
                <h1 class="mb-3 text-blue">Advanced Digital Marketing Boot Camp</h1>
                <p class="mb-2">BrandStory Academy offers the most Advanced Digital Marketing Course Boot Camp. Master Digital Marketing, Video Editing, Podcasting & <span class="fw-600 text-blue">Studio Techniques with AI.</span></p>
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
        <h5 class="text-center mb-lg-5 mb-4 fw-600">Our Learners Placed In <span class="text-orange">1,000+</span> Global Companies</h5>
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

<section>
    <div class="container">
        <h2 class="mb-lg-5 mb-4 text-center">Digital Marketing <span class="text-violet">Course Description</span></h2>
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <img class="w-100 mb-lg-0 mb-3 d-lg-block d-none" src="{{asset('frontend/assets/images/adm-bootcamp/course-description.jpg')}}">
                <img class="w-100 mb-3 d-lg-none d-block" src="{{asset('frontend/assets/images/adm-bootcamp/course-description-mbl.jpg')}}">
            </div>
            <div class="col-lg-6">
                <p class="fs-16"><a href="https://brandstory.in/academy/">BrandStory Academy</a> offers an AI-powered digital marketing course in Bangalore designed to train aspiring marketers, video editors and content creators, and podcasters in mastering proven frameworks and AI tools, led by our industry experts from the best digital marketing institute in Bangalore.</p>
                <p class="fs-16">From social media growth to creating viral videos to editing high-quality podcasts and films, this AI-driven digital marketing course arms you with leading AI tools for smarter, faster, and result-driven content creation and marketing.</p>
                <p class="fs-16">And more importantly, the theme of our academy is that you don’t just learn theories; you gain internship work experience and apply real-world strategies and trending techniques used by industry experts.</p>
                <p class="fs-16 mb-4">By the end of this course, you can learn to market, produce, and build your brand in just 
                <span style="text-decoration: line-through; text-decoration-color: #E83A25;">5 months</span> 
                <span class="text-violet">90 days Only.</span></p>
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
        <h2 class="text-center mb-lg-5 mb-4">Earn 2 in 1 <span class="text-violet">Certificate</span></h2>
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
                    <form id="enquiryForm" action="course-form-validation.php" method="post">
    <div class="row">
        <div class="col-md-6">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstName" name="firstname" required pattern="[A-Za-z\s]+" title="Only alphabets are allowed">
        </div>
        <div class="col-md-6">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastName" name="lastname" required pattern="[A-Za-z\s]+" title="Only alphabets are allowed">
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="col-md-6">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="tel" class="form-control" id="phone" name="phone" required pattern="[0-9]+" title="Only numbers are allowed">
        </div>
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Type your message..." required></textarea>
    </div>
    <input type="hidden" id="recaptcha_response" name="recaptcha_response" class="recaptcha_response">

    <button type="submit" class="btn d-block w-100 text-center bg-violet">Submit</button>
</form>
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