@extends('adminbsb.main_guest')

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
                </div>
                <div class="footer bg-blue-grey">
                <br>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection


