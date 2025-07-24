@extends('frontend.partial.app')

@section('content')
   <section class="banner-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-7 text-md-start text-center align-self-center">
                <h1 class="mb-3 text-blue">360 DEGREE DIGITAL MARKETING COURSE</h1>
                <p class="mb-2">BrandStory Academy provides the ultimate 360 360-degree digital Marketing Program — master the full spectrum of digital marketing, AI integration, media production, video editing, and eCommerce growth strategies.</p>
                <p class="mb-4"><span class="text-blue fw-600">Duration:</span> 4 Months + 6 Months Internship</p>
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
                <img class="w-100" src="{{asset('frontend/assets/images/360-degree-digital-j/image0001.png')}}">
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


<section class="py-5">
    <div class="container">
        
        <div class="row">
            <div class="col-lg-6 g-0 ">
                <img class="w-100 h-100 mb-lg-0 mb-3 d-lg-block d-none" src="{{asset('frontend/assets/images/360-degree-digital-j/image0002.png')}}">
                <img class="w-100 mb-3 d-lg-none d-block" src="{{asset('frontend/assets/images/360-degree-digital-j/image0002.png')}}">
            </div>
            <div class="col-lg-6 lesson-box-shadow">
                <h2 class="mb-lg-5 mb-4 ">360 Degree Digital Marketing Course Description</h2>
                <p class="fs-16">BrandStory Academy offers a future-ready 360 360-degree digital Marketing course in Bangalore, designed for aspiring digital marketers, media creators, and e-commerce specialists.</p>
                <p class="fs-16">This all-in-one course gives you comprehensive training across digital marketing, AI-driven automation, media production, video editing, and eCommerce operations, led by industry professionals from Bangalore’s top-rated digital marketing institute.</p>
                <p class="fs-16">From driving eCommerce sales to mastering media storytelling to optimizing brand presence through AI tools, this program builds versatile professionals ready to excel in the modern digital economy.</p>
                <p class="fs-16">And what sets us apart?<br>
                    You don’t just learn; you apply real-world strategies, work on live projects, and gain hands-on agency experience that sets you ahead of the competition.</p>
                <p class="fs-16">By the end of this program, you’ll not only know digital marketing inside out but also command the skills to operate in any e-commerce, media, or tech-driven marketing environment.</p>
                <p class="fs-16 para-clr mb-3"><span class="text-blue">Duration:</span> 4 Months + 6 Months Internship</p>
                <div class="violet-btn  d-flex justify-content-md-start justify-content-center" bis_skin_checked="1">
                    <a class="text-decoration-none bg-violet" href="{{route('contact')}}">Start Learning Today with us!</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <img class="w-100 d-lg-none d-block mb-3" src="{{asset('frontend/assets/images/adm-bootcamp/video-production-mbl.svg')}}">
               <h2 class="mb-3 text-md-start text-center">Tools You <span class="text-violet">Will Learn</span></h2>
                <p class="mb-4 text-md-start text-center">This course arms you with the latest tools and platforms used by leading agencies and startups worldwide:</p>
                <div class="row">
                    <div class="col-1"><img class="me-2 mt-1" src="{{asset('frontend/assets/images/digital-marketing-with-ai-j/image005.svg')}}"></div>
                    <div class="col-11"><p><b>Digital Marketing Tools</b>: SEMrush, Ahrefs, Google Analytics, Surfer SEO, HubSpot CRM</p></div>
                    <div class="col-1"><img class="me-2 mt-1" src="{{asset('frontend/assets/images/digital-marketing-with-ai-j/image005.svg')}}"></div>
                    <div class="col-11"><p><b>Media Production Tools</b>: Adobe Premiere Pro, Final Cut Pro, Riverside.fm, SquadCast</p></div>
                    <div class="col-1"><img class="me-2 mt-1" src="{{asset('frontend/assets/images/digital-marketing-with-ai-j/image006.svg')}}"></div>
                    <div class="col-11"><p><b>AI Tools</b>: ChatGPT, Jasper, Copy.ai, Canva Pro, Zapier</p></div>
                    <div class="col-1"><img class="me-2 mt-1" src="{{asset('frontend/assets/images/digital-marketing-with-ai-j/image007.svg')}}"></div>
                    <div class="col-11"><p><b>eCommerce Growth Platforms</b>: Shopify, WooCommerce, Amazon Seller Central, Meta Commerce Manager</p></div>
                    <div class="col-1"><img class="me-2 mt-1" src="{{asset('frontend/assets/images/digital-marketing-with-ai-j/image008.svg')}}"></div>
                    <div class="col-11"><p><b>Ads & Performance Marketing</b>: Google Ads, Meta Ads Manager, LinkedIn Ads, Klaviyo, Email Automation Tools</p></div>
                </div>
            
                <P>Learn to seamlessly integrate marketing, media, and eCommerce workflows — for faster, smarter, and more profitable results.</P>
                <div class="violet-btn  d-flex justify-content-md-start justify-content-center" bis_skin_checked="1">
                    <a class="text-decoration-none bg-violet" href="{{route('contact')}}">Learn More</a>
                </div>
            </div>
            <div class="col-lg-7" style="align-content: center;">
                <img class="w-100 d-lg-block d-none  mb-3" src="{{asset('frontend/assets/images/digital-marketing-with-ai-j/image021.svg')}}">
            </div>
        </div>
    </div>
