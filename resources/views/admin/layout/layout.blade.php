<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Dashboard</title>
  <!-- loader-->
  
  <link href="{{asset('assets/css/pace.min.css')}}" rel="stylesheet"/>
  <!-- <script src="{{asset('assets/js/pace.min.js')}}"></script> -->
  <!--favicon-->
  <!-- <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon"> -->
  <!-- Vector CSS -->
  <!-- <link href="{{asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/> -->
  <!-- simplebar CSS-->
  <link href="{{asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="{{asset('assets/css/sidebar-menu.css')}}" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="{{asset('assets/css/app-style.css')}}" rel="stylesheet"/>
  <link href="{{asset('assets/css/msg.css')}}" rel="stylesheet"/>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
  <script src="{{asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	
 <!-- simplebar js -->
  <script src="{{asset('assets/plugins/simplebar/js/simplebar.js')}}"></script>
  <!-- sidebar-menu js -->
  <script src="{{asset('assets/js/sidebar-menu.js')}}"></script>
  <!-- loader scripts -->
 <!--  <script src="{{asset('assets/js/jquery.loading-indicator.js')}}"></script> -->
  <!-- Custom scripts -->
  <script src="{{asset('assets/js/app-script.js')}}"></script>
  <!-- Chart js -->
  
  <script src="{{asset('assets/plugins/Chart.js/Chart.min.js')}}"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
</head>

<body class="bg-theme bg-theme1">

 
<!-- Start wrapper-->
 <div id="wrapper"  class="bckgr">
 @include('admin.layout.header')
 
 <div class="content-wrapper">
    <div class="container-fluid ">

	@yield('content')

  </div>
  </div>

  


  </div><!--End wrapper-->
</div>
  
   
  @include('admin.layout.footer')
  
  <!-- Bootstrap core JavaScript-->
  
 
  <!-- Index js -->
  <!-- <script src="{{asset('assets/js/index.js')}}"></script> -->
 
  
</body>
</html>
