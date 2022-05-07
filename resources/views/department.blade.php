@extends('layouts.app')

@section('content')
<div class="container m-auto">
    <div style="margin-top: 15vh" class="row justify-content-center">


           @if (!empty($department))

           <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('curriculm')}}">Curriculum</a></li>
              <li class="breadcrumb-item"><a href="#">{{$department->name}}</a></li>

            </ol>
          </nav>

          <h1  style="
          text-align:center;
          font-family: sans-serif;
          font-weight:bolder;
          background: -webkit-linear-gradient(#eb3349, #f45c43);
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;" class="breadcrumb-item" >{{$department->name}}</h1>

           @endif

              <h3 class="text-center text-primary" >Computer Science and Engineering  </h3>
            <h6 class="text-center">Description</h6>
            <p class="text-justify text-wrap">The Computer Science and Engineering major at ASTU is structured in a way that supports the study of both theoretical and engineering aspects of computers.  It finds balance between breadth and depth to provide a solid foundation in the basic science and mathematics on one hand, and comprehensive exposure to societal issues, professionalism, and leadership skills on the other. \n Students are guided to pursue their interest in computer science and engineering by studying the fundamental science and the application of engineering concepts, techniques, and methods to both computer systems engineering and software system design through major required courses such as data structures, discrete mathematics, algorithms, object-oriented programming, programming languages, fundamental of electrical engineering, etc. followed by tailored individual education through the selection of major elective courses. The general  unrestricted elective option provide context with significant background in one or more of the  natural sciences and other engineering disciplines. <br> Every senior student is required to undertake a research project under the guidance of a senior academic advisor. Students are encouraged to participate in an independent research supporting the ongoing researches or projects in the school.
            </p>
            <h6 class="text-center">Objective</h6>
            <p class="text-justify text-wrap">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release .</p>

        <div class="row">

            <div class="col-12 col-lg-8">

                @foreach ($grouped as $key=>$col)
                <h3>{{$key}}</h3>
              @foreach ($col as $key=>$item)
              <h5>{{$key}}</h5>


              <table class="table table-bordered">
                  <thead class="table-light">
                      <td>Course Code</td>
                      <td>Course Name</td>
                      <td>Credit Hour</td>
                      <td>Type</td>
                      <td>Prerequest</td>
                  </thead>
                  <tbody>


                      @foreach ($item as $it)
                        <tr>
                          <td>{{$it->courseCode}}</td>
                          <td>{{$it->courseName}}</td>
                          <td>{{$it->creditHour}}</td>
                          <td>{{$it->type}}</td>
                        </tr>

                 @endforeach


                  </tbody>

               </table>

              @endforeach
            @endforeach


            </div>

                <div class="col-12 col-lg-4" >
                    @if (!empty($depts));

                  <h1 class="text-center">Departments</h1>

             @foreach ($depts as $dept)


                   <div class="row">

                    <div onmouseleave="this.style.transform='scale(1.0)'" onMouseOver="this.style.transform='scale(1.1)'"   style=" border:none;
                    width:100%;
                    border-radius:12px;
                    color:#fff;
                    transition: transform 0.2s ease;
                    background-image: linear-gradient(to right top,  #eb3349, #f45c43);" class="p-4 card-border mt-4
                    "   class="card p-3">
                    <h1 class="text-center" style="font-size: 6rem">{{$dept->name}}</h1>
                    <h6>FreshMan Divison</h6>

                    </div>



                   </div>



                   @endforeach

                   @endif

                </div>







        </div>










{{--
        foreach()
        {
            dump($key);

            foreach ($col as $key=>$item){

                dump($key);

                foreach($item as $it)
                {

                   dump ( );

                }
            }



        } --}}












        {{-- @foreach ($years as $year)

        @if (!empty($year["fs"]))
        <h1>Second Year</h1>
        <h1>First Semester</h1>
        <table class="table table-bordered">
            <thead>
                <td>Course Code</td>
                <td>Course Name</td>
                <td>Credit Hour</td>
                <td>Type</td>
                <td>Prerequest</td>
            </thead>
            <tbody>



             @foreach ($year["fs"] as $course)
                <tr>
                    <td>{{$course->courseCode}}</td>
                    <td>{{$course->courseName}}</td>
                    <td>{{$course->creditHour}}</td>
                    <td>{{$course->type}}</td>
                </tr>
                @endforeach

            </tbody>

         </table>
         @endif

         @if (!empty($year["ss"]))
         <h1>Second Year</h1>
         <h1>First Semester</h1>
         <table class="table table-bordered">
             <thead>
                 <td>Course Code</td>
                 <td>Course Name</td>
                 <td>Credit Hour</td>
                 <td>Type</td>
                 <td>Prerequest</td>
             </thead>
             <tbody>



              @foreach ($year["fs"] as $course)
                 <tr>
                     <td>{{$course->courseCode}}</td>
                     <td>{{$course->courseName}}</td>
                     <td>{{$course->creditHour}}</td>
                     <td>{{$course->type}}</td>
                 </tr>
                 @endforeach

             </tbody>

          </table>
          @endif















        @endforeach --}}

        {{-- {{$years->$2}} --}}
{{--
<table class="table table-bordered">
   <thead>
       <td>Course Code</td>
       <td>Course Name</td>
       <td>Credit Hour</td>
       <td>Type</td>
       <td>Prerequest</td>
   </thead>
   <tbody>
    @foreach ($semester->courses as $course)
       <tr>
           <td>{{$course->courseCode}}</td>
           <td>{{$course->courseName}}</td>
           <td>{{$course->creditHour}}</td>
           <td>{{$course->type}}</td>
       </tr>
       @endforeach
   </tbody>

</table>
 --}}




    </div>
</div>
@endsection
