@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="" style="height: 50px; width: 50px;  display: inline-block;">
                        <a href="{{ route('admin.index') }}"><img src="/svg/back.svg" style="max-height: 30px; margin: 10px;"></a>
                    </span>
                    {{ __('Course') }}
                </div>

                <div class="card-body">

                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Course Code</th>
                          <th scope="col">Course Description</th>
                          <th scope="col">Degree</th>

                          <th scope="col">Action</th>
                        </tr>
                        <a href="{{ route('admin.courses.create') }}" type="button" class="btn btn-primary float-right" style="margin-bottom: 5px;">Add Course</a>
                      </thead>
                      <tbody>
                        @foreach($courses as $course)
                            <tr>
                              <th scope="row">{{ $course->id}}</th>
                              <td>{{ $course->courseCode}}</td>
                              <td>{{ $course->courseDesc}}</td>
                              <td>{{ $course->degree}}</td>

                              <td>
                                  <a href="{{ route('admin.courses.edit', $course) }}" type="button" class="btn btn-primary float-left">Edit</a>
                                  <form action="{{ route('admin.courses.destroy', $course) }}" method="POST" class="float-left">
                                      @csrf
                                      {{ method_field('DELETE') }}
                                      <button type="submit" class="btn btn-warning" >Delete</button>
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
</div>
@endsection
