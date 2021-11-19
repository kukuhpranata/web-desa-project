<?php

namespace App\Http\Controllers\Kesehatan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\Kesehatan\KBDataTable;
use App\mKB;
use Session;
use Charts;

class KBController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(KBDataTable $dataTable)
    {
        $stk = mKB::where('jenis_kb', 'Suntik')->count();
        $imp = mKB::where('jenis_kb', 'Implan')->count();
        $iud = mKB::where('jenis_kb', 'IUD')->count();
        $pil = mKB::where('jenis_kb', 'Pil')->count();
        $mow = mKB::where('jenis_kb', 'MOW')->count();
        $mop = mKB::where('jenis_kb', 'MOP')->count();
        $kdm = mKB::where('jenis_kb', 'Kondom')->count();

        $chart =Charts::create('pie', 'highcharts')
                ->title('Jenis KB yang Digunakan')
                ->labels(['Suntik', 'Implan', 'IUD', 'Pil', 'MOW', 'MOP','Kondom'])
                ->values([$stk, $imp, $iud, $pil, $mow, $mop, $kdm])
                ->dimensions(1000,500)
                ->responsive(false);



        return $dataTable->render('kesehatan.kb.index', compact('chart'));
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
            'jenis_kb' => 'required',

        ]);

        $kb = mKB::create([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'kk' => $request->kk,
            'tempat_lhr' => $request->tempat_lhr,
            'dob' => $request->dob,
            'alamat' => $request->alamat,
            'jenis_kb' => $request->jenis_kb,
        ]);

        Session::flash("flash_notification",[
            "level" => "green",
            "message" => "Berhasil Menyimpan Data KB dari $kb->nama"
        ]);

        return redirect()->route('KB.index');
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
        $kb = mKB::find($id);
        
        mKB::destroy($id);

        Session::flash("flash_notification",[
                "level" => "green",
                "message" => "Berhasil Menghapus Data KB dari = $kb->nama"
        ]);

        return redirect()->route("KB.index");
    }
}
