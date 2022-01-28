@extends('layouts.frontend')

@section('content')

<section class="content">
    <div class="container-fluid">
      
        <div class="row">
            {{-- @include('page.user.balance') --}}
        </div>
        <hr>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6">
                
                @if (Session::has('message'))
                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                @endif
                @if (Session::has('emessage'))
                    <div class="alert alert-danger" role="alert">{{Session::get('message')}}</div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Register</h3>
                    </div>
                    <div class="card-body card-success ">
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
            </div>
            {{-- <div class="col-12 col-sm-6 col-md-6">
                <div class="card card-success ">
                    <form action="">
                        <div class="card-header">
                            <h3 class="card-title">Bank Transfer</h3>
                        </div>
                        <div class="card-body">                                    
                            <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">₦</i></span>
                                </div>
                                <input type="number" class="form-control" name="amount" placeholder="Amount">                                      </div>
                            </div>
                            <button type="submit" name="amount_btn" class="btn btn-info">Continue</button>
                        </div>
                    </form>
                </div>
            </div> --}}
        </div>
    </div>
</section>

@endsection