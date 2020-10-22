<?php

namespace App\Http\Controllers\Teacher;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Room;
use App\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class FileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $file=File::all();
        return view('teacher.rooms.show',compact('file')); 

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create(Room $room)
    {
        
        return view('teacher.uploadFile.create', compact('room'));

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Room $room)

    {
        $data=new File;
        if($request->file('file')){
            $path = $request->file('file')->store('uploads', 'public');
            // $file=$request->file('file');
            // $filename=time().'.'.$file->getClientOriginalExtension();
            // $request->file->move('storage/',$filename);

            $data->file = $path;
        }
        $data->title=$request->title;
        $data->description=$request->description;
        $data->user_id=Auth::id();
        $data->room_id=$room->id;
        $data->roomKey=$room->roomKey;
        $data->save();
        return back()->with('success', 'Your file has been successfully added');

    }

    public function destroy(File $uploadFile)
    {
        Storage::delete('public/'.$uploadFile->file);
        $uploadFile->delete();
        return back()->with('success', 'File has been deleted');
    }

    public function download(File $download)
    {
        return response()->download('storage/'.$download->file);
    }
}
