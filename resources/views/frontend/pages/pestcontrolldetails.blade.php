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
                <h1 class="breadcumb-title">Service Details</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>Service Details</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="space-top space-extra2-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-8">
                    <div class="page-single mb-30">
                        <div class="page-img"><img src="{{ asset('image/pestcontroll/' .$pestcontroll->img) }}" alt="Service Image" />
                        </div>
                        <div class="page-content">
                            <h2 class="sec-title page-title">{{ $pestcontroll->name }}</h2>

                            <div class="sdes mb-50">
                               <p> {{ $pestcontroll->sdes }}</p>
                            </div>
                            <div class="des">
                                {!! $pestcontroll->des !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-4">
                    <aside class="sidebar-area">
                        <div class="widget widget_categories">
                            <ul>
                                @foreach ($pestcontrolllist as $item)
                                <li>
                                    <a href="{{ route('servicedetails',$item->id) }}">{{ $item->name }}</a> <span><i
                                            class="fa-sharp fa-light fa-arrow-right"></i></span>
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
