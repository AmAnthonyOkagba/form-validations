@extends('layouts.frontend')

@section('content')

<section class="content">
    <div class="container-fluid">


        @if (Session::has('message'))
            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
        @elseif (Session::has('emessage'))
            <div class="alert alert-danger" role="alert">{{Session::get('message')}}</div>
        @endif
      <p class="login-box-msg">All Users</p>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Users</h3>

              @include('searchdate')

            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Photo</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Mobile Number</th>
                    <th>Talk Title</th>
                    <th>Date of Submission</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @if ($users->count()>0)
                    @foreach ($users as $user)
                  <tr>
                    <td>{{$loop->index + 1}}</td>
                    <td><img src="{{asset('img')}}/{{$user->photo}}" width="60"></td>
                    <td>{{$user->fname}}</td>
                    <td>{{$user->lname}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->number}}</td>
                    <td>{{$user->talktitle}}</td>
                    <td>{{date("Y/m/D h:i:sa", strtotime($user->created_at))}}</td>
                    <td>
                        <a href="{{route('editview',['id'=>$user->id])}}"><i class="fa fa-edit fa-2x"></i></a>
                        <a 
                        href="{{url('delete/'.$user->id) }}" >
                            <i class="fa fa-times fa-2x text-danger ml-2"></i>
                        </a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                @else
                  <tr>
                      <td colspan="9" class="text-center">No user found</td>
                  </tr>
                @endif
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
</section>
@endsection