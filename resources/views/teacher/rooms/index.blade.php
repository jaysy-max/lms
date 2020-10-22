@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="" style="height: 50px; width: 50px;  display: inline-block;">
                        <a href="{{ route('teacher.index') }}"><img src="/svg/back.svg" style="max-height: 30px; margin: 10px;"></a>
                    </span>
                    {{ __('Room') }}
                </div>


                <div class="card-body">

                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Course</th>
                          <th scope="col">Year</th>
                          <th scope="col">Block</th>
                          <th scope="col">Room Key</th>
                          <th scope="col">Professor</th>

                          <th scope="col">Action</th>
                        </tr>
                        <a href="{{ route('teacher.rooms.create') }}" type="button" class="btn btn-primary float-right" style="margin-bottom: 5px;">Add Rooms</a>
                      </thead>
                      <tbody>
                        @foreach($rooms as $room)
                        <tr>
                            <th scope="row">{{ $room->id}}</th>
                            <td>{{ $room->name}}</td>
                            <td>{{ $room->course}}</td>
                            <td>{{ $room->year}}</td>
                            <td>{{ $room->block}}</td>
                            <td>{{ $room->roomKey}}</td>
                            <td>{{ $room->user_id}}</td>
                            <td>
                                <a href="{{ route('teacher.rooms.edit', $room) }}" type="button" class="btn btn-primary float-left">Edit</a>
                                <form action="{{ route('teacher.rooms.destroy', $room) }}" method="POST" class="float-left">
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
