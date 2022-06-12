@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Group</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Apps </li>
                        <li class="breadcrumb-item active">Contacts</li>
                    </ol>
                </div>
                <div class="col-sm-6"></div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="email-wrap bookmark-wrap">
            <div class="row">
                @if (\Session::has('error'))
                <div class="alert alert-error">
                    <ul>
                        <li>{!! \Session::get('error') !!}</li>
                    </ul>
                </div>
            @endif
                <div class="col-xl-3 col-md-3 box-col-12 xl-70">
                    <div class="email-right-aside bookmark-tabcontent contacts-tabs">
                        <div class="card email-body radius-left">
                            <div class="ps-0">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="pills-personal" role="tabpanel"
                                        aria-labelledby="pills-personal-tab">
                                        <div class="card mb-0">
                                            <div class="card-header d-flex">
                                                <h5>Your Groups</h5><span class="f-14 pull-right mt-0">*</span>
                                            </div>
                                            <div class="card-body p-0">
                                                <div class="row list-persons" id="addcon">
                                                    <div class="col-xl-12 xl-50 col-md-12 box-col-6">
                                                        <div class="nav flex-column nav-pills" id="v-pills-tab"
                                                            role="tablist" aria-orientation="vertical"><a
                                                                class="contact-tab-0 nav-link active" id="v-pills-user-tab"
                                                                data-bs-toggle="pill" onclick="activeDiv(0)"
                                                                href="#v-pills-user" role="tab" aria-controls="v-pills-user"
                                                                aria-selected="true">
                                                                @foreach ($group as $item) @php $check =0; @endphp
                                                                @foreach ($item->members as $member)
                                                                 @if ($member->id == Auth::user()->id)  @php $check +=1; @endphp @endif
                                                                 @endforeach
                                                                    @if ($check >=1)
                                                                    <div class="media"><img
                                                                            class="img-50 img-fluid m-r-20 rounded-circle update_img_0"
                                                                            src="{{ Avatar::create($item->name)->toBase64() }}"
                                                                            alt="">
                                                                        <div class="media-body">
                                                                            <h6> <span
                                                                                    class="first_name_0">{{ $item->name }}
                                                                                </span><span class="last_name_0"></span>
                                                                            </h6>
                                                                            <p class="email_add_0">{{ $item->members->count() }}
                                                                                Member</p>
                                                                        </div>
                                                                    </div>
                                                                    @endif
                                                                @endforeach


                                                            </a></div>
                                                    </div>

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
<div class="row">
    @foreach ($group as $item) @php $check =0; @endphp
    @foreach ($item->members as $member)
     @if ($member->id == Auth::user()->id)  @php $check +=1; @endphp @endif
     @endforeach
     @if ($check ==0)
                            <div class="col-sm-6 col-xl-3 box-col-6 des-xl-50">
                                <div class="card">
                                    <div class="blog-box blog-grid">
                                        <div class="blog-wrraper"><a href="blog-single.html">
                                            @empty($item->image)
                                            <img
                                            class="img-fluid top-radius-blog"
                                            src="{{ Avatar::create($item->name)->toBase64() }}"
                                            alt="">
                                            @else
                                            <img class="img-fluid top-radius-blog" src="/group/profile/{{$item->image}}" alt="">
                                            @endempty
                                                </a></div>
                                        <div class="blog-details-second">
                                            <div class="blog-post-date"><span class="blg-month"><i class="me-2" data-feather="users"></i></span><span
                                                    class="blg-date">{{ $item->members->count() }}</span></div><a href="blog-single.html">
                                                <h6 class="blog-bottom-details">{{ $item->name }}</h6>
                                            </a>
                                            <p>{{ Str::limit($item->description, 20) }} </p>
                                            <p></p>
                                            <div class="detail-footer text-center">

                                                <a   href="{{ route('join',$item->id) }}" class="btn btn-lg btn-square btn-secondary-gradien ">join  Group </a>
                                            </div>
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
    @endsection
