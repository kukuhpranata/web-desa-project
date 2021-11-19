<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mBerita;
use Session;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita=mBerita::orderBy('created_at','dsc')->get();
        return view('berita.index',compact('berita'));
    }

    public function indexGuest()
    {
        $berita=mBerita::orderBy('created_at','dsc')->get();
        return view('berita.index_guest',compact('berita'));
    }

    

    public function indexBerita($berita_id)
    {
        $berita_ini=mBerita::where('id', $berita_id)->first();
        return view('berita.berita',compact('berita_ini'));
    }

    public function indexBeritaGuest($berita_id)
    {
        $berita_ini=mBerita::where('id', $berita_id)->first();
        return view('berita.berita',compact('berita_ini'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('berita.create');
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
            'judul' => 'required',
            'isi' => 'required',
        ]);


        $berita = mBerita::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);

        Session::flash("flash_notification",[
            "level" => "green",
            "message" => "Berhasil Menyimpan Data dari $berita->judul"
        ]);
        
        return redirect()->route('berita-admin.index');
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
    public function destroyBerita($id)
    {
        $berita = mBerita::find($id);
        
        mBerita::destroy($id);

        Session::flash("flash_notification",[
                "level" => "green",
                "message" => "Berhasil Menghapus Berita  = $berita->judul"
        ]);

        return redirect()->route("berita.index");
    }
}
