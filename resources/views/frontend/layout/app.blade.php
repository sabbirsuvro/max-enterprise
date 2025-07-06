{{-- @if (Route::has('login'))
    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
        @auth
            <a href="{{ url('/dashboard') }}"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
        @else
            <a href="{{ route('login') }}"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
        @endauth
    </div>
@endif --}}


<!DOCTYPE html>
<html class="no-js" lang="zxx" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>Kleanix - Cleaning Service HTML Template - Home four</title>
        <meta name="author" content="Kleanix" />
        <meta name="description" content="Kleanix - Cleaning Service HTML Template" />
        <meta name="keywords" content="Kleanix - Cleaning Service HTML Template" />
        <meta name="robots" content="INDEX,FOLLOW" />
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
        <link rel="apple-touch-icon" sizes="57x57" href="frontend/img/favicons/apple-icon-57x57.png" />
        <link rel="apple-touch-icon" sizes="60x60" href="frontend/img/favicons/apple-icon-60x60.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="frontend/img/favicons/apple-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="frontend/img/favicons/apple-icon-76x76.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="frontend/img/favicons/apple-icon-114x114.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="frontend/img/favicons/apple-icon-120x120.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="frontend/img/favicons/apple-icon-144x144.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="frontend/img/favicons/apple-icon-152x152.png" />
        <link rel="apple-touch-icon" sizes="180x180" href="frontend/img/favicons/apple-icon-180x180.png" />
        <link rel="icon" type="image/png" sizes="192x192" href="frontend/img/favicons/android-icon-192x192.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="frontend/img/favicons/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="96x96" href="frontend/img/favicons/favicon-96x96.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="frontend/img/favicons/favicon-16x16.png" />
        <link rel="manifest" href="frontend/img/favicons/manifest.json" />
        <meta name="msapplication-TileColor" content="#ffffff" />
        <meta name="msapplication-TileImage" content="frontend/img/favicons/ms-icon-144x144.png" />
        <meta name="theme-color" content="#ffffff" />
        <link rel="preconnect" href="https://fonts.googleapis.com/" />
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&amp;family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&amp;display=swap" rel="stylesheet" />
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
        <div class="preloader">
            <button class="th-btn preloaderCls">Cancel Preloader</button>
            <div class="preloader-inner"><div class="loader"></div></div>
        </div>
        <div class="th-menu-wrapper">
            <div class="th-menu-area text-center">
                <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
                <div class="mobile-logo">
                    <a href="index.html"><img src="frontend/img/logo.svg" alt="Kleanix" /></a>
                </div>
                <div class="th-mobile-menu">
                    @php
                        $cleaning = App\Models\Cleaning::where('type', 'cleaning_service')->get();
                        $pestcontroll = App\Models\Cleaning::where('type', 'pestcontrol_service')->get();
                        $manpower = App\Models\Cleaning::where('type', 'manpower_service')->get();
                        // dd($cleanings);
                    @endphp
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li class="menu-item-has-children">
                            <a href="{{ route('cleaning') }}">Cleaning Service</a>
                            <ul class="sub-menu">
                                @foreach ($cleaning as $item)
                                <li><a href="{{ route('servicedetails',$item->id) }}">{{ $item->name }}</a></li>
                                @endforeach
                                <li><a href="service-details.html">Service Details</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="{{ route('pestcontroll') }}">Pest Control</a>
                            <ul class="sub-menu">
                                @foreach ($pestcontroll as $item)
                                <li><a href="{{ route('servicedetails',$item->id) }}">{{ $item->name }}</a></li>
                                @endforeach
                                <li><a href="service-details.html">Service Details</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="{{ route('manpower') }}">Manpower Supply</a>
                            <ul class="sub-menu">
                                @foreach ($manpower as $item)
                                <li><a href="{{ route('servicedetails',$item->id) }}">{{ $item->name }}</a></li>
                                @endforeach
                                <li><a href="service-details.html">Service Details</a></li>
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
                                    <li class="d-none d-sm-inline-block"><i class="fas fa-phone"></i><b>Phone:</b><a href="tel:+16102458976">+16102458976</a></li>
                                    <li class="d-none d-sm-inline-block"><i class="fas fa-envelope"></i><b>Email:</b><a href="mailto: info@kleanix.com"> info@kleanix.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="header-links">
                                <ul>
                                    <li>
                                        <div class="social-links">
                                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a> <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a> <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                            <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
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
                                    <a href="index.html"><img src="frontend/img/logo-white.svg" alt="Kleanix" /></a>
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
                                                <li class="border-bottom py-2"><a href="{{ route('servicedetails',$item->id) }}">{{ $item->name }}</a></li>
                                                @endforeach
                                                <li><a href="service-details.html">Service Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="{{ route('pestcontroll') }}">Pest Controll</a>
                                            <ul class="sub-menu">
                                                @foreach ($pestcontroll as $item)
                                                <li class="border-bottom py-2"><a href="{{ route('servicedetails',$item->id) }}">{{ $item->name }}</a></li>
                                                @endforeach
                                                <li><a href="service-details.html">Service Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="{{ route('manpower') }}">Manpower Supply</a>
                                            <ul class="sub-menu">
                                                @foreach ($manpower as $item)
                                                <li class="border-bottom py-2"><a href="{{ route('servicedetails',$item->id) }}">{{ $item->name }}</a></li>
                                                @endforeach
                                                <li><a href="service-details.html">Service Details</a></li>
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
                                    <a href="{{ route('contact') }}" class="th-btn star-btn">Contact Us<i class="fas fa-arrow-up-right ms-2"></i></a> <button type="button" class="th-menu-toggle d-block d-lg-none"><i class="far fa-bars"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        @yield('content')
        <footer class="footer-wrapper footer-layout1" data-bg-src="frontend/img/bg/footer_bg_4.jpg">
            <div class="shape-mockup movingX d-none d-xl-block" data-bottom="80px" data-left="0%"><img src="frontend/img/shape/footer_shape_1.png" alt="shape" /></div>
            <div class="shape-mockup moving d-none d-xl-block" data-bottom="80px" data-right="5%"><img src="frontend/img/shape/footer_shape_2.png" alt="shape" /></div>
            <div class="container">
                <div class="footer-top-wrap">
                    <div class="row gy-4 justify-content-between">
                        <div class="col-auto">
                            <div class="footer-contact">
                                <div class="box-icon"><i class="fa-solid fa-location-dot"></i></div>
                                <div class="box-content">
                                    <h3 class="box-title">Address</h3>
                                    <p class="box-text">554 Gloriana road Santa Rosa 95304, United States</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="footer-contact">
                                <div class="box-icon"><i class="fa-solid fa-phone"></i></div>
                                <div class="box-content">
                                    <h3 class="box-title">Address</h3>
                                    <p class="box-text"><a href="mailto:">info@kleanix.com</a> <a href="tel:+16102458976">+16102458976</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="footer-contact">
                                <div class="box-icon"><i class="fa-solid fa-clock"></i></div>
                                <div class="box-content">
                                    <h3 class="box-title">Address</h3>
                                    <p class="box-text">
                                        Mon-Fri : 09.00 am-05.00 pm<br />
                                        Sunday Closed
                                    </p>
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
                                        <a href="index.html"><img src="frontend/img/logo-footer.svg" alt="Kleanix" /></a>
                                    </div>
                                    <p class="about-text">We're your trusted a cleaning company, dedicated to any kind of a consistently delivering exceptional all category good cleaning service.</p>
                                    <div class="th-social">
                                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a> <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a> <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
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
                                        <li><a href="service-details.html">Home Cleaning</a></li>
                                        <li><a href="service-details.html">Office Cleaning</a></li>
                                        <li><a href="service-details.html">Kitchen Cleaning</a></li>
                                        <li><a href="service-details.html">Window Cleaning</a></li>
                                        <li><a href="service-details.html">Bathroom Cleaning</a></li>
                                        <li><a href="service-details.html">Wall Cleaning</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto">
                            <div class="widget footer-widget">
                                <h3 class="widget_title">Get in touch!</h3>
                                <div class="newsletter-widget">
                                    <p class="footer-text">Subsrcibe to our upcoming latest article and news resources. Sign up today for hints. tips and the latest product news.</p>
                                    <form action="#" class="newsletter-form">
                                        <div class="form-group"><input class="form-control" type="email" placeholder="Enter email address" required="" /></div>
                                        <button type="submit" class="icon-btn"><i class="fa-solid fa-paper-plane"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-wrap">
                <div class="container text-center">
                    <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2025 <a href="index.html">Kleanix</a>. All Rights Reserved.</p>
                </div>
            </div>
        </footer>
        <div class="scroll-top">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
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
