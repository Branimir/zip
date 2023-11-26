<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ZIP - platforma za kupovinu, prodaju i razmjenu</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    {{--    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">--}}

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: NiceAdmin
    * Updated: Mar 09 2023 with Bootstrap v5.2.3
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

@include('app._includes._header')

@include('app._includes._menu')

<main id="main" class="main">

    <section class="section dashboard">
        <div class="row">
            <div class="@if(request()->route()->getName() == 'app.home') col-lg-12 @else col-lg-8 @endif">
                <div class="pagetitle">
                    <h1>{{ $mainTitle ?? 'Lista' }}</h1>
                </div>

                @yield('content')
            </div>

            <!-- Right side columns -->
            <div class="col-lg-4">
                <div class="pagetitle">
                    <h1>{!! $sidebarTitle ?? '&nbsp;' !!}</h1>
                </div>

                @yield('sidebar')
            </div>

        </div>
    </section>

</main><!-- End #main -->

@include('app._includes._footer')

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>
<!-- Vendor JS Files -->
{{--<script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>--}}
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
{{--<script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>--}}
{{--<script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>--}}
<script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
{{--<script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>--}}
<script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
{{--<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>--}}
<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
