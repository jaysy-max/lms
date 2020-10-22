<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use Gate;


class UsersController extends Controller
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
        $users = User::all();
        return view('admin.users.index')->with('users', $users);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password' =>'required'
        ]);

        $user=User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password

        ]);

        $role = Role::select('id')->where('name', 'teacher')->first();

        $user->roles()->attach($role);

        return redirect('home');

    }





    public function show(User $user)
    {

    }

    public function edit(User $user)
    {

        if(Gate::denies('edit-users')){
            return redirect(route('admin.users.index'));
        }


        $roles = Role::all();
        return view('admin.users.edit')->with([
            'user' => $user,
            'roles' => $roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);

        $user->name = $request->name;
        $user->email = $request->email;

        if ($user->save()) {
            $request->session()->flash('success', $user->name . ' has been updated');
        }else{
            $request->session()->flash('error','There was an error updating the user');
        }
        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if(Gate::denies('delete-users')){
            return redirect(route('admin.users.index'));
        }
        $user->roles()->detach();
        $user->delete();
        return redirect()->route('admin.users.index');
    }
}
