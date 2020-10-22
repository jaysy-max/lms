<?php

namespace App\Http\Controllers\Admin;

use App\Course;
use App\Degree;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoursesController extends Controller
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
        $courses = Course::all();
        return view('admin.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( Degree $degrees)
    {

        $degrees = Degree::all();
        return view('admin.courses.create', compact('degrees'));
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
            'courseCode' => 'required',
            'courseDesc' =>'required',
            'degree' => 'required',
        ]);

        Course::create([
            'courseCode' => $request->courseCode,
            'courseDesc' => $request->courseDesc,
            'degree' => $request->degree,

        ]);


        return redirect(route('admin.courses.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course, Degree $degrees)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course,Degree $degrees)
    {
        $degrees = Degree::all();
        return view('admin.courses.edit', compact('course','degrees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course, Degree $degrees)
    {
        $this->validate($request, [
            'courseCode' => 'required',
            'courseDesc' => 'required',
            'degree' => 'required',

        ]);

        $course->courseCode = request('courseCode');
        $course->courseDesc = request('courseDesc');
        $course->degree = request('degree');

        $course->save();

        return redirect(route('admin.courses.index', compact('course')));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect(route('admin.courses.index'));
    }
}
