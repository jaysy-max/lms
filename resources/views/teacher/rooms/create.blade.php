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
                <h1 class="h4 text-gray-900 mb-4">Create Room</h1>
              </div>
              <form method="POST" action="{{route('teacher.rooms.store')}}">
                @csrf
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="name" class="form-control form-control-user" placeholder="Room Name" required>
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
                  <div class="col-sm-4">
                  <select class="form-control form-control-user"  name="year" required>
                    <option>1st</option>
                    <option>2nd</option>
                    <option>3rd</option>
                    <option>4th</option>
                    <option>5th</option>
                  </select>
                  </div>

                  <div class="col-sm-4">
                  <input type="text" class="form-control form-control-user" name="block" placeholder="Block">
                  </div>

                  <div class="col-sm-4">
                  <input type="text" class="form-control form-control-user" name="roomKey" value='{{ Str::random(10) }}' >
                  </div>
                </div>

                <div class="form-group">
                    <input type="hidden" name="user_id" value="{{Auth::id()}}"><br />
                </div>

              

               

                <button type="submit" class="btn btn-primary btn-user btn-block">Register Room</button>


              </form>


            </div>
          </div>
        </div>
      </div>
    </div>





</div>
<!-- /.container-fluid -->

@endsection