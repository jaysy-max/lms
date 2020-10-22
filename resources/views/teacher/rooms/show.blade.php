@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="" style="height: 50px; width: 50px;  display: inline-block;">
                        <a href="{{route('teacher.index') }}"><img src="/svg/back.svg" style="max-height: 30px; margin: 10px;"></a>
                    </span>{{ $room->name}}
                </div>
                <div class="card-body">
                    <div class="">
                        <strong><h2>{{ $room->name}}</h2></strong>
                        <h5>{{ $room->course }}</h5>
                        <h5>First {{ $room->year }}/ Block {{ $room->block }}</h5>
                        <h6>Class Code: {{ $room->roomKey }}</h6>
                        <a href="{{ route('teacher.rooms.edit', $room) }}" type="button" class="btn btn-primary float-right">Edit</a>
                        <a href="{{ route('teacher.uploadFile.create', $room) }}" type="button" class="btn btn-primary float-right mr-1">Upload</a>

                    </div>




                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr></tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($files as $key=>$data)
                                     <tr>
                                        <td>{{ ++$key}}</td>
                                        <td>{{ $data->title}}</td>
                                        <td>{{ $data->description}}</td>
                                        <td class="d-flex">
                                            <a href="{{route('downloadFile', $data)  }}" class="btn btn-success" >Download</a>                                        
                                            <form action="{{ route('teacher.uploadFile.destroy', $data) }}" method="POST">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-danger" class="float-left">Delete</button>
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
    </div>
</div>
@endsection
