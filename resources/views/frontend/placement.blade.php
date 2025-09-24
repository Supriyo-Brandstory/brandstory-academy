@extends('frontend.partial.app')
@section('content')
<section class="banner-section" style="background: url('/frontend/assets/images/bg.png')">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-7 text-md-start text-center">
                <h1 class="mb-3">1000+ Students Launched <br>Their Careers with Top<br>Global Companies</h1>
             <div class="violet-btn d-flex me-lg-5 mb-lg-0 mb-4 justify-content-md-start justify-content-center">
                <a href="{{route('contact')}}">Enrol Now</a>
             </div>      
            </div>
            <div class="col-lg-4 col-md-5">
                <img class="w-100" src="{{asset('frontend/assets/images/placement/placement-banner.webp')}}" alt="placement banner">
            </div>
        </div>
      
    </div>
</section>
<section class="container">
    <div class="placement-description-section">
    <!-- <img class="w-100 h-100" src="{{asset('frontend/assets/images/placement/placement-bg.webp')}}" alt="image"> -->
    <div class="placement-description-container">
        At BrandStory Academy, we believe that the true measure of our success lies in the achievements of our students. Over the years, more than 1,000 learners have secured rewarding careers with leading global corporations, regional enterprises, and fast-growing startups.
        <br><br>
        Our dedicated training, internship, and placement support is designed to prepare students for the competitive job market, ensuring that they not only find employment but also launch careers that align with their passions and skills.
    </div>
</div> 
</section>

<section class="placement-alumini-section container">
    <div class="placement-alumini-container">
        <img src="{{asset('frontend/assets/images/placement/alumini-1.webp')}}" alt="alumini image">
        <p>
            Roshan Kumar
        </p>
        <img class="placement-logo" src="{{asset('frontend/assets/images/placement/airbnb.png')}}" alt="alumini image">
        <div class="placement-footer">
            <p>Fresher</p>
            <p style="color: #31ACFE;">AdWords Strategist</p>
        </div>
    </div>
    <div class="placement-alumini-container">
        <img src="{{asset('frontend/assets/images/placement/alumini-2.webp')}}" alt="alumini image">
        <p>Gowtham AG</p>
        <img class="placement-logo" src="{{asset('frontend/assets/images/placement/hubspot.png')}}" alt="hubspot logo">
        <div class="placement-footer">
            <p>Fresher</p>
            <p style="color: #2EE6CD;">Digital Marketing Executive</p>
        </div>
    </div>

    <div class="placement-alumini-container">
        <img src="{{asset('frontend/assets/images/placement/alumini-3.webp')}}" alt="alumini image">
        <p>Namitha Nambi</p>
        <img class="placement-logo" src="{{asset('frontend/assets/images/placement/amazon.png')}}" alt="amazon logo">
        <div class="placement-footer">
            <p>Fresher</p>
            <p style="color: #FFD700;">Advertising Ops Specialist</p>
        </div>
    </div>

    <div class="placement-alumini-container">
        <img src="{{asset('frontend/assets/images/placement/alumini-4.webp')}}" alt="alumini image">
        <p>Maria Sherly</p>
        <img class="placement-logo" src="{{asset('frontend/assets/images/placement/wallmart.png')}}" alt="walmart logo">
        <div class="placement-footer">
            <p>Fresher</p>
            <p style="color: #EC696A;">Campaign Specialist</p>
        </div>
    </div>

    <div class="placement-alumini-container">
        <img src="{{asset('frontend/assets/images/placement/alumini-5.webp')}}" alt="alumini image">
        <p>Harsha Srivastava</p>
        <img class="placement-logo" src="{{asset('frontend/assets/images/placement/ms.png')}}" alt="ms logo">
        <div class="placement-footer">
            <p>Fresher</p>
            <p style="color: #8280FF;">Digital Marketer</p>
        </div>
    </div>

    <div class="placement-alumini-container">
        <img src="{{asset('frontend/assets/images/placement/alumini-6.webp')}}" alt="alumini image">
        <p>Lahasya Reddy</p>
        <img class="placement-logo" src="{{asset('frontend/assets/images/placement/Fedex.png')}}" alt="fedex logo">
        <div class="placement-footer">
            <p>Fresher</p>
            <p style="color: #EA7D30;">Digital Marketing Executive</p>
        </div>
    </div>


</section>


<section class="sp-100">
        <div class="container">
            <div class="placement-partner">
                <p>Our Placement </p>
                <p style="color: #A184F9;">Partners</p>
            </div>
            <div class="swiper brandlogo1" data-aos="fade-up">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/placement/brand1.svg')}}"
                                class="img-fluid" alt="Our Partner Company for Placements">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/placement/brand2.svg')}}"
                                class="img-fluid" alt="Our Partner Company for Placements">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/placement/brand3.svg')}}"
                                class="img-fluid" alt="Our Partner Company for Placements">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/placement/brand4.svg')}}"
                                class="img-fluid" alt="Our Partner Company for Placements">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/placement/brand5.svg')}}"
                                class="img-fluid" alt="Our Partner Company for Placements">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/placement/brand6.svg')}}"
                                class="img-fluid" alt="Our Partner Company for Placements">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="{{asset('frontend/assets/images/placement/brand7.svg')}}"
                                class="img-fluid" alt="Our Partner Company for Placements">
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    @endsection