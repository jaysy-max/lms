@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Add Room') }}
                </div>


                <div class="card-body">
                    <form method="POST" action="{{route('admin.rooms.store')}}">
                        @csrf
                        <div class="form-group">
                            <label>Room Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Course</label>
                            <select class="form-control" name="course" value="" required>
                                <option selected hidden disabled value="">Select Course</option>
                                @foreach($courses as $course)
                                    <option value="{{$course->courseCode}}">{{$course->courseDesc}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Year</label>

                            <select name="year" class="form-control" value="" required>
                                <option selected hidden disabled value="">Select Year</option>
                                <option value="1st">1st</option>
                                <option value="2nd">2nd</option>
                                <option value="3rd">3rd</option>
                                <option value="4th">4th</option>
                                <option value="5th">5th</option>
                              </select>
                        </div>
                        <div class="form-group">
                            <label>Block</label>
                            <input type="text" name="block" class="form-control" value="" required>
                        </div>


                        <div class="form-group">
                            <label>Room Key</label>
                            <input type="text" name="roomKey" class="form-control" value='{{ Str::random(10) }}' required>
                        </div>
                        <div class="form-group">
                            <label>Professor</label>
                            <input type="text" name="user_id" class="form-control" required>
                        </div>

                        <div class="d-flex justify-content-end">
                            <a href="{{route('admin.rooms.index')}}" class="btn btn-warning">Cancel</a>
                            <input type="submit" name="" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
