<!doctype html>
<html lang="en" class="dark-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ asset('backend/images/favicon-32x32.png') }}" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('backend/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{ asset('backend/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('backend/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('backend/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/icons.css') }}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/dark-theme.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('backend/css/semi-dark.css') }}" /> --}}
    {{-- <link rel="stylesheet" href="backend/css/header-colors.css" /> --}}
    @stack('css')
    <style>
        .clamp-one-line {
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: normal;
        }

        .clamp-two-line {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: normal;
        }
    </style>
    <title>Backend & Frontend Templete</title>
</head>

<body>

    <div class="wrapper">

        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="backend/images/logo-icon.png" class="logo-icon" alt="logo icon">
                </div>
                <div>
                    <h4 class="logo-text">Rocker</h4>
                </div>
                <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="{{ route('dashboard') }}">
                        <div class="parent-icon"><i class='bx bx-home-alt'></i>
                        </div>
                        <div class="menu-title">Home</div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('heromanage') }}">
                        <div class="parent-icon"><i class='bx bx-home-alt'></i>
                        </div>
                        <div class="menu-title">Hero Manage</div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('cleaningmanage') }}">
                        <div class="parent-icon"><i class='bx bx-home-alt'></i>
                        </div>
                        <div class="menu-title">Service Manage</div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('aboutmanage') }}">
                        <div class="parent-icon"><i class='bx bx-home-alt'></i>
                        </div>
                        <div class="menu-title">About Manage</div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('portfoliomanage') }}">
                        <div class="parent-icon"><i class='bx bx-home-alt'></i>
                        </div>
                        <div class="menu-title">Project image Manage</div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('tesimonialmanage') }}">
                        <div class="parent-icon"><i class='bx bx-home-alt'></i>
                        </div>
                        <div class="menu-title">Client Review Manage</div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('videomanage') }}">
                        <div class="parent-icon"><i class='bx bx-home-alt'></i>
                        </div>
                        <div class="menu-title">Video Manage</div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('websitemanage') }}">
                        <div class="parent-icon"><i class='bx bx-home-alt'></i>
                        </div>
                        <div class="menu-title">Website Manage</div>
                    </a>
                </li>
            </ul>
            <!--end navigation-->
        </div>

        <header>
            <div class="topbar d-flex align-items-center">
                <nav class="navbar navbar-expand gap-3 justify-content-between">
                    <div class="mobile-toggle-menu"><i class='bx bx-menu'></i></div>

                    <div class="d-flex justify-content-center align-items-center w-100">

                    </div>

                    <div class="user-box dropdown px-3">
                        <a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret"
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('backend/images/avater.png') }}" class="user-img" alt="user avatar">
                            <div class="user-info">
                                <p class="user-name mb-0">{{ Auth::user()->name }}</p>
                                <p class="designattion mb-0">{{ Auth::user()->email }}</p>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item d-flex align-items-center"
                                    href="{{ route('profile.edit') }}"><i
                                        class="bx bx-user fs-5"></i><span>Profile</span></a>
                            </li>

                            <li>
                                <div class="dropdown-divider mb-0"></div>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        <div class="page-wrapper">
            <div class="page-content">
                @yield('content')
            </div>
        </div>

        <div class="overlay toggle-icon"></div>

        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <footer class="page-footer">
            <p class="mb-0">Copyright © {{ now()->year }}. All right reserved.</p>
        </footer>
    </div>

    <!-- Bootstrap JS -->
    <script src="{{ asset('backend/js/bootstrap.bundle.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('backend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <!--app JS-->
    <script src="{{ asset('backend/js/app.js') }}"></script>
    <script>
        new PerfectScrollbar(".app-container")
    </script>
    @stack('js')
</body>

</html>
