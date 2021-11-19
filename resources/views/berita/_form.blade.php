

 <div class="row">
    <div class="col-sm-12">
            <div class="form-group form-float{{ $errors->has('judul') ? 'has-error': '' }} ">
                {!! Form::label('judul', 'Judul Berita', ['class'=>'form-label']) !!}
                <div class="form-line">
                    {!! Form::text('judul', null, ['class'=>'form-control']) !!} 
                </div>
                {!! $errors->first('judul', '<p class="error">:message</p>') !!}
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group form-float{{ $errors->has('isi') ? 'has-error': '' }} ">
                {!! Form::label('isi', 'Isi Berita', ['class'=>'form-label']) !!}
                <textarea name="isi" id="editor" class = "form-control"></textarea>
                {!! $errors->first('isi', '<p class="error">:message</p>') !!}
            </div>
        </div>
        
    <div class="row">
        <center>
        <div style="float">
        {!! Form::submit ('Simpan',['class'=>'btn btn-primary btn-lg waves-effect']) !!}
       </div>
    </center>
  </div>



