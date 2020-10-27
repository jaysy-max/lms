@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="" style="height: 50px; width: 50px;  display: inline-block;">
                        <a href="{{ url()->previous() }}"><img src="/svg/back.svg" style="max-height: 30px; margin: 10px;"></a>
                    </span>  {{ __('Profile') }}
                    <span class="float-right" style="height: 50px; width: 50px;  display: inline-block;">
                        <a href="{{ route('profiles.edit', $profile) }}"><img src="/svg/edit-solid.svg" style="max-height: 30px; margin: 10px;"></a>
                    </span>
                </div>
                <div class="card-body">
                    <div class="profile-img-wrap">
                        <div class="profile-img">
                            <img class="" src="{{ asset('storage/' . $profile->avatar) }}">
                           
                        </div>
                        <div>
                            <ul class="personal-info">
                                                    
                                <li>
                                    <span class="title">Name:</span>
                                    <span class="text text-dark">{{$profile->name}}<br></span>
                                </li>
                                <li>
                                    <span class="title"></span>
                                    <span class="text text-dark">{{ $profile->degree}}</span>
                                </li>
                                <li>
                                    <span class="title">Email:</span>
                                    <span class="text text-dark">{{$profile->email}}<br></span>
                                </li>
                                <li>
                                    <span class="title">Contact #:</span>
                                    <span class="text text-dark">{{$profile->contact}}<br></span>
                                </li>
                               

                            </ul>   
                        </div>
                        

                    </div>


                </div>
                <div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
