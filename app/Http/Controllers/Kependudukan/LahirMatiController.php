<?php

namespace App\Http\Controllers\Kependudukan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\Kependudukan\LahirMatiDataTable;
use App\mLahirMati;
use Session;
use Charts;
use DB;

class LahirMatiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(LahirMatiDataTable $dataTable)
    {
        $lahirmati = mLahirMati::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->get();
        $chart = Charts::database($lahirmati, 'bar', 'highcharts')
			      ->title("Kematian pada Tiap Bulan")
			      ->elementLabel("Total Kematian")
			      ->dimensions(1000, 500)
			      ->responsive(true)
			      ->groupByMonth(date('Y'), true);
        return $dataTable->render('kependudukan.lahirmati.index', compact('chart'));
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
            'nama_bapak' => 'required',
            'alamat' => 'required',
            'nama_ibu' => 'required',
            'dod' => 'required',

        ]);
        $lahirmati = mLahirMati::create([
            'nama' => $request->nama,
            'dob' => $request->dob,
            'nama_bapak' => $request->nama_bapak,
            'alamat' => $request->alamat,
            'nama_ibu' => $request->nama_ibu,
            'dod' => $request->dod,
            'created_at' => $request->dod,
        ]);

        Session::flash("flash_notification",[
            "level" => "green",
            "message" => "Berhasil Menyimpan Data Lahir & Mati dari $lahirmati->nama"
        ]);

        return redirect()->route('lahirmati.index');
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
        $lahirmati = mLahirMati::find($id);
        
        mLahirMati::destroy($id);

        Session::flash("flash_notification",[
                "level" => "green",
                "message" => "Berhasil Menghapus Data lahir & mati dari = $lahirmati->nama"
        ]);

        return redirect()->route("lahirmati.index");
    }
}
