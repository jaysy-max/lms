@extends('layouts.app')

@section('content')


    <div class="main-wrapper">
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-7 col-6">
                        <h4 class="page-title"> Profile</h4>
                    </div>
                </div>
              
                <div class="card-box profile-header">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-view">
                                
                            <div class="profile-img-wrap">
                               
                            </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                                {{-- <h3 class="user-name m-t-0 mb-0"> {{$plist->surname}}, {{$plist->firstname}} {{$plist->middlename}} {{$plist->suffix}}</h3> --}}
                                                <br>
                                                 <ul class="personal-info">
                                                    
                                                    <li>
                                                        <span class="title">Name:</span>
                                                        <span class="text text-dark">{{$user->name}}<br></span>
                                                    </li>
                                                    <li>
                                                        <span class="title">Email.:</span>
                                                        <span class="text text-dark">{{$user->email}}<br></span>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

    
