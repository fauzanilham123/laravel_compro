<!DOCTYPE html>
<html lang="en">

<head>
    <base href="../../../">
    <meta charset="utf-8" />
    <meta charset="ISO-8859-1"> 
    <title>Hallo! Mepy</title>
    <meta name="description" content="{{ $page ?? '' }} | Admin Panel Digo ID" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link rel="shortcut icon" href="assets/images/HALLO MEPY.png" />

    @include('back.layouts.css')
    @stack('styles-plugins')
    @stack('styles')
    @toastr_css

    <style>
        /*
            css-only-tooltip version 1.0.0
            ⓒ 2015 AHN JAE-HA http://github.com/eu81273
            MIT License
        */

        [data-tooltip-text]:hover {
            position: relative;
        }

        [data-tooltip-text]:hover:after {
            background-color: #000000;
            background-color: rgba(0, 0, 0, 0.8);

            -webkit-box-shadow: 0px 0px 3px 1px rgba(50, 50, 50, 0.4);
            -moz-box-shadow: 0px 0px 3px 1px rgba(50, 50, 50, 0.4);
            box-shadow: 0px 0px 3px 1px rgba(50, 50, 50, 0.4);

            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;

            color: #FFFFFF;
            font-size: 12px;
            content: attr(data-tooltip-text);

        margin-bottom: 10px;
            top: 130%;
            left: 0;    
            padding: 7px 12px;
            position: absolute;
            width: auto;
            min-width: 50px;
            max-width: 300px;
            word-wrap: break-word;

            z-index: 9999;
        }
    </style>
</head>

<body id="kt_body"
    class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    @include('back.layouts.header-mobile')

    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-row flex-column-fluid page">
            @include('back.layouts.aside-menu')

            <div class="d-flex flex-column flex-row-fluid wrapper pt-15" id="kt_wrapper">
                @include('back.layouts.header')

                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                   

                    <!--begin::Content-->
                    <div class="d-flex flex-column-fluid">
                        <div class="container">
                            @yield('content')
                        </div>
                    </div>
                    <!--end::Content-->
                </div>

                @include('back.layouts.footer')
            </div>
        </div>
    </div>
        <!-- begin::User Panel-->
        <div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
            <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
                <h3 class="font-weight-bold m-0">User Profile</h3>
                <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
                    <i class="ki ki-close icon-xs text-muted"></i>
                </a>
            </div>

            <div class="offcanvas-content pr-5 mr-n5">
                <div class="d-flex align-items-center mt-5">
                    <div class="symbol symbol-100 mr-5">
                        <div class="symbol-label" style="background-image:url('assets/images/HALLO MEPY.png')"></div>
                        <i class="symbol-badge bg-success"></i>
                    </div>
                    <div class="d-flex flex-column">
                        <a href="javascript:void(0);" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">{{ auth()->user()->name }}</a>
                        
                        <div class="navi mt-2">
                            <a href="javascript:void(0);" class="navi-item">
                                <span class="navi-link p-0 pb-2">
                                    <span class="navi-icon mr-1">
                                        <span class="svg-icon svg-icon-lg svg-icon-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path
                                                        d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z"
                                                        fill="#000000" />
                                                    <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
                                                </g>
                                            </svg>
                                        </span>
                                    </span>
                                    <span class="navi-text text-muted text-hover-primary">{{ auth()->user()->email }}</span>
                                    
                                </span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                
                                @csrf
                                <button type="submit" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Sign
                                    Out</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end::User Panel-->
   

    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop">
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24" />
                    <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
                    <path
                        d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
                        fill="#000000" fill-rule="nonzero" />
                </g>
            </svg>
        </span>
    </div>
    <!--end::Scrolltop-->

    @include('back.layouts.js')
    @stack('scripts-plugins')
    @toastr_js
    @toastr_render
    @stack('scripts')

</body>

</html>
