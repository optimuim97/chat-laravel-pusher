<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css">
    <link rel="stylesheet" href="{{ asset('asset/css/profile.css') }}">
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
<body>

    @include('partials.header')
    <main style="margin-bottom: 120px; margin-top:50px">
        @yield('content')
    </main>
    @include('partials.footer')


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
