@extends('adminbsb.main')

@section('content')
<!-- @php $group = 'datadesa'; $page = 'kemiskinan'; @endphp -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Data Kadaan Rumah
                    </h2>

                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <p><a class="btn bg-black waves-effect" data-toggle="modal" data-target="#defaultModal"> <i class="material-icons">person_add</i> <span><b>Tambah Keadaan Rumah</b></span></a> </p>
                            <div class="table-responsive">
                                {!! $dataTable->table(['class' => 'table-striped', 'width' => '100%']) !!}
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



<!--modals-->
<!-- Default Size -->
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content modal-col-blue-grey">
            <div class="modal-header">
                <h2 class="modal-title" id="largeModalLabel">Tambah Data</h2>
            </div>
            {!! Form::open(['url' => route('keadaan.store',[$t_kemiskinan->id]),
                        'method' => 'post','files' => 'true' ]) !!}
                        @include('keadaanrumah._form')
            {!! Form::close() !!}
        </div>
    </div>
</div>



@endsection

@section('scripts')
    {!! $dataTable->scripts() !!}
@endsection