<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if(Auth::user())
        return redirect(route('home'));
    else
        return view('auth.login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('profile','ProfileController');





Route::group(['middleware'=>'auth'],function(){

    Route::get('/home_admin', [
        'as' => 'home',
        'uses'=>'HomeController@index'
    ]);


    Route::resource('user','Monitoring\UserController');

    Route::post('/getdropdown','Monitoring\UserController@getdropdown');
    Route::post('/getdropdown','Monitoring\DataMarkerController@getdropdown');

    Route::get('/laporan_export',[
        'as' => 'export_excel.laporan',
        'uses' => 'Monitoring\DataMarkerController@indexExport'
    ]);

    Route::resource('kemiskinan-admin','KemiskinanController');
    Route::resource('pendidikan-admin','PendidikanController');
    Route::resource('kesehatan-admin','KesehatanController');
    Route::resource('kependudukan-admin','KependudukanController');
    
    //Keadaan Rumah
    Route::get('/kemiskinan-admin/keadaan_rumah/{kemiskinan_id}', [
        'as' => 'keadaan.index',
        'uses'=>'KeadaanRumahController@indexKeadaan'
    ]);

    Route::get('/kemiskinan-admin/keadaan_rumah/create/{kemiskinan_id}', [
        'as' => 'keadaan.create',
        'uses'=>'KeadaanRumahController@createKeadaan'
    ]);

    Route::post('/kemiskinan-admin/keadaan_rumah/store/{kemiskinan_id}', [
        'as' => 'keadaan.store',
        'uses'=>'KeadaanRumahController@storeKeadaan'
    ]);
    Route::post('/kemiskinan-admin/keadaan_rumah/destroy/{kemiskinan_id}', [
        'as' => 'keadaan.destroy',
        'uses'=>'KeadaanRumahController@destroyKeadaan'
    ]);


    //Kesehatan
    Route::resource('balita','Kesehatan\BalitaController');
    Route::resource('posyandu','Kesehatan\PosyanduController');
    Route::resource('bumil','Kesehatan\BumilController');
    Route::resource('KB','Kesehatan\KBController');
    Route::resource('disabilitas','Kesehatan\DisabilitasController');

    //Kependudukan
    Route::resource('pernikahan','Kependudukan\PernikahanController');
    Route::resource('perceraian','Kependudukan\PerceraianController');
    Route::resource('lahirmati','Kependudukan\LahirMatiController');


    //Berita
    Route::resource('berita-admin','BeritaController');

    Route::post('/berita-admin/{berita_id}', [
        'as' => 'isi.berita',
        'uses'=>'BeritaController@indexBerita'
    ]);
    Route::post('/berita-admin/destroy/{berita_id}', [
        'as' => 'isi.berita.destroy',
        'uses'=>'BeritaController@destroyBerita'
    ]);

    //profil
    Route::get('/profil-desa', [
        'as' => 'profil.index',
        'uses'=>'ProfilController@index'
    ]);

    Route::resource('perangkat','PerangkatController');
    Route::resource('inventaris','InventarisController');
    Route::resource('apbdes','ApbdController');
    Route::get('/apbdes-bidang1', [
        'as' => 'bidang1.index',
        'uses'=>'ApbdController@indexBidang1'
    ]);
    Route::get('/apbdes-bidang2', [
        'as' => 'bidang2.index',
        'uses'=>'ApbdController@indexBidang2'
    ]);

    Route::get('/apbdes-bidang3', [
        'as' => 'bidang3.index',
        'uses'=>'ApbdController@indexBidang3'
    ]);

    Route::get('/apbdes-bidang4', [
        'as' => 'bidang4.index',
        'uses'=>'ApbdController@indexBidang4'
    ]);

    Route::get('/apbdes-bidang5', [
        'as' => 'bidang5.index',
        'uses'=>'ApbdController@indexBidang5'
    ]);


});


//GUEST
Route::get('/', function () {
    return view('home_guest');
});

Route::get('/data-desa', [
    'as' => 'data.index',
    'uses'=>'GuestController@indexData'
]);

Route::get('/kesehatan', [
    'as' => 'kesehatan.index',
    'uses'=>'GuestController@indexVisi'
]);

Route::get('/potensi', [
    'as' => 'potensi.index_g',
    'uses'=>'GuestController@indexPotensi'
]);

//Route::get('/berita', [
 //   'as' => 'berita.index_g',
  //  'uses'=>'GuestController@indexBerita'
//]);

Route::get('/berita', [
    'as' => 'berita.index',
    'uses'=>'BeritaController@indexGuest'
]);

Route::post('/berita/{berita_id}', [
    'as' => 'isi.berita_guest',
    'uses'=>'BeritaController@indexBeritaGuest'
]);

//profil
Route::get('/profil-desa', [
    'as' => 'profil.index',
    'uses'=>'ProfilController@index'
]);

Route::resource('perangkat','PerangkatController');
Route::resource('inventaris','InventarisController');
    Route::resource('apbdes','ApbdController');
    Route::get('/apbdes-bidang1', [
        'as' => 'bidang1.index',
        'uses'=>'ApbdController@indexBidang1'
    ]);
    Route::get('/apbdes-bidang2', [
        'as' => 'bidang2.index',
        'uses'=>'ApbdController@indexBidang2'
    ]);

    Route::get('/apbdes-bidang3', [
        'as' => 'bidang3.index',
        'uses'=>'ApbdController@indexBidang3'
    ]);

    Route::get('/apbdes-bidang4', [
        'as' => 'bidang4.index',
        'uses'=>'ApbdController@indexBidang4'
    ]);

    Route::get('/apbdes-bidang5', [
        'as' => 'bidang5.index',
        'uses'=>'ApbdController@indexBidang5'
    ]);