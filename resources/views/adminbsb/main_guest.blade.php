<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>PEMDA DESA DAWUHAN</title>
    <!-- Favicon-->
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a8/Foto_Pemandangan_Desa_Dawuhan.jpg/1200px-Foto_Pemandangan_Desa_Dawuhan.jpg" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('adminbsb/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Selectize Css -->
    <link href="{{ asset('css/selectize.css') }}" rel="stylesheet">
    <link href="{{ asset('css/selectize.bootstrap3.css') }}" rel="stylesheet">

    <!-- Animation Css -->
    <link href="{{ asset('adminbsb/plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="{{ asset('adminbsb/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">

    <!-- Datatable Css -->
    <link href="{{ asset('css/jquery.dataTables.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datatables.bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/buttons.dataTables.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ asset('adminbsb/plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    {{-- <link href="{{ asset('adminbsb/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" /> --}}

    <!-- Sweetalert Css -->
    <link href="{{ asset('adminbsb/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    {{-- <link href="{{ asset('adminbsb/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet" /> --}}

    <!-- JQuery Nestable Css -->
    <link href="{{ asset('adminbsb/plugins/nestable/jquery-nestable.css') }}" rel="stylesheet" />

    <!-- Light Gallery Plugin Css -->
    <link href="{{ asset('adminbsb/plugins/light-gallery/css/lightgallery.css') }}" rel="stylesheet">

    <!-- Custom Css -->
    <link href="{{ asset('adminbsb/css/style.css') }}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('adminbsb/css/themes/all-themes.css') }}" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}" />

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css" />


    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
   <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
   crossorigin=""></script>

    <style>
        .error
        {
            color: #f5593d;
        }
    </style>

    @yield('styles')
</head>

<body class="theme-blue-grey">
  
    <!-- Main Header -->
    @include('adminbsb.main-header.main_guest')

    <!-- Main Sidebar -->
    @include('adminbsb.main-sidebar.main_guest')

    <!-- Content -->
    <section class="content">
        <!-- Main Flash -->
        @include('adminbsb.main-flash.main')

        @yield('content')
    </section>

    <!-- Jquery Core Js -->
    <script src="{{ asset('adminbsb/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ asset('adminbsb/plugins/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Bootstrap Notify Plugin Js -->
    {{-- <script src="{{ asset('adminbsb/plugins/bootstrap-notify/bootstrap-notify.js') }}"></script> --}}

    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('adminbsb/plugins/node-waves/waves.js') }}"></script>

    <!-- Light Gallery Plugin Js -->
    <script src="{{ asset('adminbsb/plugins/light-gallery/js/lightgallery-all.js') }}"></script>

    <!-- Jquery Nestable -->
    <script src="{{ asset('adminbsb/plugins/nestable/jquery.nestable.js') }}"></script>

    <!-- SweetAlert Plugin Js -->
    <script src="{{ asset('adminbsb/plugins/sweetalert/sweetalert.min.js') }}"></script>

    <!-- Moment Plugin Js -->
    <script src="{{ asset('adminbsb/plugins/momentjs/moment.js') }}"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    {{-- <script src="{{ asset('adminbsb/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script> --}}  
    
    {{-- <script src="{{ asset('js/jquery.min.js') }}"></script> --}}

    <!-- Selectize Js -->
    <script src="{{ asset('js/selectize.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    <script type="text/javascript">
        $('.multi-selectize').selectize({
            plugins     : ['remove_button'],
            maxItems    : null,
            delimiter   : ',',
            persist     : true
        });
    </script>

    <!-- Datatable Js -->
    <script src="{{ asset('js/jquery.datatables.min.js') }}"></script>
    <script src="{{ asset('js/datatables.bootstrap.js') }}"></script>
    <script src="{{ asset('js/dataTables.buttons.js') }}"></script>
    <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>

    <script type="text/javascript" src="{{ asset('bower_components/moment/min/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>

    <script type="text/javascript">
        $(function () {
            $('#datetimepicker').datetimepicker({
                format: 'YYYY-MM-DD'
            });
        });
        $(function () {
            $('#datetimepicker1').datetimepicker({
                format: 'YYYY-MM-DD'
            });
        });
    </script> 

    <!-- Select Plugin Js -->
    {{-- <script src="{{ asset('adminbsb/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script> --}}

    <!-- Slimscroll Plugin Js -->
    <script src="{{ asset('adminbsb/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- Jquery CountTo Plugin Js -->
    {{-- <script src="{{ asset('adminbsb/plugins/jquery-countto/jquery.countTo.js') }}"></script> --}}

    <!-- Custom Js -->
    <script src="{{ asset('adminbsb/js/pages/medias/image-gallery.js') }}"></script>
    <script src="{{ asset('adminbsb/js/admin.js') }}"></script>
    <script src="{{ asset('adminbsb/js/pages/index.js') }}"></script>

    <!-- Demo Js -->
    <script src="{{ asset('adminbsb/js/demo.js') }}"></script>

    <!-- Loading Page -->
    <script src="{{ asset('js/loading_page.js') }}"></script> 

    <script src="{{ asset('leaflet.ajax.js') }}"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js"></script>

      <!-- Load Leaflet from CDN -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
  integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
  crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
  integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
  crossorigin=""></script>


  <!-- Load Esri Leaflet from CDN -->
  <script src="https://unpkg.com/esri-leaflet@2.3.3/dist/esri-leaflet.js"
  integrity="sha512-cMQ5e58BDuu1pr9BQ/eGRn6HaR6Olh0ofcHFWe5XesdCITVuSBiBZZbhCijBe5ya238f/zMMRYIMIIg1jxv4sQ=="
  crossorigin=""></script>



<!-- Load Esri Leaflet Geocoder from CDN -->
<link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder@2.3.2/dist/esri-leaflet-geocoder.css"
  integrity="sha512-IM3Hs+feyi40yZhDH6kV8vQMg4Fh20s9OzInIIAc4nx7aMYMfo+IenRUekoYsHZqGkREUgx0VvlEsgm7nCDW9g=="
  crossorigin="">
<script src="https://unpkg.com/esri-leaflet-geocoder@2.3.2/dist/esri-leaflet-geocoder.js"
  integrity="sha512-8twnXcrOGP3WfMvjB0jS5pNigFuIWj4ALwWEgxhZ+mxvjF5/FBPVd5uAxqT8dd2kUmTVK9+yQJ4CmTmSg/sXAQ=="
  crossorigin=""></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js"></script>



  <style>
    body { margin:0; padding:0; }
    #map { position: absolute; top:0; bottom:0; right:0; left:0; }
  </style>
</head>
<body>

<style>
  #basemaps-wrapper {
    position: absolute;
    top: 10px;
    right: 10px;
    z-index: 400;
    background: white;
    padding: 10px;
  }
  #basemaps {
    margin-bottom: 5px;
  }
</style>


    @yield('scripts')
</body>

</html>