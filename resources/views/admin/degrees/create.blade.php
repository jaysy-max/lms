@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">
                Enter Details
                </div>

                <div class="card-body">
                    <form method="POST" action="{{route('admin.degrees.store')}}">
                        @csrf
                        <div class="form-group">
                            <label>Course Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Acronym</label>
                            <input type="text" name="acronym" class="form-control" required>
                        </div>

                        <div class="d-flex justify-content-end">
                            <a href="{{route('admin.degrees.index')}}" class="btn btn-warning">Cancel</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
