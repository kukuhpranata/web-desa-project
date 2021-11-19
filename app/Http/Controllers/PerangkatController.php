<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mPerangkat;
use App\DataTables\PerangkatDataTable;
use Auth;
use Session;

class PerangkatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PerangkatDataTable $dataTable)
    {
        return $dataTable->render('profil.perangkat.index');
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
            'dob' => 'required',
            'jabatan' => 'required',
            'no_sk' => 'required',
            'pendidikan' => 'required',

        ]);
        
        // menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);

        $perangkat = mPerangkat::create([
            'nama' => $request->nama,
            'dob' => $request->dob,
            'jabatan' => $request->jabatan,
            'tempat_lhr' => $request->tempat_lhr,
            'no_sk' => $request->no_sk,
            'pendidikan' => $request->pendidikan,
            'th_purna' => $request->th_purna,
            'foto' => $nama_file,

        ]);

        Session::flash("flash_notification",[
            "level" => "green",
            "message" => "Berhasil Menyimpan Data Perangkat dari $perangkat->nama"
        ]);

        return redirect()->route('perangkat.index');
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
        $perangkat = mPerangkat::find($id);
        
        mPerangkat::destroy($id);

        Session::flash("flash_notification",[
                "level" => "green",
                "message" => "Berhasil Menghapus Data Perangkat dari = $perangkat->nama"
        ]);

        return redirect()->route("perangkat.index");
    }
}
