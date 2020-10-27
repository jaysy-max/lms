@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Edit
                </div>

                <div class="card-body">
                    <form method="POST" action="{{route('admin.degrees.update', $degree)}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Degree</label>
                            <input type="text" name="name" class="form-control" value="{{$degree->name}}" required>
                        </div>
                        <div class="form-group">
                            <label>Acronym</label>
                            <input type="text" name="acronym" class="form-control" value="{{$degree->acronym}}" required>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="{{route('admin.degrees.index')}}" class="btn btn-warning">Cancel</a>
                            <input type="submit" name="" class="btn btn-primary">
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
