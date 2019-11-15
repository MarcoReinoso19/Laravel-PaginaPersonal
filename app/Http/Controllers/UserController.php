<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        /*$users = User::join("users_roles","user_id","=","users.id")
        ->join("roles","roles.id", "=", "users_roles.role_id")
        ->select("users.id","users.name", "users.email", "users.password", "users.created_at", "users.updated_at", "roles.name as roles_name" )
        ->get();*/

        $users = User::all();

        $data = Role::all();


        //return view('tableUsers')->with('users', $users);

        return view('tableUsers', compact('users', 'data'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->all();

        User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => $data['password']
      ]);

        Role::create([

        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show($id)
     {

        $user = User::find($id);


         return view('tableAddRoles', compact('user'));
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->user_id;

        $user = User::find($id);

        $user->name = $request->nameUpdate;
        $user->email = $request->emailUpdate;
        $user->password = $request->passwordUpdate;
        $user->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user -> delete();
        return back();
    }
}
