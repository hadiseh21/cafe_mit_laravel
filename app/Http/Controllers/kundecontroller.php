<?php

namespace App\Http\Controllers;

use App\Models\kunde;
use Illuminate\Http\Request;

class kundecontroller extends Controller
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
    public function create()
    {
        return view("kunde");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $kunden=new kunde();
        // $kunden->Name=request('Name');
        // $kunden->Email=request('Email');
        // $kunden->Passwort=request('Passwort');
        // $kunden->save();
        kunde::create($this->validate_kunde());
        $msg="erfolgreich angemeldet wurde";
        return redirect("login")->with("success",$msg);
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
    public function update(Request $request, $id)
    {
        //
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
    protected function validate_kunde(){
        return request()->validate([
            'Name'=>'required',
            'Email'=>'required',
            'Passwort'=>'required|min:8|max:255'
        ]);
    }
}
