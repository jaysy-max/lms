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
                <h1 class="h4 text-gray-900 mb-4">Add Room</h1>
              </div>
              <form method="POST" action="{{route('admin.rooms.store')}}">
                @csrf
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="name" placeholder="Room Name" required>
                  </div>

                  <div class="col-sm-6">
                  
                  <select class="form-control form-control-user" name="course" value="" required>
                    <option selected hidden disabled value="">Select Course</option>
                    @foreach($courses as $course)
                        <option value="{{$course->courseCode}}">{{$course->courseDesc}}</option>
                    @endforeach
                </select>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <select name="year" class="form-control" value="" required>
                        <option selected hidden disabled value="">Select Year</option>
                        <option value="1st">1st</option>
                        <option value="2nd">2nd</option>
                        <option value="3rd">3rd</option>
                        <option value="4th">4th</option>
                        <option value="5th">5th</option>
                      </select>
                  </div>
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="block" placeholder="Block" required>
                  </div>

                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="roomKey" value='{{ Str::random(10) }}' required>
                  </div>
                </div>

                <div class="form-group row">
                  

                  <div class="col-sm-12">
                  <input type="text" class="form-control form-control-user" name="user_id" placeholder="Professor">
                  </div>
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