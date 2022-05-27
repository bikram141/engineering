<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Shree Engineering</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
  @include('frontend.partial.style')
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="{{ asset('frontend/images/loading.gif')}}" alt="#" /></div>
   </div>
   <!-- end loader -->
   <div id="mySidepanel" class="sidepanel">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
      <a class="active" href="">Home</a>

      <a href="#contact">Contact</a>
   </div>
   <!-- header -->
   <header class="full_bg" style="background-image: url('frontend/images/Shree Engineering group of industries2.png');width: 100%;height: 100%;">
      <!-- header inner -->
     @include('frontend.partial.navbar')
      <!-- end header inner -->
      <!-- end header -->
  @yield('content')
   </header>
   <!-- end banner -->
   <!-- about -->
 
   <!-- end contact -->
   <!--  footer -->
@include('frontend.partial.footer')
   <!-- end footer -->
   <!-- Javascript files-->
@include('frontend.partial.script')
</body>

</html>