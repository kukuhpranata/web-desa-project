<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\KependudukanDataTable;
use Session;
use App\mKependudukan;
use Validator;

class KependudukanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(KependudukanDataTable $dataTable)
    {
        return $dataTable->render('kependudukan.index');
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
        $this->validate($request , [
            'nama' => 'required',
            'nik' => 'required',
            'kk' => 'required',
            'alamat' => 'required',
            'pekerjaan' => 'required',
            'status_kel' => 'required',
            'pendidikan' => 'required',
        ]);


        $kependudukan = mkependudukan::create([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'kk' => $request->kk,
            'tempat_lhr' => $request->tempat_lhr,
            'dob' => $request->dob,
            'alamat' => $request->alamat,
            'pekerjaan' => $request->pekerjaan,
            'status_kel' => $request->status_kel,
            'pendidikan' => $request->pendidikan,
        ]);
        dd($kependudukan);

        Session::flash("flash_notification",[
            "level" => "green",
            "message" => "Berhasil Menyimpan Data dari $kependudukan->nama"
        ]);

        return redirect()->route('kependudukan.index');
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
        $kependudukan = mKependudukan::find($id);
        
        mKependudukan::destroy($id);

        Session::flash("flash_notification",[
                "level" => "green",
                "message" => "Berhasil Menghapus Data dari = $kependudukan->nama"
        ]);

        return redirect()->route("kependudukan.index");
    }
}
