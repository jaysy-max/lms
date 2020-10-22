@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="" style="height: 50px; width: 50px;  display: inline-block;">
                        <a href="{{ route('admin.index') }}"><img src="/svg/back.svg" style="max-height: 30px; margin: 10px;"></a>
                    </span>
                    {{ __('Degree') }}
                </div>


                <div class="card-body">

                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Degree Name</th>
                          <th scope="col">Acronym</th>
                          <th scope="col">Action</th>
                        </tr>
                        <a href="{{ route('admin.degrees.create') }}" type="button" class="btn btn-primary float-right" style="margin-bottom: 5px;">Add Degree</a>
                      </thead>
                      <tbody>
                        @foreach($degrees as $degree)
                            <tr>
                              <th scope="row">{{ $degree->id}}</th>
                              <td>{{ $degree->name}}</td>
                              <td>{{ $degree->acronym}}</td>
                              <td>
                                  <a href="{{ route('admin.degrees.edit', $degree) }}" type="button" class="btn btn-primary float-left">Edit</a>
                                  <form action="{{ route('admin.degrees.destroy', $degree) }}" method="POST" class="float-left">
                                      @csrf
                                      {{ method_field('DELETE') }}
                                      <button type="submit" class="btn btn-warning" >Delete</button>
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
@endsection
