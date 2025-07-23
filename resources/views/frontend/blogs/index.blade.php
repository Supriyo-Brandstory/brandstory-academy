@extends('frontend.partial.app')
@section('content')

<style>
    .nav-item.dropdown:hover .dropdown-menu {
        display: block;
        transition: all 0.3s ease-in-out;
    }

    .carousel-item img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    .custom-btn {
        background: linear-gradient(90deg, #845EF7 0%, #5C27FE 100%);
        color: #fff;
        border: none;
        padding: 12px 26px;
        border-radius: 50px;
        font-weight: 600;
        font-size: 16px;
        transition: background 0.3s ease;
        width: max-content;
    text-decoration: none;
    }

    .custom-btn:hover {
        background: linear-gradient(90deg, #6f38e0 0%, #3f1dc4 100%);
    }

    .page-link {
        color: #5C27FE !important;
        font-weight: 500;
    }

    .active>.page-link,
    .page-link.active {
        background-color: #5C27FE !important;
        border-color: #5C27FE !important;
        color: #fff !important;
    }

    .nav-l {
        background: #f4f2fd;
        border-radius: 6px;
        padding: 2px 8px;
    }

    .nav-l a.nav-link {
        padding: 4px 10px;
        font-size: 16px;
        font-weight: 500;
        color: #2B2D42;
        text-transform: capitalize;
    }

    .con-fix {
        padding: 30px 37px 30px !important;
    }

    .con-fix2 {
        padding: 0px 27px 30px !important;
    }

    .row {
        margin: 0;
    }

    button.btn.btn-primary {
        height: 38px;
        background: linear-gradient(90deg, #845EF7 0%, #5C27FE 100%);
        border: none;
        font-weight: 500;
        padding: 0 20px;
        border-radius: 25px;
    }

    .blog-card {
        border-radius: 15px;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.06);
        background: #fff;
        transition: all 0.3s ease;
    }

    .blog-card:hover {
        transform: translateY(-6px);
    }

    .blog-card-img img {
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .blog-card-body {
        padding: 20px;
    }

    .blog-card-title {
        font-size: 18px;
        font-weight: 600;
        color: #2B2D42;
        line-height: 1.4;
    }

    .badge {
        background-color: #5C27FE;
        color: white;
        padding: 6px 12px;
        border-radius: 12px;
        font-size: 12px;
        font-weight: 500;
    }

    .time {
        font-size: 13px;
        color: #666;
        font-weight: 500;
    }

    @media (min-width: 992px) {
        .navbar-expand-lg .navbar-nav {
            flex-direction: row;
            gap: 10px;
        }
    }

    @media (max-width: 767px) {
        .custom-btn {
            padding: 10px 20px;
            font-size: 14px;
        }

        .col-4 {
            flex: 0 0 100%;
            max-width: 100%;
            margin-bottom: 15px;
        }

        .blog-card-img img {
            height: 180px;
        }
    }

    @media (max-width: 576px) {
        .carousel-caption-custom.xx {
            padding: 15px;
            bottom: 60%;
        }

        .con-fix2 {
            padding: 0px 0px 30px !important;
        }

        .blog-card-title {
            font-size: 16px;
        }
    }
</style>
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
