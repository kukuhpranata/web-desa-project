<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;




class KesehatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( )
    {
        return view('kesehatan.index');
    }

    

    public function indexBumil(BumilDataTable $BumilDataTable)
    {
        return $BumilDataTable->render('kesehatan.bumil.index');
    }

    public function indexDisabilitas(DisabilitasDataTable $DisabilitasDataTable)
    {
        return $DisabilitasDataTable->render('kesehatan.disabilitas.index');
    }

    public function indexKB(KBDataTable $KBDataTable)
    {
        return $KBDataTable->render('kesehatan.kb.index');
    }

    public function indexPosyandu(PosyanduDataTable $PosyanduDataTable)
    {
        return $PosyanduDataTable->render('kesehatan.posyandu.index');
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
    public function storeBalita(Request $request)
    {
        //
    }

    public function storePosyandu(Request $request)
    {
        //
    }

    public function storeBumil(Request $request)
    {
        //
    }

    public function storeKB(Request $request)
    {
        //
    }

    public function storeDisabilitas(Request $request)
    {
        //
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
}