</section>


<section class="mentorship-section sp-100">
    <div class="container position-relative">
        <div class="row">
            <div class="col-lg-12 col-md-8">
                <h3 class="mb-md-4 mb-3 fw-600 text-md-start text-center">Secure Your Spot in India's Leading 360° <span class="text-yellow">Digital<br> Marketing + AI + eCommerce Growth Program</span></h3>
                <p class="fs-16 fw-500 mb-4 text-md-start text-center">Seats are limited! Enroll today in the most comprehensive and career-transforming<br> digital marketing course.</p>
                <p class="fs-16 fw-500 mb-4 text-md-start text-center">Gain expertise across multiple domains, unlock global opportunities, and start your journey<br> towards a dynamic digital career at a special fee of ₹85,000!</p>
                <p class="fs-16 fw-500 mb-4 text-md-start text-center">Fill the form below to reserve your place now.</p>

                <div class="mentorship-btn d-flex justify-content-md-start justify-content-center">
                    <a class="btn-font" href="{{route('contact')}}">Join the Waitlist</a>
                </div>
</div>
</div>
        <div class="mentorship-img">
            <img src="{{asset('frontend/assets/images/360-degree-digital-j/image0003.png')}}">
        </div>
    </div>
</section>


<section class="spb-100">
    <div class="container ">
        <div class="row">
            <div class="col-md-6">
                <h2 class="mb-3 text-md-start text-center">Why Choose BrandStory Academy for <span class="text-violet">Digital Marketing Courses?</span></h2>
            </div>
            <div class="col-md-6">
                <p>At BrandStory Academy, we believe in shaping industry-ready digital experts through a perfect blend of</p>
                <p>We’re located at the heart of Bangalore — India’s tech hub — ensuring you stay connected with real opportunities, real skills, and a successful future.</p>
                <p>At BrandStory Academy, learning meets opportunity.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img class="w-100  mb-3" src="{{asset('frontend/assets/images/digital-marketing-with-ai-j/image004.png')}}" alt="">
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4 pt-3 ">
                        <img class="me-2 mt-1" src="{{asset('frontend/assets/images/digital-marketing-with-ai-j/image009.svg')}}">
                        <p class="mt-4 ">Practical training and live client projects</p>
                        <div>
                            <img class="me-2 mt-1 w-100" src="{{asset('frontend/assets/images/digital-marketing-with-ai-j/image014.svg')}}">
                        </div>
                    </div>
                    <div class="col-md-4 pt-3 ">
                        <img class="me-2 mt-1" src="{{asset('frontend/assets/images/digital-marketing-with-ai-j/image010.svg')}}">
                        <p class="mt-4 ">Exposure to agency-style operations</p>
                        <div>
                            <img class="me-2 mt-1 w-100" src="{{asset('frontend/assets/images/digital-marketing-with-ai-j/image015.svg')}}">
                        </div>
                    </div>
                    <div class="col-md-4 pt-3 ">
                        <img class="me-2 mt-1" src="{{asset('frontend/assets/images/digital-marketing-with-ai-j/image011.svg')}}">
                        <p class="mt-4 cus-height-p">Mentorship by seasoned experts</p>
                        <div>
                            <img class="me-2 mt-1 w-100" src="{{asset('frontend/assets/images/digital-marketing-with-ai-j/image016.svg')}}">
                        </div>
                    </div>
                    <div class="col-md-4 pt-3">
                        <img class="me-2 mt-1" src="{{asset('frontend/assets/images/digital-marketing-with-ai-j/image012.svg')}}">
                        <p class="mt-4 ">Access to premium AI, media, and eCommerce tools</p>
                        <img class="me-2 mt-1 w-100" src="{{asset('frontend/assets/images/digital-marketing-with-ai-j/image017.svg')}}">
                    </div>
                    <div class="col-md-4 pt-3">
                        <img class="me-2 mt-1" src="{{asset('frontend/assets/images/digital-marketing-with-ai-j/image013.svg')}}">
                        <p class="mt-4 cus-height-2p">100% internship and placement assistance</p>
                        <img class="me-2 mt-1 w-100" src="{{asset('frontend/assets/images/digital-marketing-with-ai-j/image018.svg')}}">
                    </div>
                </div>
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
                    @include('frontend.partial.course-form')
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