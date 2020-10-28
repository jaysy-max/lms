@extends('layouts.app')

@section('content')


        @can('student-content')
<div class="container">

<div class="row">
    <div class="col-md-12 d-flex my-3">
      <a href="{{ route('student.joins.create',$room ?? '') }}" class="ml-auto btn btn-success">Add</a>
    </div>
  </div>

                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">Dashboard</div>

                            <div class="card-body">

                                <div class="card-bodycontentBody mt-2 row row-cols-1 row-cols-md-3">
                                    @foreach($joins as $join)
                                    <div class="col-md-4">
                                      <div class="card mb-4 shadow-sm text-white bg-primary" >
                                        <div class="card-body">
                                          <h3>{{ $join->name}}</h3>
                                          <p class="card-text">{{ $join->roomKey}}</p><div class="btn-group">
                                              <a href="{{ route('student.joins.show', $join) }}" type="button" class="btn btn-outline-light">View</a>
                                            </div>
                                        </div>
                                      </div>
                                    </div>

                                          </a>
                                      @endforeach

                                  </div>

                            </div>
                        </div>
                    </div>
                </div>
                </div>
        @endcan
@endsection
