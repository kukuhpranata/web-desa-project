<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\PendidikanDataTable;
use Session;
use App\mPendidikan;
use Charts;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PendidikanDataTable $dataTable)
    {
        $sd = mPendidikan::where('pendidikan', 'Sd/SDLB')->count();
        $smp = mPendidikan::where('pendidikan', 'SMP/SMPLB')->count();
        $sma = mPendidikan::where('pendidikan', 'SMA/SMK/SMALB')->count();
        $pt = mPendidikan::where('pendidikan', 'Perguruan Tinggi')->count();

        $chart =Charts::create('donut', 'highcharts')
                ->title('Persebaran Pendidikan')
                ->labels(['SD', 'SMP', 'SMA', 'PT'])
                ->values([$sd, $smp, $sma, $pt])
                //->colors(['#a83232', '#a2a832', '#3ca832', '#324aa8'])
                ->dimensions(1000,500)
                ->responsive(true);



        return $dataTable->render('pendidikan.index', compact('chart'));
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
            'pendidikan' => 'required',

        ]);

        $pendidikan = mPendidikan::create([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'kk' => $request->kk,
            'tempat_lhr' => $request->tempat_lhr,
            'dob' => $request->dob,
            'alamat' => $request->alamat,
            'pendidikan' => $request->pendidikan,

        ]);

        Session::flash("flash_notification",[
            "level" => "green",
            "message" => "Berhasil Menyimpan Data Pendidikan dari $pendidikan->nama"
        ]);

        return redirect()->route('pendidikan.index');
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
        $pendidikan = mPendidikan::find($id);
        
        mPendidikan::destroy($id);

        Session::flash("flash_notification",[
                "level" => "green",
                "message" => "Berhasil Menghapus Data Pendidikan dari = $pendidikan->nama"
        ]);

        return redirect()->route("pendidikan.index");
    }
}
