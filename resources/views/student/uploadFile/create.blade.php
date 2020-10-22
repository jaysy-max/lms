@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="" style="height: 50px; width: 50px;  display: inline-block;">
                        <a href="{{ url()->previous() }}"><img src="/svg/back.svg" style="max-height: 30px; margin: 10px;"></a>
                    </span>
                </div>


                <div class="card-body">
                    <div class="container">
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                          <strong>Whoops!</strong> There were some problems with your input.<br><br>
                          <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                          </ul>
                        </div>
                        @endif

                          @if(session('success'))
                          <div class="alert alert-success">
                            {{ session('success') }}
                          </div>
                          @endif


                  <form method="post" action="{{route('teacher.uploadFile.store')}}" enctype="multipart/form-data">
                    {{csrf_field()}}



                    <div class="form-group">
                      <label>Title</label>
                      <input type="text" name="title" class="form-control" required>
                  </div>
                  <div class="form-group">
                      <label>Description</label>
                      <input type="text" name="description" class="form-control" required>
                  </div>
                          <div class="input-group control-group increment" >
                            <input type="file" name="filename" class="form-control">
                          </div>

                          <div class="form-group">
                            <input type="hidden" name="user_id" value="{{Auth::id()}}"><br />
                          </div>

                          <div class="form-group">
                            @foreach($room as $room)
                            <input type="hidden" name="room_id" value="{{ $room->id}}"><br />
                        @endforeach

                          </div>
                          <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

                    </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
