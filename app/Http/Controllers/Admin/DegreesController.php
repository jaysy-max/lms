<?php

namespace App\Http\Controllers\Admin;
use App\Course;
use App\Degree;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DegreesController extends Controller
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
        $degrees = Degree::all();
        return view('admin.degrees.index', compact('degrees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.degrees.create');
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
            'acronym' =>'required'
        ]);

        Degree::create([
            'name' => $request->name,
            'acronym' => $request->acronym
        ]);

        return redirect(route('admin.degrees.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Degree $degree)
    {
        return view('admin.degrees.edit', compact('degree'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Degree $degree)
    {
        $this->validate($request, [
            'name' => 'required',
            'acronym' => 'required'
        ]);

        $degree->name = request('name');
        $degree->acronym = request('acronym');
        $degree->save();

        return redirect(route('admin.degrees.index', compact('degree')));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Degree $degree)
    {
        $degree->delete();
        return redirect(route('admin.degrees.index'));
    }
}
