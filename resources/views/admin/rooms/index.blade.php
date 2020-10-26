@extends('layouts.app')

@section('content')


<div class="container">

  <div class="row">
    <div class="col-md-12 d-flex my-3">
      <a href="{{ route('admin.index') }}" class="mr-auto btn btn-dark">Dashboard</a>
      <a href="{{ route('admin.rooms.create') }}" class="ml-auto btn btn-success">Add Rooms</a>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
                      <table class="table" id="datatable">
                        <thead class="thead-dark">
                          <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Course</th>
                          <th>Year</th>
                          <th>Block</th>
                          <th>Room Key</th>
                          <th>Professor</th>
                          <th>Action</th>
                          </tr>
                          
                        </thead>
                        <tbody>
                        @foreach($rooms as $room)
                              <tr>
                              <th>{{ $room->id}}</th>
                              <td>{{ $room->name}}</td>
                              <td>{{ $room->course}}</td>
                              <td>{{ $room->year}}</td>
                              <td>{{ $room->block}}</td>
                              <td>{{ $room->roomKey}}</td>
                              <td>{{ $room->user_id}}</td>

                                <td>
                                    <a href="{{ route('admin.rooms.edit', $room) }}" type="button" class="btn btn-sm btn-primary btn-block">Edit</a>
                                    <form action="{{ route('admin.rooms.destroy', $room) }}" method="POST">
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
