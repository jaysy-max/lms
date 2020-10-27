<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Room;
use App\Course;
use App\Role;
use App\User;
use App\File;


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

        return view('teacher.rooms.index', ['rooms' => Room::where('user_id', Auth::id())->get() ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Course $courses)
    {
        $courses = Course::all();

        return view('teacher.rooms.create', compact('courses'));
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
            'roomKey' => 'required',
            'user_id' => 'required'
        ]);

        Room::create([
            'name' => $request->name,
            'course' => $request->course,
            'year' => $request->year,
            'block' => $request->block,
            'roomKey' => $request->roomKey,
            'user_id' => $request->user_id
        ]);

        return redirect(route('teacher.rooms.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room, File $files)
    {

        $files = File::where('room_id',$room->id)->get();
        return view('teacher.rooms.show', compact('room' , 'files'));
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
        return view('teacher.rooms.edit', compact('room','courses'));
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
            'roomKey' => 'required'
        ]);

        $room->name = request('name');
        $room->course = request('course');
        $room->year = request('year');
        $room->block = request('block');
        $room->roomKey = request('roomKey');
        $room->save();

        return redirect(route('teacher.rooms.index', compact('room')));

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
        return redirect(route('teacher.rooms.index'));
    }
}
