<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Charts;
use App\mPendidikan;
use App\mKB;


class ChartController extends Controller
{
    public function chartPendidikan()
    {
        $sd = mPendidikan::where('pendidikan', 'Sd/SDLB')->count();
        $smp = mPendidikan::where('pendidikan', 'SMP/SMPLB')->count();
        $sma = mPendidikan::where('pendidikan', 'SMA/SMK/SMALB')->count();
        $pt = mPendidikan::where('pendidikan', 'Perguruan Tinggi')->count();

        $chart =Charts::create('pie', 'highcharts')
                ->title('Persebaran Pendidikan')
                ->labels(['SD', 'SMP', 'SMA', 'PT'])
                ->values([$sd, $smp, $sma, $pt])
                ->dimensions(1000,500)
                ->responsive(false);



        return view('home',compact('chart'));
    }

    public function chartKB()
    {
        $sd = mKB::where('pendidikan', 'Sd/SDLB')->count();
        $smp = mKB::where('pendidikan', 'SMP/SMPLB')->count();
        $sma = mKB::where('pendidikan', 'SMA/SMK/SMALB')->count();
        $pt = mKB::where('pendidikan', 'Perguruan Tinggi')->count();

        $chart =Charts::create('pie', 'highcharts')
                ->title('Persebaran Pendidikan')
                ->labels(['SD', 'SMP', 'SMA', 'PT'])
                ->values([$sd, $smp, $sma, $pt])
                ->dimensions(1000,500)
                ->responsive(false);



        return view('home',compact('chart'));
    }
}
