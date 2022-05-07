@extends('layouts.app')

@section('content')
<div class="container m-auto">
    <div style="margin-top: 15vh" class="row justify-content-center">

          <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item">Curriculum</li>
            </ol>
          </nav>


         <div class="container-fluid p-3 my-3">

             <div class="row">
                    @if (!empty($schools))

                    @endif
                 @foreach ($schools as $school)

                <div class="col-12 col-md-6">
                    <div class="height-100 d-flex justify-content-center align-items-center">

                        <a href="{{route('school', ['id'=> $school->id] )}}">

                            <div onmouseleave="this.style.transform='scale(1.0)'" onMouseOver="this.style.transform='scale(1.1)'"   style=" border:none;
                            width:100%;
                            border-radius:12px;
                            color:#fff;
                            transition: transform 0.2s ease;
                            background-image: linear-gradient(to right top, #280537, #56034c, #890058, #bc005b, #eb1254);" class="p-4 card-border mt-4
                            "   class="card p-3">
                            <h1 class="text-center" style="font-size: 6rem">{{$school->name}}</h1>
                            <h6>FreshMan Divison</h6>

                            </div>


                        </a>

                  </div>

                </div>


                @endforeach






             </div>

           </div>


    </div>
</div>
@endsection
