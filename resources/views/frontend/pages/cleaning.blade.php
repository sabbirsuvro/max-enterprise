@extends('frontend.layout.app')

@section('content')
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('frontend/img/bg/breadcrumb-bg.jpg') }}">
        <div class="breadcrumb-bottom-shape"><img src="{{ asset('frontend/img/bg/breadcrumb-bottom.png') }}" alt="shape" /></div>
        <div class="shape-mockup breadcrumb-left jump-reverse"><img src="{{ asset('frontend/img/icon/breadcrumb-left.png') }}"
                alt="shape" /></div>
        <div class="shape-mockup breadcrumb-right jump"><img src="{{ asset('frontend/img/icon/breadcrumb-right.png') }}" alt="shape" />
        </div>
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Our {{ $name }}</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>{{ $name }}</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="th-service-1 overflow-hidden space" id="service-sec">
        <div class="container">
            <div class="row gy-30 justify-content-center">
                @foreach ($cleaning as $item)
                <div class="col-xl-4 col-md-6">
                    <div class="service-card">
                        <div class="box-top-wrap">
                            <div class="box-top-left">
                                <img src="frontend/img/icon/service-desc-icon-1-1.svg" alt="" />
                                <p>{{ $item->type }}</p>
                            </div>
                            <div class="box-top-right">
                                <a href="{{ route('servicedetails',$item->id) }}" class="icon"><i
                                        class="fa-regular fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                        <div class="box-img"><img src="{{ asset('image/cleaning/' .$item->img) }}" alt="Service" /></div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="{{ route('servicedetails',$item->id) }}">{{ $item->name }}</a></h3>
                            <p class="box-text threeline">{{ $item->sdes }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
