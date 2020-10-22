@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="" style="height: 50px; width: 50px;  display: inline-block;">
                        <a href="{{route('teacher.index') }}"><img src="/svg/back.svg" style="max-height: 30px; margin: 10px;"></a>
                    </span>{{ $uploadFile->title}}
                </div>
                <div class="card-body">



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
