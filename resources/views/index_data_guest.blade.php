@extends('adminbsb.main_guest')

@section('content')
<!-- @php $group = 'data'; $page = 'data'; @endphp -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h1>
                        Data Desa Dawuhan
                    </h1>

                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header">
                                    <h2><b>DATA KEMISKINAN</b></h2>
                                </div>
                                <div class="body">
                                    <div>
                                    {!! $chartKemiskinan->html() !!}
                                    </div>
                                    <div class="card">
                                        <div class="body bg-blue-grey">
                                            <dt>Total data Kemiskinan yang Masuk : {!! $total_kemiskinan !!}</dt>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header">
                                    <h2><b>DATA PENDIDIKAN</b></h2>
                                </div>
                                <div class="body">
                                    <div>
                                    {!! $chart2->html() !!}
                                    </div>
                                    <div class="card">
                                        <div class="body bg-blue-grey">
                                            <dt>Total data Pendidikan yang Masuk : {!! $total_pendidikan !!}</dt>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header">
                                    <h2><b>DATA KESEHATAN</b></h2>
                                </div>
                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>Data Balita</h2>
                                                </div>
                                                <div class="body">
                                                    <div class="card">
                                                        <div class="body bg-blue-grey">
                                                            <dt>Total data Balita yang Masuk : {!! $total_balita !!}</dt>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>Data Ibu Hamil</h2>
                                                </div>
                                                <div class="body">
                                                    <div class="card">
                                                        <div class="body bg-blue-grey">
                                                            <dt>Total data Ibu Hamil yang Masuk : {!! $total_bumil !!}</dt>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>Data Disabilitas</h2>
                                                </div>
                                                <div class="body">
                                                    <div>
                                                    {!! $chartDis->html() !!}
                                                    </div>
                                                    <div class="card">
                                                        <div class="body bg-blue-grey">
                                                            <dt>Total data Penyandang Disabilitas yang Masuk : {!! $total_dis !!}</dt>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>Data KB</h2>
                                                </div>
                                                <div class="body">
                                                    <div>
                                                    {!! $chart->html() !!}
                                                    </div>
                                                    <div class="card">
                                                        <div class="body bg-blue-grey">
                                                            <dt>Total data Pengguna KB yang Masuk : {!! $total_pendidikan !!}</dt>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>DATA POSYANDU</h2>
                                                </div>
                                                <div class="body">
                                                    <div class="card">
                                                        <div class="body bg-blue-grey">
                                                            <dt>Total data Posyandu yang Masuk : {!! $total_posyandu !!}</dt>
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
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header">
                                    <h2><b>DATA KEPENDUDUKAN</b></h2>
                                </div>
                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>Data Pernikahan</h2>
                                                </div>
                                                <div class="body">
                                                    <div>
                                                    {!! $chartPernikahan->html() !!}
                                                    </div>
                                                    <div class="card">
                                                        <div class="body bg-blue-grey">
                                                            <dt>Total data Pernikahan yang Masuk : {!! $total_nikah !!}</dt>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>Data Perceraian</h2>
                                                </div>
                                                <div class="body">
                                                    <div>
                                                    {!! $chartPerceraian->html() !!}
                                                    </div>
                                                    <div class="card">
                                                        <div class="body bg-blue-grey">
                                                            <dt>Total data Perceraian yang Masuk : {!! $total_cerai !!}</dt>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>Data Kelahiran & Kematian</h2>
                                                </div>
                                                <div class="body">
                                                    <div>
                                                    {!! $chartMati->html() !!}
                                                    </div>
                                                    <div class="card">
                                                        <div class="body bg-blue-grey">
                                                            <dt>Total data Kelahiran & Kematian yang Masuk : {!! $total_mati !!}</dt>
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
                </div>
                <div class="footer bg-blue-grey">
                <br>
                </div>
            </div>
        </div>
    </div>
</div>


{!! Charts::scripts() !!}
{!! $chart->script() !!}
{!! $chart2->script() !!}
{!! $chartDis->script() !!}
{!! $chartKemiskinan->script() !!}
{!! $chartPernikahan->script() !!}
{!! $chartPerceraian->script() !!}
{!! $chartMati->script() !!}



@endsection
