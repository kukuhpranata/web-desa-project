<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\KemiskinanDataTable;
use Session;
use App\mKemiskinan;
use Charts;

class KemiskinanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(KemiskinanDataTable $dataTable)
    {
        //KB
        $baik = mKemiskinan::where('keadaan_ek', 'Baik')->count();
        $cukup = mKemiskinan::where('keadaan_ek', 'Cukup')->count();
        $kurang = mKemiskinan::where('keadaan_ek', 'Kurang')->count();


        $total_kb = mKemiskinan::count();

        $chart =Charts::create('donut', 'highcharts')
                ->title('Persebarang Keadaan Ekonomi Masyarakat')
                ->labels(['BAIK', 'CUKUP', 'KURANG'])
                ->values([$baik, $cukup, $kurang])
                ->dimensions(1000,500)
                ->responsive(true);

        return $dataTable->render('kemiskinan.index', compact('chart'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'keadaan_ek' => 'required',
        ]);

       /* $validator = \Validator::make($request->all(), [
            'nama' => 'required',
            'nik' => 'required',
            'kk' => 'required',
            'alamat' => 'required',
            'pekerjaan' => 'required',
            'status_kel' => 'required',
            'keadaan_ek' => 'required',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }*/

        $kemiskinan = mKemiskinan::create([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'kk' => $request->kk,
            'tempat_lhr' => $request->tempat_lhr,
            'dob' => $request->dob,
            'alamat' => $request->alamat,
            'pekerjaan' => $request->pekerjaan,
            'status_kel' => $request->status_kel,
            'keadaan_ek' => $request->keadaan_ek,
        ]);

        Session::flash("flash_notification",[
            "level" => "green",
            "message" => "Berhasil Menyimpan Data dari $kemiskinan->nama"
        ]);

        return redirect()->route('kemiskinan-admin.index');
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
        $kemiskinan = mKemiskinan::find($id);
        
        mKemiskinan::destroy($id);

        Session::flash("flash_notification",[
                "level" => "green",
                "message" => "Berhasil Menghapus Data dari = $kemiskinan->nama"
        ]);

        return redirect()->route("kemiskinan.index");
    }
}
