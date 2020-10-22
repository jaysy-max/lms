<?php

namespace App\Http\Controllers\Admin;

use App\Course;
use App\Http\Controllers\Controller;
use App\Role;
use App\Room;
use App\User;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::all();
        return view('admin.rooms.index', compact('rooms'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Course $courses)
    {
        $courses = Course::all();

        return view('admin.rooms.create', compact('courses'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'course' => 'required',
            'year' => 'required',
            'block' => 'required',
            'roomKey' => 'required'
        ]);

        Room::create([
            'name' => $request->name,
            'course' => $request->course,
            'year' => $request->year,
            'block' => $request->block,
            'roomKey' => $request->roomKey,
            'user_id' => $request->user_id
        ]);

        return redirect(route('admin.rooms.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room, User $user)
    {
        $users = User::all();
        $rooms = Room::all();
        return view('admin.rooms.show', compact('room','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room,Course $courses)
    {
        $courses = Course::all();
        return view('admin.rooms.edit', compact('room','courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        $this->validate($request, [
            'name' => 'required',
            'course' => 'required',
            'year' => 'required',
            'block' => 'required',
            'roomKey' => 'required',
            'user_id' => 'required'
        ]);

        $room->name = request('name');
        $room->course = request('course');
        $room->year = request('year');
        $room->block = request('block');
        $room->roomKey = request('roomKey');
        $room->user_id = request('user_id');
        $room->save();

        return redirect(route('admin.rooms.index', compact('room')));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        $room->delete();
        return redirect(route('admin.rooms.index'));
    }


}
