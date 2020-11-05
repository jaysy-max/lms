@extends('layouts.app-2')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Users -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Degrees</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Degree Name</th>
            <th>Acronym</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Degree Name</th>
            <th>Acronym</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
  

          @foreach($degrees as $degree)
                              <tr>
                              
                              <td>{{ $degree->name}}</td>
                              <td>{{ $degree->acronym}}</td>

                                <td>
                                    <a href="{{ route('admin.degrees.edit', $degree) }}" type="button" class="btn btn-primary btn-sm btn-block">Edit</a>
                                    <form action="{{ route('admin.degrees.destroy', $degree) }}" method="POST">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger btn-sm btn-block" >Delete</button>
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