<?php

namespace App\Http\Controllers\Kependudukan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\Kependudukan\PerceraianDataTable;
use App\mPerceraian;
use Session;
use Charts;
use DB;


class PerceraianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PerceraianDataTable $dataTable)
    {
        $cerai = mPerceraian::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->get();
        $chart = Charts::database($cerai, 'bar', 'highcharts')
			      ->title("Perceraian pada Tiap Bulan")
			      ->elementLabel("Total Perceraian")
			      ->dimensions(1000, 500)
			      ->responsive(true)
			      ->groupByMonth(date('Y'), true);

        return $dataTable->render('kependudukan.perceraian.index', compact('chart'));
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
            'nama_istri' => 'required',
            'nama_suami' => 'required',
            'tgl_nikah' => 'required',
            'tgl_cerai' => 'required',
            'alamat' => 'required',
            'no_akta_cerai' => 'required',

        ]);
        $perceraian = mPerceraian::create([
            'nama_istri' => $request->nama_istri,
            'nama_suami' => $request->nama_suami,
            'tgl_nikah' => $request->tgl_nikah,
            'tgl_cerai' => $request->tgl_cerai,
            'alamat' => $request->alamat,
            'no_akta_cerai' => $request->no_akta_cerai,
            'created_at' => $request->tgl_cerai
            
        ]);

        Session::flash("flash_notification",[
            "level" => "green",
            "message" => "Berhasil Menyimpan Data Perceraian dari $perceraian->nama"
        ]);

        return redirect()->route('perceraian.index');
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
        $perceraian = mPerceraian::find($id);
        
        mPerceraian::destroy($id);

        Session::flash("flash_notification",[
                "level" => "green",
                "message" => "Berhasil Menghapus Data Perceraian dari = $perceraian->nama"
        ]);

        return redirect()->route("perceraian.index");
    }
}
