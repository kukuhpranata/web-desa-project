
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
        <div class="col-sm-6">
            <div class="form-group form-float{{ $errors->has('jabatan') ? 'has-error': '' }} ">
                {!! Form::label('jabatan', 'Jabatan', ['class'=>'form-label']) !!}
                <div class="form-line">
                    {!! Form::text('jabatan', null, ['class'=>'form-control']) !!} 
                </div>
                {!! $errors->first('jabatan', '<p class="error">:message</p>') !!}
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group form-float{{ $errors->has('pendidikan') ? 'has-error': '' }} ">
                {!! Form::label('pendidikan', 'Pendidikan', ['class'=>'form-label']) !!}
                <div class="form-line">
                    {!! Form::text('pendidikan', null, ['class'=>'form-control']) !!} 
                </div>
                {!! $errors->first('pendidikan', '<p class="error">:message</p>') !!}
            </div>
        </div>
        <div class="col-sm-8">
            <div class="form-group form-float{{ $errors->has('no_sk') ? 'has-error': '' }} ">
                {!! Form::label('no_sk', 'Nomor SK', ['class'=>'form-label']) !!}
                <div class="form-line">
                    {!! Form::text('no_sk', null, ['class'=>'form-control']) !!} 
                </div>
                {!! $errors->first('no_sk', '<p class="error">:message</p>') !!}
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group form-float{{ $errors->has('th_purna') ? 'has-error': '' }} ">
                {!! Form::label('th_purna', 'Tahun Purna', ['class'=>'form-label']) !!}
                <div class="form-line">
                    {!! Form::text('th_purna', null, ['class'=>'form-control']) !!} 
                </div>
                {!! $errors->first('th_purna', '<p class="error">:message</p>') !!}
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <b>Upload Foto</b><br/>
                <input type="file" name="file">
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



