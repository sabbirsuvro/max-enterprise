@extends('frontend.layout.app')

@section('content')
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('frontend/img/bg/breadcrumb-bg.jpg') }}">
        <div class="breadcrumb-bottom-shape"><img src="{{ asset('frontend/img/bg/breadcrumb-bottom.png') }}" alt="shape" />
        </div>
        <div class="shape-mockup breadcrumb-left jump-reverse"><img src="{{ asset('frontend/img/icon/breadcrumb-left.png') }}"
                alt="shape" />
        </div>
        <div class="shape-mockup breadcrumb-right jump"><img src="{{ asset('frontend/img/icon/breadcrumb-right.png') }}"
                alt="shape" />
        </div>
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Project video</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Project video</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="testi-card-area-2 overflow-hidden space" id="testi-sec">
        <div class="shape-mockup testimonials-bg-3" data-right="0"><img
                src="{{ asset('frontend/img/shape/testimonials-bg-3.png') }}" alt="Image" /></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-7 col-lg-7 col-md-8">
                    <div class="title-area text-center">
                        <span class="sub-title justify-content-center">Project video</span>
                        <h2 class="sec-title">Video About our Project</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-40 justify-content-center">
@foreach ($video as $item)
    @php
        // Extract video ID from full YouTube URL
        preg_match('/(?:https?:\/\/)?(?:www\.)?youtu(?:be\.com\/watch\?v=|\.be\/)([\w\-]+)/', $item->embedid, $matches);
        $videoId = $matches[1] ?? null;
    @endphp

    @if($videoId)
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="video-item position-relative" style="padding-bottom: 56.25%; height: 0; overflow: hidden;">
                <iframe
                    src="https://www.youtube.com/embed/{{ $videoId }}"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen
                    style="position: absolute; top:0; left:0; width:100%; height:100%;">
                </iframe>
            </div>
        </div>
    @endif
@endforeach


            </div>
        </div>
    </section>
@endsection
