@extends('layouts.app')
@section('main')
<div class="main_content_inner">
  <div class="uk-section uk-section-primary uk-padding-small uk-margin-bottom">
      <div class="uk-position-relative">
        <ul class="uk-flex-left" uk-tab>
            <li class="uk-active"><a href="articles.html">My articles</a></li>
            <li><a href="{{ route('blogs') }}">Browse articles</a></li>
        </ul>
        <a href="{{ route('create-blog') }}" class="uk-position-right uk-padding-top"><button class="uk-button uk-button-primary uk-button-small"><i class="uil-plus"></i> Create</button></a>
      </div>
  </div>
  <div class="uk-card uk-card-default uk-card-body uk-margin-bottom">
      <div class="uk-child-width-1-1@m" uk-grid>
        <div class="">
          @foreach($blogs as $blog)
            <div class="uk-inline">
                <img class="uk-border-rounded" src="{{ asset('storage/uploads/photos/'.$blog->image) }}" alt="Example image">
                <div class="uk-overlay-default uk-position-cover uk-border-rounded" style="opacity: 0.2"></div>
                <div class="uk-overlay uk-position-top" style="color: #fff;">
                    <p>{{ $blog->title }}</p>
                </div>
            </div>
          @endforeach
        </div>
      </div>
  </div>
</div>
@endsection
