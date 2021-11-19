@extends('adminbsb.main')

@section('content')
<!-- @php $group = 'datadesa'; $page = 'kesehatan'; @endphp -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h1>
                        DATA KESEHATAN DESA DAWUHAN
                    </h1>
                </div>
                <div class="body">
                    <div class="row">
                        <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                            <div class="panel-group" id="accordion_11" role="tablist" aria-multiselectable="true">
                                <!-- Collapse -->
                                <div class="panel panel-col-teal">
                                    <div class="panel-heading" role="tab" id="headingOne_11">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion_11" href="#collapseOne_11" aria-expanded="false" aria-controls="collapseOne_11" class="collapsed">
                                                Data Balita
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne_11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne_11" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                            <h4>Data ini berisi data balita yang ada di Desa Dawuhan. Klik tombol di bawah ini untuk melihat data.
                                                <br><br>
                                                <p><a class="btn bg-red waves-effect" href="{{ route('balita.index') }}"> 
                                                <i class="material-icons">keyboard_arrow_right</i> <span><b>Data Balita</b></span></a> </p>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-col-teal">
                                    <div class="panel-heading" role="tab" id="headingTwo_11">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_11" href="#collapseTwo_11" aria-expanded="false" aria-controls="collapseTwo_11">
                                                Data Posyandu
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo_11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_11" aria-expanded="false">
                                        <div class="panel-body">
                                            <h4>Data ini berisi data posyandu yang ada di Desa Dawuhan. Klik tombol di bawah ini untuk melihat data.
                                                <br><br>
                                                <p><a class="btn bg-red waves-effect" href="{{ route('posyandu.index') }}"> 
                                                <i class="material-icons">keyboard_arrow_right</i> <span><b>Data Posyandu</b></span></a> </p>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-col-teal">
                                    <div class="panel-heading" role="tab" id="headingThree_11">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_11" href="#collapseThree_11" aria-expanded="false" aria-controls="collapseThree_11">
                                                Data Ibu Hamil
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree_11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_11" aria-expanded="false">
                                        <div class="panel-body">
                                            <h4>Data ini berisi data ibu hamil yang ada di Desa Dawuhan. Klik tombol di bawah ini untuk melihat data.
                                                <br><br>
                                                <p><a class="btn bg-red waves-effect" href="{{ route('bumil.index') }}"> 
                                                <i class="material-icons">keyboard_arrow_right</i> <span><b>Data Bumil</b></span></a> </p>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-col-teal">
                                    <div class="panel-heading" role="tab" id="headingThree_11">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_11" href="#collapse4_11" aria-expanded="false" aria-controls="collapseThree_11">
                                                Data Pengguna KB
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse4_11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_11" aria-expanded="false">
                                        <div class="panel-body">
                                            <h4>Data ini berisi data pengguna KB yang ada di Desa Dawuhan. Klik tombol di bawah ini untuk melihat data.
                                                <br><br>
                                                <p><a class="btn bg-red waves-effect" href="{{ route('KB.index') }}"> 
                                                <i class="material-icons">keyboard_arrow_right</i> <span><b>Data KB</b></span></a> </p>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-col-teal">
                                    <div class="panel-heading" role="tab" id="headingThree_11">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_11" href="#collapse5_11" aria-expanded="false" aria-controls="collapseThree_11">
                                                Data Disabilitas
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse5_11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_11" aria-expanded="false">
                                        <div class="panel-body">
                                            <h4>Data ini berisi data disabilitas yang ada di Desa Dawuhan. Klik tombol di bawah ini untuk melihat data.
                                                <br><br>
                                                <p><a class="btn bg-red waves-effect" href="{{ route('disabilitas.index') }}"> 
                                                <i class="material-icons">keyboard_arrow_right</i> <span><b>Data Disabilitas</b></span></a> </p>
                                            </h4>
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

@section('scripts')
    {{-- {!! $dataTable->scripts() !!} --}}
@endsection
<script> 
    $(".toggle-btn").click(function(){
    $("#myCollapsible").collapse('Detail Laporan Monitoring');
    });
    });
    </script>




