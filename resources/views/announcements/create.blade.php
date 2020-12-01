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
              <h1 class="h4 text-gray-900 mb-4">Announcement</h1>
            </div>
            <form method="POST" action="{{route('rooms.announcements.store', $room)}}">
              @csrf

              <div class="form-group">
                  <label>Title</label>
                  <input type="text" class="form-control" name="title" required>
              </div>

              <div class="form-group">
                  <label>Body</label>
                  <textarea class="form-control" name="body" rows="10" required></textarea>
              </div>

              <button type="submit" class="btn btn-primary btn-user btn-block">Submit</button>
              <a href="{{route('teacher.rooms.show', $room)}}" class="btn btn-link btn-light btn-block">Cancel</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

@endsection