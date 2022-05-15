<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>
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
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('assets/css/color-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">

</head>

<body class="landing-wrraper">
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper landing-page">
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- header start-->
            <header class="landing-header">
                <div class="custom-container">
                    <div class="row">
                        <div class="col-12">
                            <nav class="navbar navbar-light p-0" id="navbar-example2"><a class="navbar-brand"
                                    href="javascript:void(0)"> <img class="img-fluid" style="max-width:115px"
                                        src="../assets/images/logos.svg" alt=""></a>
                                <ul class="landing-menu nav nav-pills">
                                    <li class="nav-item menu-back">back<i class="fa fa-angle-right"></i></li>
                                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#tour">Tour</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('curriculm')}}">Curriculm </a></li>
                                    <li class="nav-item"><a class="nav-link" href="#demo">Rule And Regulations </a></li>

                                </ul>
                                <div>

                                    @if (Route::has('login'))

                                    @auth
                                    <a class="btn-landing px-4" href="{{ url('/home') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                                    @else
                                    <a href="{{ route('login') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                    @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="ml-4  px-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                    @endif
                                    @endauth

                                    @endif

                                </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- header end-->


            @yield('contents')
            <!--home section start-->
            <section class="landing-home section-pb-space" id="home"><img class="img-fluid bg-img-cover"
                    src="{{asset('assets/images/landing/landing-home/home-bg2.jpg')}}" alt="">
                <div class="custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="landing-home-contain">
                                <div>
                                    <div class="landing-logo"><img class="img-fluid"
                                            src="{{asset('assets/images/landing/landing-home/logo.png')}}" alt=""></div>
                                    <h2>Welcome To<span> ASTU MENTOR</span></h2>
                                    <p>When it comes to dashboard or web apps. one of the first impression you consider
                                        is the design. It needs to be high quality enough otherwise you will lose
                                        potential users due to bad design.</p><a class="btn-landing btn-lg"
                                        href="index.html" target="_blank">view demo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="position-block">
                    <div class="circle1 opicity3"></div>
                    <div class="star"><i class="fa fa-asterisk"></i></div>
                    <div class="star star1"><i class="fa fa-asterisk"></i></div>
                    <div class="star star2 opicity3"><i class="fa fa-asterisk"></i></div>
                    <div class="star star3"> <i class="fa fa-times"></i></div>
                    <div class="star star4 opicity3"><i class="fa fa-times"></i></div>
                    <div class="star star5 opicity3"> <i class="fa fa-times"></i></div>
                    {{-- <ul class="animat-block">
                        <li><img class="img-fluid img-parten top-parten"
                                src="../assets/images/landing/landing-home/home-position/img-parten.png" alt="">
                            <div><img class="img-fluid img1 v-align-t m-t-30"
                                    src="{{asset('assets/images/landing/landing-home/home-position/img-1.jpg')}}" alt=""><img
                                    class="img-fluid img2 v-align-t"
                                    src="../assets/images/landing/landing-home/home-position/img-2.jpg" alt=""><img
                                    class="img-fluid img3 v-align-b"
                                    src="../assets/images/landing/landing-home/home-position/img-3.jpg" alt=""><img
                                    class="img-fluid img4 v-align-b"
                                    src="../assets/images/landing/landing-home/home-position/img-4.jpg" alt=""></div>
                        </li>
                        <li>
                            <div><img class="img-fluid img5"
                                    src="../assets/images/landing/landing-home/home-position/img-5.png" alt=""><img
                                    class="img-fluid img6 v-align-c"
                                    src="../assets/images/landing/landing-home/home-position/img-6.jpg" alt=""></div>
                        </li>
                        <li><img class="img-fluid img-parten bottom-parten"
                                src="../assets/images/landing/landing-home/home-position/img-parten.png" alt="">
                            <div><img class="img-fluid img7 v-align-t"
                                    src="../assets/images/landing/landing-home/home-position/img-7.jpg" alt=""><img
                                    class="img-fluid img8 v-align-t"
                                    src="../assets/images/landing/landing-home/home-position/img-8.jpg" alt=""><img
                                    class="img-fluid img9"
                                    src="../assets/images/landing/landing-home/home-position/img-9.jpg" alt=""></div>
                        </li>
                    </ul> --}}
                </div>
            </section>

            <section class="landing-home section-pb-space p-4 rounded" id="tour">
                <img class="img-fluid bg-img-cover" src="{{asset('assets/images/landing/landing-home/home-bg2.jpg')}}"
                    alt="">

                <div class="custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mx-auto " >

                                <div class="card text-center bg-primary m-3" >

                                    <div class="card-header text-secondary border-radius">
                                        Panorama Tour
                                      </div>
                                    <div class="card-body"  >

                                        <div id="panorama" style="max-width: 1280px; height:75vh ;   border-radius: 10px;




                                       " class="m-auto">
                                        </div>
                                        <script>
                                            pannellum.viewer('panorama', {

                                                "default": {
                                                    "firstScene": "circle",
                                                    "sceneFadeDuration": 1000,
                                                    "autoLoad": true
                                                },


                                                "scenes": {
                                                    "circle": {
                                                        "title": " Building 509",
                                                        "hfov": 110,
                                                        "pitch": -3,
                                                        "yaw": 117,
                                                        "type": "equirectangular",
                                                        "panorama": "imgs/panorama/pano5.jpg",
                                                        "hotSpots": [
                                                            {
                                                                "pitch": -2.1,
                                                                "yaw": 132.9,
                                                                "type": "scene",
                                                                "text": "Spring House or Dairy",
                                                                "sceneId": "gate"
                                                            }
                                                        ]
                                                    },

                                                    "gate": {
                                                        "title": "Compund",
                                                        "hfov": 110,
                                                        "yaw": 5,
                                                        "type": "equirectangular",
                                                        "panorama": "imgs/panorama/pano2.jpg",
                                                        "hotSpots": [
                                                            {
                                                                "pitch": -0.6,
                                                                "yaw": 37.1,
                                                                "type": "scene",
                                                                "text": "Mason Circle",
                                                                "sceneId": "circle",
                                                                "targetYaw": -23,
                                                                "targetPitch": 2
                                                            }
                                                        ]
                                                    }
                                                }
                                            });
                                            </script>

                                    </div>
                                </div>










                            </div>
                        </div>
                    </div>
                </div>

            </section>



        </div>
    </div>
</body>

</html>






















