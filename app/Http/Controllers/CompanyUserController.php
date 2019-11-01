<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CompanyUser;

class CompanyUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $companiesusers = CompanyUser::all();

      return view('tableCompaniesUsers')->with('companiesusers', $companiesusers);
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

      CompanyUser::create([
        'company_id' => $data['company_id'],
        'user_id' => $data['user_id']
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
      $id = $request->companyuser_id;

      $companyuser = CompanyUser::find($id);

      $companyuser->company_id = $request->company_idUpdate;
      $companyuser->user_id = $request->user_idUpdate;
      $companyuser->save();

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
      $companyuser = CompanyUser::findOrFail($id);
      $companyuser -> delete();
      return back();
    }
}
