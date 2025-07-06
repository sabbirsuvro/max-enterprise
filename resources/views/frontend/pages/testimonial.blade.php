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
                <h1 class="breadcumb-title">Testimonials</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Testimonials</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="testi-card-area-2 overflow-hidden space" id="testi-sec">
        <div class="shape-mockup testimonials-bg-3" data-right="0"><img src="{{ asset('frontend/img/shape/testimonials-bg-3.png') }}"
                alt="Image" /></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-7 col-lg-7 col-md-8">
                    <div class="title-area text-center">
                        <span class="sub-title justify-content-center">Testimonials</span>
                        <h2 class="sec-title">Feedback About Their Experience With Us</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-40 justify-content-center">
                @foreach ($tesimonial as $item)
                <div class="col-xl-4 col-md-6">
                    <div class="testi-block style-3" dir="ltr">
                        <div class="testi-block-top">
                            <div class="content">
                                <h3 class="box-title">{{ $item->name }}</h3>
                                <p class="box-desig">{{ $item->desig }}</p>
                            </div>
                        </div>
                        <div class="box-review">
                            <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                class="fa-sharp fa-solid fa-star"></i>
                        </div>
                        <h3 class="box-title">{{ $item->service }}</h3>
                        <p class="box-text sevenline">{!! $item->review !!}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
