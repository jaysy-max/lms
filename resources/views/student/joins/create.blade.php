@extends('layouts.app')

@section('content')
@can('student-content')

                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">{{ __('Join Room') }}

                            </div>

                            <div class="card-body">
                                <form method="POST" action="{{route('student.joins.store')}}">
                                    @csrf

                                    <div class="form-group">
                                        <input type="hidden" name="user_id" value="{{Auth::id()}}"><br />
                                    </div>
                                    <div class="form-group">
                                        <label>Room Key</label>
                                        <input type="text" name="roomKey" class="form-control"  required>
                                    </div>
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" required>
                                    </div>

                                    <label>Room ID</label>
                                    <div class="form-group">
                                        <input type="text" name="room_id" class="form-control" required><br />
                                    </div>





                                    <div class="d-flex justify-content-end">
                                        <a href="{{ url()->previous() }}" class="btn btn-light btn-link mx-1">Cancel</a>
                                        <input type="submit" name="" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


        @endcan
@endsection
