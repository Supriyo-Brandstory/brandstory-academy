  <div class="row con-fix2">
    <h2 class="text-center mb-md-5 mb-4">Latest <span class="text-violet">Blog</span></h2>
        @foreach ($blogs as $blog)
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
        <div class="text-center">
            <button class="btn btn-primary" onclick="window.location.href='{{ route('blogs') }}'">View All Blogs</button>
        </div>
    </div>