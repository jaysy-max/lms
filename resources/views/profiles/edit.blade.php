@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit ') }} {{ $profile->name }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('profiles.update', $profile)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')


                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{$profile->name}}" required>
                        </div>
                        <label>Degree</label>
                            <select class="form-control" name="degree" value="" required>
                                <option selected hidden disabled value="">Select Degree</option>
                                @foreach($degree as $degree)
                                    <option value="{{$degree->name}}">{{$degree->name}}</option>
                                @endforeach
                            </select>
                        <div class="form-group">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" value="{{$profile->email}}" required>
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" value="{{$profile->address}}" required>
                        </div>
                        <div class="form-group">
                            <label>Contact</label>
                            <input type="text" name="contact" class="form-control" value="{{$profile->contact}}" required>
                        </div>
                        <div class="input-group control-group increment" >
                            <input type="file" name="avatar" class="form-control">
                        </div>

                        <div class="d-flex justify-content-end">
                            <a href="{{ url()->previous() }}" class="btn btn-light btn-link mx-1">Cancel</a>
                            <input type="submit" name="" class="btn btn-primary">
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
