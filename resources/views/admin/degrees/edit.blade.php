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
                <h1 class="h4 text-gray-900 mb-4">Enter Degree</h1>
              </div>
              <form method="POST" action="{{route('admin.degrees.update', $degree)}}">
                @csrf
                @method('PUT')

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="name" value="{{$degree->name}}" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="acronym" value="{{$degree->acronym}}" required>
                  </div>
                </div>


                
               
                <input type="submit" name="" class="btn btn-primary btn-user btn-block">



              </form>


            </div>
          </div>
        </div>
      </div>
    </div>





</div>
<!-- /.container-fluid -->

@endsection