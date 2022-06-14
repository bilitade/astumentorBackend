@extends('layouts.app')

@section('content')
    <div class="container m-auto">
        <div class="page-header">
            @include('private.flash_message')
            <div class="row">
                <div class="col-sm-6">
                    <h3>Group</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Groups </li>

                    </ol>
                </div>
                <div class="col-sm-6"></div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container m-auto">
        <div class="email-wrap bookmark-wrap">
            <div class="row">
                @if (\Session::has('error'))
                <div class="alert alert-error">
                    <ul>
                        <li>{!! \Session::get('error') !!}</li>
                    </ul>
                </div>
            @endif
                <div class="col-xl-12 box-col-12 xl-70">
                    <div class="email-right-aside bookmark-tabcontent contacts-tabs">
                        <div class="card email-body radius-left">
                            <div class="ps-0">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="pills-personal" role="tabpanel"
                                        aria-labelledby="pills-personal-tab">
                                        <div class="card mb-0">
                                            <div class="card-header ">
                                                <h5>My Sections</h5><span class="f-14 pull-right mt-0">*</span>
                                            </div>
                                            <div class="card-body p-0">
                                                <div class="row">
                                                @foreach ($group as $item) @php $check =0; @endphp
                                                @foreach ($item->users as $user)
                                                 @if ($user->id == Auth::user()->id)  @php $check +=1; @endphp @endif
                                                 @endforeach
                                                    @if ($check >=1)

                                                    <div class="col-sm-3 ">
                                                        <div class="card">
                                                            <div class="blog-box blog-grid">
                                                                <div class="blog-wrraper w-50 h-25"><a href="blog-single.html">
                                                                    @empty($item->image)
                                                                    <img
                                                                    class="img-fluid top-radius-blog p-4 ml-4 m-auto"
                                                                    src="{{ Avatar::create($item->sectionNmae )->toBase64() }}"
                                                                    alt="">
                                                                    @else
                                                                    <img class="img-fluid top-radius-blog" src="/group/profile/{{$item->image}}" alt="">
                                                                    @endempty
                                                                        </a></div>
                                                                <div class="blog-details-second">
                                                                    <div class="blog-post-date"><span class="blg-month"><i class="me-2" data-feather="users"></i></span><span
                                                                            class="blg-date">{{ $item->users->count() }}</span></div><a href="blog-single.html">
                                                                        <h6 class="text-center"> Section Name:{{ $item->sectionNmae }}</h6>
                                                                        <h5 class="text-center">Dept: {{$item->department->name}}</h5>
                                                                        <h5 class="text-center">School: {{$item->school->name}}</h5>
                                                                        <h5 class="text-center">Year {{$item->year->name}}</h5>

                                                                        <a   href="{{ route('single-section',$item->id) }}" class="btn btn-lg btn-square btn-secondary-gradien ">Open  Group </a>
                                                                    </a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    @endif
                                                @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Container-fluid Ends-->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-9 col-md-9 box-col-12 xl-70">
<div class="row gy-3">


 </div>
                </div>
            </div>
        </div>
    @endsection
