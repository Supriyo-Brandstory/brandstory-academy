@extends('frontend.partial.app')
@section('content')
<section class="banner-section" style="background: url('/frontend/assets/images/bg.png')">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-7 text-md-start text-center">
                <h1 class="mb-3">Gallery - <span class="text-violet">BrandStory Academy</span></h1>
                <p class="mb-4">Welcome to the BrandStory Academy Gallery, a showcase of our 
                  <span class="db">state-of-the-art learning environment, inspiring moments, and the</span>
                  <span class="db">success stories of our students. Know how we create a dynamic</span>
                  <span class="db">space for aspiring professionals to build skills, gain confidence, and </span>
                  <span class="db">shape their future in the digital era.</span>
                   
            </div>
            <div class="col-lg-4 col-md-5">
                <img class="w-100" src="{{asset('frontend/assets/images/gallerybanner.webp')}}">
            </div>
        </div>
      
    </div>
</section>
<section class="placement-description-section container">
    <!-- <img class="w-100 h-100" src="{{asset('frontend/assets/images/placement/placement-bg.webp')}}" alt="image"> -->
    <div class="placement-description-container">
        At BrandStory Academy, we believe that the true measure of our success lies in the achievements of our students. Over the years, more than 3,000 learners have secured rewarding careers with leading global corporations, regional enterprises, and fast-growing startups.
        <br><br>
        Our dedicated training, internship, and placement support is designed to prepare students for the competitive job market, ensuring that they not only find employment but also launch careers that align with their passions and skills.
    </div>
</section>

<section class="placement-alumini-section container">
    <div class="placement-alumini-container">
        <img src="{{asset('frontend/assets/images/placement/alumini-1.webp')}}" alt="alumini image">
        <p>
            Namitha Nambi
        </p>
        <img class="placement-logo" src="{{asset('frontend/assets/images/placement/airbnb.png')}}" alt="alumini image">
        <div class="placement-footer">
            <p>Fresher</p>
            <p style="color: #31ACFE;">AdWords Strategist</p>
        </div>
    </div>
    <div class="placement-alumini-container">
        <img src="{{asset('frontend/assets/images/placement/alumini-2.webp')}}" alt="alumini image">
        <p>Namitha Nambi</p>
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
        <p>Namitha Nambi</p>
        <img class="placement-logo" src="{{asset('frontend/assets/images/placement/wallmart.png')}}" alt="walmart logo">
        <div class="placement-footer">
            <p>Fresher</p>
            <p style="color: #EC696A;">Campaign Specialist</p>
        </div>
    </div>

    <div class="placement-alumini-container">
        <img src="{{asset('frontend/assets/images/placement/alumini-5.webp')}}" alt="alumini image">
        <p>Namitha Nambi</p>
        <img class="placement-logo" src="{{asset('frontend/assets/images/placement/ms.png')}}" alt="ms logo">
        <div class="placement-footer">
            <p>Fresher</p>
            <p style="color: #8280FF;">Digital Marketer</p>
        </div>
    </div>

    <div class="placement-alumini-container">
        <img src="{{asset('frontend/assets/images/placement/alumini-6.webp')}}" alt="alumini image">
        <p>Namitha Nambi</p>
        <img class="placement-logo" src="{{asset('frontend/assets/images/placement/fedex.png')}}" alt="fedex logo">
        <div class="placement-footer">
            <p>Fresher</p>
            <p style="color: #EA7D30;">Digital Marketing Executive</p>
        </div>
    </div>


</section>


<!-- <section class="placement-partner-section container">
    <div class="placement-partner">
        <p>Our Placement </p>
        <p style="color: #A184F9;">Partners</p>
    </div>
    <p>
        We are proud to collaborate with some of the most respected names in the industry. Our network of placement partners includes technology leaders, global MNCs, creative agencies, eCommerce innovators, and consulting firms, all of whom trust the quality of talent nurtured at BrandStory Academy.
    </p>

    <div class="placement-logos">
        <div class="logo-row">
            <img src="{{asset('frontend/assets/images/placement/airbnb.png')}}" alt="airbnb logo">
            <img src="{{asset('frontend/assets/images/placement/hubspot.png')}}" alt="hubspot logo">
            <img src="{{asset('frontend/assets/images/placement/google.png')}}" alt="google logo">
            <img src="{{asset('frontend/assets/images/placement/ms.png')}}" alt="ms logo">
            <img src="{{asset('frontend/assets/images/placement/wallmart.png')}}" alt="walmart logo">
            <img src="{{asset('frontend/assets/images/placement/fedex.png')}}" alt="fedex logo">
        </div>
        <div class="logo-row">
            <img src="{{asset('frontend/assets/images/placement/airbnb.png')}}" alt="airbnb logo">
            <img src="{{asset('frontend/assets/images/placement/hubspot.png')}}" alt="hubspot logo">
            <img src="{{asset('frontend/assets/images/placement/google.png')}}" alt="google logo">
            <img src="{{asset('frontend/assets/images/placement/ms.png')}}" alt="ms logo">
            <img src="{{asset('frontend/assets/images/placement/wallmart.png')}}" alt="walmart logo">
            <img src="{{asset('frontend/assets/images/placement/fedex.png')}}" alt="fedex logo">
        </div>
        <div class="logo-row">
            <img src="{{asset('frontend/assets/images/placement/airbnb.png')}}" alt="airbnb logo">
            <img src="{{asset('frontend/assets/images/placement/hubspot.png')}}" alt="hubspot logo">
            <img src="{{asset('frontend/assets/images/placement/google.png')}}" alt="google logo">
            <img src="{{asset('frontend/assets/images/placement/ms.png')}}" alt="ms logo">
            <img src="{{asset('frontend/assets/images/placement/wallmart.png')}}" alt="walmart logo">
            <img src="{{asset('frontend/assets/images/placement/fedex.png')}}" alt="fedex logo">
        </div> 
    </div>
