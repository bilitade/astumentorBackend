@extends('layouts.app')
@section('content')

<div class="container">
   <div class="card">
       <div class="card-header pb-0">


       </div>

       <div class="card-body">
  @include('private.flash_message')

        <form method="POST" action="{{ route('users.store') }}" class="theme-form login-form">
            @csrf

                <h4>Create privileged account</h4>

                <div class="form-group">
                    <label>name</label>
                    <div class="input-group"><span class="input-group-text"><i class="icon-user"></i></span>
                      <input class="form-control @error('name') is-invalid @enderror " type="text" required="" value="{{old('name')}}" name="name" placeholder="Enter name">

                      @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>

            <div class="form-group">
              <label>Email Address</label>
              <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
                <input class="form-control @error('email') is-invalid @enderror " type="email"  value="{{old('email')}}" required="" name="email" placeholder="Enter Email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>


            <div class="form-group">
                <label>Role</label>
                <div class="input-group"><span class="input-group-text"><i class="icon-key"></i></span>
                 <select  name="role" class="form-control" name="" id="">
                    @foreach ($roles as $item)
                    <option value="{{$item->name}}">{{$item->name}}</option>
                    @endforeach


                 </select>

                  @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

            <div class="form-group">
              <label>Password</label>
              <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" required="" placeholder="*********">
                <div class="show-hide">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror


                </div>
              </div>
            </div>



            <div class="form-group">
                <label> Confirm Password</label>
                <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                  <input class="form-control @error('password') is-invalid @enderror" type="password"
                  name="password_confirmation" required autocomplete="new-password"
                  required="" placeholder="*********">
                  <div class="show-hide">

                      @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror


                  </div>
                </div>
              </div>





            <div class="form-group">
                <button class="btn btn-primary btn-block d-block w-100" type="submit">Add User</button></div>



          </form>


       </div>




   </div>

</div>



@endsection
