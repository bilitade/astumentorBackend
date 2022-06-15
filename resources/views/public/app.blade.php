<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

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
    <link rel="stylesheet" type="text/css" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />


    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>
    <script src="{{asset("assets/js/jquery-3.5.1.min.js")}}"></script>
    <style>
        .image-upload > input
{
    display: none;
}

.image-upload img
{
    width: 80px;
    cursor: pointer;
}
    </style>

      @yield('head')

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fontawesome.css')}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/feather-icon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/css/dropzone.css')}}">
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

<body  class="landing-wraper p-4 m-4">
    <!-- tap on top starts-->

    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="">
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- header start-->










            <header style="" class="landing-header shadow-1 ">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <nav class="navbar navbar-light p-0 sticky-top  " id="navbar-example2"><a class="navbar-brand"
                                    href="/"> <img class="img-fluid" style="max-width:115px"
                                        src="{{asset('assets/images/logos.svg')}}" alt=""></a>
                                <ul class="landing-menu nav nav-pills">

                                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/tour">Tour</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('curriculm')}}">Curriculm </a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('course')}}">Courses</a></li>

                                </ul>
                                <div>

                                    @if (Route::has('login'))

                                    @auth
                                    <a class="btn-landing px-4" href="{{ url('/home') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">DashBoard</a>
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





            <section class="landing-home section-pb-space" id="home"><img class="img-fluid bg-img-cover">
                @yield('contents')


                <div class="modal modal-danger fade w-100 " id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="Delete" aria-hidden="true">
                    <div class="modal-dialog"  role="document">
                        <div class="modal-content p-4" >
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"> <i data-feather="code"></i> Developers </h5>
                                {{-- <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button> --}}

                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="card rounded">
                                            <div class="row " style="">
                                                <div class="col col-3 border-0">
                                                    <div class="card rounded-circle border-0 p-1 m-2"><img class="card-img-top w-100 d-block rounded-circle border-0" src="{{asset('assets/developer/bilisuma.jpg')}}" /></div>
                                                </div>
                                                <div class="col col-9 ">
                                                    <h5 class=" pt-2 ">Bilisuma Tadesse</h5>

                                                    <div class="row ">
                                                        <div class="col d-flex justify-content-evenly">
                                                        <a class="btn  " href="https://github.com/bilitade"><i class="fa fa-github" style="font-size: 1.6rem;"> </i></a>
                                                        <a class="btn text-primary " href="https://t.me/bilitade"> <i class="fa fa-telegram " style="font-size: 1.6rem;"></i></a>
                                                        <a class="btn text-primary" href="https://www.facebook.com/BiliTade/"><i class="fa fa-facebook" style="font-size: 1.6rem;"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="card rounded">



                                            <div class="row" style="">
                                                <div class="col col-3 border-0">
                                                    <div class="card rounded-circle border-0 p-1 m-2"><img class="card-img-top w-100 d-block rounded-circle border-0" src="{{asset('assets/developer/jitu.jpg')}}" /></div>
                                                </div>
                                                <div class="col col-9 ">
                                                    <h5 class=" pt-2 ">Jitu Geleta</h5>

                                                    <div class="row ">
                                                        <div class="col d-flex justify-content-evenly">
                                                        <a class="btn  " href="https://github.com/jitu-gg"><i class="fa fa-github" style="font-size: 1.6rem;"> </i></a>
                                                        <a class="btn text-primary " href="https://t.me/Jitugg"> <i class="fa fa-telegram " style="font-size: 1.6rem;"></i></a>
                                                        <a class="btn text-primary" href="https://www.facebook.com/jitu.geleta"><i class="fa fa-facebook" style="font-size: 1.6rem;"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card rounded">



                                            <div class="row" style="">
                                                <div class="col col-3 border-0">
                                                    <div class="card rounded-circle border-0 p-1 m-2"><img class="card-img-top w-100 d-block rounded-circle border-0" src="{{asset('assets/developer/wakoya.jpg')}}" /></div>
                                                </div>
                                                <div class="col col-9 ">
                                                    <h5 class=" pt-2 ">Wakoya Kumsa</h5>

                                                    <div class="row ">
                                                        <div class="col d-flex justify-content-evenly">
                                                        <a class="btn  " href="https://github.com/wako-coder"><i class="fa fa-github" style="font-size: 1.6rem;"> </i></a>
                                                        <a class="btn text-primary " href="https://t.me/Wakocoder"> <i class="fa fa-telegram " style="font-size: 1.6rem;"></i></a>
                                                        <a class="btn text-primary" href="https://www.facebook.com/waqoya.kumsa.1"><i class="fa fa-facebook" style="font-size: 1.6rem;"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="card rounded">



                                            <div class="row" style="">
                                                <div class="col col-3 border-0">
                                                    <div class="card rounded-circle border-0 p-1 m-2"><img class="card-img-top w-100 d-block rounded-circle border-0" src="{{asset('assets/developer/eyerus.jpg')}}" /></div>
                                                </div>
                                                <div class="col col-9 ">
                                                    <h5 class=" pt-2 ">Yerusalem Bayisa </h5>

                                                    <div class="row ">
                                                        <div class="col d-flex justify-content-evenly">
                                                        <a class="btn  " href="https://github.com/yero143"><i class="fa fa-github" style="font-size: 1.6rem;"> </i></a>
                                                        <a class="btn text-primary " href="https://t.me/Yerobayo"> <i class="fa fa-telegram " style="font-size: 1.6rem;"></i></a>
                                                        <a class="btn text-primary" href="https://www.facebook.com/yeroon.baayisaa"><i class="fa fa-facebook" style="font-size: 1.6rem;"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="card rounded">



                                            <div class="row" style="">
                                                <div class="col col-3 border-0">
                                                    <div class="card rounded-circle border-0 p-1 m-2"><img class="card-img-top w-100 d-block rounded-circle border-0" src="{{asset('assets/developer/sudes.jpg')}}" /></div>
                                                </div>
                                                <div class="col col-9 ">
                                                    <h5 class=" pt-2 ">Sudeys Abas</h5>

                                                    <div class="row ">
                                                        <div class="col d-flex justify-content-evenly">
                                                        <a class="btn  " href="https://github.com/sudeysabas"><i class="fa fa-github" style="font-size: 1.6rem;"> </i></a>
                                                        <a class="btn text-primary " href="https://t.me/souzdiely"> <i class="fa fa-telegram " style="font-size: 1.6rem;"></i></a>
                                                        <a class="btn text-primary" href="https://www.facebook.com/meron.alem.77"><i class="fa fa-facebook" style="font-size: 1.6rem;"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>













                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </section>
             <footer class="footer text-center fixed-bottom">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-6 footer-copyright">
                      <p class="mb-0">© ASTU-MENTOR</p>
                      Made with <i  style="color: #e25555;" class="icon ion-heart"></i> in  <a href="https://www.astu.edu.et/">ASTU</a>, Adama, Ethiopia
                    </div>
                    <div class="col-md-6 footer-copyright">

                            <a href="#"
                            class="delete"
                            data-id=""
                            data-bs-toggle="modal"
                            data-bs-target="#deleteModal">Developers</a>
                      </div>

                      <script>
                        $(document).on('click','.delete',function(){
                                let id = $(this).attr('data-id');
                                console.log(id);
                                $('#id').val(id);
                           });
                   </script>
                  </div>
                </div>
              </footer>

              {{-- <script src="{{asset("assets/js/icons/feather-icon/feather.min.js")}}"></script>
              <script src="{{asset("assets/js/icons/feather-icon/feather-icon.js")}}"></script>
              {{-- <!-- Sidebar jquery-->
              <script src=" {{asset("assets/js/sidebar-menu.js")}}"></script>
              <script src=" {{asset("assets/js/config.js")}} "></script>
              <!-- Bootstrap js--> --}}
              <script src="{{asset('assets/js/bootstrap/popper.min.js')}}"></script>
              <script src="{{asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>
              <!-- Plugins JS start-->

              <!-- Plugins JS Ends-->
              <!-- Theme js-->
              @yield('js')
              {{-- <script src="{{asset('assets/js/editor/ckeditor/ckeditor.js')}}"></script>
              <script src=" {{asset('assets/js/editor/ckeditor/adapters/jquery.js')}}"></script>
              <script src="{{asset('assets/js/editor/ckeditor/styles.js')}}"></script>
              <script src="{{asset('assets/js/editor/ckeditor/ckeditor.custom.js')}}"></script> --}}


              {{-- <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
              <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script> --}}


              <script src="{{asset('assets/js/script.js')}}"></script>








            <script src="{{asset("assets/js/icons/feather-icon/feather.min.js")}}"></script>
            <script src="{{asset("assets/js/icons/feather-icon/feather-icon.js")}}"></script>



        </div>

    </div>
</body>
</html>
