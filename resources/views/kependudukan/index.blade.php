@extends('adminbsb.main')

@section('content')
<!-- @php $group = 'datadesa'; $page = 'KEPENDUDUKAN'; @endphp -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h1>
                        DATA KEPENDUDUKAN DESA DAWUHAN
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
                                                Data Pernikahan
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne_11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne_11" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                            <h4>Data ini berisi data pernikahan yang ada di Desa Dawuhan. Klik tombol di bawah ini untuk melihat data.
                                                <br><br>
                                                <p><a class="btn bg-red waves-effect" href="{{ route('pernikahan.index') }}"> 
                                                <i class="material-icons">keyboard_arrow_right</i> <span><b>Data Pernikahan</b></span></a> </p>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-col-teal">
                                    <div class="panel-heading" role="tab" id="headingTwo_11">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_11" href="#collapseTwo_11" aria-expanded="false" aria-controls="collapseTwo_11">
                                                Data Perceraian
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo_11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_11" aria-expanded="false">
                                        <div class="panel-body">
                                            <h4>Data ini berisi data perceraian yang ada di Desa Dawuhan. Klik tombol di bawah ini untuk melihat data.
                                                <br><br>
                                                <p><a class="btn bg-red waves-effect" href="{{ route('perceraian.index') }}"> 
                                                <i class="material-icons">keyboard_arrow_right</i> <span><b>Data Perceraian</b></span></a> </p>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-col-teal">
                                    <div class="panel-heading" role="tab" id="headingThree_11">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_11" href="#collapseThree_11" aria-expanded="false" aria-controls="collapseThree_11">
                                                Data Lahir & mati
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree_11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_11" aria-expanded="false">
                                        <div class="panel-body">
                                            <h4>Data ini berisi data lahir & mati yang ada di Desa Dawuhan. Klik tombol di bawah ini untuk melihat data.
                                                <br><br>
                                                <p><a class="btn bg-red waves-effect" href="{{ route('lahirmati.index') }}"> 
                                                <i class="material-icons">keyboard_arrow_right</i> <span><b>Data Lahir & Mati</b></span></a> </p>
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




