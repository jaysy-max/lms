@extends('layouts.app-2')

@section('content')
<!-- Begin Page Content -->
      <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

</div>


<div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">Total Students</div>
                      <div class="h5 mb-4 font-weight-bold text-gray-800">15000</div>
                      <div class="text-xs font-weight-bold text-gray-600 text-uppercase mb-1">IN THIS SYSTEM</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">Total Teachers</div>
                      <div class="h5 mb-4 font-weight-bold text-gray-800">777</div>
                      <div class="text-xs font-weight-bold text-gray-600 text-uppercase mb-1">IN THIS SYSTEM</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-cog fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">Total Parents</div>
                      <div class="h5 mb-4 font-weight-bold text-gray-800">5782</div>
                      <div class="text-xs font-weight-bold text-gray-600 text-uppercase mb-1">IN THIS SYSTEM</div>
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1 font-italic">(THIS FEATURE IS COMING SOON)</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-shield fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">Total Students</div>
                      <div class="h5 mb-4 font-weight-bold text-gray-800">11000</div>
                      <div class="text-xs font-weight-bold text-gray-600 text-uppercase mb-1">TODAY ATTEND STUDENT AMOUNT</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-check fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  </div>

</div>
<!-- /.container-fluid -->

@endsection
