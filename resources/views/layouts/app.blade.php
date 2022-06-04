<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fontawesome.css')}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/feather-icon.css')}}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owlcarousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vector-map.css')}}">

    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('assets/css/color-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">


    <script src="{{asset("assets/js/jquery-3.5.1.min.js")}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    <script src="{{asset('js/events.js')}}"></script>




</head>
<body>

  <!-- Loader starts-->
  {{-- <div class="loader-wrapper">
    <div class="theme-loader">
      <div class="loader-p"></div>
    </div>
  </div> --}}
  <!-- Loader ends-->
  <!-- page-wrapper Start       -->
  <div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-main-header">
      <div class="main-header-right row m-0">
        <div class="main-header-left">
          <div class="logo-wrapper"><a href="/"><img class="img-fluid" style="max-width:115px"
            src="{{asset('assets/images/logos.svg')}}" alt=""></div>
          <div class="dark-logo-wrapper"><a href="/"><img class="img-fluid" src="{{asset('assets/images/logos.svg')}}" alt=""></a></div>
          <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
        </div>
        <div class="left-menu-header col">
          {{-- <ul>
            <li>
              <form class="form-inline search-form">
                <div class="search-bg"><i class="fa fa-search"></i>
                  <input class="form-control-plaintext" placeholder="Search here.....">
                </div>
              </form><span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
            </li>
          </ul> --}}
        </div>
        <div class="nav-right col pull-right right-menu p-0">
          <ul class="nav-menus">

            @auth()



                <li class="add-to-bookmark">

                    <a  href="{{route('messages')}}" >
                        <i class="bookmark-icon" data-feather="inbox"></i>
                        @include('messenger.unread-count')
                        <span class="visually-hidden">unread messages</span>
                    </a>



                </span>

            <li class="onhover-dropdown">



              <div class="notification-box"> <img class="img-30 rounded-circle" src="{{Avatar::create(Auth::user()->name)->toBase64() }}"  alt=""/></div>
              <ul class="notification-dropdown onhover-show-div">
                <li>
                  <p class=" mb-0 text-center">  {{ Auth::user()->name }}</p>
                </li>
                <li class="noti-danger">
                  <div class="media">
                    <div class="media-body">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        <button class="btn btn-primary-light d-block w-100" type="button">


                            <a
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"  href="{{ route('logout') }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>Log out</a></button>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            @endauth


          </ul>
        </div>
        <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
      </div>
    </div>
    <!-- Page Header Ends-->

    <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Start-->
        <header class="main-nav">
          <div class="sidebar-user text-center"><a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="{{Avatar::create(Auth::user()->name)->toBase64() }}" alt="">
            <div class="badge-bottom"><span class="badge badge-primary">Student</span></div><a href="user-profile.html">
              <h6 class="mt-3 f-14 f-w-600">{{Auth::user()->name}}</h6></a>


          </div>
          <nav>
            <div class="main-navbar">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                  <li class="back-btn">
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="sidebar-main-title">
                   <hr>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="inbox"></i><span>Messages</span></a>
                    <ul class="nav-submenu menu-content">
                        <li><a href="{{route('messages')}}">All Messages</a></li>
                      <li><a href="{{route('messages.create')}}">Write Message</a></li>

                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="/newsfeed"><i data-feather="layout"></i><span>NewsFeeds</span></a>

                  </li>
             



                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="{{route('calenderEvent')}}" ><i data-feather="file-text"></i><span>Events</span></a></li>
                  <li class="sidebar-main-title">
                   <hr>
                  </li>
                







              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
          </nav>
        </header>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <!-- Container-fluid starts-->
          <div class="container-fluid dashboard-default-sec">





                @yield('content')



        </div>
        <!-- footer start-->

      </div>

      <footer class="footer text-center fixed-bottom">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 footer-copyright">
              <p class="mb-0">Copyright 2022 © ASTU MENTOR</p>
            </div>

          </div>
        </div>
      </footer>



    <div>




    <!-- page-wrapper end-->
    <!-- latest jquery-->

    <!-- feather icon js-->
    <script src="{{asset("assets/js/icons/feather-icon/feather.min.js")}}"></script>
    <script src="{{asset("assets/js/icons/feather-icon/feather-icon.js")}}"></script>
    <!-- Sidebar jquery-->
    <script src=" {{asset("assets/js/sidebar-menu.js")}}"></script>
    <script src=" {{asset("assets/js/config.js")}} "></script>
    <!-- Bootstrap js-->
    <script src="{{asset('assets/js/bootstrap/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- Plugins JS start-->
    <script src="{{asset('assets/js/tooltip-init.js')}}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{asset('assets/js/script.js')}}"></script>

    <!-- login js-->

    <!-- Plugin used-->



</body>


</html>
