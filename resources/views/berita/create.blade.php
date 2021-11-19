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
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="body">
                                    {!! Form::open(['url' => route('berita-admin.store'),
                                    'method' => 'post','files' => 'true' ]) !!}
                                    @include('berita._form')
                                    {!! Form::close() !!}
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

<!--
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'editor' );
</script> -->
<!-- TinyMCE -->
    <script src="{{ asset('adminbsb/plugins/tinymce/tinymce.js') }}"></script>
    <script>
        tinymce.init({
        selector: 'textarea',  // note the comma at the end of the line!
        theme: "modern",
        height: 500,
        plugins: "image imagetools fullscreen code colorpicker textcolor wordcount link print table pagebreak preview hr ",
        toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link image | code | forecolor backcolor | preview print",
        });
    
    
    </script>

@endsection


