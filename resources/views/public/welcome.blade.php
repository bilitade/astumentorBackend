@extends('public.app')

@section('contents')


                <div class="custom-container  pt-4">
                    <div class="row">
                        <div class="col-12 col-lg-7 p-4">

                                <div class=" p-4 m-auto">

                                    <h1 style="padding-top: 2%; padding-left:3%;padding-right:3%" >Welcome To <strong class=" text-primary"> ASTU MENTOR</strong></h1>

                                    <p  style="padding-top: 9%; padding-left:3%;padding-right:3% ; font-size: 1.2rem" class=" text-wrap">ASTU-MENTOR is an online and mobile-based student-centered software that provides a variety of services (academic information, events, announcements, navigations) primarily for ASTU students. Three key service components will be included in the app.
                                        Services supplied to authorized users include events and announcements based on their job. When it comes to football festivals, charity, and club formation information, these kind of services are critical for the student union. Academic information services: These services are usually open to the public, and anybody with an interest can learn everything there is to know about the curriculum, courses, grading system, class schedules, course descriptions, and university collaborations. Navigation services: This service includes a navigation map using Google Maps as well as bizarre 360-degree photos.</p>

                                </div>

                        </div>
                        <div class="col-12 col-lg-5  p-4">

                                <div>

                             <img style="width: 100%; padding:5%" src="{{asset('imgs/branding.svg')}}"  alt="" srcset="">
                                </div>

                        </div>
                    </div>

                     <div class="row w-50 m-auto">
                        <h3 class="ml-4"> Also Available on</h3>
                         <div class="col-3 ">
                             <a href="" > <i style="font-size: 5.0rem" class=" fa fa-android shadow-2xl"> </i></a>

                         </div>
                         <div class="col-3 ">
                            <a href="" > <i style="font-size: 5.0rem" class=" fa fa-apple  shadow-2xl"> </i></a>

                        </div>
                     </div>
                </div>



@endsection


