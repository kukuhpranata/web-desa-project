@extends('adminbsb.main')

@section('content')
<!-- @php $group = 'berita'; $page = 'berita'; @endphp -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h1>
                       <center><strong> {!! $berita_ini->judul !!} </strong></center>
                    </h1>
                    <h5>Brebes, {!! $berita_ini->created_at !!}</h5>

                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            {!! $berita_ini->isi !!}
                        </div>
                    </div>
                    @if(Auth::user()==true)
                    <div class="row clearfix">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            {!! Form::open(['url' => route('isi.berita.destroy', [$berita_ini->id]), 'method' => 'post','files' => 'true' ]) !!}
                                <div class="col-sm-12">    
                                    <div class="card">
                                        <div class="body">
                                            <center>
                                                {!! Form::submit ('Hapus Berita',['class'=>'btn bg-red btn-lg waves-effect']) !!}
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    @endif
                </div>
                <div class="footer bg-blue-grey">
                <br>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection


