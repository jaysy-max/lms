@extends('layouts.app')

@section('content')

<div class="container">

  <div class="row">
    <div class="col-md-12 d-flex my-3">
      <a href="{{ route('admin.index') }}" class="mr-auto btn btn-dark">Dashboard</a>
      <a href="{{ route('admin.users.create') }}" class="ml-auto btn btn-success">Add User</a>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
                      <table class="table" id="datatable">
                        <thead class="thead-dark">
                          <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Roles</th>
                            <th>Action</th>
                          </tr>
                          
                        </thead>
                        <tbody>
                          @foreach($users as $user)
                              <tr>
                                <th>{{ $user->id}}</th>
                                <td>{{ $user->name}}</td>
                                <td>{{ $user->email}}</td>
                                <td>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                                <td>
                                    <a href="{{ route('admin.users.edit', $user) }}" type="button" class="btn btn-sm btn-primary btn-block">Edit</a>
                                    <form action="{{ route('admin.users.destroy', $user) }}" method="POST">
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
