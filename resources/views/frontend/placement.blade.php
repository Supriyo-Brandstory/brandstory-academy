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
    @endsection