@extends('layouts.app')

@section('content')


@can('teacher-content')

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">{{ __('Dashboard Teacher') }}

                <span class="float-right" style="height: 50px; width: 50px;  display: inline-block;">
                    <a href="{{ route('teacher.rooms.create') }}"><img src="/svg/plus-solid.svg" style="max-height: 30px; margin: 10px;"></a>
                </span>
            </div>


        </div>

            <div class="card-bodycontentBody mt-2 row row-cols-1 row-cols-md-3">
              @foreach($rooms as $room)
              <div class="col-md-4">
                <div class="card mb-4 shadow-sm text-white bg-primary" >
                  <div class="card-body">
                    <h3>{{ $room->name}}</h3>
                    <p class="card-text">{{ $room->roomKey}}</p><div class="btn-group">
                        <a href="{{ route('teacher.rooms.show', $room) }}" type="button" class="btn btn-outline-light">View</a>
                      </div>
                  </div>
                </div>
              </div>

                    </a>
                @endforeach

            </div>



    </div>
</div>

@endcan
@endsection
