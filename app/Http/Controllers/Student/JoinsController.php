<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Room;
use App\Join;
use App\File;
use DB;

class JoinsController extends Controller
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

        return view('student.joins.index');


    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Room $room)
    {
        
        $room = Room::all();
        return view('student.joins.create', compact('room'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'user_id' => 'required',
            'roomKey' => 'required'
        ]);

        Join::create([
            'user_id' => $request->user_id,
            'roomKey' => $request->roomKey
        ]);

        return redirect(route('student.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Join $join)

    {

        $datas = File::where('roomKey', $join->roomKey)->get();
        return view('student.joins.show', compact('datas'));

     }


}
