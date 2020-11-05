@extends('layouts.app-2')

@section('content')
<!-- Begin Page Content -->
<div class="container">



<div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Edit User</h1>
              </div>
              <form action="{{ route('admin.users.update', $user) }}" method="POST">
                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <input id="name" type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autofocus >
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                  </div>
                  {{--<div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name">
                  </div>--}}
                </div>
                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <input id="email" type="email" class="form-control form-control-user  @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus >
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                  </div>

                </div>

                
                    @csrf
                  {{ method_field('PUT') }}
                  <div class="form-group row">
                     <label for="name" class="col-md-2 col-form-label text-md-right">Roles</label>
                     <div class="col-md-6">
                      @foreach($roles as $role)
                        <div class="form-check">
                          <input type="checkbox" name="roles[]" value="{{ $role->id }}"
                          @if($user->roles->pluck('id')->contains($role->id)) checked @endif>
                          <label>{{ $role->name }}</label>
                        </div>
                      @endforeach
               

                
              

                <button type="submit" class="btn btn-primary btn-user btn-block">Update</button>
                
                <a href="{{route('admin.users.index')}}" class="btn btn-secondary btn-user btn-block">Cancel</a>



              </form>


            </div>
          </div>
        </div>
      </div>
    </div>





</div>
<!-- /.container-fluid -->

@endsection