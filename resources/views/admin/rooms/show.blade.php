@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="" style="height: 50px; width: 50px;  display: inline-block;">
                        <a href="{{route('home') }}"><img src="/svg/back.svg" style="max-height: 30px; margin: 10px;"></a>
                    </span>{{ $room->name}}
                </div>
                <div class="card-body">
                    <div class="">
                        <strong>{{ $room->name}}</strong> <br>
                        <button class="btn btn-primary float-right ">Edit</button>
                        <button class="btn btn-primary float-right mr-1">Upload</button>

                    </div>


                    <div class="container p-3 my-3  text-black">
                        <h1>NO UPLOAD</h1>
                      </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
