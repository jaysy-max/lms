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
                <h1 class="h4 text-gray-900 mb-4">Add Course</h1>
              </div>
              <form method="POST" action="{{route('admin.courses.store')}}">
                @csrf
                <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="courseCode" placeholder="Course Code" required>
                  </div>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-user" name="courseDesc" placeholder="Course Description" required>
                  </div>
                </div>
                <div class="form-group">
                  <select class="form-control form-control-user" name="degree" value="" required>
                    <option selected hidden disabled value="">Select Degree</option>
                    @foreach($degrees as $degree)
                        <option value="{{$degree->name}}">{{$degree->name}}</option>
                    @endforeach
                  </select>
                </div>

                <button type="submit" class="btn btn-primary btn-user btn-block">Register Course</button>


              </form>


            </div>
          </div>
        </div>
      </div>
    </div>





</div>
<!-- /.container-fluid -->

@endsection