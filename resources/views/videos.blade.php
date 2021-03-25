@extends('layouts.app')
@section('main')
<div class="main_content_inner">
  <h1  class="mb-1"> Videos </h1>
  <ul class="uk-width-expand mb-3" uk-tab>
          <li class="uk-active"><a href="#">    Suggested Videos    </a></li>
          <li><a href="#">  Newest </a></li>
          <li class="uk-visible@s"><a href="#">  My Videos </a></li>
      </ul>
  <div class="section-small">
        <h3> Recently live streamers </h3>
        <div class="uk-position-relative" uk-slider="finite: true">
            <div class="uk-slider-container pb-3">
                <ul class="uk-slider-items uk-child-width-1-3@m uk-child-width-1-2@s  uk-grid-small uk-grid-match uk-grid"
                    uk-scrollspy="target: > div; cls: uk-animation-slide-bottom-small; delay: 100">
                    @foreach($videos as $video)
                    <li>
                      <div class="plyr__video-embed" id="player">
                        <iframe src="{{ asset('storage/uploads/videos/'.$video->video) }}" allowfullscreen allowtransparency></iframe>
                      </div>
                        <div class="uk-flex-middle uk-grid-small mt-2" uk-grid>
                            <div class="uk-width-auto"> <img src="{{ asset('frontendAssets') }}/assets/images/avatars/avatar-2.jpg" class="uk-border-circle" width="40" height="40" alt=""></div>
                            <div class="uk-width-expand pl-2">
                                <h5 class="mb-0"> User </h5>
                                <p class="uk-text-small">{{ $video->post_text }}</p>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
                <a class="uk-position-center-left-out uk-position-small uk-hidden-hover slidenav-prev" href="#"
                    uk-slider-item="previous"></a>
                <a class="uk-position-center-right-out uk-position-small uk-hidden-hover slidenav-next" href="#"
                    uk-slider-item="next"></a>
            </div>
        </div>
    </div>
  <div class="load-more">
        <button class="btn button mt-2">Load more Games</button>
    </div>
</div>
@endsection
