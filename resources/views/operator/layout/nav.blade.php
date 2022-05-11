<div id="wrapper">
 
  <!--Start sidebar-wrapper-->
  <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo bg-dark">
     <a href="operator dashboard.html">
      <img src="assets/images/logo.png" class="logo-icon" alt="logo icon">
      <h5 class="logo-text"> Oleaon Dashboard</h5>
    </a>
  </div>
  <ul class="sidebar-menu do-nicescrol">
     <li class="sidebar-header">MAIN NAVIGATION</li>
     <li>
       <a href="operator dashboard.html">
         <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
       </a>
     </li>

     <li>
       <a href="#">
         <i class="zmdi zmdi-invert-colors"></i> <span>Name: {{Auth::user()->name}}</span>
       </a>
     </li>
    
     

     <li>
       <a href="#">
         <i class="zmdi zmdi-format-list-bulleted"></i>Email:{{Auth::user()->email}} <span></span>
       </a>
     </li>
   

   

     <li>
       <a href="#">
         <i class="zmdi zmdi-calendar-check"></i> <span>Designation:</span>
         <small class="badge float-right badge-light">New</small>
       </a>
     </li>

   

     <li>
       <div class="progress">
           <div class="progress-bar bg-white" role="progressbar" style="width: 100%"  height="2%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
         </div>
    
         <h4 class="sidebar-header px-2">Game List</h4>
      
      <?php $gmlist=DB::table('gamelists')->get();?>
      @foreach($gmlist as $list)

      <li><a href="admin vd.html"><i><img src="{{URL::to($list->icon)}}"></i> <span>{{$list->name}}</span></a></li>
      @endforeach

   </ul>
  
  </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav ">
 <nav class="navbar navbar-expand  bg-dark fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-envelope-open-o"></i></a>
    </li>
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-bell-o"></i></a>
    </li>
    <li class="nav-item language">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
      <ul class="dropdown-menu dropdown-menu-right">
          <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
       
        </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="{{asset('assets/images/usr.png')}}" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="{{asset('assets/images/usr.png')}}" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title">{{Auth::user()->name}}</h6>
            <p class="user-subtitle">{{Auth::user()->email}}</p>
            </div>
           </div>
          </a>
        </li>
        
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-power mr-2"></i> <a class="text-white" href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li></li>
      </ul>
    </li>
  </ul>
</nav>
</header>