<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Account</title>

  <!-- Custom fonts for this theme -->
  <link href="{{URL('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="{{URL('assets/css/freelancer.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

  @include('partials.nav')

 @yield('body')

  @include('partials.footer')

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

@include('partials.modal')
  <!-- Bootstrap core JavaScript -->
  <script src="{{URL('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{URL('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{URL('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Contact Form JavaScript -->
  <script src="{{URL('assets/js/jqBootstrapValidation.js')}}"></script>
  <script src="{{URL('assets/js/contact_me.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{URL('assets/js/freelancer.min.js')}}"></script>

</body>

</html>
