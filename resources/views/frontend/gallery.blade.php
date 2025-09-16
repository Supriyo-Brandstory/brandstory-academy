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
    <section class="dm-course-section sp-100">
        <div class="container">
          
            <div class="dm-course-main mt-5">
                <ul class="nav nav-pills mb-md-5 mb-4 d-flex justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-course1-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-course1" type="button" role="tab" aria-controls="pills-course1"
                            aria-selected="true">Learning in Action - Classroom</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-course2-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-course2" type="button" role="tab" aria-controls="pills-course2"
                            aria-selected="false">Student Engagement</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-course3-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-course3" type="button" role="tab" aria-controls="pills-course3"
                            aria-selected="false">Events & Workshops</button>
                    </li>
                </ul>
                 <h2 class="text-center db"> Learning in Action - <span class="text-violet">Classroom</span></h2>
            <p class="max-1000 text-center my-5">At <span class="fw-600">BrandStory Academy</span>, our classrooms are designed to foster collaboration and hands-on experience. From interactive lectures to real-world projects, our gallery captures the energy and enthusiasm that define every session at BrandStory Academy.</p>
                <div class="tab-content" id="pills-tabContent">
                    <!-- Course 1 start -->
                    <div class="tab-pane fade show active" id="pills-course1" role="tabpanel"
                        aria-labelledby="pills-course1-tab">
                     <div class="row">
                      <div class="col-4">
                        <img src="{{asset('frontend/assets/images/gallery/gallery-1.webp')}}" class="img-fluid" />
                        <img src="{{asset('frontend/assets/images/gallery/gallery-2.webp')}}" class="img-fluid mt-4"/>

                      </div>
                      <div class="col-4">
                         <img src="{{asset('frontend/assets/images/gallery/gallery-3.webp')}}" class="img-fluid"/>
                        <img src="{{asset('frontend/assets/images/gallery/gallery-4.webp')}}" class="img-fluid mt-4"/>
                      </div>
                      <div class="col-4">
                          <img src="{{asset('frontend/assets/images/gallery/gallery-5.webp')}}" class="img-fluid"/>
                        <img src="{{asset('frontend/assets/images/gallery/gallery-6.webp')}}" class="img-fluid mt-4"/>
                  
                      </div>
                     </div>
                    </div>
                    <!-- Course 1 End -->

                    <!-- Course 2 start -->
                    <div class="tab-pane fade" id="pills-course2" role="tabpanel" aria-labelledby="pills-course2-tab">
                        <div class="row">
                      <div class="col-4">
                        <img src="{{asset('frontend/assets/images/gallery/gallery-7.webp')}}" class="img-fluid" />
                        <img src="{{asset('frontend/assets/images/gallery/gallery-8.webp')}}" class="img-fluid mt-4"/>

                      </div>
                      <div class="col-4">
                         <img src="{{asset('frontend/assets/images/gallery/gallery-9.webp')}}" class="img-fluid"/>
                        <img src="{{asset('frontend/assets/images/gallery/gallery-10.webp')}}" class="img-fluid mt-4"/>
                      </div>
                      <div class="col-4">
                          <img src="{{asset('frontend/assets/images/gallery/gallery-11.webp')}}" class="img-fluid"/>
                        <img src="{{asset('frontend/assets/images/gallery/gallery-12.webp')}}" class="img-fluid mt-4"/>
                  
                      </div>
                     </div>
                    </div>
                    <!-- Course 2 End -->

                    <!-- Course 3 Start -->
                    <div class="tab-pane fade" id="pills-course3" role="tabpanel" aria-labelledby="pills-course3-tab">
                       <div class="row">
                      <div class="col-4">
                        <img src="{{asset('frontend/assets/images/gallery/gallery-13.webp')}}" class="img-fluid" />
                        <img src="{{asset('frontend/assets/images/gallery/gallery-6.webp')}}" class="img-fluid mt-4"/>

                      </div>
                      <div class="col-4">
                         <img src="{{asset('frontend/assets/images/gallery/gallery-14.webp')}}" class="img-fluid"/>
                        <img src="{{asset('frontend/assets/images/gallery/gallery-15.webp')}}" class="img-fluid mt-4"/>
                      </div>
                      <div class="col-4">
                          <img src="{{asset('frontend/assets/images/gallery/gallery-17.webp')}}" class="img-fluid"/>
                        <img src="{{asset('frontend/assets/images/gallery/gallery-16.webp')}}" class="img-fluid mt-4"/>
                  
                      </div>
                     </div>
                    </div>
                    <!-- Course 3 End -->
                </div>
            </div>
        </div>
    </section>

@endsection