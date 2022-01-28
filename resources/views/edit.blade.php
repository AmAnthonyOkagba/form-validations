@extends('layouts.frontend')

@section('content')

<section class="content">
    <div class="container-fluid">
      
        <div class="row">
        </div>
        {{-- <hr> --}}
        <div class="row pt-5">
            <div class="col-12 col-sm-6 col-md-6">
                
                @if (Session::has('message'))
                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                @endif
                @if (Session::has('emessage'))
                    <div class="alert alert-danger" role="alert">{{Session::get('message')}}</div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit</h3>
                    </div>
                    <div class="card-body card-success ">
                        <form action="{{url('update/'.$user->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="fname" value="{{ old('fname', $user->fname) }}" placeholder="First name">
                                </div>
                                @error('fname')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="lname" value="{{ old('lname', $user->lname) }}" placeholder="Last name">
                                </div>
                                @error('lname')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="email" value="{{ old('email', $user->email) }}" placeholder="Email">
                                </div>
                                @error('email')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="tel" class="form-control" name="number" value="{{ old('number', $user->number) }}" placeholder="Mobile Number">
                                </div>
                                @error('number')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="talktitle" value="{{ old('talktitle', $user->talktitle) }}" placeholder="Talk Title">
                                </div>
                                @error('talktitle')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <img src="{{asset('img')}}/{{$user->photo}}" width="100">
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <div class="input-group">
                                    <input type="file" class="form-control" name="photo" value="{{ old('photo', $user->photo) }}" placeholder="Your Profile Photo">
                                    <input type="hidden" class="form-control" name="photo" value="{{ old('photo', $user->photo) }}" placeholder="Your Profile Photo">
                                </div>
                                @error('photo')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <a href="/view" type="submit" class="btn btn-primary btn-block">Back</a>
                                </div>
                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection