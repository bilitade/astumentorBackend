 @extends('layouts.app')
 @section('content')

<div class="container">
    <div class="card">
        <div class="card-header pb-0">
            <h5>Users</h5>
            @include('private.flash_message')
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="display" id="basic-1">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>profile</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Email verifed at</th>
                            <th>Role</th>
                             <th>Joined</th>
                             <th>status</th>
                             <th>Action</th>



                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td><img class="img-30 rounded-circle" src="{{ ($user->profile_photo)? asset('uploads/profile_images/'.$user->profile_photo): Avatar::create($user->name)->toBase64() }}"  alt=""/> </td>
                                <td>{{$user->name}}</td>

                                 <td>{{$user->email}}</td>
                                 <td>{{$user->email_verified_at}}</td>
                                 <td>  <span class="badge rounded-pill bg-warning text-dark">{{$user->roles[0]->name}}</span></td>
                                 <td>{{$user->created_at}}</td>
                                 <td>{{ ($user->status==1)? 'active' :'banned' }}</td>
                                 <td>
                                    <form action="{{route('banunban',$user->id)}}" method="post">
                                        @csrf

                                        <button {{ ($user->id==Auth::user()->id)?'disabled':''}} type="submit" class="btn  {{($user->status==1)? 'btn-danger':'btn-success' }} "><i class="fa  {{($user->status==1)? 'fa-ban':'fa-check' }} "></i></button>
                                    </form>


                                </td>


                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>



 @endsection
