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
                </div>


                <div class="card-body">
                    <div class="container">



                  <form method="post" action="{{route('teacher.uploadFile.store', $room)}}" enctype="multipart/form-data">
                    {{csrf_field()}}



                    <div class="form-group">
                      <label>Title</label>
                      <input type="text" name="title" class="form-control" placeholder="Title" required>
                  </div>
                  <div class="form-group">
                      <label>Description</label>
                      <input type="text" name="description" class="form-control" placeholder="Description" required>
                  </div>
                          <div class="input-group control-group increment" >
                            <input type="file" name="file" class="form-control">
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
