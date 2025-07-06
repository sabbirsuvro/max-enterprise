@extends('frontend.layout.app')

@section('content')
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('frontend/img/bg/breadcrumb-bg.jpg') }}">
        <div class="breadcrumb-bottom-shape"><img src="{{ asset('frontend/img/bg/breadcrumb-bottom.png') }}" alt="shape" /></div>
        <div class="shape-mockup breadcrumb-left jump-reverse"><img src="{{ asset('frontend/img/icon/breadcrumb-left.png') }}" alt="shape" />
        </div>
        <div class="shape-mockup breadcrumb-right jump"><img src="{{ asset('frontend/img/icon/breadcrumb-right.png') }}" alt="shape" />
        </div>
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">About Us</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('about') }}">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="overflow-hidden space" id="about-sec">
        <div class="container">
            <div class="row gy-30 align-items-center">
                <div class="col-xl-7 mb-xl-0">
                    <div class="img-box1">
                        <div class="img1 jump-reverse"><img src="{{ asset('image/about/' .$about->img1) }}" alt="About" /></div>
                        <div class="shape1 jump"><img src="{{ asset('image/about/' .$about->img3) }}" alt="Image" /></div>
                        <div class="img2">
                            <img class="tilt-active" src="{{ asset('image/about/' .$about->img2) }}" alt="Image" />
                            <div class="about-play-btn-wrap">
                                <a href="{{ $about->video }}" class="play-btn style2 popup-video"><i
                                        class="fa-sharp fa-solid fa-play"></i></a>
                            </div>
                        </div>
                        <div class="year-counter">
                            <div class="rotate-text">
                                <h5 class="year-counter_text-small">Years Of</h5>
                                <h4 class="year-counter_text-big">Experience</h4>
                            </div>
                            <div class="year-counter_number"><span class="counter-number">{{ $about->year }}</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="title-area">
                        <span class="sub-title before-none">About Us</span>
                        {!! $about->des !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="space" id="process-sec" data-bg-src="{{ asset('frontend/img/bg/team-bg-1.jpg') }}">
        <div class="shape-mockup jump process-3-shape-1"><img src="{{ asset('frontend/img/shape/team-sahpe-1-1.svg') }}" alt="shape" />
        </div>
        <div class="shape-mockup jump d-lg-block d-none" data-top="100" data-right="180"><img
                src="{{ asset('frontend/img/shape/servicce-2-shape-theme2.svg') }}" alt="shape" /></div>
        <div class="shape-mockup jump-reverse d-xl-block d-none" data-bottom="100" data-left="50"><img
                src="{{ asset('frontend/img/shape/servicce-2-shape-theme2.svg') }}" alt="shape" /></div>
        <div class="shape-mockup jump-reverse process-3-shape-4"><img src="{{ asset('frontend/img/shape/team-sahpe-1-1.svg') }}"
                alt="shape" /></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center text-xl-start">
                    <div class="title-area">
                        <span
                            class="sub-title before-none style-theme2 lg-after-none justify-content-center justify-content-xl-start">Work
                            Process</span>
                        <h2 class="sec-title text-white">How We Are Working!</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-xl-3 col-md-6 process-box-wrap">
                    <div class="process-box style-3">
                        <div class="box-icon"><i class="fa-solid fa-address-card"></i></div>
                        <h3 class="box-title text-white">{{ $about->wptitle1 }}</h3>
                        <p class="box-text text-white threeline">{{ $about->wpdes1 }}</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 process-box-wrap">
                    <div class="process-box style-3">
                        <div class="box-icon"><i class="fa-regular fa-calendar-clock"></i></div>
                        <h3 class="box-title text-white">{{ $about->wptitle2 }}</h3>
                        <p class="box-text text-white threeline">{{ $about->wpdes2 }}</p>>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 process-box-wrap">
                    <div class="process-box style-3">
                        <div class="box-icon"><i class="fa-sharp fa-solid fa-handshake"></i></div>
                       <h3 class="box-title text-white">{{ $about->wptitle3 }}</h3>
                        <p class="box-text text-white threeline">{{ $about->wpdes3 }}</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 process-box-wrap">
                    <div class="process-box style-3">
                        <div class="box-icon"><i class="fa-solid fa-broom"></i></div>
                        <h3 class="box-title text-white">{{ $about->wptitle4 }}</h3>
                        <p class="box-text text-white threeline">{{ $about->wpdes4 }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
