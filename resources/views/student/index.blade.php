@extends('layouts.app-2')

@section('content')
<!-- Begin Page Content -->
<div class="container">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Student Dashboard</h1>
</div>

<div class="row">
<div class="col-md-6 my-1">
<div class="card border-left-primary shadow h-100 py-2">
  <div class="card-body">
      <div class="row no-gutters align-items-center">
          <div class="col mr-2">
          <div class="h5 mb-0 font-weight-bold text-gray-800">
              ITP-01 | <span>Intro to Programming</span>
          </div>
            <div class="text-xs font-weight-bold text-primary mb-1">TatReN614V</div>
          </div>
          <div class="col-auto">
                  <a href="#" class="btn btn-primary">
                    view
                  </a>
          </div>
      </div>
  </div>
</div>
</div>

<div class="col-md-6 my-1">
<div class="card border-left-info shadow h-100 py-2">
  <div class="card-body">
      <div class="row no-gutters align-items-center">
          <div class="col mr-2">
          <div class="h5 mb-0 font-weight-bold text-gray-800">
              IT-01 | <span>Intro to Information Technology</span>
          </div>
            <div class="text-xs font-weight-bold text-info mb-1">92zqL91Bkc</div>
          </div>
          <div class="col-auto">
                  <a href="#" class="btn btn-info">
                    view
                  </a>
          </div>
      </div>
  </div>
</div>
</div>
</div>

              


</div>
<!-- /.container-fluid -->

@endsection