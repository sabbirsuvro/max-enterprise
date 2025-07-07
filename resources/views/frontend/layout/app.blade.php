<!DOCTYPE html>
<html class="no-js" lang="zxx" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    @php
        $cleaning = App\Models\Cleaning::where('type', 'cleaning_service')->get();
        $pestcontroll = App\Models\Cleaning::where('type', 'pestcontrol_service')->get();
        $manpower = App\Models\Cleaning::where('type', 'manpower_service')->get();
        $website = App\Models\Website::first();
        $codepush = App\Models\Codepush::first();

        $cleaningfooter = App\Models\Cleaning::where('type', 'cleaning_service')->latest()->take(2)->get();
        $pestcontrollfooter  = App\Models\Cleaning::where('type', 'pestcontrol_service')->latest()->take(2)->get();
        $manpowerfooter  = App\Models\Cleaning::where('type', 'manpower_service')->latest()->take(2)->get();
    @endphp
    <title>{{ $website->name }}</title>
    {!! $codepush->header !!}
    <meta name="author" content="sabbirAhmed" />
    <meta name="description" content="sabbirAhmed - Cleaning Service HTML Template" />
    <meta name="keywords" content="sabbirAhmed - Cleaning Service HTML Template" />
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('image/website/' .$website->icon) }}" />
    <link rel="manifest" href="frontend/img/favicons/manifest.json" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="theme-color" content="#ffffff" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&amp;family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery.datetimepicker.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
    <style>
        .twoline {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: normal;
        }

        .threeline {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: normal;
        }

        .sevenline {
            display: -webkit-box;
            -webkit-line-clamp: 7;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: normal;
        }
    </style>
    @stack('css')
</head>

