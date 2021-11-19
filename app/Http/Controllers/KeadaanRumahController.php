<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\KeadaanRumahDataTable;
use Session;
use App\mKemiskinan;
use App\mKeadaanRumah;


class KeadaanRumahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexKeadaan($kemiskinan_id, KeadaanRumahDataTable $dataTable)
    {
        $t_kemiskinan = mKemiskinan::find($kemiskinan_id);
        return $dataTable->with('id', $t_kemiskinan->id)
            ->render('keadaanrumah.index', compact('t_kemiskinan'));
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
    public function storeKeadaan(Request $request, $kemiskinan_id)
    {
        $t_kemiskinan = mKemiskinan::find($kemiskinan_id);

        $this->validate($request , [
            'atap' => 'required',
            'dinding' => 'required',
            'lantai' => 'required',
        ]);

        $keadaaan = mKeadaanRumah::with('kemiskinan')->create([
            'atap' => $request->atap,
            'dinding' => $request->dinding,
            'lantai' => $request->lantai,
            'kemiskinan_id' => $t_kemiskinan->id,
        ]);

        Session::flash("flash_notification",[
            "level" => "green",
            "message" => "Berhasil Menyimpan Data Keadaan Rumah milik  $t_kemiskinan->nama"
        ]);

        return redirect()->route('keadaan.index',[$t_kemiskinan->id]);

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
    public function destroyKeadaan(Request $request, $id)
    {
        $t_kemiskinan = mKemiskinan::find($id);
        mKeadaanRumah::destroy($id);

        Session::flash("flash_notification",[
                "level" => "green",
                "message" => "Berhasil Menghapus Data"
        ]);

        return redirect()->route('keadaan.index',[$t_kemiskinan->id]);
    }
}
