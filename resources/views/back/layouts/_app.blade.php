<!DOCTYPE html>
<html lang="en">

<head>
    <base href="../../../">
    <meta charset="utf-8" />
    <title>{{ $page }}</title>
    <meta name="description" content="{{ $page }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="canonical" href="https://digo.id" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}" />

    @include('back.layouts.css')
    @stack('styles-plugins')
    @stack('styles')
</head>

<body id="kt_body"
    class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    @include('back.layouts.header-mobile')

    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-row flex-column-fluid page">
            @include('back.layouts.aside-menu')

            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
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
            </div>
        </div>
    </div>

    @include('back.layouts.js')
    @stack('scripts-plugins')
    @stack('scripts')

</body>

</html>
