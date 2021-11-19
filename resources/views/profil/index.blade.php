@extends('adminbsb.main')

@section('content')
<!-- @php $group = 'profil'; $page = 'profil'; @endphp -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h1>
                        PROFIL DESA DAWUHAN
                    </h1>
                </div>
                <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="header">
                                        <h2><b>DATA PERANGKAT DESA</b></h2>
                                    </div>
                                    <div class="body">
                                        Data ini berisi data perangkat desa Dawuhan. Klik tombol di bawah ini untuk melihat data.
                                        <br><br>
                                        <p><a class="btn bg-red waves-effect" href="{{ route('perangkat.index') }}"> 
                                        <i class="material-icons">keyboard_arrow_right</i> <span><b>Data Perangkat</b></span></a> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="header">
                                        <h2><b>PETA WILAYAH DESA DAWUHAN</b></h2>
                                    </div>
                                    <div class="body">
                                        <img src="{{ asset('/storage/peta.png') }}" class="img-responsive" alt="Responsive Image" width="1500">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="header">
                                        <h2><b>DATA INVENTARIS DESA</b></h2>
                                    </div>
                                    <div class="body">
                                        Data ini berisi data inventaris desa Dawuhan. Klik tombol di bawah ini untuk melihat data.
                                        <br><br>
                                        <p><a class="btn bg-red waves-effect" href="{{ route('inventaris.index') }}"> 
                                        <i class="material-icons">keyboard_arrow_right</i> <span><b>Data Inventaris</b></span></a> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="header">
                                        <h2><b>DATA APBDES</b></h2>
                                    </div>
                                    <div class="body">
                                        Data ini berisi data APBDES desa Dawuhan. Klik tombol di bawah ini untuk melihat data. <br><br><br>
                                        @if(Auth::user()==true)
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <p><a class="btn bg-black waves-effect" data-toggle="modal" data-target="#defaultModal"> <i class="material-icons">person_add</i> <span><b>Tambah Data Di sini</b></span></a> </p>
                                        </div>
                                        @endif
                                        <div class="row clearfix">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <div class="card">
                                                    <div class="header">
                                                        <center><h2>Bidang Penyelenggaraan Pembangunan Desa</h2></center>
                                                    </div>
                                                    <div class="body">
                                                        <center>
                                                        <p><a class="btn bg-red waves-effect" href="{{ route('bidang1.index') }}"> 
                                                            <i class="material-icons">keyboard_arrow_right</i> <span><b>Di sini</b></span></a> </p></center>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <div class="card">
                                                    <div class="header">
                                                        <center><h2>Bidang Pembangunan Desa</h2></center>
                                                    </div>
                                                    <div class="body">
                                                        <center><p><a class="btn bg-red waves-effect" href="{{ route('bidang2.index') }}"> 
                                                        <i class="material-icons">keyboard_arrow_right</i> <span><b>Di sini</b></span></a> </p></center>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                <div class="card">
                                                    <div class="header">
                                                        <center><h2>Bidang Pembinaan Kemasyarakatan</h2></center>
                                                    </div>
                                                    <div class="body">
                                                        <center><p><a class="btn bg-red waves-effect" href="{{ route('bidang3.index') }}"> 
                                                            <i class="material-icons">keyboard_arrow_right</i> <span><b>Di sini</b></span></a> </p></center>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                <div class="card">
                                                    <div class="header">
                                                        <center><h2>Bidang Pemberdayaan Masyarakat</h2></center>
                                                    </div>
                                                    <div class="body">
                                                        <center><p><a class="btn bg-red waves-effect" href="{{ route('bidang4.index') }}"> 
                                                            <i class="material-icons">keyboard_arrow_right</i> <span><b>Di sini</b></span></a> </p></center>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                <div class="card">
                                                    <div class="header">
                                                        <center><h2>Bidang Penanggulangan Bencana</h2></center>
                                                    </div>
                                                    <div class="body">
                                                        <center><p><a class="btn bg-red waves-effect" href="{{ route('bidang5.index') }}"> 
                                                            <i class="material-icons">keyboard_arrow_right</i> <span><b>Di sini</b></span></a> </p></center>
                                                    </div>
                                                </div>
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
</div>
@endsection

<!--modals-->
<!-- Default Size -->
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content modal-col-blue-grey">
            <div class="modal-header">
                <h2 class="modal-title" id="largeModalLabel">Tambah Data</h2>
            </div>
            {!! Form::open(['url' => route('apbdes.store'),
                        'method' => 'post','files' => 'true' ]) !!}
                        @include('profil.apbdes._form')
            {!! Form::close() !!}
        </div>
    </div>
</div>




