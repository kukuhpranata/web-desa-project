@extends('adminbsb.main')

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
                    @if(Auth::user()==true)
                    <div class="row clearfix">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <p><a class="btn bg-green waves-effect" href="{{ route('berita-admin.create') }}"> <i class="material-icons">add_to_photos</i> <span><b>Buat Berita</b></span></a> </p>
                        </div>
                    </div>
                    @endif
                    <div class="row clearfix">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            @foreach ($berita as $berita)
                            {!! Form::open(['url' => route('isi.berita', [$berita->id]), 'method' => 'post','files' => 'true' ]) !!}
                                <div class="col-sm-4">    
                                    <div class="card">
                                        <div class="header">
                                            <h2>
                                                {!! $berita->judul !!} <small>{!! $berita->created_at!!} </small>
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


