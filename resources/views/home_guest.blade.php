@extends('adminbsb.main_guest')

@section('content')
@php $group = 'home'; $page = 'home'; @endphp
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div>
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="body">
                                        <img src="{{ asset('/storage/banner.jpg') }}" class="img-responsive" alt="Responsive Image" width="1500">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="body">
                                    <center>
                                    <h3><b>Dawuhan</b> adalah desa di kecamatan Sirampog, Brebes, Jawa Tengah, Indonesia. Terletak di sisi paling Timur Kecamatan Sirampog. Desa Dawuhan terdiri dari empat dusun, yaitu sebagai berikut.</h3>
                                    </center><br>
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <div class="body">
                                                    <center>
                                                    <button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#1"><b>Dusun Pertama</b></button>
                                                    <button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#2"><b>Dusun Keuda</button>
                                                    <button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#3"><b>Dusun Ketiga</button>
                                                    <button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#4"><b>Dusun Keempat</button>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="footer bg-blue-grey">
                <br>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="1" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="largeModalLabel"><center>DUSUN SATU</center></h2>
            </div>
            <div class="modal-body">
                <center>
                Apa yang membedakan Dukuh Paingan dengan dukuh-dukuh lainnya di Desa Dawuhan? “Waduh, opo yo? Oh, dukuh paingan iku sing paling ruame mbak!”. Inilah jawaban yang diutarakan oleh salah satu warga dengan logat daerahnya yang kental. Mungkin kalimat jawaban itu benar adanya karena strategisnya lokasi dukuh ini yang berada ditengah-tengah Desa Dawuhan, diantara Dusun 2 dan Dusun 3. Selain itu, pusat pemerintahan desa, Balai Desa, juga berada di jalan utama Dukuh Paingan sehingga tak dapat dipungkiri lalu lalang perangkat Desa dan masyarakat pasti turut meramaikan kehidupan dukuh. Keberadaan pusat desa di Dukuh ini juga membuat dukuh ini bisa disebut “Ibukota Dawuhan”. Di dukuh paingan terdapat lapangan yang digunakan untuk aktivitas warga seperti kegiatan 17an dan halal bi halal.
                <br><br>
                Dukuh Paingan adalah satu-satunya dukuh yang berada di Dusun 1 Desa Dawuhan. Dusun ini terdiri atas tujuh RT dan satu RW. Jumlah penduduk yang bertempat tinggal di wilayah ini kurang lebih 340 kepala keluarga. Sementara itu, terdapat 6 Jami’ah yang terletak di Dusun 1. Adapun mata pencaharian utama dari masyarakatnya adalah bertani kemudian berdagang. Komoditas utama hasil taninya yaitu daun bawang, kentang, kubis, wortel, dan cabai.
                <br><br>
                Istimewanya, di Dusun 1 Dukuh Paingan ini, memiliki keunikan tersendiri. Pasar Paingan ini hanya terjadi satu kali setiap “pon”, salah satu hari di tanggal jawa. Pasar ini merupakan satu-satunya pasar dari tiga desa: Igir Klanceng, Batursari, dan Dawuhan. Pedagang yang berjualan di pasar ini datang dengan banyak pilihan produk yang ditawarkan dan berasal dari berbagai wilayah seperti Brebes, Bumiayu, dan Tegal. Hal ini menyebabkan Pasar “Pon” Paingan mampu menarik antusiasme masyarakat sekitar sehingga keramaian pasar ini sudah tidak perlu lagi dipertanyakan. Hal ini membuat Dusun 1 menjadi pusat perbelanjaan.
                <br><br>
                Kemajuan di dusun ini secara sinergis dibangun oleh komponen-komponen yang sangat berpengaruh. Salah satu komponen fundamental di dusun ini juga didukung dengan pergerakkan pemuda melalui perkumpulannya yang diberi nama IRMAJA, Ikatan Remaja Masjid. Mas Danto, begitu sapaan akrabnya, merupakan salah satu inisiator dalam perkumpulan ini. Ia mengarahkan energi yang selama ini terbuang sia-sia bahkan lebih menjurus hal negatif menjadi output positif yang manfaatnya mulai dirasakan masyarakat Dusun 1 Dukuh Paingan. Organisasi yang berkiblat pada kegiatan agama ini memulai kiprahnya dengan hasil di luar dugaan pada Festival Hadrah sebelum bulan Ramadhan tahun ini. Meskipun hanya terdiri atas jumlah panitia yang tidak lebih dari 10 personil, festival ini mampu berjalan dengan sukses dan ramai.
                <h3>1 Dukuh di Dusun Satu, yaitu:<br></h3>
                Dukuh paingan<br>
                <img src="{{ asset('/storage/dukuh/paingan.png') }}" class="img-responsive" alt="Responsive Image" width="500"><br><br>
                <br><br><h6 class="font-italic" align="right">*sumber gambar: youtube.com/watch?v=6KoQzWYV6Ic</h6>
                </center>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">TUTUP</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="2" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="largeModalLabel"><center>DUSUN DUA</center></h2>
            </div>
            <div class="modal-body">
                <center> 
                    Dusun 2 Desa Dawuhan adalah salah satu dusun dari 4 dusun yang berada di wilayah pemerintahan Desa Dawuhan. Dusun ini berada di wilayah tertinggi dari Desa Dawuhan dengan salah satu dukuhnya yang berada di kaki Gunung Slamet yaitu dukuh Kaliwadas. Dusun ini terdiri dari lima dukuh yaitu Dukuh Cilik, Dukuh Dawuhan, Dukuh Slemped, Dukuh Perintis, dan Dukuh Kaliwadas. Secara geografis, wilayah Dusun 2 ini memanjang hingga ke kaki Gunung Slamet dimana pada daerah ini terletak Dukuh Kaliwadas. Dusun ini sekaligus menjadi perbatasan antara Desa Dawuhan dengan Desa Igir Klanceng dan Desa Batursari. Sebagai wilayah perbatasan dengan desa lainnya, wilayah dusun 2 ini cukup ramai oleh lalu lalang warga dari desa lain maupun oleh warga Desa Dawuhan itu sendiri.
                    <br><br>
                    Secara umum, Dusun 2 memiliki 3 Rukun Warga (RW) dan 7 Rukun Tetangga (RT) yang menyebar ke lima Dukuh. Sebagian besar masyarakat di Dusun 2 ini memiliki mata pencaharian sebagai petani dengan berbagai komoditas yang ditanam seperti daun bawang, wortel, kentang, dan kol. Namun tidak hanya itu saja, banyak masyarakat yang juga bergerak di bidang peternakan seperti memelihara kambing dan sapi. Meskipun begitu, kambing dan sapi ini lebih dimanfaatkan sebagai investasi  ketika harga sayur mayur mengalami penurunan daripada digunakan sebagai sumber pendapatan yang utama. Walupun disini mayoritas bekerja sebagai petani yang rata-rata hampir satu hari penu bekerja diladang atau kebun, masyarakat di dusun 2 masih menyempatkan waktu untuk berkumpul terutama ibu-ibu yang setiap jum’at selalu mengadakan acara jami’yyahan dan bapak-bapak setiap jum’at kliwon melakukan kerja bakti begitu juga dengan pemuda.
                    <br><br>
                    Dusun 2 memiliki sumber mata air yang sering disebut warga dengan nama ‘Tuk Suci’ yang merupakan sumber mata air pertama yang dibangun pada awal adanya desa Dawuhan sekitar tahun 1800an yang pada saat itu desa Dawuhan bernama dukuh Kimpul, sumber mata air ini menjadi sumber kehidupan bagi warga Desa Dawuhan maupun wilayah sekitarnya dengan air bersihnya. Mata air ini juga menjadi sumber Pendapatan Asli Daerah (PAD) karena air yang dihasilkan dibeli oleh Perusahaan Daerah Air Minum (PDAM) untuk memberikan air bersih bagi warga di wilayah Kabupaten Tegal dan Kabupaten Brebes.‘Tuk Suci’ pun juga menjadi obyek wisata yang menarik bagi wisatawan domestik terutama bagi warga di wilayah Kabupaten Brebes dan sekitarnya.
                    <h3>5 Dukuh di Dusun Dua, yaitu:<br></h3>
                    Dukuh Slemped<br>
                    <img src="{{ asset('/storage/dukuh/Slemped.png') }}" class="img-responsive" alt="Responsive Image" width="500"><br><br>
                    Dukuh Cilik
                    <img src="{{ asset('/storage/dukuh/Cilik.png') }}" class="img-responsive" alt="Responsive Image" width="500"><br><br>
                    Dukuh Kaliwadas
                    <img src="{{ asset('/storage/dukuh/Kaliwadas.png') }}" class="img-responsive" alt="Responsive Image" width="500"><br><br>
                    Dukuh Dawuhan
                    <img src="{{ asset('/storage/dukuh/Dawuhan.png') }}" class="img-responsive" alt="Responsive Image" width="500"><br><br>
                    Dukuh Perintis
                    <img src="{{ asset('/storage/dukuh/Perintis.png') }}" class="img-responsive" alt="Responsive Image" width="500"><br><br>
                    <br><br><h6 class="font-italic" align="right">*sumber gambar: youtube.com/watch?v=6KoQzWYV6Ic</h6>
                </center>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">TUTUP</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="3" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="largeModalLabel"><center>DUSUN TIGA</center></h2>
            </div>
            <div class="modal-body">
                <center>
                    Dusun tiga terletak di sisi barat bukit yang memisahkan desa Dawuhan barat dan timur. Dusun ini terdiri dari 3 dukuh yaitu Warni, Rendeh, dan Semangkung dengan jumlah 8 rukun tetangga (RT) dengan RW 3 menjadi tingkatan di atasnya. Masyarakat di dusun ini mayoritas berprofesi sebagai petani sayuran (produk hortikultura), seperti daun bawang, kubis, cabai, kentang, dan lain-lain. Namun, selain sebagai petani, ada juga masyarakat yang berprofesi sebagai pedagang, kontraktor, hingga profesi dengan keterampilan lain seperti pandai kayu dan besi.
                    <br><br>
                    Dusun 3 (tiga) dapat dibilang sebagai dusun yang paling banyak memiliki organisasi kepemudaan, mulai dari Pemuda Muhammadiyah, Pemuda Anshor, hingga organisasi kepemudaan lain dalam lingkup dukuh masing-masing.
                    <br><br>
                    Dengan kemajemukannya, Dusun 3 tetap menjunjung tinggi rasa toleransi sesama warga dalam menghadapi perbedaan pandangan.
                    <h3>3 Dukuh di Dusun Tiga, yaitu:<br></h3>
                    Dukuh Warni<br>
                    <img src="{{ asset('/storage/dukuh/Warni.png') }}" class="img-responsive" alt="Responsive Image" width="500"><br><br>
                    Dukuh Rendeh
                    <img src="{{ asset('/storage/dukuh/Rendeh.png') }}" class="img-responsive" alt="Responsive Image" width="500"><br><br>
                    Dukuh Semangkung
                    <img src="{{ asset('/storage/dukuh/Semangkung.png') }}" class="img-responsive" alt="Responsive Image" width="500">
                    <br><br><h6 class="font-italic" align="right">*sumber gambar: youtube.com/watch?v=6KoQzWYV6Ic</h6>

                </center>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">TUTUP</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="4" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="largeModalLabel"><center>DUSUN EMPAT</center></h3>
            </div>
            <div class="modal-body">
                    <center>
                    <p>Terletak di ujung barat, Dusun 4 terdiri dari dua dukuh yaitu Dukuh Igirgowok dan Dukuh Guci. Dukuh Igirgowok memiliki lima rukun tetangga (RT) yang terdiri dari RT 1 sampai 5, sedangkan dukuh Guci terdiri dari tiga rukun tetangga yang terdiri dari RT 6 sampai 8. Sebagian besar masyarakat di sini memiliki mata pencaharian sebagai petani. Akan tetapi, selain pertanian, ternyata di dusun 4 menyimpan potensi lain yang dapat meningkatkan kesejahteraan ekonomi masyarakatnya.</p>
                    <h3>5 Dukuh di Dusun Tiga, yaitu:<br></h3>
                    Dukuh Warni<br>
                    <img src="{{ asset('/storage/dukuh/Igirgowok.png') }}" class="img-responsive" alt="Responsive Image" width="500"><br><br>
                    Dukuh Rendeh
                    <img src="{{ asset('/storage/dukuh/Rendeh.png') }}" class="img-responsive" alt="Responsive Image" width="500"><br><br>
                    Dukuh Semangkung
                    <img src="{{ asset('/storage/dukuh/Semangkung.png') }}" class="img-responsive" alt="Responsive Image" width="500"><br><br>
                    <br><br><h6 class="font-italic" align="right">*sumber gambar: youtube.com/watch?v=6KoQzWYV6Ic</h6>
                </center>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">TUTUP</button>
            </div>
        </div>
    </div>
</div>


@endsection