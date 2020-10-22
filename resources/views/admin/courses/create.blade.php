@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Course') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('admin.courses.store')}}">
                        @csrf
                        <div class="form-group">
                            <label>Course Code</label>
                            <input type="text" name="courseCode" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Course Description</label>
                            <input type="text" name="courseDesc" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Degree</label>
                            <select class="form-control" name="degree" value="" required>
                                <option selected hidden disabled value="">Select Degree</option>
                                @foreach($degrees as $degree)
                                    <option value="{{$degree->name}}">{{$degree->name}}</option>
                                @endforeach
                            </select>
                        </div>
                     
                        <div class="d-flex justify-content-end">
                            <a href="{{route('admin.courses.index')}}" class="btn btn-light btn-link mx-1">Cancel</a>
                            <input type="submit" name="" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
