@extends('public.app')

@section('contents')
<div class="container m-auto">
    <div style="margin-top: 15vh" class="row justify-content-center">


           @if (!empty($department))

           <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('curriculm')}}">Curriculum</a></li>
              <li class="breadcrumb-item"><a href="{{ url()->previous() }}">School</a></li>
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

              <h3 class="text-center text-primary" >{{$department->title}}  </h3>
            <h6 class="text-center">Description</h6>
            <p class=" text-wrap">
                {{$department->description}}
            </p>
            <h6 class="text-center">Objective</h6>
            <p class="text-justify text-wrap">{{$department->objective}}</p>

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
                          <td>{{$it->type_id}}</td>
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
