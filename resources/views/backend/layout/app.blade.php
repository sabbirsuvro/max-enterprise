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
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="bx bx-category"></i>
                        </div>
                        <div class="menu-title">Application</div>
                    </a>
                    <ul>
                        <li> <a href="app-emailbox.html"><i class='bx bx-radio-circle'></i>Email</a>
                        </li>
                        <li> <a href="app-chat-box.html"><i class='bx bx-radio-circle'></i>Chat Box</a>
                        </li>
                        <li> <a href="app-file-manager.html"><i class='bx bx-radio-circle'></i>File Manager</a>
                        </li>
                        <li> <a href="app-contact-list.html"><i class='bx bx-radio-circle'></i>Contatcs</a>
                        </li>
                        <li> <a href="app-to-do.html"><i class='bx bx-radio-circle'></i>Todo List</a>
                        </li>
                        <li> <a href="app-invoice.html"><i class='bx bx-radio-circle'></i>Invoice</a>
                        </li>
                        <li> <a href="app-fullcalender.html"><i class='bx bx-radio-circle'></i>Calendar</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-label">UI Elements</li>
                <li>
                    <a href="widgets.html">
                        <div class="parent-icon"><i class='bx bx-cookie'></i>
                        </div>
                        <div class="menu-title">Widgets</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='bx bx-cart'></i>
                        </div>
                        <div class="menu-title">eCommerce</div>
                    </a>
                    <ul>
                        <li> <a href="ecommerce-products.html"><i class='bx bx-radio-circle'></i>Products</a>
                        </li>
                        <li> <a href="ecommerce-products-details.html"><i class='bx bx-radio-circle'></i>Product
                                Details</a>
                        </li>
                        <li> <a href="ecommerce-add-new-products.html"><i class='bx bx-radio-circle'></i>Add New
                                Products</a>
                        </li>
                        <li> <a href="ecommerce-orders.html"><i class='bx bx-radio-circle'></i>Orders</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                        </div>
                        <div class="menu-title">Components</div>
                    </a>
                    <ul>
                        <li> <a href="component-alerts.html"><i class='bx bx-radio-circle'></i>Alerts</a>
                        </li>
                        <li> <a href="component-accordions.html"><i class='bx bx-radio-circle'></i>Accordions</a>
                        </li>
                        <li> <a href="component-badges.html"><i class='bx bx-radio-circle'></i>Badges</a>
                        </li>
                        <li> <a href="component-buttons.html"><i class='bx bx-radio-circle'></i>Buttons</a>
                        </li>
                        <li> <a href="component-cards.html"><i class='bx bx-radio-circle'></i>Cards</a>
                        </li>
                        <li> <a href="component-carousels.html"><i class='bx bx-radio-circle'></i>Carousels</a>
                        </li>
                        <li> <a href="component-list-groups.html"><i class='bx bx-radio-circle'></i>List Groups</a>
                        </li>
                        <li> <a href="component-media-object.html"><i class='bx bx-radio-circle'></i>Media Objects</a>
                        </li>
                        <li> <a href="component-modals.html"><i class='bx bx-radio-circle'></i>Modals</a>
                        </li>
                        <li> <a href="component-navs-tabs.html"><i class='bx bx-radio-circle'></i>Navs & Tabs</a>
                        </li>
                        <li> <a href="component-navbar.html"><i class='bx bx-radio-circle'></i>Navbar</a>
                        </li>
                        <li> <a href="component-paginations.html"><i class='bx bx-radio-circle'></i>Pagination</a>
                        </li>
                        <li> <a href="component-popovers-tooltips.html"><i class='bx bx-radio-circle'></i>Popovers &
                                Tooltips</a>
                        </li>
                        <li> <a href="component-progress-bars.html"><i class='bx bx-radio-circle'></i>Progress</a>
                        </li>
                        <li> <a href="component-spinners.html"><i class='bx bx-radio-circle'></i>Spinners</a>
                        </li>
                        <li> <a href="component-notifications.html"><i
                                    class='bx bx-radio-circle'></i>Notifications</a>
                        </li>
                        <li> <a href="component-avtars-chips.html"><i class='bx bx-radio-circle'></i>Avatrs &
                                Chips</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bx bx-repeat"></i>
                        </div>
                        <div class="menu-title">Content</div>
                    </a>
                    <ul>
                        <li> <a href="content-grid-system.html"><i class='bx bx-radio-circle'></i>Grid System</a>
                        </li>
                        <li> <a href="content-typography.html"><i class='bx bx-radio-circle'></i>Typography</a>
                        </li>
                        <li> <a href="content-text-utilities.html"><i class='bx bx-radio-circle'></i>Text
                                Utilities</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"> <i class="bx bx-donate-blood"></i>
                        </div>
                        <div class="menu-title">Icons</div>
                    </a>
                    <ul>
                        <li> <a href="icons-line-icons.html"><i class='bx bx-radio-circle'></i>Line Icons</a>
                        </li>
                        <li> <a href="icons-boxicons.html"><i class='bx bx-radio-circle'></i>Boxicons</a>
                        </li>
                        <li> <a href="icons-feather-icons.html"><i class='bx bx-radio-circle'></i>Feather Icons</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="form-froala-editor.html">
                        <div class="parent-icon"><i class='bx bx-code-alt'></i>
                        </div>
                        <div class="menu-title">Froala Editor</div>
                    </a>
                </li>
                <li class="menu-label">Forms & Tables</li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class='bx bx-message-square-edit'></i>
                        </div>
                        <div class="menu-title">Forms</div>
                    </a>
                    <ul>
                        <li> <a href="form-elements.html"><i class='bx bx-radio-circle'></i>Form Elements</a>
                        </li>
                        <li> <a href="form-input-group.html"><i class='bx bx-radio-circle'></i>Input Groups</a>
                        </li>
                        <li> <a href="form-radios-and-checkboxes.html"><i class='bx bx-radio-circle'></i>Radios &
                                Checkboxes</a>
                        </li>
                        <li> <a href="form-layouts.html"><i class='bx bx-radio-circle'></i>Forms Layouts</a>
                        </li>
                        <li> <a href="form-validations.html"><i class='bx bx-radio-circle'></i>Form Validation</a>
                        </li>
                        <li> <a href="form-wizard.html"><i class='bx bx-radio-circle'></i>Form Wizard</a>
                        </li>
                        <li> <a href="form-text-editor.html"><i class='bx bx-radio-circle'></i>Text Editor</a>
                        </li>
                        <li> <a href="form-file-upload.html"><i class='bx bx-radio-circle'></i>File Upload</a>
                        </li>
                        <li> <a href="form-date-time-pickes.html"><i class='bx bx-radio-circle'></i>Date Pickers</a>
                        </li>
                        <li> <a href="form-select2.html"><i class='bx bx-radio-circle'></i>Select2</a>
                        </li>
                        <li> <a href="form-repeater.html"><i class='bx bx-radio-circle'></i>Form Repeater</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bx bx-grid-alt"></i>
                        </div>
                        <div class="menu-title">Tables</div>
                    </a>
                    <ul>
                        <li> <a href="table-basic-table.html"><i class='bx bx-radio-circle'></i>Basic Table</a>
                        </li>
                        <li> <a href="table-datatable.html"><i class='bx bx-radio-circle'></i>Data Table</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-label">Pages</li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bx bx-lock"></i>
                        </div>
                        <div class="menu-title">Authentication</div>
                    </a>
                    <ul>
                        <li><a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>Basic</a>
                            <ul>
                                <li><a href="auth-basic-signin.html" target="_blank"><i
                                            class='bx bx-radio-circle'></i>Sign In</a></li>
                                <li><a href="auth-basic-signup.html" target="_blank"><i
                                            class='bx bx-radio-circle'></i>Sign Up</a></li>
                                <li><a href="auth-basic-forgot-password.html" target="_blank"><i
                                            class='bx bx-radio-circle'></i>Forgot Password</a></li>
                                <li><a href="auth-basic-reset-password.html" target="_blank"><i
                                            class='bx bx-radio-circle'></i>Reset Password</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>Cover</a>
                            <ul>
                                <li><a href="auth-cover-signin.html" target="_blank"><i
                                            class='bx bx-radio-circle'></i>Sign In</a></li>
                                <li><a href="auth-cover-signup.html" target="_blank"><i
                                            class='bx bx-radio-circle'></i>Sign Up</a></li>
                                <li><a href="auth-cover-forgot-password.html" target="_blank"><i
                                            class='bx bx-radio-circle'></i>Forgot Password</a></li>
                                <li><a href="auth-cover-reset-password.html" target="_blank"><i
                                            class='bx bx-radio-circle'></i>Reset Password</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>With Header
                                Footer</a>
                            <ul>
                                <li><a href="auth-header-footer-signin.html" target="_blank"><i
                                            class='bx bx-radio-circle'></i>Sign In</a></li>
                                <li><a href="auth-header-footer-signup.html" target="_blank"><i
                                            class='bx bx-radio-circle'></i>Sign Up</a></li>
                                <li><a href="auth-header-footer-forgot-password.html" target="_blank"><i
                                            class='bx bx-radio-circle'></i>Forgot Password</a></li>
                                <li><a href="auth-header-footer-reset-password.html" target="_blank"><i
                                            class='bx bx-radio-circle'></i>Reset Password</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="user-profile.html">
                        <div class="parent-icon"><i class="bx bx-user-circle"></i>
                        </div>
                        <div class="menu-title">User Profile</div>
                    </a>
                </li>
                <li>
                    <a href="timeline.html">
                        <div class="parent-icon"> <i class="bx bx-video-recording"></i>
                        </div>
                        <div class="menu-title">Timeline</div>
                    </a>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bx bx-error"></i>
                        </div>
                        <div class="menu-title">Errors</div>
                    </a>
                    <ul>
                        <li> <a href="errors-404-error.html" target="_blank"><i class='bx bx-radio-circle'></i>404
                                Error</a>
                        </li>
                        <li> <a href="errors-500-error.html" target="_blank"><i class='bx bx-radio-circle'></i>500
                                Error</a>
                        </li>
                        <li> <a href="errors-coming-soon.html" target="_blank"><i
                                    class='bx bx-radio-circle'></i>Coming
                                Soon</a>
                        </li>
                        <li> <a href="error-blank-page.html" target="_blank"><i class='bx bx-radio-circle'></i>Blank
                                Page</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="faq.html">
                        <div class="parent-icon"><i class="bx bx-help-circle"></i>
                        </div>
                        <div class="menu-title">FAQ</div>
                    </a>
                </li>
                <li>
                    <a href="pricing-table.html">
                        <div class="parent-icon"><i class="bx bx-diamond"></i>
                        </div>
                        <div class="menu-title">Pricing</div>
                    </a>
                </li>
                <li class="menu-label">Charts & Maps</li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bx bx-line-chart"></i>
                        </div>
                        <div class="menu-title">Charts</div>
                    </a>
                    <ul>
                        <li> <a href="charts-apex-chart.html"><i class='bx bx-radio-circle'></i>Apex</a>
                        </li>
                        <li> <a href="charts-chartjs.html"><i class='bx bx-radio-circle'></i>Chartjs</a>
                        </li>
                        <li> <a href="charts-highcharts.html"><i class='bx bx-radio-circle'></i>Highcharts</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bx bx-map-alt"></i>
                        </div>
                        <div class="menu-title">Maps</div>
                    </a>
                    <ul>
                        <li> <a href="map-google-maps.html"><i class='bx bx-radio-circle'></i>Google Maps</a>
                        </li>
                        <li> <a href="map-vector-maps.html"><i class='bx bx-radio-circle'></i>Vector Maps</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-label">Others</li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bx bx-menu"></i>
                        </div>
                        <div class="menu-title">Menu Levels</div>
                    </a>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>Level One</a>
                            <ul>
                                <li> <a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>Level
                                        Two</a>
                                    <ul>
                                        <li> <a href="javascript:;"><i class='bx bx-radio-circle'></i>Level Three</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <!--end navigation-->
        </div>

        <header>
            <div class="topbar d-flex align-items-center">
                <!-- <nav class="navbar navbar-expand gap-3 justify-content-between justify-content-lg-end"> -->
                <nav class="navbar navbar-expand gap-3 justify-content-between">
                    <div class="mobile-toggle-menu"><i class='bx bx-menu'></i></div>

                    <div class="d-flex justify-content-center align-items-center w-100">
                        {{-- <marquee behavior="scroll" direction="left" scrollamount="5" scrolldelay="85"
                            class="text-info">
                            🎉 Special Offer: Get 30% OFF on all items! Limited time only!
                        </marquee> --}}
                    </div>

                    <div class="user-box dropdown px-3">
                        <a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret"
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="backend/images/avatars/avatar-2.png" class="user-img" alt="user avatar">
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
