@extends('frontend.layout.app')

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
                <h1 class="breadcumb-title">Our {{ $category->name }}</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>{{ $category->name }}</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="th-service-1 overflow-hidden space" id="service-sec">
        <div class="container">
            <div class="row gy-30 justify-content-center">
                @if ($products->isEmpty())
                    <p>No products found in this category.</p>
                @else
                    @foreach ($products as $product)
                        <div class="col-xl-4 col-md-6">
                            <div class="service-card">

                                <div class="box-img">
                                    <a href="{{ route('productdetails', $product->id) }}">
                                        @if ($product->img)
                                            <img src="{{ asset($product->img[0]) }}" alt="{{ $product->name }}"
                                                width="150">
                                        @endif
                                    </a>
                                </div>
                                <div class="box-content">
                                    <p class="box-text threeline text-dark">Price: {{ $product->price }}</p>
                                    <h3 class="box-title twoline"><a
                                            href="{{ route('productdetails', $product->id) }}">{{ $product->name }}</a>
                                    </h3>
                                    <p class="box-title twoline"><a
                                            href="{{ route('productdetails', $product->id) }}">{{ $product->details }}</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection
