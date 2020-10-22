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
                    {{ __('User') }}
                </div>

                <div class="card-body">

                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Roles</th>
                          <th scope="col">Action</th>
                        </tr>
                        <a href="{{ route('admin.users.create') }}" type="button" class="btn btn-primary float-right" style="margin-bottom: 5px;">Add User</a>
                      </thead>
                      <tbody>
                        @foreach($users as $user)
                            <tr>
                              <th scope="row">{{ $user->id}}</th>
                              <td>{{ $user->name}}</td>
                              <td>{{ $user->email}}</td>
                              <td>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                              <td>
                                  <a href="{{ route('admin.users.edit', $user) }}" type="button" class="btn btn-primary float-left">Edit</a>
                                  <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="float-left">
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
