@extends('frontend.layout.app')

@section('content')
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('frontend/img/bg/breadcrumb-bg.jpg') }}">
        <div class="breadcrumb-bottom-shape"><img src="{{ asset('frontend/img/bg/breadcrumb-bottom.png') }}" alt="shape" />
        </div>
        <div class="shape-mockup breadcrumb-left jump-reverse"><img src="{{ asset('frontend/img/icon/breadcrumb-left.png') }}"
                alt="shape" /></div>
        <div class="shape-mockup breadcrumb-right jump"><img src="{{ asset('frontend/img/icon/breadcrumb-right.png') }}"
                alt="shape" /></div>
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Project Gallery</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Project Gallery</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="overflow-hidden space gallery-sec-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9">
                    <div class="title-area text-center">
                        <span class="sub-title style-3 justify-content-center"><span class="left"></span> Work Gallery
                            <span class="right"></span></span>
                        <h2 class="sec-title">Our Work Gallery That We Do!</h2>
                    </div>
                </div>
            </div>
            <div class="row  justify-content-center">
                @foreach ($portfolio as $item)
                <div class="col-lg-4 col-md-4">
                    <div class="gallery-card2">
                        <div class="gallery-img">
                            <img src="{{ asset('image/portfolio/' . $item->img) }}" alt="gallery image" />
                            <div class="gallery-content">
                                <p class="box-text">{{ $item->service }}</p>
                                <h2 class="box-title">{{ $item->title }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
