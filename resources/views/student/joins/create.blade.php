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
                <h1 class="h4 text-gray-900 mb-4">Join Room</h1>
              </div>
              <form class="user">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Room Key">
                  </div>

                  <div class="col-sm-6">
                  <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Room ID">
                  </div>
                </div>


                <div class="form-group row">
                  <div class="col-sm-12">
                  <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Name">
                  </div>
                </div>

              

                <a href="" class="btn btn-primary btn-user btn-block">
                  Register Room
                </a>


              </form>


            </div>
          </div>
        </div>
      </div>
    </div>





</div>
<!-- /.container-fluid -->

@endsection