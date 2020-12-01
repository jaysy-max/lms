@extends('layouts.app-2')

@section('content')
<!-- Begin Page Content -->
<div class="container">


<div class="row">
  <div class="col-md-12">
    <a href="{{ route('teacher.rooms.edit', $room) }}" type="button" class="btn btn-success float-right my-3">Edit</a>
  </div>
</div>



<!-- Users -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="mb-0 font-weight-bold text-primary">Room Details</h6>
  </div>
  <div class="card-body text-center">
    <p>
    <span class="mx-3"><span class="font-weight-bold text-primary">Room Name:</span> {{ $room->name}}</span> 
    <span class="mx-3"><span class="font-weight-bold text-primary">Subject Name:</span> {{ $room->course }}</span> 
    <span class="mx-3"><span class="font-weight-bold text-primary">Year:</span>  {{ $room->year }}</span>  
    <span class="mx-3"><span class="font-weight-bold text-primary">Block:</span> {{ $room->block }}</span> 
    <span class="mx-3"><span class="font-weight-bold text-primary">Room Key:</span>  {{ $room->roomKey }}</span> 
    </p>
  </div>
</div>



<div class="row">
  <div class="col-md-12">
    
  

    <div class="dropdown">
      <button class="btn btn-primary float-right my-3 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       Create
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="{{ route('teacher.uploadFile.create', $room) }}">MATERIAL</a>
        <a class="dropdown-item" href="#">ASSESSMENT</a>
      </div>
    </div>
  </div>
</div>



<!-- Users -->
<div class="card shadow mb-4">

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Title</th>
            <th>Desciption</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Title</th>
            <th>Desciption</th> 
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          

          @foreach($files as $key=>$data)
                                     <tr>
                                        
                                        <td>{{ $data->title}}</td>
                                        <td>{{ $data->description}}</td>
                                        <td>
                                            <a href="{{route('downloadFile', $data)  }}" type="button" class="btn btn-success btn-sm btn-block" >Download</a>                                        
                                            <form action="{{ route('teacher.uploadFile.destroy', $data) }}" method="POST">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-danger btn-sm btn-block">Delete</button>
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
<!-- /.container-fluid -->

@endsection