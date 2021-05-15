<?php

namespace App\Http\Controllers;

use App\Models\produkt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class produktcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getränks=DB::table('produkt')->get();
        return view('/essen',compact('getränks'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Kategorie)

    {  
         $speciales = DB::table('produkt')->where('Kategories', 'Eisspezialitäten')->get();
        
        return view('/special',compact('speciales'));
    }
    public function sehen($Kategorie)
    {
  
        $getränks = DB::table('produkt')->where('Kategories', 'Eisbecher')->get();
      $getränks = DB::table('produkt')->where('Kategories', 'Kaffee & Co.')->get();
      $getränks = DB::table('produkt')->where('Kategories', 'Bubble-Waffeln')->get();
            return view('essen',compact('getränks'));
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
}
