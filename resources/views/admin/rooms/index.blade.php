@extends('layouts.app-2')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Users -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Rooms</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Name</th>
            <th>Course</th>
            <th>Year</th>
            <th>Block</th>
            <th>Room Key</th>
            <th>Professor</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Name</th>
            <th>Course</th>
            <th>Year</th>
            <th>Block</th>
            <th>Room Key</th>
            <th>Professor</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          @foreach($rooms as $room)
            <tr>
              <td>{{ $room->name}}</td>
              <td>{{ $room->course}}</td>
              <td>{{ $room->year}}</td>
              <td>{{ $room->block}}</td>
              <td>{{ $room->roomKey}}</td>
              <td>{{ $room->user_id}}</td>
              <td>
                <a href="{{ route('admin.rooms.edit', $room) }}" type="button" class="btn btn-primary btn-sm btn-block">Edit</a>
                <form action="{{ route('admin.rooms.destroy', $room) }}" method="POST">
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