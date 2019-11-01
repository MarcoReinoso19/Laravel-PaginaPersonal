<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RoleModule;

class RoleModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $rolesmodules = RoleModule::all();

      return view('tableRolesModules')->with('rolesmodules', $rolesmodules);
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

      RoleModule::create([
        'role_id' => $data['role_id'],
        'module_id' => $data['module_id']
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
        //
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
      $id = $request->rolemodule_id;

      $rolemodule = RoleModule::find($id);

      $rolemodule->role_id = $request->role_idUpdate;
      $rolemodule->module_id = $request->module_idUpdate;
      $rolemodule->save();

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
      $rolemodule = RoleModule::findOrFail($id);
      $rolemodule -> delete();
      return back();
    }
}
