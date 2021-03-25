@extends('layouts.app')
@section('main')
<div class="main_content_inner">
    <div id="spinneroverlay"></div>
    <h1> Photos </h1>
    <div class="uk-flex uk-flex-between uk-flex-middle mb-4">
        <ul class="uk-width-expand" uk-tab>
            <li class="uk-active"><a href="#">Photos of you</a></li>
            <li><a href="#"> Your photos</a></li>
            <li class="uk-visible@s"><a href="#">Albums</a></li>
        </ul>
        <a href="#" class="button primary small circle uk-visible@s"> <i class="uil-plus"> </i>
            Create New Album </a>
    </div>
    <div class="uk-child-width-1-4@m uk-child-width-1-3@s uk-child-width-1-2 uk-grid-collapse uk-overflow-hidden"
        style="border-radius: 25px;  overflow: hidden;" uk-lightbox="animation: scale" uk-grid>
        @foreach($photos as $photo)
        <div>
            <a href="{{ asset('storage/uploads/photos/'.$photo->photo) }}" data-caption="Image caption">
                <div class="sl_photo_list" data-src="{{ asset('storage/uploads/photos/'.$photo->photo) }}" uk-img>
                    <div class="sl_photo_list-content">
                        <div>
                            <h4> Image description </h4>
                            <p> <span>Like </span>
                                <span> Comment </span>
                                <span> Share</span>
                            </p>
                        </div>
                        <div>
                            <span class="uil-cloud-download btn-down"></span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
