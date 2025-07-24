<header class="mainheader">
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="{{route('home')}}">
		<img src="{{asset('frontend/assets/images/header-logo.svg')}}">
	</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 justify-content-lg-end align-items-lg-center pt-lg-0 pt-4">
        <li class="nav-item mb-lg-0 mb-3">
          <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item mb-lg-0 mb-3">
          <a class="nav-link" href="{{route('about')}}">About</a>
        </li>
        <li class="nav-item dropdown mb-lg-0 mb-3">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		  	Course
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{route('course_digital_marketing')}}">Digital Marketing Mastery</a></li>
            <li><a class="dropdown-item" href="{{route('advanced_digital_marketing_boot_camp')}}">Advanced Digital Marketing Boot Camp</a></li>
            <li><a class="dropdown-item" href="{{route('course_360_degree_digital_marketing')}}">360 Degree Digital Marketing</a></li>
          </ul>
        </li>
		<li class="nav-item mb-lg-0 mb-3">
          <a class="nav-link" href="{{route('blogs')}}">Blogs</a>
        </li>
		<li class="nav-item headerbtn">
			<a class="nav-link" href="{{route('contact')}}">Contact Us</a>
		<li>
      </ul>
    </div>
  </div>
</nav>
</header>