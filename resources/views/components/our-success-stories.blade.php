<section class="our_sucess_stories_section">
  <h2 class="text-center mb-md-5 mb-4">
    Our Success <span class="text-violet">Gallery</span>
  </h2>

  <div class="our_sucess_stories_wrap">
    <button class="our_sucess_stories_nav our_sucess_stories_prev" aria-label="Previous">‹</button>

    <div class="our_sucess_stories_track" id="our_sucess_stories_track">
      @foreach($videos as $video)
        <article class="our_sucess_stories_card">
          <div class="our_sucess_stories_player">
            <iframe src="{{ $video }}/embed" allowfullscreen scrolling="no" frameborder="0"></iframe>
          </div>
        </article>
      @endforeach
    </div>

    <button class="our_sucess_stories_nav our_sucess_stories_next" aria-label="Next">›</button>
  </div>
</section>

@push('styles')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/our-success-stories.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('frontend/assets/js/our-success-stories.js') }}"></script>
@endpush
