@extends('public.app')

@section('contents')

<div class="container m-auto">
    <div style="margin-top: 15vh" class="row justify-content-center">
    
        <form  method="GET">
            <div class="input-group mt-3 w-75 m-auto">

                <input type="text"
                class="form-control"
                placeholder="Search Courses..."
                aria-label="Search"
                aria-describedby="button-addon2"
                name="search"  class="form-control"   value="{{ request()->get('search') }}"
                   <span class="input-group-text" id="basic-addon1">
                    <button  id="button-addon2" type="submit" class=" btn btn-success"> <i class="fa fa-search"></i></button></span>
            </div>
        </form>


        <table class="table pt-5 mt-4 w-75 m-auto  table-hover ">

            <tbody>
                @foreach ($courses as $course)
                <tr>
                    <td>
                        <i class="fa fa-book" style="
                        font-size: 5rem;
                        background: -webkit-gradient(linear, left top, left bottom, from(#02aab0), to(#00cdac));
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                        ">  </i>
                    </td>
                    <td>
                        <h3>{{$course->courseCode}}</h3>
                        <hr>
                    <a  href="{{route('single-course',['id'=>$course->id])}}" class="btn btn-success"> <i class="fa fa-eye"></i></a>
                    <td>
                      <h3 class="text-center">{{$course->courseName}}</h3>
                      <h4 class="text-center">Year: <strong>First Year</strong></h4>
                      <h6 class="text-center">Type: <strong> General Course</strong></h6>
                    </td>
                  </tr>

                @endforeach






            </tbody>
          </table>



    </div>
</div>

@endsection
