@extends('frontend.layout.app')
@push('css')
@endpush
@section('content')
    <div class="th-hero-wrapper hero-4" id="hero" data-bg-src="{{ asset('image/hero/' . $hero->bgimg) }}">
        <div class="hero-inner">
            <div class="container">
                <div class="hero-style4">
                    <span class="sub-title2"><img src="{{ asset('frontend/img/theme-img/title_icon.svg') }}"
                            alt="shape" />Clean Your
                        PLace</span>
                    <h1 class="hero-title">
                        <span class="title1">{{ $hero->title1 }}</span> <span class="title2">{{ $hero->title2 }} <span
                                class="wave-title">{{ $hero->wave }}</span></span>
                    </h1>
                    <a href="{{ route('about') }}" class="th-btn star-btn">Learn more<i
                            class="fas fa-arrow-up-right ms-2"></i></a>
                    {{-- <div class="hero-counter-wrap">
                        <div class="hero-counter">
                            <div class="box-number"><span class="counter-number">{{ $hero->project }}</span>k+</div>
                            <p class="box-text">Project Completed</p>
                        </div>
                        <div class="hero-counter">
                            <div class="box-number"><span class="counter-number">{{ $hero->cleaner }}</span>+</div>
                            <p class="box-text">Expert Cleaner</p>
                        </div>
                        <div class="hero-counter">
                            <div class="box-number"><span class="counter-number">{{ $hero->customer }}</span>k+</div>
                            <p class="box-text">Satisfied Customer</p>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="hero-img"><img src="{{ asset('image/hero/' . $hero->img) }}" alt="Image" /></div>
            <div class="hero-shape1"><img src="{{ asset('frontend/img/hero/hero_shape_2_1.svg') }}" alt="shape" /></div>
            <div class="hero-shape2"><img src="{{ asset('frontend/img/hero/hero_shape_2_2.svg') }}" alt="shape" /></div>
            <img src="{{ asset('frontend/img/hero/bubble_3.png') }}" alt="bubble" class="bubble bubble_1" /> <img
                src="{{ asset('frontend/img/hero/bubble_5.png') }}" alt="bubble" class="bubble bubble_2" />
            <img src="{{ asset('frontend/img/hero/bubble_4.png') }}" alt="bubble" class="bubble bubble_3" /> <img
                src="{{ asset('frontend/img/hero/bubble_2.png') }}" alt="bubble" class="bubble bubble_4" />
            <img src="{{ asset('frontend/img/hero/bubble_5.png') }}" alt="bubble" class="bubble bubble_5" />
        </div>
    </div>

    <section class="space-top" id="service-sec">
        <div class="shape-mockup jump d-none d-xxl-block" data-top="15%" data-left="2%"><img
                src="{{ asset('frontend/img/shape/tool_shape_1.png') }}" alt="shape" /></div>
        <div class="shape-mockup jump-reverse" data-top="10%" data-right="0%"><img
                src="{{ asset('frontend/img/shape/vector_shape_1.png') }}" alt="shape" /></div>
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-end">
                <div class="col-lg">
                    <div class="title-area text-center text-lg-start">
                        <span class="sub-title2"><img src="{{ asset('frontend/img/theme-img/title_icon.svg') }}"
                                alt="shape" />Our
                            Services</span>
                        <h2 class="sec-title">Cleaning <span class="text-theme">Service</span><br /></h2>
                    </div>
                </div>
                <div class="col-lg-auto mt-n3 mt-lg-0">
                    <div class="sec-btn">
                        <div class="icon-box">
                            <button data-slider-prev="#serviceSlider1" class="slider-arrow default"><i
                                    class="far fa-arrow-left"></i></button>
                            <button data-slider-next="#serviceSlider1" class="slider-arrow default"><i
                                    class="far fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper th-slider has-shadow" id="serviceSlider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">
                    @foreach ($cleaning as $item)
                        <div class="swiper-slide">
                            <div class="service-card2">
                                <div class="box-img"><img src="{{ asset('image/cleaning/' . $item->img) }}" alt="Image"
                                        style="aspect-ratio: 4/3; max-hight:300px" /></div>
                                <div class="box-content">
                                    <div class="box-icon"><img src="{{ asset('frontend/img/icon/service_card_3.svg') }}"
                                            alt="Icon" />
                                    </div>
                                    <h3 class="box-title"><a
                                            href="{{ route('servicedetails', $item->id) }}">{{ $item->name }}</a></h3>
                                    <p class="box-text twoline">{{ $item->sdes }}</p>
                                    <a href="{{ route('servicedetails', $item->id) }}" class="th-btn btn-sm">See More<i
                                            class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="space-top" id="service-sec">
        <div class="shape-mockup jump d-none d-xxl-block" data-top="15%" data-left="2%"><img
                src="{{ asset('frontend/img/shape/tool_shape_1.png') }}" alt="shape" /></div>
        <div class="shape-mockup jump-reverse" data-top="10%" data-right="0%"><img
                src="{{ asset('frontend/img/shape/vector_shape_1.png') }}" alt="shape" /></div>
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-end">
                <div class="col-lg">
                    <div class="title-area text-center text-lg-start">
                        <h2 class="sec-title">Pest Controll <span class="text-theme">Service</span><br /></h2>
                    </div>
                </div>
                <div class="col-lg-auto mt-n3 mt-lg-0">
                    <div class="sec-btn">
                        <div class="icon-box">
                            <button data-slider-prev="#serviceSlider1" class="slider-arrow default"><i
                                    class="far fa-arrow-left"></i></button>
                            <button data-slider-next="#serviceSlider1" class="slider-arrow default"><i
                                    class="far fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper th-slider has-shadow" id="serviceSlider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">
                    @foreach ($pestcontroll as $item)
                        <div class="swiper-slide">
                            <div class="service-card2">
                                <div class="box-img"><img src="{{ asset('image/cleaning/' . $item->img) }}"
                                        alt="Image" style="aspect-ratio: 4/3; max-hight:300px" /></div>
                                <div class="box-content">
                                    <div class="box-icon"><img src="{{ asset('frontend/img/icon/service_card_3.svg') }}"
                                            alt="Icon" />
                                    </div>
                                    <h3 class="box-title"><a
                                            href="{{ route('servicedetails', $item->id) }}">{{ $item->name }}</a></h3>
                                    <p class="box-text twoline">{{ $item->sdes }}</p>
                                    <a href="{{ route('servicedetails', $item->id) }}" class="th-btn btn-sm">See More<i
                                            class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <div class="space-top"></div>
    <section class="space-top" id="service-sec">
        <div class="shape-mockup jump d-none d-xxl-block" data-top="15%" data-left="2%"><img
                src="{{ asset('frontend/img/shape/tool_shape_1.png') }}" alt="shape" /></div>
        <div class="shape-mockup jump-reverse" data-top="10%" data-right="0%"><img
                src="{{ asset('frontend/img/shape/vector_shape_1.png') }}" alt="shape" /></div>
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-end">
                <div class="col-lg">
                    <div class="title-area text-center text-lg-start">
                        <h2 class="sec-title">Manpower <span class="text-theme">Service</span><br /></h2>
                    </div>
                </div>
                <div class="col-lg-auto mt-n3 mt-lg-0">
                    <div class="sec-btn">
                        <div class="icon-box">
                            <button data-slider-prev="#serviceSlider1" class="slider-arrow default"><i
                                    class="far fa-arrow-left"></i></button>
                            <button data-slider-next="#serviceSlider1" class="slider-arrow default"><i
                                    class="far fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper th-slider has-shadow" id="serviceSlider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">
                    @foreach ($manpower as $item)
                        <div class="swiper-slide">
                            <div class="service-card2">
                                <div class="box-img"><img src="{{ asset('image/cleaning/' . $item->img) }}"
                                        alt="Image" style="aspect-ratio: 4/3; max-hight:300px" style="aspect-ratio: 4/3; max-hight:300px"/></div>
                                <div class="box-content">
                                    <div class="box-icon"><img src="{{ asset('frontend/img/icon/service_card_3.svg') }}"
                                            alt="Icon" />
                                    </div>
                                    <h3 class="box-title"><a
                                            href="{{ route('servicedetails', $item->id) }}">{{ $item->name }}</a></h3>
                                    <p class="box-text twoline">{{ $item->sdes }}</p>
                                    <a href="{{ route('servicedetails', $item->id) }}" class="th-btn btn-sm">See More<i
                                            class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <div class="space-top"></div>

    <section class="space-top" id="testi-sec">
        <div class="container">
            <div class="testi-box2-area">
                <div class="row g-0 flex-row-reverse">
                    <div class="col-lg-5 order-2 order-lg-0">
                        <div class="testi-box2-img"><img src="{{ asset('frontend/img/testimonial/testi_2_1.jpg') }}"
                                alt="Image" />
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="testi-box2-slide">
                            <div class="title-area mb-40 text-center text-lg-start">
                                <span class="sub-title2"><img src="frontend/img/theme-img/title_icon.svg"
                                        alt="Icon" />Testimonials</span>
                                <h2 class="sec-title">Client <span class="text-theme">Feedback</span> Data</h2>
                            </div>
                            <div class="swiper th-slider" id="testiSlide2"
                                data-slider-options='{"effect":"slide","thumbs":{"swiper":".testi-box-thumb"}}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testi-box2">
                                            <div class="box-review">
                                                <i class="fa-sharp fa-solid fa-star"></i><i
                                                    class="fa-sharp fa-solid fa-star"></i><i
                                                    class="fa-sharp fa-solid fa-star"></i><i
                                                    class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </div>
                                            <p class="box-text">
                                                The clean service I recently received was nothing to an hide for every short
                                                of exceptional. From the moment they arrived, their a professionalism was
                                                evident, and they carried out their
                                                tasks with a utmost precision. Every nook and cranny was thoroughly cleaned,
                                                leaving my are a space spotless and refreshed. I was thoroughly impressed
                                                with their attention to detail and
                                                commitment to ensuring a pristine environment.
                                            </p>
                                            <div class="box-profile">
                                                <div class="box-img"><img src="frontend/img/testimonial/testi_3_1.jpg"
                                                        alt="image" /></div>
                                                <div class="media-body">
                                                    <h3 class="box-title">David Thompson</h3>
                                                    <span class="box-desig">Director at Gram</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box">
                                <button data-slider-prev="#testiSlide2" class="slider-arrow default"><i
                                        class="far fa-arrow-left"></i></button>
                                <button data-slider-next="#testiSlide2" class="slider-arrow default"><i
                                        class="far fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="gallery-sec1" data-bg-src="{{ asset('frontend/img/bg/gallery_bg_1.jpg') }}">
        <div class="container space-top">
            <div class="title-area text-center">
                <span class="sub-title2"><img src="{{ asset('frontend/img/theme-img/title_icon.svg') }}" alt="shape" />Our
                    portfolio</span>
                <h2 class="sec-title text-white">Display of Recent Projects</h2>
            </div>
        </div>
        <div class="gallery-card3-wrap space-bottom">
            @foreach ($portfolio as $item)
                <div class="gallery-card3 hover-item {{ $loop->iteration == 3 ? 'active' : '' }}">
                    <div class="box-img">
                        <img src="{{ asset('image/portfolio/' . $item->img) }}" alt="gallery image" style="aspect-ratio: 4/3; max-hight:300px"/>
                    </div>
                    <div class="box-content">
                        <div class="media-body">
                            <h3 class="box-title">{{ $item->title }}</h3>
                            <p class="box-text">{{ $item->service }}</p>
                        </div>
                        <a href="{{ asset('image/portfolio/' . $item->img) }}" class="icon-btn popup-image">
                            <i class="far fa-plus"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <section class="space" id="blog-sec">
        <div class="shape-mockup jump d-none d-xl-block" data-top="30%" data-left="0%"><img
                src="{{ asset('frontend/img/shape/tool_shape_4.png') }}" alt="shape" /></div>
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title2"><img src="{{ asset('frontend/img/theme-img/title_icon.svg') }}"
                        alt="shape" />News &
                    Blog</span>
                <h2 class="sec-title">Upadate News & Blog</h2>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="blogSlider1"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">
                        @foreach ($blog as $item)
                            <div class="swiper-slide">
                                <div class="blog-card2">
                                    <div class="blog-img">
                                        <img src="{{ asset('image/cleaning/' . $item->img) }}" alt="blog image"
                                            style="aspect-ratio: 4/3; max-hight:300px" /> <span
                                            class="blog-date"><span>{{ $item->created_at->format('d') }}</span>
                                            <span>{{ $item->created_at->format('M, y') }}</span></span>
                                    </div>
                                    <div class="blog-content">
                                        <h3 class="box-title"><a
                                                href="{{ route('servicedetails', $item->id) }}">{{ $item->name }}</a>
                                        </h3>
                                        <a href="{{ route('servicedetails', $item->id) }}" class="line-btn">Read More<i
                                                class="fas fa-arrow-up-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <button data-slider-prev="#blogSlider1" class="slider-arrow slider-prev"><i
                        class="far fa-arrow-left"></i></button>
                <button data-slider-next="#blogSlider1" class="slider-arrow slider-next"><i
                        class="far fa-arrow-right"></i></button>
            </div>
        </div>
    </section>
    <div class="space-bottom">
        <div class="shape-mockup moving d-none d-xl-block" data-bottom="0%" data-right="0%"><img
                src="frontend/img/shape/tool_shape_5.png" alt="shape" /></div>
        <div class="container">
            <div class="swiper th-slider" id="brandSlider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"420":{"slidesPerView":"3"},"768":{"slidesPerView":"4"},"992":{"slidesPerView":"5"},"1200":{"slidesPerView":"6"},"1400":{"slidesPerView":"6"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand-card2"><img src="frontend/img/brand/brand_2_1.svg" alt="Brand Logo" /></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card2"><img src="frontend/img/brand/brand_2_2.svg" alt="Brand Logo" /></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card2"><img src="frontend/img/brand/brand_2_3.svg" alt="Brand Logo" /></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card2"><img src="frontend/img/brand/brand_2_4.svg" alt="Brand Logo" /></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card2"><img src="frontend/img/brand/brand_2_5.svg" alt="Brand Logo" /></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card2"><img src="frontend/img/brand/brand_2_6.svg" alt="Brand Logo" /></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card2"><img src="frontend/img/brand/brand_2_1.svg" alt="Brand Logo" /></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card2"><img src="frontend/img/brand/brand_2_2.svg" alt="Brand Logo" /></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card2"><img src="frontend/img/brand/brand_2_3.svg" alt="Brand Logo" /></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card2"><img src="frontend/img/brand/brand_2_4.svg" alt="Brand Logo" /></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card2"><img src="frontend/img/brand/brand_2_5.svg" alt="Brand Logo" /></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card2"><img src="frontend/img/brand/brand_2_6.svg" alt="Brand Logo" /></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
@endpush
