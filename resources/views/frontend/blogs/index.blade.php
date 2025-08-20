@extends('frontend.partial.app')
@section('content')


@if(isset($latestBlogs) && count($latestBlogs) > 0)
<section class="privacy-policy-banner mt-1">
    <div class="container">
        @foreach ($latestBlogs as $key => $blog)
        <div class="row bannerRow g-4">
            <div class="col-lg-7 col-12 d-flex justify-content-center flex-column pe-lg-5">
            
                <h2 class="text-violet">{{ $blog->title }}</h2>
                
               <p class="fs-16">{{ \Illuminate\Support\Str::limit(strip_tags($blog->content), 300) }}</p>

                    <a href="{{ route('blogsVaritaion', $blog->slug) }}" class="custom-btn">Know More</a>

            </div>
            <div class="col-lg-5 col-12 d-flex justify-content-center">
                <img src="{{ asset('storage/' .$blog->image ?? 'default-image.jpg') }}" class="img-fluid" alt="">
            </div>
        </div>
        @endforeach
    </div>
</section>
@else
<section class="privacy-policy-banner mt-1">
    <div class="container">
        <div class="row bannerRow g-4">
            <div class="col-lg-7 col-12 d-flex justify-content-center flex-column pe-lg-5">
            
              @if(request('search'))
        <h2 style="text-transform: uppercase;">Search Results</h2>
        @elseif(isset($category))
        <h2 style="text-transform: uppercase;">{{$category->name}}</h2>
        <p style="text-transform: capitalize;">{{$category->description}}</p>
        @else
        <h2 style="text-transform: uppercase;">Coming Soon</h2>
        <p style="text-transform: capitalize;">We are working on this section, please check back later.</p>
        @endif
            </div>
            <div class="col-lg-5 col-12 d-flex justify-content-center">
                
            </div>
        </div>
    </div>
</section>

@endif

{{-- Navigation Section --}}
@if(isset($categories) && count($categories) > 0)
<section class="px-2 px-md-5 d-none d-lg-block">
    <nav class="navbar navbar-expand-lg navbar-light con-fix">
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item nav-l">
                    <a class="nav-link active" aria-current="page" href="{{ route('blogs') }}">All</a>
                </li>

                @foreach ($categories as $category)
                @if ($category->subCategories->count())
                <li class="nav-item dropdown nav-l">
                    <a class="nav-link dropdown-toggle" href="{{ route('blogsVaritaion', $category->slug) }}">
                        {{ $category->name }} +
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($category->subCategories as $subCategory)
                        <li><a class="dropdown-item" href="{{ route('blogsVaritaion', $subCategory->slug) }}">{{ $subCategory->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                @else
                <li class="nav-item nav-l">
                    <a class="nav-link" href="{{ route('blogsVaritaion', $category->slug) }}">{{ $category->name }}</a>
                </li>
                @endif
                @endforeach
            </ul>

          <form method="GET" action="{{ route('blogs') }}" class="mb-4">
    <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="Search blogs..." value="{{ request()->input('search') }}">
        <button class="btn btn-primary" type="submit">Search</button>
    </div>
</form>

        </div>
    </nav>
</section>
@endif

{{-- Blogs Section --}}
@if(isset($allBlogs) && count($allBlogs) > 0)
<section class="px-2 px-md-5">
    <form method="GET" action="{{ route('blogs') }}" class="mb-4 d-block d-lg-none px-2 mt-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search blogs..." value="{{ request()->input('search') }}">
            <button class="btn btn-primary" type="submit">Search</button>
        </div>
    </form>
    <div class="row con-fix2">
        @foreach ($allBlogs as $blog)
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
            <a href="{{ route('blogsVaritaion', $blog->slug) }}" style="text-decoration: none;">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                    </div>
                    <div class="blog-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge">{{ strtoupper($blog->topic) }}</span>
                            <span class="time">{{ $blog->reding_time }} mins 🕘</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="blog-card-title mb-0">{{ $blog->title }}</h5>
                            <a href="{{ route('blogsVaritaion', $blog->slug) }}" style="color: #e43d12;">Read More</a>
                        </div>
                        
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center mt-4">
        {{ $allBlogs->links() }}
    </div>
</section>
@endif

{{-- Dropdown Hover Fix --}}
<script>
    document.querySelectorAll('.nav-item.dropdown').forEach(item => {
        item.addEventListener('mouseover', () => item.querySelector('.dropdown-menu')?.classList.add('show'));
        item.addEventListener('mouseleave', () => item.querySelector('.dropdown-menu')?.classList.remove('show'));
    });
</script>

@endsection
