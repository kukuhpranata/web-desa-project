<?php

namespace App\Http\Controllers;
use App\mInventaris;
use App\DataTables\InventarisDataTable;
use Auth;
use Session;
use Carbon\Carbon;

use Illuminate\Http\Request;

class InventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(InventarisDataTable $dataTable)
    {

        return $dataTable->render('profil.inventaris.index');
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


        ]);
        
        $now = Carbon::today()->toDateString();
        $noww = explode('-', $now);
        $year = $noww[0];
        $inventaris = mInventaris::create([
            'uraian' => $request->uraian,
            'jumlah' => $request->jumlah,
            'sumber_anggaran' => $request->sumber_anggaran,
            'tahun' => $year,
            'keterangan' => $request->ket,


        ]);

        Session::flash("flash_notification",[
            "level" => "green",
            "message" => "Berhasil Menyimpan Data inventaris  $inventaris->uraian"
        ]);

        return redirect()->route('inventaris.index');
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
        $inventaris = mInventaris::find($id);
        
        mInventaris::destroy($id);

        Session::flash("flash_notification",[
                "level" => "green",
                "message" => "Berhasil Menghapus Data inventaris  = $inventaris->uraian"
        ]);

        return redirect()->route("inventaris.index");
    }
}
