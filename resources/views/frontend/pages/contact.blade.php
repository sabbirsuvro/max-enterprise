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
                <h1 class="breadcumb-title">Contact</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Contact Page</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="space-top"></div>
    <div class="video-sec1 space-top" data-bg-src="{{ asset('frontend/img/bg/video_bg_1.jpg') }}">
        <div class="shape-mockup starani" data-top="10%" data-left="20%"><img src="{{ asset('frontend/img/shape/vector_shape_4.svg') }}"
                alt="shape" /></div>
        <div class="shape-mockup starani" data-bottom="22%" data-left="6%"><img src="{{ asset('frontend/img/shape/vector_shape_4.svg') }}"
                alt="shape" /></div>
        <div class="shape-mockup starani" data-top="15%" data-right="10%"><img src="{{ asset('frontend/img/shape/vector_shape_4.svg') }}"
                alt="shape" /></div>
        <div class="shape-mockup starani" data-bottom="12%" data-right="6%"><img src="{{ asset('frontend/img/shape/vector_shape_4.svg') }}"
                alt="shape" /></div>
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-11">
                    <div class="mb-5 pb-3">
                        <a href="{{ $about->video }}" class="play-btn popup-video"><i
                                class="fa-sharp fa-solid fa-play"></i></a>
                    </div>
                    <h2 class="sec-title text-white">Prioritizes Cleanliness and Offers Top-Notch Service</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="container">
            <div class="contact-sec1">
                <div class="shape-mockup spin d-none d-xl-block" data-bottom="-35%" data-left="30%"><img
                        src="frontend/img/shape/vector_shape_5.png" alt="shape" /></div>
                <div class="row gy-40">
                    <div class="col-xl-7">
                        <div class="pe-xl-4 text-xl-start text-center">
                            <div class="title-area mb-32">
                                <span class="sub-title2"><img src="frontend/img/theme-img/title_icon.svg"
                                        alt="shape" />Get In touch</span>
                                <h2 class="sec-title text-white">Our Cleaning <span class="text-theme">Service</span> Sets
                                    the Standard</h2>
                                <p class="sec-text text-white">
                                    Elevate your space with our thorough cleaning service, ensuring impeccable cleanliness
                                    and a welcoming atmosphere. Where we bring over dedicated hundred years of expertise to
                                    every job.
                                </p>
                            </div>
                            <a href="contact.html" class="th-btn star-btn">Get in Touch<i
                                    class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <form action="https://html.themeholy.com/kleanix/demo/mail.php" method="POST"
                            class="contact-form1 ajax-contact">
                            <h3 class="form-title">Make Appoinment</h3>
                            <div class="input-wrap">
                                <div class="row">
                                    <div class="form-group col-12"><input type="text" class="form-control" name="name"
                                            id="name" placeholder="Your Name" /> <i class="fal fa-user"></i></div>
                                    <div class="form-group col-12"><input type="email" class="form-control" name="email"
                                            id="email" placeholder="Email Address" /> <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="form-group col-12">
                                        <select name="subject" id="subject" class="form-select">
                                            <option value="" disabled="disabled" selected="selected" hidden>Choose
                                                Service</option>
                                            <option value="Home Cleaning">Home Cleaning</option>
                                            <option value="Window Cleaning">Window Cleaning</option>
                                            <option value="Bathroom Cleaning">Bathroom Cleaning</option>
                                            <option value="Office Cleaning">Office Cleaning</option>
                                        </select>
                                        <i class="fal fa-chevron-down"></i>
                                    </div>
                                    <div class="form-group col-12"><input type="text" class="form-control"
                                            name="location" id="location" placeholder="Location" /> <i
                                            class="fal fa-location-dot"></i></div>
                                    <div class="form-btn col-12">
                                        <button class="th-btn btn-fw">Submit<i
                                                class="fas fa-arrow-up-right ms-2"></i></button>
                                    </div>
                                </div>
                                <p class="form-messages mb-0 mt-3"></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space-top"></div>
    <div class="space-top"></div>
@endsection
