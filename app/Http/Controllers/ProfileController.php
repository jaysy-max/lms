<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Profile;
use App\User;
use App\Degree;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user,Degree $degree)
    {
        $degree = Degree::all();
        return view('profiles.create',compact('user','degree'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        {
            $profile=new Profile;
            if($request->file('avatar')){
                $path = $request->file('avatar')->store('avatars', 'public');
          
    
                $profile->avatar = $path;
            }
            $profile->user_id=Auth::id();
            $profile->name=$request->name;
            $profile->degree=$request->degree;
            $profile->email=$request->email;
            $profile->address=$request->address;
            $profile->contact=$request->contact;
            $profile->save();
            return redirect(route('profiles.show',$profile));
    
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        return view('profiles.show', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile,Degree $degree)
    {
        $degree = Degree::all();
        return view('profiles.edit', compact('profile','degree'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Profile $profile)
    {
            
            if($request->file('avatar')){
                $path = $request->file('avatar')->store('avatars', 'public');
          
    
                $profile->avatar = $path;
            }
            $profile->user_id=Auth::id();
            $profile->name=$request->name;
            $profile->degree=$request->degree;
            $profile->email=$request->email;
            $profile->address=$request->address;
            $profile->contact=$request->contact;
            $profile->save();
            return redirect(route('profiles.show',$profile));
    
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
