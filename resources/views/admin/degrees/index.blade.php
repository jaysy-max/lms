@extends('layouts.app')

@section('content')

<div class="container">

  <div class="row">
    <div class="col-md-12 d-flex my-3">
      <a href="{{ route('admin.index') }}" class="mr-auto btn btn-dark">Dashboard</a>
      <a href="{{ route('admin.degrees.create') }}" class="ml-auto btn btn-success">Add Degree</a>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
                      <table class="table" id="datatable">
                        <thead class="thead-dark">
                          <tr>
                          <th>#</th>
                          <th>Degree Name</th>
                          <th>Acronym</th>
                          <th>Action</th>
                          </tr>
                          
                        </thead>
                        <tbody>
                        @foreach($degrees as $degree)
                              <tr>
                              <th>{{ $degree->id}}</th>
                              <td>{{ $degree->name}}</td>
                              <td>{{ $degree->acronym}}</td>

                                <td>
                                    <a href="{{ route('admin.degrees.edit', $degree) }}" type="button" class="btn btn-sm btn-primary btn-block">Edit</a>
                                    <form action="{{ route('admin.degrees.destroy', $degree) }}" method="POST">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-sm btn-danger btn-block" >Delete</button>
                                    </form>
                                </td>

                              </tr>
                        @endforeach

                        </tbody>
                      </table>
    </div>
  </div>
</div>

@endsection
