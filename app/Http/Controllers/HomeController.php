<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mPendidikan;
use Auth;
use Charts;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
    public function json()
    {

        $mark = mGis::with('user')
                ->where('user_id', Auth::user()->id)
                ->where('flag',1) 
                ->get()->toArray();

        echo json_encode($mark);
        
    }
    

    public function json2()
    {

        $mark2 = mGis::with('user')
                ->where('user_id', '!=', Auth::user()->id)
                ->where('flag',1)
                ->get()->toArray();

        echo json_encode($mark2);
        
    }

    public function json3()
    {

        $path = storage_path() . "/map (1).geojson";
        $json = json_decode(file_get_contents($path), true); 
        echo json_encode($json);
        
    }


}
