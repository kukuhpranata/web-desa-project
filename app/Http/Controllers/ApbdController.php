<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mApbd;
use App\DataTables\Bidang1DataTable;
use App\DataTables\Bidang2DataTable;
use App\DataTables\Bidang3DataTable;
use App\DataTables\Bidang4DataTable;
use App\DataTables\Bidang5DataTable;
use Session;
use Carbon\Carbon;
use Auth;

class ApbdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexBidang1(Bidang1DataTable $dataTable)
    {
        return $dataTable->render('profil.apbdes.bidang1.index');
    }

    public function indexBidang2(Bidang2DataTable $dataTable)
    {
        return $dataTable->render('profil.apbdes.bidang2.index');
    }

    public function indexBidang3(Bidang3DataTable $dataTable)
    {
        return $dataTable->render('profil.apbdes.bidang3.index');
    }

    public function indexBidang4(Bidang4DataTable $dataTable)
    {
        return $dataTable->render('profil.apbdes.bidang4.index');
    }

    public function indexBidang5(Bidang5DataTable $dataTable)
    {
        return $dataTable->render('profil.apbdes.bidang5.index');
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
            'uraian' => 'required',
            'jumlah' => 'required | numeric',
            'sumber_anggaran' => 'required',
            'ket' => 'required',
            'jenis_bidang' => 'required',


        ]);
        
        $now = Carbon::today()->toDateString();
        $noww = explode('-', $now);
        $year = $noww[0];
        $apbd = mApbd::create([
            'uraian' => $request->uraian,
            'jumlah' => $request->jumlah,
            'sumber_anggaran' => $request->sumber_anggaran,
            'tahun' => $year,
            'keterangan' => $request->ket,
            'jenis_bidang' => $request->jenis_bidang,


        ]);

        Session::flash("flash_notification",[
            "level" => "green",
            "message" => "Berhasil Menyimpan Data APBDES  $apbd->uraian"
        ]);

        return redirect()->route('profil.index');
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
        $apbd = mApbd::find($id);
        
        mApbd::destroy($id);

        Session::flash("flash_notification",[
                "level" => "green",
                "message" => "Berhasil Menghapus Data APBDES  = $apbd->uraian"
        ]);

        return redirect()->route("profil.index");
    }
}
