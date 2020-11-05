@extends('layouts.app-2')

@section('content')
<!-- Begin Page Content -->
<div class="container">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Teacher Dashboard</h1>
  </div>
  <div class="row">
    <div class="col-md-12 d-flex my-3">
      <a href="{{ route('teacher.rooms.create') }}" class="ml-auto btn btn-success">Add</a>
    </div>
  </div>
        <div class="row">
          @foreach($rooms as $room)
          <div class="col-md-6 my-1">
            <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $room->name}} | 
                          <span>{{ $room->course}}</span>
                      </div>
                        <div class="text-xs font-weight-bold text-primary mb-1">{{ $room->roomKey}}</div>
                    </div>
                    <div class="col-auto">
                      <a href="{{ route('teacher.rooms.show', $room) }}" class="btn btn-primary">view</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
</div>
<!-- /.container-fluid -->

@endsection