<body>
    {!! $codepush->body !!}
    <div class="preloader">
        <button class="th-btn preloaderCls">Cancel Preloader</button>
        <div class="preloader-inner">
            <div class="loader"></div>
        </div>
    </div>
    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="{{ route('home') }}"><img src="{{ asset('image/website' .$website->logo) }}" alt="sabbirAhmed" /></a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li class="menu-item-has-children">
                        <a href="{{ route('cleaning') }}">Cleaning Service</a>
                        <ul class="sub-menu">
                            @foreach ($cleaning as $item)
                                <li><a href="{{ route('servicedetails', $item->id) }}">{{ $item->name }}</a></li>
                            @endforeach

                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{ route('pestcontroll') }}">Pest Control</a>
                        <ul class="sub-menu">
                            @foreach ($pestcontroll as $item)
                                <li><a href="{{ route('servicedetails', $item->id) }}">{{ $item->name }}</a></li>
                            @endforeach

                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{ route('manpower') }}">Manpower Supply</a>
                        <ul class="sub-menu">
                            @foreach ($manpower as $item)
                                <li><a href="{{ route('servicedetails', $item->id) }}">{{ $item->name }}</a></li>
                            @endforeach

                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    <header class="th-header header-layout3">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-links">
                            <ul>
                                <li class="d-none d-sm-inline-block"><i class="fas fa-phone"></i><b>Phone:</b><a
                                        href="tel:{{ $website->phone }}">{{ $website->phone }}</a></li>
                                <li class="d-none d-sm-inline-block"><i class="fas fa-envelope"></i><b>Email:</b><a
                                        href="mailto: {{ $website->email }}"> {{ $website->email }}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-links">
                            <ul>
                                <li>
                                    <div class="social-links">
                                        <a href="{{ $website->fb }}"><i class="fab fa-facebook-f"></i></a> <a
                                            href="{{ $website->twitter }}"><i class="fab fa-twitter"></i></a>
                                        <a href="{{ $website->linkedin }}"><i class="fab fa-linkedin-in"></i></a> <a
                                            href="{{ $website->insta }}"><i class="fab fa-instagram"></i></a>
                                        <a href="{{ $website->youtube }}"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <div class="menu-area">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="{{ route('home') }}"><img src="{{ asset('image/website/' .$website->logo) }}" alt="sabbirAhmed" /></a>
                            </div>
                        </div>
                        <div class="col-auto d-none d-lg-inline-block">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="{{ route('cleaning') }}">Cleaning Service</a>
                                        <ul class="sub-menu">
                                            @foreach ($cleaning as $item)
                                                <li class="border-bottom py-2"><a
                                                        href="{{ route('servicedetails', $item->id) }}">{{ $item->name }}</a>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{ route('pestcontroll') }}">Pest Controll</a>
                                        <ul class="sub-menu">
                                            @foreach ($pestcontroll as $item)
                                                <li class="border-bottom py-2"><a
                                                        href="{{ route('servicedetails', $item->id) }}">{{ $item->name }}</a>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{ route('manpower') }}">Manpower Supply</a>
                                        <ul class="sub-menu">
                                            @foreach ($manpower as $item)
                                                <li class="border-bottom py-2"><a
                                                        href="{{ route('servicedetails', $item->id) }}">{{ $item->name }}</a>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog') }}">Blog</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-auto">
                            <div class="header-button">
                                <a href="{{ route('contact') }}" class="th-btn star-btn">Contact Us<i
                                        class="fas fa-arrow-up-right ms-2"></i></a> <button type="button"
                                    class="th-menu-toggle d-block d-lg-none"><i class="far fa-bars"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    <footer class="footer-wrapper footer-layout1" data-bg-src="{{ asset('frontend/img/bg/footer_bg_4.jpg') }}">
        <div class="shape-mockup movingX d-none d-xl-block" data-bottom="80px" data-left="0%"><img
                src="{{ asset('frontend/img/shape/footer_shape_1.png') }}" alt="shape" /></div>
        <div class="shape-mockup moving d-none d-xl-block" data-bottom="80px" data-right="5%"><img
                src="{{ asset('frontend/img/shape/footer_shape_2.png') }}" alt="shape" /></div>
        <div class="container">
            <div class="footer-top-wrap">
                <div class="row gy-4 justify-content-between">
                    <div class="col-auto">
                        <div class="footer-contact">
                            <div class="box-icon"><i class="fa-solid fa-location-dot"></i></div>
                            <div class="box-content">
                                <h3 class="box-title">Address</h3>
                                <p class="box-text">{{ $website->address }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="footer-contact">
                            <div class="box-icon"><i class="fa-solid fa-phone"></i></div>
                            <div class="box-content">
                                <h3 class="box-title">Hotline</h3>
                                <p class="box-text"><a href="mailto:{{ $website->email }}">{{ $website->email }}</a> <a
                                        href="tel:{{ $website->phone }}">{{ $website->phone }}</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="footer-contact">
                            <div class="box-icon"><i class="fa-solid fa-clock"></i></div>
                            <div class="box-content">
                                <h3 class="box-title">Working Hour</h3>
                                <p class="box-text">{{ $website->hour }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">
                                <div class="about-logo">
                                    <a href="{{ route('home') }}"><img style="color: white" src="{{ asset('image/website/' .$website->logo) }}"
                                            alt="sabbirAhmed" /></a>
                                </div>
                                <p class="about-text">{{ $website->slogan }}.</p>
                                <div class="th-social">
                                    <a href="{{ $website->fb }}"><i class="fab fa-facebook-f"></i></a> <a
                                        href="{{ $website->twitter }}"><i class="fab fa-twitter"></i></a>
                                    <a href="{{ $website->linkedin }}"><i class="fab fa-linkedin-in"></i></a> <a
                                        href="{{ $website->youtube }}"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Quick Links</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="{{ route('portfolio') }}">Project</a></li>
                                    <li><a href="{{ route('testimonial') }}">Testimonial</a></li>
                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                    <li><a href="{{ route('blog') }}">Blog</a></li>
                                    <li><a href="{{ route('video') }}">Project Video</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Our Services</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    @foreach ($cleaningfooter as $item)
                                        <li><a href="{{ route('servicedetails',$item->id) }}">{{ $item->name }}</a></li>
                                    @endforeach
                                    @foreach ($pestcontrollfooter as $item)
                                        <li><a href="{{ route('servicedetails',$item->id) }}">{{ $item->name }}</a></li>
                                    @endforeach
                                    @foreach ($manpowerfooter as $item)
                                        <li><a href="{{ route('servicedetails',$item->id) }}">{{ $item->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Get in touch!</h3>
                            <div class="newsletter-widget">

                                <iframe src="https://www.google.com/maps/embed?pb={{ $website->map }}" width="200" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                 <div class="header-button">
                                <a href="{{ route('contact') }}" class="th-btn star-btn">Take an Appoinment<i
                                        class="fas fa-arrow-up-right ms-2"></i></a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container text-center">
                <p class="copyright-text">Copyright <i class="fal fa-copyright"></i>{{ date('Y') }} {{ $website->name }} Powered By <a
                        href="{{ config('app.vite_number') }}">sabbir Ahmed</a> All Rights Reserved.</p>
            </div>
        </div>
        {!! $codepush->footer !!}
    </footer>
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>
    <script src="{{ asset('frontend/js/vendor/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/circle-progress.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.datetimepicker.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('frontend/js/tilt.jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    @stack('js')

</body>

</html>
