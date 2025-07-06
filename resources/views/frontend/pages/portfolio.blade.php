@extends('frontend.layout.app')
@push('css')
    <style>
        .box-img {
            position: relative;
            overflow: hidden;
        }

        .box-img img {
            width: 100%;
            height: auto;
            display: block;
        }

        .box-content {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 20px 15px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .box-img:hover .box-content {
            opacity: 1;
        }

        .box-content .media-body {
            display: flex;
            flex-direction: column;
        }

        .box-content h3,
        .box-content p {
            margin: 0;
            padding: 0;
        }

        .icon-btn {
            margin-top: 10px;
            font-size: 20px;
        }
    </style>
@endpush
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
        <div class="container" data-bg-src="{{ asset('frontend/img/bg/gallery_bg_1.jpg') }}">
            <div class="space-top">
                <div class="title-area text-center">
                    <span class="sub-title2"><img src="{{ asset('frontend/img/theme-img/title_icon.svg') }}"
                            alt="shape" />Our
                        portfolio</span>
                    <h2 class="sec-title text-white">Display of Projects</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($portfolio as $item)
                    <div class="col-md-3 mb-4">
                        <div class="box-img">
                            <img src="{{ asset('image/portfolio/' . $item->img) }}" alt="gallery image"
                                style="aspect-ratio: 4/3; max-height:300px;" />

                            <div class="box-content">
                                <div class="media-body">
                                    <h3 class="box-title" style="color: #fff">{{ $item->title }}</h3>
                                    <p class="box-text" style="color: #fff">{{ $item->service }}</p>
                                    <a href="{{ asset('image/portfolio/' . $item->img) }}" class="icon-btn popup-image">
                                        <i class="far fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="space-top"></div>
            </div>
        </div>
    </div>
@endsection

