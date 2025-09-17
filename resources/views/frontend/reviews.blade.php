@extends('frontend.partial.app')
@section('content')
    <section class="banner-section" style="background: url('/frontend/assets/images/review-bg.png'); background-size: cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 text-md-start text-center">
                    <h1 class="mb-3">BrandStory <span class="text-violet">Academy Reviews</span></h1>
                    <p class="mb-4"><span class="text-blue fw-600">At BrandStory Academy, our success speaks louder than words. Through hands-on training, live projects, expert mentorship, and dedicated placement support, we have empowered countless learners to transform their careers. </p>
                    <div class="d-lg-flex align-items-center">
                        <div class="violet-btn d-flex me-lg-5 mb-lg-0 mb-4 justify-content-md-start justify-content-center">
                            <a href="#testimony">See All Reviews</a>
                        </div>
                        <div class="student-main mb-md-0 mb-5">
                            <img class="mb-1" src="{{asset('frontend/assets/images/home/students.webp')}}"
                                alt="Our Students - BrandStory Academy">
                            <p class="mb-0 fs-12">Trusted by 1000+ Students</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <img class="img-fluid" style="width: 70%" src="{{asset('frontend/assets/images/review-banner.webp')}}"
                        alt="Digital Marketing training Institute in Bangalore - BrandStory Academy">
                </div>
            </div>

        </div>
    </section>
    <section class="testimonial-section" id="testimony">
        <h2 class="text-center mb-4">See What Our <span class="text-violet">Alumni Say</span></h2>
        <div class="testimonial-row left-to-right">
            <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>Recently had the pleasure of experiencing BrandStory Academy, and I must say, it exceeded my expectations. From the moment I enrolled, the academy’s dedication to nurturing professional growth and providing high-quality education was evident.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Jerophin Jeevitha
                </div>
            </div>
             <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>BrandStory Academy offers a strong foundation in digital marketing through a hands-on approach. Right from the start, I worked on real agency projects, gaining practical experience that many other courses lack. The six-month internship following the course was a transformative experience, allowing me to refine my skills in a real work environment.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Sandra R
                </div>
            </div>
             <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>I recently completed my Digital Marketing course at Brandstory Academy, and it was an excellent choice for my professional growth. The program was structured effectively, addressing all the key components of digital marketing. What impressed me the most was the 6-month internship offered with Brandstory Digital Marketing company.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Ayesha Ms
                </div>
            </div>
             <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>BrandStory Academy stands out for its focus on practical training, engaging students with real client projects from day one for an immersive learning experience. The trainers are both knowledgeable and approachable, and the extended six-month internship offers valuable industry exposure. It’s an excellent place to start a career in digital marketing!</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Maria Sherly
                </div>
            </div>
             <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>Enrolling at Brandstory Academy was an eye-opening experience. The course combines academic rigor with hands-on practice for the Indian market. With dedicated mentors and real projects, my digital marketing skills have flourished, inspiring my ambitions.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Gowtham AG
                </div>
            </div> 
            <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>Brandstory Academy is a leading digital marketing institute with a practical curriculum. They teach the fundamentals of digital marketing, offer a 6-month internship, and assist with placements. Joining is a decision you won’t regret.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Shobika Akilan
                </div>
            </div>
            
            <!-- duplicate for smooth infinite loop -->
            <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>Recently had the pleasure of experiencing BrandStory Academy, and I must say, it exceeded my expectations. From the moment I enrolled, the academy’s dedication to nurturing professional growth and providing high-quality education was evident.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Jerophin Jeevitha
                </div>
            </div>
             <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>BrandStory Academy offers a strong foundation in digital marketing through a hands-on approach. Right from the start, I worked on real agency projects, gaining practical experience that many other courses lack. The six-month internship following the course was a transformative experience, allowing me to refine my skills in a real work environment.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Sandra R
                </div>
            </div>
             <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>I recently completed my Digital Marketing course at Brandstory Academy, and it was an excellent choice for my professional growth. The program was structured effectively, addressing all the key components of digital marketing. What impressed me the most was the 6-month internship offered with Brandstory Digital Marketing company.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Ayesha Ms
                </div>
            </div>
             <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>BrandStory Academy stands out for its focus on practical training, engaging students with real client projects from day one for an immersive learning experience. The trainers are both knowledgeable and approachable, and the extended six-month internship offers valuable industry exposure. It’s an excellent place to start a career in digital marketing!</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Maria Sherly
                </div>
            </div>
             <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>Enrolling at Brandstory Academy was an eye-opening experience. The course combines academic rigor with hands-on practice for the Indian market. With dedicated mentors and real projects, my digital marketing skills have flourished, inspiring my ambitions.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Gowtham AG
                </div>
            </div> 
            <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>Brandstory Academy is a leading digital marketing institute with a practical curriculum. They teach the fundamentals of digital marketing, offer a 6-month internship, and assist with placements. Joining is a decision you won’t regret.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Shobika Akilan
                </div>
            </div>
        </div>

        <div class="testimonial-row right-to-left">
            <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>Brandstory Academy has greatly enhanced my career. Their digital marketing course combines theoretical knowledge with practical projects focused on the Indian market. With their expert guidance, I now feel ready to excel in the digital world.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Anand G
                </div>
            </div>
             <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>Brandstory Academy's 6-month internship was a pivotal moment in my career. I gained hands-on experience working on live projects with top brands, and the expert mentorship helped me excel in digital marketing and secure my future.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Stuart Nithin
                </div>
            </div>
             <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>Brandstory's digital marketing course reflected their years of experience in the field. Instead of opting a course in an educational institution, acquiring practical knowledge and skills from an agency with inhand experience, helped me to experience the real world of digital marketing. The course stood by its advertisements and its name.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Nicholina Sandra
                </div>
            </div>
             <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>This academy in Bangalore is one of the best, featuring a supportive culture and passionate, dedicated trainers. The up-to-date curriculum, combined with a 6-month internship, greatly aids in skill development and securing the right job. Their placement support from the very beginning makes the journey even smoother.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Vishnu Vijayakumar
                </div>
            </div>
             <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>I recently completed my digital marketing course at this institution and I am very satisfied. I highly recommend them if you are a fresher because they are providing a 6-month internship with Brandstory company.  </p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Jachin Bakhtsingh
                </div>
            </div>
             <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>One of the best digital marketing course provider in bangalore. They cover all areas of digital marketing and start the courses from the beginner levels as well as advanced levels. It was really fun learning from Brandstory academy. </p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Prethasha K.R
                </div>
            </div>
         
            <!-- duplicate -->
            <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>I recently completed my Digital Marketing course at Brandstory Academy, and it was an excellent choice
                    for my professional growth. The program was structured effectively, addressing all the key components of
                    digital marketing. What impressed me the most was the 6-month internship offered with Brandstory Digital
                    Marketing company.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Ayesha Ms
                </div>
            </div>
            <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>I recently completed my Digital Marketing course at Brandstory Academy, and it was an excellent choice
                    for my professional growth. The program was structured effectively, addressing all the key components of
                    digital marketing. What impressed me the most was the 6-month internship offered with Brandstory Digital
                    Marketing company.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Ayesha Ms
                </div>
            </div>
             <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>I recently completed my Digital Marketing course at Brandstory Academy, and it was an excellent choice
                    for my professional growth. The program was structured effectively, addressing all the key components of
                    digital marketing. What impressed me the most was the 6-month internship offered with Brandstory Digital
                    Marketing company.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Ayesha Ms
                </div>
            </div>
             <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>I recently completed my Digital Marketing course at Brandstory Academy, and it was an excellent choice
                    for my professional growth. The program was structured effectively, addressing all the key components of
                    digital marketing. What impressed me the most was the 6-month internship offered with Brandstory Digital
                    Marketing company.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Ayesha Ms
                </div>
            </div>
             <div class="testimonial">
                <img src="{{asset('frontend/assets/images/quoteicon.png')}}" class="img-fluid mb-4" width="40">
                <p>I recently completed my Digital Marketing course at Brandstory Academy, and it was an excellent choice
                    for my professional growth. The program was structured effectively, addressing all the key components of
                    digital marketing. What impressed me the most was the 6-month internship offered with Brandstory Digital
                    Marketing company.</p>
                <div class="d-flex align-items-center g-4">
                    <div class="profile"></div>
                    Ayesha Ms
                </div>
            </div>
        </div>
    </section>
    <div class="spb-100">
       <x-our-success-stories :videos="[
  'https://www.instagram.com/p/DNiDU0ExHZI',
  'https://www.instagram.com/p/DNk72CQRPXZ',
  'https://www.instagram.com/p/DNpgwppR5qy',
  'https://www.instagram.com/p/DLsC-H9xQVg'
]" />
    </div>
    <style>
        .profile {
            background: #FFC700;
            padding: 20px;
            border-radius: 20px;
            margin: 5px;
        }

        .testimonial-section {
            overflow: hidden;
            width: 100%;
            background: #fff;
            padding: 100px 0;
        }

        .testimonial-row {
            display: flex;
            gap: 20px;
            width: max-content;
            padding: 20px 0;
        }

        .testimonial {
            min-width: 597px;
            /* adjust card width */
            min-height: 200px;
            background: #f9f9f9;
            border-radius: 12px;
            padding: 20px;
            max-width: 597px;
            /* adjust card width */
            box-shadow: 0px 0px 10px 0px #0000001A;
            border: 1px solid #E8E8E8;


        }

        .testimonial p {
            font-size: 14px;
            color: #7F7796;
        }

        /* Animation left-to-right */
        .left-to-right {
            animation: scroll-left 20s linear infinite;
        }

        @keyframes scroll-left {
            from {
                transform: translateX(-50%);
            }

            to {
                transform: translateX(0);
            }
        }

        /* Animation right-to-left */
        .right-to-left {
            animation: scroll-right 20s linear infinite;
        }

        @keyframes scroll-right {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }
    </style>
@endsection