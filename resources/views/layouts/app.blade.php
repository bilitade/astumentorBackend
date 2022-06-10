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



    <!-- Styles -->

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
         
         
          
            <li class="onhover-dropdown">



              <div class="notification-box"> <img class="img-30 rounded-circle" src="{{asset('uploads/profile_images/'.Auth::user()->profile_photo)}}" alt=""></div>
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
          <li class="onhover-dropdown"><i data-feather="message-square"></i>
                <ul class="chat-dropdown onhover-show-div">
                
              @guest
              @else
              <li class="onhover-dropdown p-0">
                <a class="btn btn-primary-light" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();"><i data-feather="log-out"></i>
                 {{ __('Logout') }}
             </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
              </li>
              @endguest
            </ul>

          </ul>
        </div>
        <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
      </div>
    </div>

    @if (Route::current()->getName() != 'login' && Route::current()->getName() != 'register')

    <div class="page-body-wrapper sidebar-icon">
      <!-- Page Sidebar Start-->
      <header class="main-nav">
       
        <nav>
          <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
              <ul class="nav-menu custom-scrollbar">
                <li class="back-btn">
                  <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                </li>
                <li class="sidebar-main-title">
                  <div>
                    <h6>General             </h6>
                  </div>
                </li>
               
                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="airplay"></i><span>Admin</span></a>
                  <ul class="nav-submenu menu-content">
                    <li><a href="/users">manage user</a></li>
                    <li><a href="/roles">Role</a></li>
                  </ul>
                </li>
               
               
                <li><a href="/curriculm2/school" class="nav-link menu-title">School List</a></li>
                <li><a href="/curriculm2/schoolCreate" class="nav-link menu-title">School Create</a></li>
                <li><a href="/curriculm2/department" class="nav-link menu-title">department List</a></li>
                <li><a href="/curriculm2/departmentCreate" class="nav-link menu-title">department Create</a></li>
                <li><a href="/curriculm2/Type" class="nav-link menu-title">Type List</a></li>
                <li><a href="/curriculm2/TypeCreate" class="nav-link menu-title">Type Create</a></li>
                <li><a href="/curriculm2/semister" class="nav-link menu-title">semester</a></li>
                <li><a href="/curriculm2/semesterCreate" class="nav-link menu-title">semester Create</a></li>
                <li><a href="/curriculm2/resource" class="nav-link menu-title">resource </a></li>
                <li><a href="/curriculm2/resourceCreate" class="nav-link menu-title">resource Create</a></li>
                <li><a href="/curriculm2/Createcourse" class="nav-link menu-title">Cource Create</a></li>
                <li><a href="/curriculm2/year" class="nav-link menu-title">Year</a></li>
                <li><a href="/curriculm2/Createyear" class="nav-link menu-title">Year Create</a></li>
                

                <li class="sidebar-main-title">
                  <div>
                    <h6>Components             </h6>
                  </div>
                </li>
                <li class="dropdown"><a class="nav-link menu-title" href="/student"><i data-feather="box"></i><span>Student</span></a>
                  <ul class="nav-submenu menu-content">
                    <li><a href="/student">profile</a></li>
                    <li><a href="/student/groups">Groups</a></li>
                    <li><a href="/student/2/edit">Edit Profile</a></li>
              </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
          </div>
        </nav>
      </header>
      @endif
    <!-- Page Header Ends-->
<div>
  <main class="py-4 m-4">



        @yield('content')

    </main>

</div>


    <!-- page-wrapper end-->
    <!-- latest jquery-->
    <script src="{{asset("assets/js/jquery-3.5.1.min.js")}}"></script>
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
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    @yield('js')
    <script src="{{asset('assets/js/script.js')}}"></script>
    <!-- login js-->
    <!-- Plugin used-->













    {{-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a style=" font-family: 'Lato', sans-serif;
                font-weight:bolder" class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">



            @yield('content')

        </main>
    </div> --}}
</body>
</html>
