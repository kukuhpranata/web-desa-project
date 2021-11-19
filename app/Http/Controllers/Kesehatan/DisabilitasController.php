<?php

namespace App\Http\Controllers\Kesehatan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\Kesehatan\DisabilitasDataTable;
use App\mDisabilitas;
use Session;
use Charts;

class DisabilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(DisabilitasDataTable $dataTable)
    {

        $Daksa = mDisabilitas::where('jenis_dis', 'Tuna Daksa')->count();
        $Netra = mDisabilitas::where('jenis_dis', 'Tuna Netra')->count();
        $Rungu = mDisabilitas::where('jenis_dis', 'Tuna Rungu')->count();
        $Wicara = mDisabilitas::where('jenis_dis', 'Tuna Wicara')->count();
        $rw = mDisabilitas::where('jenis_dis', 'Tuna Rungu & Wicara')->count();
        $nc = mDisabilitas::where('jenis_dis', 'Tuna Netra & Cacat Fisik')->count();
        $nrw = mDisabilitas::where('jenis_dis', 'Tuna Rungu, Netra & Wicara')->count();
        $rwc = mDisabilitas::where('jenis_dis', 'Tuna Rungu, Wicara & Cacat Tubuh')->count();
        $rwnc = mDisabilitas::where('jenis_dis', 'Tuna Rungu, Wicara, Netra & Cacat Tubuh')->count();
        $mental = mDisabilitas::where('jenis_dis', 'Cacat Mental Retardasi')->count();
        $jiwa = mDisabilitas::where('jenis_dis', 'Mantan Penderita Gangguan Jiwa')->count();
        $s_mental = mDisabilitas::where('jenis_dis', 'Cacat SLK dan Mental')->count();

        $total_kb = mDisabilitas::count();

        $chart =Charts::create('donut', 'highcharts')
                ->title('Jenis Disabilitas yang Diderita')
                ->labels(['Tuna Daksa', 'Tuna Netra', 'Tuna Rungu', 'Tuna Wicara', 'Tuna Rungu & Wicara', 'Tuna Netra & Cacat Fisik','Tuna Rungu, Netra & Wicara', 'Tuna Rungu, Wicara & Cacat Tubuh', 'Tuna Rungu, Wicara, Netra & Cacat Tubuh', 'Cacat Mental Retardasi', 'Mantan Penderita Gangguan Jiwa', 'Cacat SLK dan Mental'])
                ->values([$Daksa, $Netra, $Rungu, $Wicara, $rw, $nc, $nrw, $rwc, $rwnc, $mental, $jiwa, $s_mental ])
                ->dimensions(1000,500)
                ->responsive(true);
        return $dataTable->render('kesehatan.disabilitas.index', compact('chart'));
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
            'jenis_dis' => 'required',

        ]);

        $disabilitas = mDisabilitas::create([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'kk' => $request->kk,
            'tempat_lhr' => $request->tempat_lhr,
            'dob' => $request->dob,
            'alamat' => $request->alamat,
            'jenis_dis' => $request->jenis_dis,
        ]);

        Session::flash("flash_notification",[
            "level" => "green",
            "message" => "Berhasil Menyimpan Data Disabilitas dari $disabilitas->nama"
        ]);

        return redirect()->route('disabilitas.index');
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
        $disabilitas = mDisabilitas::find($id);
        
        mDisabilitas::destroy($id);

        Session::flash("flash_notification",[
                "level" => "green",
                "message" => "Berhasil Menghapus Data Disabilitas dari = $disabilitas->nama"
        ]);

        return redirect()->route("disabilitas.index");
    }
}
