<?php

namespace App\Http\Controllers\Kependudukan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\Kependudukan\PernikahanDataTable;
use App\mPernikahan;
use Session;
use Charts;
use DB;


class PernikahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PernikahanDataTable $dataTable)
    {
        $nikah = mPernikahan::where(DB::raw("(DATE_FORMAT(tgl_nikah,'%Y'))"),date('Y'))->get();
        $chart = Charts::database($nikah, 'bar', 'highcharts')
			      ->title("Pernikahan pada Tiap Bulan")
			      ->elementLabel("Total Pernikahan")
			      ->dimensions(1000, 500)
			      ->responsive(true)
			      ->groupByMonth(date('Y'), true);
        return $dataTable->render('kependudukan.pernikahan.index', compact('chart'));
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
            'nama_istri' => 'required',
            'nama_suami' => 'required',
            'tgl_nikah' => 'required',
            'alamat' => 'required',
            'wali' => 'required',
            'tempat_nikah' => 'required',

        ]);
        $pernikahan = mPernikahan::create([
            'nama_istri' => $request->nama_istri,
            'nama_suami' => $request->nama_suami,
            'tgl_nikah' => $request->tgl_nikah,
            'alamat' => $request->alamat,
            'wali' => $request->wali,
            'tempat_nikah' => $request->tempat_nikah,
            'created_at' => $request->tgl_nikah,
        ]);

        Session::flash("flash_notification",[
            "level" => "green",
            "message" => "Berhasil Menyimpan Data pernikahan dari $pernikahan->nama"
        ]);

        return redirect()->route('pernikahan.index');
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
        $pernikahan = mPernikahan::find($id);
        
        mPernikahan::destroy($id);

        Session::flash("flash_notification",[
                "level" => "green",
                "message" => "Berhasil Menghapus Data pernikahan dari = $pernikahan->nama"
        ]);

        return redirect()->route("pernikahan.index");
    }
}
