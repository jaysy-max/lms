@extends('layouts.app-2')

@section('content')
<!-- Begin Page Content -->
<div class="container">





<!-- Users -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="mb-0 font-weight-bold text-primary">Room Details</h6>
  </div>
  <div class="card-body text-center">
    <p>
    <span class="mx-3"><span class="font-weight-bold text-primary">Subject:</span>  Intro to Programming</span> 
    <span class="mx-3"><span class="font-weight-bold text-primary">Subject Code:</span>  ITP-01</span> 
    <span class="mx-3"><span class="font-weight-bold text-primary">Year:</span>  1st</span> 
    <span class="mx-3"><span class="font-weight-bold text-primary">Block:</span>  1</span> 
    <span class="mx-3"><span class="font-weight-bold text-primary">Room Key:</span>  TatReN614V</span> 
    </p>
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
          <tr>
            <td></td>
            <td></td>
            <td>
            <button type="button" class="btn btn-success btn-sm btn-block">Download</button>
            
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

@endsection