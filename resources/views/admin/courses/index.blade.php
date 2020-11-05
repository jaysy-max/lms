@extends('layouts.app-2')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Users -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Courses</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Course Code</th>
            <th>Course Description</th>
            <th>Degree</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Course Code</th>
            <th>Course Description</th>
            <th>Degree</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          @foreach($courses as $course)
          <tr>
            <td>{{ $course->courseCode}}</td>
            <td>{{ $course->courseDesc}}</td>
            <td>{{ $course->degree}}</td>
            <td>
              
              <a href="{{ route('admin.courses.edit', $course) }}" type="button" class="btn btn-primary btn-sm btn-block">Edit</a>
                <form action="{{ route('admin.courses.destroy', $course) }}" method="POST">
                  @csrf                      
                  {{ method_field('DELETE') }}
                  <button type="submit" class="btn btn-danger btn-sm btn-block" >Delete</button>
              </form>                       
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->





@endsection