</section> -->

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
                            <img src="https://brandstory.in/resources/digital/assets/images/video-production/brand1.svg"
                                class="img-fluid" alt="Our Partner Company for Placements">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="https://brandstory.in/resources/digital/assets/images/video-production/brand2.svg"
                                class="img-fluid" alt="Our Partner Company for Placements">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="https://brandstory.in/resources/digital/assets/images/video-production/brand3.svg"
                                class="img-fluid" alt="Our Partner Company for Placements">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="https://brandstory.in/resources/digital/assets/images/video-production/brand4.svg"
                                class="img-fluid" alt="Our Partner Company for Placements">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="https://brandstory.in/resources/digital/assets/images/video-production/brand5.svg"
                                class="img-fluid" alt="Our Partner Company for Placements">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="https://brandstory.in/resources/digital/assets/images/video-production/brand6.svg"
                                class="img-fluid" alt="Our Partner Company for Placements">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brandsmain">
                            <img src="https://brandstory.in/resources/digital/assets/images/video-production/brand7.svg"
                                class="img-fluid" alt="Our Partner Company for Placements">
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

        <style>
            .placement-description-section{
                padding: 50px 50px;
                margin: 70px auto;
                background: url('/frontend/assets/images/placement/description-bg.webp');
                background-size: contain;
                background-repeat: no-repeat;
                border-radius: 20px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
                display: flex;
                flex-direction: row;
                justify-content: right;
                align-items: right;
            }
            .placement-description-container{
                width: 50%;
                color: #444242;
            }
            @media (max-width: 786px) {
                .placement-description-section{
                    background-size: 200%;
                    padding: 0px 20px 20px 20px;
                    /* margin-left: 10px; */
                    width: calc(100% - 20px);
                }
                .placement-description-container{
                    width: 100%;
                    margin-top: 250px;
                }
            }

            .placement-alumini-section {
              display: grid;
              grid-template-columns: repeat(auto-fit, minmax(310px, 1fr));
              gap: 20px;
            }
            .placement-alumini-container {
              border: 1px solid #ddd;
              border-radius: 20px;
              text-align: center;
              background: #fff;
              width: 100%;
              box-sizing: border-box;
              display: flex;
              flex-direction: column;
              align-items: center;
              gap: 12px;
            }

            .placement-alumini-container img {
              max-width: 100%;
              border-radius: 20px;
              height: auto;
              object-fit: contain;
              margin-bottom: 10px;
            }

            .placement-alumini-container p {
              margin: 10px 0;
              font-weight: 600;
              font-size: 1.1rem;
            }

            .placement-logo{
                border-radius: 0px !important;
                width: 100px;
                height: 25px !important;
                object-fit: contain !important;

            }
            .placement-footer{
                width: 100% ;
                border-top: 1px solid #ddd;
                display: flex;
                flex-direction: row;
                justify-content: center;
                padding: 10px 0px;
                margin: 0px 10px;
            }

            .placement-footer p{
                font-size: 18px;
                font-weight: normal;
                margin: 0px 5px;
            }


            /* placement partner */
            /* .placement-partner-section{
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                gap: 50px;
            }
            .placement-partner-section p{
                max-width: 885px;
                font-size: 18px;
                color: #444242;
                text-align: center;
                line-height: 1.3;
            } */
            .placement-partner{
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: center;
            }
            .placement-partner p{
                margin: 50px 4px;
                font-size: 38px;
                font-weight: 500;
            }

            @media (max-width: 786px) {
                
                .placement-partner p{
                    font-size: 28px;
                    margin: 20px 5px;
                }                
            }

            /* .placement-logos {
                width: 100%;
                display: flex;
                flex-direction: column;
                gap: 60px;
                border-top: 1px solid #ddd;
                border-bottom: 1px solid #ddd;
                padding: 60px 0;
                box-sizing: border-box;
                margin-bottom: 100px;
            }

            .logo-row {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
                gap: 30px;
                width: 100%;
            }

            .logo-row img {
                max-height: 30px;
                width: auto;
                object-fit: contain;
                flex: 0 1 100px;
            }

            @media (max-width: 768px) {
                .placement-logos {
                    gap: 20px;
                    padding: 10px 0;
                }
                .logo-row {
                    gap: 15px;
                }
                .logo-row img {
                    max-height: 24px;
                    flex: 0 1 60px;
                }
            } */


        </style>
    @endsection