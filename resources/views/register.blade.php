@extends('layouts.frontend')

@section('content')

<div class="card">
    <div class="card-body register-card-body">
        @if (Session::has('message'))
            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
        @endif
        @if (Session::has('emessage'))
            <div class="alert alert-danger" role="alert">{{Session::get('message')}}</div>
        @endif
      <p class="login-box-msg">Register</p>

        <form action="{{url('save')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control" name="fname" placeholder="First name">
                </div>
                @error('fname')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control" name="lname" placeholder="Last name">
                </div>
                @error('lname')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control" name="email" placeholder="Email">
                </div>
                @error('email')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <div class="input-group">
                    <input type="tel" class="form-control" name="number" placeholder="Phone Number">
                </div>
                @error('number')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control" name="talktitle" placeholder="Talk Title">
                </div>
                @error('talktitle')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <div class="input-group">
                    <input type="file" class="form-control" name="photo" placeholder="Your Profile Photo">
                </div>
                @error('photo')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="row">
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection