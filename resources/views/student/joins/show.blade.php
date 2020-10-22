@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="" style="height: 50px; width: 50px;  display: inline-block;">
                        <a href="{{route('student.index') }}"><img src="/svg/back.svg" style="max-height: 30px; margin: 10px;"></a>
                    </span>
                </div>
                <div class="card-body">
                   <div class="table-responsive">
                       <table class="table table-bordered table-striped">
                           <thead>
                               <tr></tr>
                                   <th>Title</th>
                                   <th>Desciption</th>
                                   <th>File</th>
                                   <th>Actions</th>
                               </tr>
                           </thead>
                           <tbody>
                               @foreach($datas as $data)
                                <tr>
                                    <td>{{ $data->title }}</td>
                                    <td>{{ $data->description }}</td>
                                    <td>{{ $data->file }}</td>
                                        <td>
                                            <a href="{{route('downloadFile', $data)  }}" class="btn btn-success" >Download</a>
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
</div>
@endsection
