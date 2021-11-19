<?php

namespace App\Http\Controllers\Kesehatan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\Kesehatan\PosyanduDataTable;
use App\mPosyandu;
use Session;

class PosyanduController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PosyanduDataTable $dataTable)
    {
        return $dataTable->render('kesehatan.posyandu.index');
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
        ]);

        $posyandu = mPosyandu::create([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'kk' => $request->kk,
            'tempat_lhr' => $request->tempat_lhr,
            'dob' => $request->dob,
            'alamat' => $request->alamat,

        ]);

        Session::flash("flash_notification",[
            "level" => "green",
            "message" => "Berhasil Menyimpan Data Posyandu dari $posyandu->nama"
        ]);

        return redirect()->route('posyandu.index');
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
        $posyandu = mPosyandu::find($id);
        
        mPosyandu::destroy($id);

        Session::flash("flash_notification",[
                "level" => "green",
                "message" => "Berhasil Menghapus Data Posyandu dari = $posyandu->nama"
        ]);

        return redirect()->route("posyandu.index");
    }
}
