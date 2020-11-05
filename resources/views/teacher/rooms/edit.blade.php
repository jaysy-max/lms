@extends('layouts.app-2')

@section('content')
<!-- Begin Page Content -->
<div class="container">



<div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Edit Room</h1>
              </div>
              <form method="POST" action="{{route('teacher.rooms.update', $room)}}">
                @csrf
                @method('PUT')
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="name" value="{{$room->name}}" required>
                  </div>

                  <div class="col-sm-6">
                    <select class="form-control form-control-user" name="course" required>
                        <option selected hidden disabled value="">Select Course</option>
                        @foreach($courses as $course)
                            <option value="{{$course->courseDesc}}">{{$course->courseDesc}}</option>
                        @endforeach
                    </select>
                  
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                  <select class="form-control form-control-user" name="year" value="{{$course->year}}" required>
                    <option>1st</option>
                    <option>2nd</option>
                    <option>3rd</option>
                    <option>4th</option>
                    <option>5th</option>
                  </select>
                  </div>
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="block" value="{{$room->block}}" required>
                  </div>
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="roomKey" value="{{$room->roomKey}}" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-12">
                  <input type="text" class="form-control form-control-user" name="professor"  value="{{$room->user_id}}" required>
                  </div>
                </div>
                <input type="submit" name="" class="btn btn-primary btn-user btn-block">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>





</div>
<!-- /.container-fluid -->

@endsection