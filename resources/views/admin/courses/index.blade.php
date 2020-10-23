@extends('layouts.app')

@section('content')

<div class="container">

  <div class="row">
    <div class="col-md-12 d-flex my-3">
      <a href="{{ route('admin.index') }}" class="mr-auto btn btn-dark">Dashboard</a>
      <a href="{{ route('admin.courses.create') }}" class="ml-auto btn btn-success">Add Course</a>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
                      <table class="table">
                        <thead class="thead-dark">
                          <tr>
                          <th>#</th>
                          <th>Course Code</th>
                          <th>Course Description</th>
                          <th>Degree</th>
                          <th>Action</th>
                          </tr>
                          
                        </thead>
                        <tbody>
                        @foreach($courses as $course)
                              <tr>
                              <th>{{ $course->id}}</th>
                              <td>{{ $course->courseCode}}</td>
                              <td>{{ $course->courseDesc}}</td>
                              <td>{{ $course->degree}}</td>

                                <td>
                                    <a href="{{ route('admin.courses.edit', $course) }}" type="button" class="btn btn-sm btn-primary btn-block">Edit</a>
                                    <form action="{{ route('admin.courses.destroy', $course) }}" method="POST">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-sm btn-danger btn-block" >Delete</button>
                                    </form>
                                </td>

                              </tr>
                        @endforeach

                        </tbody>
                      </table>
    </div>
  </div>
</div>



@endsection
