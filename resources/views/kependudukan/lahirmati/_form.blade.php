
<div class="modal-body">
    <div class="row">
    <div class="col-sm-8">
            <div class="form-group form-float{{ $errors->has('nama') ? 'has-error': '' }} ">
                {!! Form::label('nama', 'Nama', ['class'=>'form-label']) !!}
                <div class="form-line">
                    {!! Form::text('nama', null, ['class'=>'form-control']) !!} 
                </div>
                {!! $errors->first('nama', '<p class="error">:message</p>') !!}
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group form-float{{ $errors->has('dob') ? 'has-error': '' }} ">
                {!! Form::label('dob', 'Tanggal Lahir', ['class'=>'form-label']) !!}
                <div class="form-line">
                    {!! Form::date('dob', null, ['class'=>'form-control']) !!} 
                </div>
                {!! $errors->first('dob', '<p class="error">:message</p>') !!}
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group form-float{{ $errors->has('alamat') ? 'has-error': '' }} ">
                {!! Form::label('alamat', 'Alamat', ['class'=>'form-label']) !!}
                <div class="form-line">
                    {!! Form::text('alamat', null, ['class'=>'form-control']) !!} 
                </div>
                {!! $errors->first('alamat', '<p class="error">:message</p>') !!}
            </div>
        </div>
        <div class="col-sm-8">
            <div class="form-group form-float{{ $errors->has('nama_bapak') ? 'has-error': '' }} ">
                {!! Form::label('nama_bapak', 'Nama Bapak', ['class'=>'form-label']) !!}
                <div class="form-line">
                    {!! Form::text('nama_bapak', null, ['class'=>'form-control']) !!} 
                </div>
                {!! $errors->first('nama_bapak', '<p class="error">:message</p>') !!}
            </div>
        </div>
        <div class="col-sm-8">
            <div class="form-group form-float{{ $errors->has('nama_ibu') ? 'has-error': '' }} ">
                {!! Form::label('nama_ibu', 'Nama Ibu', ['class'=>'form-label']) !!}
                <div class="form-line">
                    {!! Form::text('nama_ibu', null, ['class'=>'form-control']) !!} 
                </div>
                {!! $errors->first('nama_ibu', '<p class="error">:message</p>') !!}
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group form-float{{ $errors->has('dod') ? 'has-error': '' }} ">
                {!! Form::label('dod', 'Tanggal Meninggal', ['class'=>'form-label']) !!}
                <div class="form-line">
                    {!! Form::date('dod', null, ['class'=>'form-control']) !!} 
                </div>
                {!! $errors->first('dod', '<p class="error">:message</p>') !!}
            </div>
        </div>
    </div>
<div class="modal-footer">
    <div class="row">
        <center>
        <div style="float">
        {!! Form::submit ('Simpan',['class'=>'btn btn-primary btn-lg waves-effect']) !!}
       </div>
    </center>
  </div>
</div>



