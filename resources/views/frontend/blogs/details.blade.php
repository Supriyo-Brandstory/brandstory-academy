@extends('frontend.partial.app')
@section('content')

<style>
    img.blogimg {
        max-width: 100%;
        object-fit: cover;
        height: auto;
        border-radius: 10px;
        margin-top: 15px;
    }
    p.card-text {
        margin: 0px 0px 0px 5px;
    }
    section.blog-section {
           margin: 7% auto 2%;
    }
    .bredcum {
        display: flex;
        background: #845ef742;
        width: auto;
        border-radius: 7px;
        align-items: center;
        justify-content: center;
        text-transform: capitalize;
        margin: 0px 10px;
    }
    .bredcum p {
        margin: 0;
        padding: 5px;
    }
    article.blog-content {
        margin-top: 10px;
        padding: 10px;
    }
    span.divider {
        margin: 0 8px;
        color: black;
    }
    .table-of-contents {
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin-top: 15px;
    }
    .table-of-contents h2 {
        font-size: 1.5rem;
        margin-bottom: 1rem;
    }
    .toc-item {
        margin: 5px 0;
    }
    .toc-level-1 {
        font-weight: bold;
    }
    .toc-level-2 {
        margin-left: 20px;
    }
    .toc-level-3 {
        margin-left: 40px;
    }
    .blog-content h1,
    .blog-content h2,
    .blog-content h3 {
        scroll-margin-top: 80px;
    }
    @media (max-width: 767px) {
        .bredcum {
            display: block;
            width: 93%;
            color: #845EF7
            text-decoration: none;
            word-wrap: break-word;
            word-break: break-word;
            overflow-wrap: break-word;
        }
        .hero-title {
            margin-bottom: 0px !important;
            margin-top: 18px;
        }
    }
    h1.hero-title.mb-1 {
        margin-top: 15px;
    }
    img {
        max-width: 100%;
    }
</style>

<section class="container blog-section">
    
    <div class="row">
        <div class="bredcum d-none d-md-block">
            <a href="{{route('blogsVaritaion', $blog->subCategory->category->slug)}}" style="color: #845EF7">{{$blog->category_name}}</a>
            <span class="divider">/</span>
            <a href="{{route('blogsVaritaion', $blog->subCategory->slug)}}" style="color: #845EF7">{{$blog->sub_category_name}}</a>
            <span class="divider">/</span>
            <a>{{$blog->title}}</a>
        </div>
    </div>
    <h1 class="hero-title mb-1 text-violet" style="text-align: left;">{{$blog->title}}</h1>
    <p class="card-text" style="text-align: left;">By <a href="" style="color: #845EF7">Manoj Kaliyannan</a> | {{ \Carbon\Carbon::parse($blog->created_at)->format('d F Y') }} | {{$blog->reding_time}} min read</p>
    <img src="{{asset('storage/'.$blog->image)}}" alt="{{$blog->title}}" class="blogimg d-block d-lg-none">

    <div class="row main blog">
        <div class="col-lg-8 order-last order-lg-first">
            <img src="{{asset('storage/'.$blog->image)}}" alt="{{$blog->title}}" class="blogimg d-none d-lg-block">
            <article class="blog-content">
                @php
                    $content = preg_replace_callback(
                        '/<h([1-3])>(.*?)<\/h[1-3]>/',
                        function ($matches) {
                            $level = $matches[1];
                            $title = $matches[2];
                            $id = Str::slug(strip_tags($title));
                            return "<h$level id='$id'>$title</h$level>";
                        },
                        $blog->content
                    );
                    echo $content;
                @endphp
            </article>
        </div>

        <div class="col-lg-4 order-first order-lg-last d-none d-md-block">
            <div class="table-of-contents">
                <h2>Table of Contents</h2>
                <ul id="toc">
                    @php
                        $content = $blog->content;
                        preg_match_all('/<h([1-3])>(.*?)<\/h[1-3]>/', $content, $matches, PREG_SET_ORDER);
                        foreach ($matches as $match) {
                            $level = $match[1];
                            $title = strip_tags($match[2]);
                            $slug = Str::slug($title);
                            echo "<li class='toc-item toc-level-$level'><a href='#$slug' style='color: #845EF7'>$title</a></li>";
                        }
                    @endphp
                </ul>
            </div>
        </div>
    </div>
</section>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const tocLinks = document.querySelectorAll("#toc a");
        tocLinks.forEach(link => {
            link.addEventListener("click", function (e) {
                e.preventDefault();
                const targetId = this.getAttribute("href").substring(1);
                const targetElement = document.getElementById(targetId);

                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: "smooth"
                    });
                }
            });
        });
    });
</script>

@endsection
