@extends('adminbsb.main')

@section('content')
<!-- @php $group = 'datadesa'; $page = 'kemiskinan'; @endphp -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Data Kemiskinan
                    </h2>

                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="body">
                                    <div align = "left">
                                    {!! $chart->html() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <p><a class="btn bg-black waves-effect" data-toggle="modal" data-target="#defaultModal"> <i class="material-icons">person_add</i> <span><b>Tambah Data</b></span></a> </p>
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
            {!! Form::open(['url' => route('kemiskinan-admin.store'),
                        'method' => 'post','files' => 'true' ]) !!}
                        @include('kemiskinan._form')
            {!! Form::close() !!}
        </div>
    </div>
</div>

{!! Charts::scripts() !!}
{!! $chart->script() !!}

@endsection

@section('scripts')
    {!! $dataTable->scripts() !!}
@endsection

<!--<script>
    jQuery(document).ready(function(){
       jQuery('#ajaxSubmit').click(function(e){
          e.preventDefault();
          $.ajaxSetup({
             headers: {
                 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
             }
         });
          jQuery.ajax({
             url: "{{ url('/kemiskinan') }}",
             method: 'post',
             data: {
                nama: jQuery('#nama').val(),
                tempat_lhr: jQuery('#tempat_lhr').val(),
                dob: jQuery('#dob').val(),
                nik: jQuery('#nik').val(),
                kk: jQuery('#kk').val(),
                alamat: jQuery('#alamat').val(),
                pekerjaan: jQuery('#pekerjaan').val(),
                status_kel: jQuery('#status_kel').val(),
                keadaan_kel: jQuery('#keadaan_kel').val(),
             },
             success: function(result){
                 if(result.errors)
                 {
                     jQuery('.alert-danger').html('');

                     jQuery.each(result.errors, function(key, value){
                         jQuery('.alert-danger').show();
                         jQuery('.alert-danger').append('<li>'+value+'</li>');
                     });
                 }
                 else
                 {
                     jQuery('.alert-danger').hide();
                     $('#open').hide();
                     $('#defaultModal').modal('hide');
                 }
             }});
          });
       });
 </script>-->
 @if(Session::has('errors'))
<script>
$(document).ready(function(){
    $('#modal').modal({show: true});
}
</script>
@endif