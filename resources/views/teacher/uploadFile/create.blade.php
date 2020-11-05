@extends('layouts.app-2')

@section('content')
<!-- Begin Page Content -->
<div class="container">



<div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Upload Material</h1>
              </div>
              <form method="post" action="{{route('teacher.uploadFile.store', $room)}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="title" placeholder=" Title">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="description" placeholder="Desciption">
                  </div>
                </div>
                <div class="form-group row">
                    <div class="col sm 12"><input type="file" name="file" class="form-control"></div>
                </div>
             
  
                
                <button type="submit" class="btn btn-primary btn-user btn-block" style="margin-top:10px">Upload</button>

              </form>


            </div>
          </div>
        </div>
      </div>
    </div>





</div>
<!-- /.container-fluid -->

@endsection