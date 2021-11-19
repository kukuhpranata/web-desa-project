@extends('adminbsb.main_guest')

@section('content')
<!-- @php $group = 'berita'; $page = 'berita'; @endphp -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Berita Desa
                    </h2>

                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            @foreach ($berita as $berita)
                            {!! Form::open(['url' => route('isi.berita_guest', [$berita->id]), 'method' => 'post','files' => 'true' ]) !!}
                                <div class="col-sm-4">    
                                    <div class="card">
                                        <div class="header">
                                            <h2>
                                                <strong>{!! $berita->judul !!} <small>Brebes, {!! $berita->created_at!!} </small></strong>
                                            </h2>
                                        </div>
                                        <div class="body">
                                            <center>
                                                {!! Form::submit ('Lihat Berita',['class'=>'btn btn-primary btn-lg waves-effect']) !!}
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            {!! Form::close() !!}
                            @endforeach
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




<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'editor' );
</script>

@endsection


