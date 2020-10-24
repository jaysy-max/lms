@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <span class="" style="height: 50px; width: 50px;  display: inline-block;">
                        <a href="{{ url()->previous() }}"><img src="/svg/back.svg" style="max-height: 30px; margin: 10px;"></a>
                    </span>
                    {{ __('Create Profile') }}
                </div>


                <div class="card-body">
                    <form method="POST" action="{{route('profiles.store',$user)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{$user->name}}" readonly>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" value="{{$user->email}}" readonly>
                        </div>
                      
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Contact No.</label>
                            <input type="text" name="contact" class="form-control" required>
                        </div>
                        <div class="input-group control-group increment" >
                            <input type="file" name="avatar" class="form-control">
                          </div>
                        <div class="d-flex justify-content-end">
                            <input type="submit" name="" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
