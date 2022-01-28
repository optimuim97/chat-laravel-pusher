<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Gurdeep singh osahan">
        <meta name="author" content="Gurdeep singh osahan">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Favicon Icon -->
        <link rel="icon" type="image/png" href="{{asset('asset/images/fav.svg')}}">
        <!-- Bootstrap core CSS -->
        <link href="{{asset('asset/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Font Awesome-->
        <link href="{{asset('asset/vendor/fontawesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <!-- Material Design Icons -->
        <link href="{{asset('asset/vendor/icons/css/materialdesignicons.min.css')}}" media="all" rel="stylesheet" type="text/css">
        <!-- Slick -->
        <link href="{{asset('asset/vendor/slick-master/slick/slick.css')}}" rel="stylesheet" type="text/css">
        <!-- Lightgallery -->
        <link href="{{asset('asset/vendor/lightgallery-master/dist/css/lightgallery.min.css')}}" rel="stylesheet">
        <!-- Select2 CSS -->
        <link href="{{asset('asset/vendor/select2/css/select2-bootstrap.css')}}" />
        <link href="{{asset('asset/vendor/select2/css/select2.min.css')}}" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">
         <!-- Styles -->
         <link rel="stylesheet" href="{{ asset('asset/css/app.css') }}">
         <!-- Scripts -->
         <script src="{{ asset('asset/js/app.js') }}" defer></script>
     </head>
</head>
<body>

    {{-- HEADER PAGE --}}
    @include('partials.header')

    {{-- CONTENT --}}

           @yield('content')


    {{-- FOOTER --}}
    @include('partials.footer')



     <!-- Bootstrap core JavaScript -->
     <script src="{{asset('asset/vendor/jquery/jquery.min.js')}}"></script>
     <script src="{{asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
     <!-- Contact form JavaScript -->
     <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
     <script src="{{asset('asset/js/jqBootstrapValidation.js')}}"></script>
     <script src="{{asset('asset/js/contact_me.js')}}"></script>
     <!-- Slick -->
     <script src="{{asset('asset/vendor/slick-master/slick/slick.js')}}" type="text/javascript" charset="utf-8"></script>
     <!-- lightgallery -->
     <script src="{{asset('asset/vendor/lightgallery-master/dist/js/lightgallery-all.min.js')}}"></script>
     <!-- select2 Js -->
     <script src="{{asset('asset/vendor/select2/js/select2.min.js')}}"></script>
     <!-- Custom -->
     <script src="{{asset('asset/js/custom.js')}}"></script>
     <script src="{{ mix('js/app.js')}}"></script>
</body>
</html>
