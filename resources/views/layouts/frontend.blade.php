<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>@yield('page-title') - {{ settings('app_name') }}</title> --}}

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ url('assets/img/logo_caron.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ url('assets/img/logo_caron.png') }}" />
    <link rel="icon" type="image/png" href="{{ url('assets/img/logo_caron.png') }}" sizes="32x32" />
    <link rel="icon" type="image/png" href="{{ url('assets/img/logo_caron.png') }}" sizes="16x16" />
    {{-- <meta name="application-name" content="{{ settings('app_name') }}"/> --}}
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="{{ url('assets/img/logo_caron.png') }}" />

    <link media="all" type="text/css" rel="stylesheet" href="{{ url('assets/css/vendor.css') }}">
    <link media="all" type="text/css" rel="stylesheet" href="{{ url('assets/css/image-uploader.min.css') }}">

    <link media="all" type="text/css" rel="stylesheet" href="{{ url('assets/plugins/dataTables/datatables.min.css') }}">
    <link media="all" type="text/css" rel="stylesheet" href="{{ url('assets/plugins/select2/css/select2.min.css') }}">


    <link media="all" type="text/css" rel="stylesheet" href="{{ url('assets/plugins/toastr/toastr.min.css') }}">

    {{-- <link media="all" type="text/css" rel="stylesheet" href="{{ url('assets/css/bootstrap-datetimepicker.min.css') }}"> --}}
    {{-- <link media="all" type="text/css" rel="stylesheet" href="{{ url('assets/css/bootstrap-datetimepicker.css') }}"> --}}
    {{-- <link media="all" type="text/css" rel="stylesheet" href="{{ url('assets/css/bootstrap-datetimepicker-standalone.css') }}"> --}}

    <link media="all" type="text/css" rel="stylesheet" href="{{ url('assets/plugins/pc-bootstrap4-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}">

    <link media="all" type="text/css" rel="stylesheet" href="{{ url('assets/plugins/daterangepicker-master/daterangepicker.css') }}">
    <link media="all" type="text/css" rel="stylesheet" href="{{ url('assets/plugins/sweetalert2/dist/sweetalert2.min.css') }}">



    <link media="all" type="text/css" rel="stylesheet" href="{{ url('assets/plugins/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
    <link media="all" type="text/css" rel="stylesheet" href="{{ url('assets/css/app.css') }}">

    {{-- plugin --}}
    <link media="all" type="text/css" rel="stylesheet" href="{{ url('assets/css/base_font.css') }}">
    <link rel="stylesheet" href="{{ asset('plugin/bootstrap-fileinput-master/css/fileinput.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugin/bootstrap-fileinput-master/css/fileinput-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugin/bootstrap-fileinput-master/themes/explorer/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('plugin/Highcharts-Stock/code/css/highcharts.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('plugin/c3/docs/css/c3.min.css') }}" type="text/css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" crossorigin="anonymous">
    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>

    @yield('styles')
</head>
<body style="min-height: 100vh;display: flex;flex-direction: column;justify-content: space-between;background-color: #222;">
    @include('partials.navbar')

    <div class="container-fluid" style="background-color: #242424;">
        <main role="main" class="px-md-3 px-0">
            @yield('content')
        </main>
    </div>

    <div class="mt-res"></div>

    @include('partials.footer_new')


    <script src="{{ url('assets/js/vendor.js') }}"></script>
    <script src="{{ url('assets/js/as/app.js') }}"></script>



    <!-- Include JS -->
    <script src="{{ url('assets/plugins/tinymce/js/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ url('assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ url('assets/plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ url('assets/plugins/daterangepicker-master/daterangepicker.js') }}"></script>
    <script src="{{ url('assets/plugins/dataTables/datatables.min.js') }}"></script>
    <script src="{{ url('assets/plugins/sweetalert2/dist/sweetalert2.min.js') }}"></script>



    <script src="{{ url('assets/plugins/html5-qrcode/html5-qrcode.min.js') }}"></script>

    <script src="{{ url('assets/js/vfs_fonts.js') }}"></script>
    <script src="{{ url('assets/js/image-uploader.min.js') }}"></script>

    <script src="{{ url('assets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ url('assets/plugins/bootstrap-select/dist/js/i18n/defaults-th_TH.min.js') }}"></script>

    {{-- <script src="{{ url('assets/js/bootstrap-datetimepicker.min.js') }}"></script> --}}
    <script src="{{ url('assets/plugins/pc-bootstrap4-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>
    {{-- plugin --}}

    <script src="{{ asset('plugin/bootstrap-fileinput-master/js/plugins/piexif.js') }}"></script>
    <script src="{{ asset('plugin/bootstrap-fileinput-master/js/plugins/sortable.js') }}"></script>
    <script src="{{ asset('plugin/bootstrap-fileinput-master/js/fileinput.js') }}"></script>
    <script src="{{ asset('plugin/bootstrap-fileinput-master/js/locales/fr.js') }}"></script>
    <script src="{{ asset('plugin/bootstrap-fileinput-master/js/locales/es.js') }}"></script>
    <script src="{{ asset('plugin/bootstrap-fileinput-master/js/locales/es.js') }}"></script>
    <script src="{{ asset('plugin/bootstrap-fileinput-master/themes/gly/theme.js') }}"></script>
    <script src="{{ asset('plugin/bootstrap-fileinput-master/themes/fas/theme.js') }}"></script>
    <script src="{{ asset('plugin/bootstrap-fileinput-master/themes/explorer-fas/theme.js') }}"></script>


    <script src="{{ asset('plugin/Highcharts-Stock/code/highstock.js') }}"></script>
    <script src="{{ asset('plugin/Highcharts-Stock/code/data.js') }}"></script>
    <script src="{{ asset('plugin/Highcharts-Stock/code/drilldown.js') }}"></script>
    <script src="{{ asset('plugin/Highcharts-Stock/code/accessibility.js') }}"></script>
    <script src="{{ asset('plugin/Highcharts-Stock/code/modules/solid-gauge.js') }}"></script>

    <script src="{{ asset('plugin/c3/docs/js/d3-5.8.2.min.js') }}"></script>
    <script src="{{ asset('plugin/c3/docs/js/c3.min.js') }}"></script>

    <script src="{{ url('assets/js/main.js') }}"></script>

    <script src="{{ asset('assets/plugins/jquery-validation-1.19.5/jquery.validate.js') }}"></script>

    {{-- CK Editor - CDN--}}
    {{-- <script src="{{ asset('plugin/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('plugin/ckeditor/jquery-ckeditor.js') }}"></script> --}}
    <script src="//cdn.ckeditor.com/4.4.7/standard-all/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/4.4.7/standard-all/adapters/jquery.js"></script>

    @yield('scripts')
</body>
</html>
