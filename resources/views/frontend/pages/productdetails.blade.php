@extends('frontend.layout.app')
@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
@endpush
@section('content')
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('frontend/img/bg/breadcrumb-bg.jpg') }}">
        <div class="breadcrumb-bottom-shape"><img src="{{ asset('frontend/img/bg/breadcrumb-bottom.png') }}" alt="shape" />
        </div>
        <div class="shape-mockup breadcrumb-left jump-reverse"><img src="{{ asset('frontend/img/icon/breadcrumb-left.png') }}"
                alt="shape" /></div>
        <div class="shape-mockup breadcrumb-right jump"><img src="{{ asset('frontend/img/icon/breadcrumb-right.png') }}"
                alt="shape" />
        </div>
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">{{ $product->name }}</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>{{ $product->categoryData->name ?? 'No Category' }}</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="space-top space-extra2-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-8">
                    <div class="page-single mb-30">
                        <div class="page-img">
                            <div class="swiper th-slider has-shadow" id="serviceSlider12345">
                                <div class="swiper-wrapper">
                                    @if ($product->img && is_array($product->img))
                                        @foreach ($product->img as $image)
                                            <div class="swiper-slide">
                                                <img src="{{ asset($image) }}" class="img-fluid rounded border"
                                                    alt="Product Image" style="aspect-ratio: 4/3; max-height: 450px">
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="swiper-slide">
                                            <p>No images available.</p>
                                        </div>
                                    @endif
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>

                        <div class="page-content">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <h4>Price: {{ $product->price }}</h4>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <a href="{{ route('contact') }}" class="th-btn star-btn">
                                        Contact seller <i class="fas fa-arrow-up-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                            <h4>Name: {{ $product->name }}</h4>
                            <div class="des">
                                <h4>Description:</h4>
                                <p>{{ $product->details }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-4">
                    <aside class="sidebar-area">
                        <div class="widget widget_categories">
                            <ul>
                                @foreach ($productlist as $item)
                                    <li>
                                        <a href="{{ route('productdetails', $item->id) }}">{{ $item->name }}</a>
                                        <span><i class="fa-sharp fa-light fa-arrow-right"></i></span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Swiper('#serviceSlider12345', {
                loop: true,
                spaceBetween: 20,
                breakpoints: {
                    0: {
                        slidesPerView: 1
                    },
                    576: {
                        slidesPerView: 1
                    },
                    768: {
                        slidesPerView: 1
                    },
                    992: {
                        slidesPerView: 1
                    },
                    1200: {
                        slidesPerView: 1
                    }
                },
                navigation: {
                    nextEl: '#serviceSlider12345 .swiper-button-next',
                    prevEl: '#serviceSlider12345 .swiper-button-prev'
                },
                pagination: {
                    el: '#serviceSlider12345 .swiper-pagination',
                    clickable: true
                },
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false
                }
            });
        });
    </script>
@endpush
