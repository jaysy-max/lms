@extends('layouts.app')

@section('content')





<div class="container">
    <div class="row justify-content-center text-center">
        
        <a class="col-lg-4 jumbotron bg-dark mx-3 text-decoration-none" id="zoom" href="{{ route('admin.users.index') }}">
        <i class="fa fa-user fa-5x text-white"></i>
        <h5 class="text-white my-4">User Mangement</h5>
        </a>

        <a class="col-lg-4 jumbotron bg-danger mx-3 text-decoration-none" id="zoom" href="{{ route('admin.degrees.index') }}">
        <i class="fa fa-book fa-5x text-white"></i>
        <h5 class="text-white my-4">Degree Mangement</h5>
        </a>

    </div>
    <div class="row justify-content-center text-center">

        <a class="col-lg-4 jumbotron bg-info mx-3 text-decoration-none" id="zoom" href="{{ route('admin.courses.index') }}">
        <i class="fa fa-list-ul fa-5x text-white"></i>
        <h5 class="text-white my-4">Course Mangement</h5>
        </a>

        <a class="col-lg-4 jumbotron bg-warning mx-3 text-decoration-none" id="zoom" href="{{ route('admin.rooms.index') }}">
        <i class="fa fa-users fa-5x text-white"></i>
        <h5 class="text-white my-4">Room Mangement</h5>
        </a>

    </div>
</div>


@endsection
