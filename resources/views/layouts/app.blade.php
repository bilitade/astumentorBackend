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
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/css/datatables.css') }}">
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



              <div class="notification-box"> <img class="img-30 rounded-circle" src="{{ (Auth::user()->profile_photo)? asset('uploads/profile_images/'.Auth::user()->profile_photo): Avatar::create(Auth::user()->name)->toBase64() }}"  alt=""/></div>
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
          <li class="onhover-dropdown">

            <ul class="notification-dropdown onhover-show-div">
                <form action="{{route('mark')}}">
                    @csrf
                    <button type="submit" class="btn btn-danger  w-100 ">markAsRead</button>
                </form>

                 <hr>
                 <p class="text-center btn btn-primary w-100 text-center">New Notifications</p>
                 <hr>


                            @foreach(auth()->user()->unreadNotifications as $notification)
                            <li class="noti-danger">

                            <div class="media">
                                <div class="media-body">


                                    <p >{{ $notification->data['data'] }}</p>
                                </div>
                            </div>
                            </li>
                            @endforeach




                    <hr>
                    <p class="text-center btn btn-secondary w-100 text-center">Earlier Notifications</p>
                <hr>
                @foreach(auth()->user()->readNotifications as $notification)
                <li class="noti-danger">

                  <div class="media">
                    <div class="media-body text-center">


                       <p >{{ $notification->data['data'] }}</p>
                    </div>
                  </div>
                </li>
                @endforeach


              </ul>
            <i data-feather="bell"></i>
             @if (count(auth()->user()->unreadNotifications)>0)
             <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" >{{ count(auth()->user()->unreadNotifications)}}</span>
            @endif  </li>


          </ul>
        </div>
        <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
      </div>
    </div>


      @endif
    <!-- Page Header Ends-->

    <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Start-->
        <header class="main-nav">
          <div class="sidebar-user text-center">
            <form action="{{route('profile')}}" method="post" enctype="multipart/form-data" >
                @csrf
           <label for="profile"><i data-feather="camera"></i></label>

            <input hidden name="profile" id="profile" type="file" accept="image/*" onchange="loadFile(event)">

            <script>
              var loadFile = function(event) {
                var output = document.getElementById('output');
                output.src = URL.createObjectURL(event.target.files[0]);
                output.onload = function() {
                  URL.revokeObjectURL(output.src) // free memory
                }
              };
            </script>
            <button type="submit" class=" setting-primary" href="javascript:void(0)"><i data-feather="refresh-ccw"></i></button>
            <img id="output"  class="img-90 rounded-circle" src=" {{ (Auth::user()->profile_photo)? asset('uploads/profile_images/'.Auth::user()->profile_photo): Avatar::create(Auth::user()->name)->toBase64() }}" alt="">
            <div class="badge-bottom"><span class="badge badge-primary">{{Auth::user()->roles[0]->name}}</span></div><a href="user-profile.html">
              <h6 class="mt-3 f-14 f-w-600">{{Auth::user()->name}}</h6></a>

            </form>
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



                  <li class="dropdown mb-2"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="inbox"></i><span>Messages</span></a>
                    <ul class="nav-submenu menu-content">
                        <li><a href="{{route('messages')}}">All Messages</a></li>
                      <li><a href="{{route('messages.create')}}">Write Message</a></li>

                    </ul>
                  </li>


                  <li class="dropdown mb-2"><a class="nav-link menu-title link-nav" href="/newsfeed"><i data-feather="layout"></i><span>NewsFeeds</span></a>

                  </li>

                  @role('admin')
                <li class="dropdown mb-2"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="user-check"></i><span> Manage Role and User</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="{{route('users.index')}}">Manage user</a></li>
                      <li><a href="{{route('users.create')}}">Add user</a></li>

                    </ul>
                  </li>
                  @endrole
                  @role('school|department|admin|teacher')
                  <li class="dropdown mb-2"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="book-open"></i><span>Manage Curriculum</span></a>
                    <ul class="nav-submenu menu-content">
                        <li><a href="/curriculm2/school" class=" ">School List</a></li>
                        <li><a href="/curriculm2/schoolCreate" class=" ">School Create</a></li>
                        <li><a href="/curriculm2/department" class="">department List</a></li>
                        <li><a href="/curriculm2/departmentCreate" class=" ">department Create</a></li>
                        <li><a href="/curriculm2/Type" class="">Type List</a></li>
                        <li><a href="/curriculm2/TypeCreate" class="">Type Create</a></li>
                        <li><a href="/curriculm2/semister" class=" ">semester</a></li>
                        <li><a href="/curriculm2/semesterCreate" class="">semester Create</a></li>
                        <li><a href="/curriculm2/resource" class="">resource </a></li>
                        <li><a href="/curriculm2/resourceCreate" class="">resource Create</a></li>
                        <li><a href="/curriculm2/Createcourse" class=" ">Cource Create</a></li>
                        <li><a href="/curriculm2/allcourse" class=" ">Cource list</a></li>
                        <li><a href="/curriculm2/year" class=" ">Year</a></li>
                        <li><a href="/curriculm2/Createyear" class="">Year Create</a></li>
                    </ul>
                  </li>
                  @endrole
                    @role('student Union')
                  <li class="dropdown mb-2"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="users"></i><span>Manage Groups</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="{{route('groups.index')}}">Groups</a></li>
                      <li><a href="{{route('groups.create')}}">Add</a></li>

                    </ul>
                  </li>
                  @endrole


                   @role('department')
                  <li class="dropdown mb-2"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="home"></i><span>Sections</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="{{route('allsection')}}">Sections</a></li>
                      <li><a href="{{route('section.index')}}">Manage Section</a></li>
                      <li><a href="{{route('section.create')}}">Create Section  </a></li>

                    </ul>
                  </li>
                  @endrole()
                  @role('admin|student|teacher')
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="/section/join" ><i data-feather="plus-circle"></i><span>join section</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="{{route('allsection')}}" ><i data-feather="book"></i><span>My sections</span></a></li>

                  @endrole()

                  <li class="dropdown mb-2"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="clipboard"></i><span>Schedule</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="{{route('schedule.index')}}">Schedule</a></li>

                      @role('department')

                      <li><a href="{{route('schedule.create')}}">Create Schedule  </a></li>
                      @endrole
                    </ul>
                  </li>



                  <li class=""><a class=" menu-title" href="{{route('allgroups')}}"><i  data-feather="trello"></i><span class="ml-2">Groups</span></a>

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
    @yield('js')
    <script src="{{asset('assets/js/editor/ckeditor/ckeditor.js')}}"></script>
    <script src=" {{asset('assets/js/editor/ckeditor/adapters/jquery.js')}}"></script>
    <script src="{{asset('assets/js/editor/ckeditor/styles.js')}}"></script>
    <script src="{{asset('assets/js/editor/ckeditor/ckeditor.custom.js')}}"></script>


    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>


    <script src="{{asset('assets/js/script.js')}}"></script>

    <!-- login js-->

    <!-- Plugin used-->



</body>


</html>
