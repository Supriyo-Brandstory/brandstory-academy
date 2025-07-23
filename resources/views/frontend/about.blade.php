@extends('frontend.partial.app')
@section('content')
<section class="banner-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-7 text-md-start text-center">
                <h1 class="mb-3">ABOUT <span class="text-violet">US</span></h1>
                <p class="mb-4">BrandStory Academy is a trusted name in digital 
                    <span class="db">marketing education, helping professionals grow their </span>
                    <span class="db">skills, build successful careers, and stay ahead with 
                        <span class="db text-blue fw-600">continuous learning in a fast-changing world.</span></p>
                    <div class="violet-btn d-flex me-lg-5 mb-lg-0 mb-4 justify-content-md-start justify-content-center">
                        <a href="{{route('contact')}}">Enquire Now today!</a>
                    </div>
            </div>
            <div class="col-lg-4 col-md-5">
                <img class="w-100" src="{{asset('frontend/assets/images/about/about-banner.png')}}">
            </div>
        </div>
      
    </div>
</section>

<section class="youtubesec">
    <div class="container text-center">
        <div class="youtubemain position-relative">
            <img class="w-100" src="{{asset('frontend/assets/images/about/youtube-bg.svg')}}">
            <iframe src="https://www.youtube.com/embed/6hQiwD0eLsw?si=D8eiEd8Hfe3sPNlD" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>
</section>

<section class="edge-section sp-100">
    <div class="container">
        <h2 class="mb-3 text-center">What Gives Us <span class="text-violet">An Edge?</span></h2>
        <p class="mb-4 text-center">
            We offer a 
            <span style="display: inline-block; text-align: center;">
                <span style="color: #E83A25; display: block; line-height: 1;">Agency Worklife</span> 
                <span style="text-decoration: line-through; text-decoration-color: #E83A25;">digital marketing course</span>
            </span> 
            with expert mentorship, <span class="db">certification and practical work experience to begin your career.</span>
        </p>
        <div class="violet-btn d-flex text-center justify-content-center mb-5">
            <a href="{{route('contact')}}">Get started with Brandstory academy</a>
        </div>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="edge-main one text-white">
                    <img class="w-100 d-lg-none d-block mb-3" src="{{asset('frontend/assets/images/about/edge-mbl2.png')}}">
                    <span class="edgenum">10+</span>
                    <h3 class="mb-3 mt-2">Years of experience</h3>
                    <p class="mb-0">With over a decade of 
                        <span class="db">experience, we’ve mastered the </span>
                        <span class="db">digital marketing landscape and </span>
                        continuously adapt to new 
                        <span class="db">trends.</span></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="edge-main two text-white">
                    <img class="w-100 d-lg-none d-block mb-3" src="{{asset('frontend/assets/images/about/edge-mbl1.png')}}">
                    <span class="edgenum">66+</span>
                    <h3 class="mb-3 mt-2">Industry tools</h3>
                    <p class="mb-0">We work with top industry tools 
                        <span class="db">to give you hands-on </span>
                        <span class="db">experience with the latest </span>
                        digital marketing technologies.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="edge-main three text-white">
                    <img class="w-100 d-lg-none d-block mb-3" src="{{asset('frontend/assets/images/about/edge-mbl3.png')}}">
                    <span class="edgenum">8+</span>
                    <h3 class="mb-3 mt-2">Industry Experts</h3>
                    <p class="mb-0">Learn from a team of seasoned 
                        <span class="db">experts who bring real-world </span>
                        <span class="db">insights and strategies to the </span>table.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="edge-main four text-white">
                    <img class="w-100 d-lg-none d-block mb-3" src="{{asset('frontend/assets/images/about/edge-mbl4.png')}}">
                    <span class="edgenum">350+</span>
                    <h3 class="mb-3 mt-2">Industry problems</h3>
                    <p class="mb-0">We’ve solved over 350 real-
                        <span class="db">world challenges, empowering </span>
                        <span class="db">you to tackle the toughest </span>
                        problems in the industry.</p>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="dm-course-section spb-100">
    <div class="container">
        <div class="dm-course-main mt-5">
            <ul class="nav nav-pills mb-md-5 mb-4 d-flex justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-course1-tab" data-bs-toggle="pill" data-bs-target="#pills-course1" type="button" role="tab" aria-controls="pills-course1" aria-selected="true">Our story</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-course2-tab" data-bs-toggle="pill" data-bs-target="#pills-course2" type="button" role="tab" aria-controls="pills-course2" aria-selected="false">Vision</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-course3-tab" data-bs-toggle="pill" data-bs-target="#pills-course3" type="button" role="tab" aria-controls="pills-course3" aria-selected="false">Mission</button>
                </li>
            </ul>
            <div class="row">
                <div class="col-lg-6">
                    <img class="w-100 d-lg-block d-none" src="{{asset('frontend/assets/images/about/abouttab.jpg')}}">
                    <img class="w-100 d-lg-none d-block mb-3" src="{{asset('frontend/assets/images/about/abouttab-mbl.jpg')}}">
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="tab-content" id="pills-tabContent">
                        <!-- Course 1 start -->
                        <div class="tab-pane fade show active" id="pills-course1" role="tabpanel" aria-labelledby="pills-course1-tab">
                            <div class="abouttab-main">
                                <h3 class="text-violet mb-3">Our story</h3>
                                <p>BrandStory is a digital transformation company that helps businesses define their brand identity and expand in the growing digital market, boosting awareness, sales, and engagement.</p>
                                <p>With experience in Bangalore, Dubai, Singapore, and beyond, we're passionate about crafting your brand's digital journey.</p>
                                <p>At our digital marketing in bangalore, we didn't want to offer just another traditional digital marketing course. Instead, we aimed to create something unique an experience that goes beyond theory.</p>
                                <p class="mb-0">By blending expert mentorship, industry tools, and real-world work exposure, we focus on helping learners grow, adapt, and thrive in the ever-changing digital world.</p>
                            </div>
                        </div>
                        <!-- Course 1 End -->
        
                        <!-- Course 2 start -->
                        <div class="tab-pane fade" id="pills-course2" role="tabpanel" aria-labelledby="pills-course2-tab">
                            <div class="abouttab-main">
                                <h3 class="text-green mb-3">Vision</h3>
                                <p class="mb-0">At BSA, we strive to provide aspiring digital marketers with the right tools, mentorship, and experience to build successful careers and lead in the fast-paced digital landscape.</p>
                            </div>
                        </div>
                        <!-- Course 2 End -->
        
                        <!-- Course 3 Start -->
                        <div class="tab-pane fade" id="pills-course3" role="tabpanel" aria-labelledby="pills-course3-tab">
                            <div class="abouttab-main">
                                <h3 class="text-orange1 mb-3">Mission</h3>
                                <p class="mb-0">To inspire and nurture a community of digital marketing learners who not only gain knowledge but also work, innovate and gain knowledge.</p>
                            </div>
                        </div>
                        <!-- Course 3 End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="lear-frmus-sec">
    <div class="container">
        <h2 class="fs-42 mb-3">Do you want to learn from us?</h2>
        <img class="w-100 mb-lg-0 mb-3 d-lg-none d-block" src="{{asset('frontend/assets/images/about/learn-fromus-mbl.jpg')}}">
        <p class="mb-4">Discover the impact of digital marketing strategies with BrandStory 
            <span class="db">Academy and take your career to the next level today</span></p>
        <div class="violet-btn d-flex justify-content-lg-start justify-content-center">
            <a href="{{route('contact')}}">Start Your Application!</a>
        </div>
    </div>
</section>



@endsection