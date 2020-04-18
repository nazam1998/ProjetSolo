<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Handlee|Open+Sans:300,400,600,700,800" rel="stylesheet">
  <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
  <link href="{{asset('css/bootstrap-responsive.css')}}" rel="stylesheet" />
  <link href="{{asset('css/flexslider.css')}}" rel="stylesheet" />
  <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet" />
  <link href="{{asset('css/camera.css')}}" rel="stylesheet" />
  <link href="{{asset('css/jquery.bxslider.css')}}" rel="stylesheet" />
  <link href="{{asset('css/style.css')}}" rel="stylesheet" />
  <link href="{{asset('css/app.css')}}" rel="stylesheet" />

  <!-- Theme skin -->
  <link href="{{asset('color/default.css')}}" rel="stylesheet" />

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('ico/apple-touch-icon-144-precomposed.png')}}" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('ico/apple-touch-icon-114-precomposed.png')}}" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('ico/apple-touch-icon-72-precomposed.png')}}" />
  <link rel="apple-touch-icon-precomposed" href="{{asset('ico/apple-touch-icon-57-precomposed.png')}}" />
  <link rel="shortcut icon" href="{{asset('ico/favicon.png')}}" />

  <!-- =======================================================
    Theme Name: Eterna
    Theme URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
    @yield('content')
    <a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bglight icon-2x active"></i></a>

<!-- javascript
  ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>

<script src="{{asset('js/modernizr.custom.js')}}"></script>
<script src="{{asset('js/toucheffects.js')}}"></script>
<script src="{{asset('js/google-code-prettify/prettify.js')}}"></script>
<script src="{{asset('js/jquery.bxslider.min.js')}}"></script>
<script src="{{asset('js/camera/camera.js')}}"></script>
<script src="{{asset('js/camera/setting.js')}}"></script>

<script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('js/portfolio/jquery.quicksand.js')}}"></script>
<script src="{{asset('js/portfolio/setting.js')}}"></script>

<script src="{{asset('js/jquery.flexslider.js')}}"></script>
<script src="{{asset('js/animate.js')}}"></script>
<script src="{{asset('js/inview.js')}}"></script>

<!-- Template Custom JavaScript File -->
<script src="{{asset('js/custom.js')}}"></script>
{{-- <script src="{{asset('js/app.js')}}"></script> --}}

</body>
</html>
