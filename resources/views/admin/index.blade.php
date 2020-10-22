@extends('layouts.app')

@section('content')

                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">{{ __('Home') }}</div>

                            <div class="card-body d-flex">
                                <div class="d-flex" style="width:286px; margin-bottom: 10px; margin-top: 10px;">
                                    <span class="" style="height: 50px; width: 50px; background-color: #bbb; border-radius: 50%; display: inline-block;">
                                        <a href="{{ route('admin.users.index') }}"><i class=""><img src="/svg/user-solid.svg" style="max-height: 30px; margin: 10px;"></i></a>
                                        <i class=""></i>
                                    </span>
                                    <div class="" id="">
                                        <div class="">
                                            <a href="{{ route('admin.users.index') }}">
                                                Users
                                            </a>
                                        </div>
                                        <div class="">
                                            <a href="{{ route('admin.users.create') }}">
                                                Add user
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex" style="width:286px; margin-bottom: 10px; margin-top: 10px;">
                                    <span class="" style="height: 50px; width: 50px; background-color: #bbb; border-radius: 50%; display: inline-block;">
                                        <a href="{{ route('admin.degrees.index') }}"><i class=""><img src="/svg/book-solid.svg" style="max-height: 30px; margin: 10px;"></i></a>
                                        <i class=""></i>
                                    </span>
                                    <div class="" id="">
                                        <div class="">
                                            <a href="{{ route('admin.degrees.index') }}">
                                                Degree
                                            </a>
                                        </div>
                                        <div class="">
                                            <a href="{{ route('admin.degrees.create') }}">
                                                Add degree
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex" style="width:286px; margin-bottom: 10px; margin-top: 10px;">
                                    <span class="" style="height: 50px; width: 50px; background-color: #bbb; border-radius: 50%; display: inline-block;">
                                        <a href="{{ route('admin.courses.index') }}"><i class=""><img src="/svg/list-ul-solid.svg" style="max-height: 30px; margin: 10px;"></i></a>
                                        <i class=""></i>
                                    </span>
                                    <div class="" id="">
                                        <div class="">
                                            <a href="{{ route('admin.courses.index') }}">
                                                Course
                                            </a>
                                        </div>
                                        <div class="">
                                            <a href="{{ route('admin.courses.create') }}">
                                                Add courses
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex" style="width:286px; margin-bottom: 10px; margin-top: 10px;">
                                    <span class="" style="height: 50px; width: 50px; background-color: #bbb; border-radius: 50%; display: inline-block;">
                                        <a href="{{ route('admin.rooms.index') }}"><i class=""><img src="/svg/users-solid.svg" style="max-height: 30px; margin: 10px;"></i></a>
                                        <i class=""></i>
                                    </span>
                                    <div class="" id="">
                                        <div class="">
                                            <a href="{{ route('admin.rooms.index') }}">
                                                Room
                                            </a>
                                        </div>
                                        <div class="">
                                            <a href="{{ route('admin.rooms.create') }}">
                                                Add rooms
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
@endsection
