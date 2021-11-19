<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mBalita;
use App\mBumil;
use App\mDisabilitas;
use App\mKB;
use App\mPosyandu;
use Charts;
use DB;
use App\mPendidikan;
use App\mKemiskinan;
use App\mKependudukan;
use App\mPernikahan;
use App\mPerceraian;
use App\mLahirMati;

class GuestController extends Controller
{
    public function indexData()
    {

        //Kemiskinan
        $baik = mKemiskinan::where('keadaan_ek', 'Baik')->count();
        $cukup = mKemiskinan::where('keadaan_ek', 'Cukup')->count();
        $kurang = mKemiskinan::where('keadaan_ek', 'Kurang')->count();


        $total_kemiskinan = mKemiskinan::count();

        $chartKemiskinan =Charts::create('pie', 'highcharts')
                ->title('Persebarang Keadaan Ekonomi Masyarakat')
                ->labels(['BAIK', 'CUKUP', 'KURANG'])
                ->values([$baik, $cukup, $kurang])
                ->dimensions(1000,500)
                ->responsive(true);

        //KB
        $stk = mKB::where('jenis_kb', 'Suntik')->count();
        $imp = mKB::where('jenis_kb', 'Implan')->count();
        $iud = mKB::where('jenis_kb', 'IUD')->count();
        $pil = mKB::where('jenis_kb', 'Pil')->count();
        $mow = mKB::where('jenis_kb', 'MOW')->count();
        $mop = mKB::where('jenis_kb', 'MOP')->count();
        $kdm = mKB::where('jenis_kb', 'Kondom')->count();

        $total_kb = mKB::count();

        $chart =Charts::create('donut', 'highcharts')
                ->title('Jenis KB yang Digunakan')
                ->labels(['Suntik', 'Implan', 'IUD', 'Pil', 'MOW', 'MOP','Kondom'])
                ->values([$stk, $imp, $iud, $pil, $mow, $mop, $kdm])
                ->dimensions(1000,500)
                ->responsive(true);
        //dis
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

        $total_dis = mDisabilitas::count();

        $chartDis =Charts::create('donut', 'highcharts')
                ->title('Jenis Disabilitas yang Diderita')
                ->labels(['Tuna Daksa', 'Tuna Netra', 'Tuna Rungu', 'Tuna Wicara', 'Tuna Rungu & Wicara', 'Tuna Netra & Cacat Fisik','Tuna Rungu, Netra & Wicara', 'Tuna Rungu, Wicara & Cacat Tubuh', 'Tuna Rungu, Wicara, Netra & Cacat Tubuh', 'Cacat Mental Retardasi', 'Mantan Penderita Gangguan Jiwa', 'Cacat SLK dan Mental'])
                ->values([$Daksa, $Netra, $Rungu, $Wicara, $rw, $nc, $nrw, $rwc, $rwnc, $mental, $jiwa, $s_mental ])
                ->dimensions(1000,500)
                ->responsive(true);
        
        $total_balita = mBalita::count();
        $total_posyandu = mPosyandu::count();
        $total_bumil = mBumil::count();




        //Pendidikan
        $sd = mPendidikan::where('pendidikan', 'Sd/SDLB')->count();
        $smp = mPendidikan::where('pendidikan', 'SMP/SMPLB')->count();
        $sma = mPendidikan::where('pendidikan', 'SMA/SMK/SMALB')->count();
        $pt = mPendidikan::where('pendidikan', 'Perguruan Tinggi')->count();
        

        $total_pendidikan = mPendidikan::count();

        $chart2 =Charts::create('donut', 'highcharts')
                ->title('Persebaran Pendidikan')
                ->labels(['SD', 'SMP', 'SMA', 'PT'])
                ->values([$sd, $smp, $sma, $pt])
                //->colors(['#a83232', '#a2a832', '#3ca832', '#324aa8'])
                ->dimensions(1000,500)
                ->responsive(true);
        
        
        //Kependudukan
        $total_nikah = mPernikahan::count();
        $nikah = mPernikahan::where(DB::raw("(DATE_FORMAT(tgl_nikah,'%Y'))"),date('Y'))->get();
        $chartPernikahan = Charts::database($nikah, 'bar', 'highcharts')
			      ->title("Pernikahan pada Tiap Bulan")
			      ->elementLabel("Total Pernikahan")
			      ->dimensions(1000, 500)
			      ->responsive(true)
                              ->groupByMonth(date('Y'), true);
        
        $total_cerai = mPerceraian::count();
        $cerai = mPerceraian::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->get();
        $chartPerceraian = Charts::database($cerai, 'bar', 'highcharts')
			      ->title("Perceraian pada Tiap Bulan")
			      ->elementLabel("Total Perceraian")
			      ->dimensions(1000, 500)
			      ->responsive(true)
                              ->groupByMonth(date('Y'), true);
        
        $total_mati = mLahirMati::count();
        $lahirmati = mLahirMati::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->get();
        $chartMati = Charts::database($lahirmati, 'bar', 'highcharts')
			      ->title("Kematian pada Tiap Bulan")
			      ->elementLabel("Total Kematian")
			      ->dimensions(1000, 500)
			      ->responsive(true)
			      ->groupByMonth(date('Y'), true);


                return view('index_data_guest',compact('total_kemiskinan', 'chartKemiskinan','chart', 'chart2',
                 'total_kb', 'total_pendidikan', 
                  'chartPernikahan', 'chartPerceraian', 'chartMati', 'total_nikah', 'total_cerai', 'total_mati',
                'chartDis', 'total_dis', 'total_bumil', 'total_posyandu', 'total_balita'));
    }
}
