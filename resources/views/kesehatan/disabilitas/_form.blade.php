
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
        <div class="col-sm-5">
            <div class="form-group form-float{{ $errors->has('tempat_lhr') ? 'has-error': '' }} ">
                {!! Form::label('tempat_lhr', 'Tempat', ['class'=>'form-label']) !!}
                <div class="form-line">
                    {!! Form::text('tempat_lhr', null, ['class'=>'form-control']) !!} 
                </div>
                {!! $errors->first('tempat_lhr', '<p class="error">:message</p>') !!}
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
    <div class="col-sm-8">
            <div class="form-group form-float{{ $errors->has('nik') ? 'has-error': '' }} ">
                {!! Form::label('nik', 'No. NIK', ['class'=>'form-label']) !!}
                <div class="form-line">
                    {!! Form::text('nik', null, ['class'=>'form-control']) !!} 
                </div>
                {!! $errors->first('nik', '<p class="error">:message</p>') !!}
            </div>
        </div>
        <div class="col-sm-8">
            <div class="form-group form-float{{ $errors->has('kk') ? 'has-error': '' }} ">
                {!! Form::label('kk', 'No. KK', ['class'=>'form-label']) !!}
                <div class="form-line">
                    {!! Form::text('kk', null, ['class'=>'form-control']) !!} 
                </div>
                {!! $errors->first('kk', '<p class="error">:message</p>') !!}
            </div>
        </div>
        <div class="col-sm-8">
            <div class="form-group form-float{{ $errors->has('alamat') ? 'has-error': '' }} ">
                {!! Form::label('alamat', 'Alamat', ['class'=>'form-label']) !!}
                <div class="form-line">
                    {!! Form::text('alamat', null, ['class'=>'form-control']) !!} 
                </div>
                {!! $errors->first('alamat', '<p class="error">:message</p>') !!}
            </div>
        </div>
        <div class="col-sm-8">
            <div class="form-group form-float{{ $errors->has('jenis_dis') ? 'has-error': '' }} ">
                {!! Form::label('jenis_dis', 'Jenis Disabilitas', ['class'=>'form-label']) !!}
                    {!! Form::select('jenis_dis', ['Tuna Daksa / Cacat Tubuh' => 'Tuna Daksa / Cacat Tubuh', 'Tuna Netra / Buta' => 'Tuna Netra / Buta', 'Tuna Rungu' => 'Tuna Rungu',
                     'Tuna Wicara' => 'Tuna Wicara', 'Tuna Rungu & Wicara' => 'Tuna Rungu & Wicara', 'Tuna Netra & cacat Tubuh' => 'Tuna Netra & Cacat Tubuh',
                     'Tuna Rungu, Netra & Wicara' => 'Tuna Rungu, Netra & Wicara', 'Tuna Rungu, Wicara & Cacat Tubuh' => 'Tuna Rungu, Wicara & Cacat Tubuh', 'Tuna Rungu, Wicara, Netra & Cacat Tubuh' => 'Tuna Rungu, Wicara, Netra & Cacat Tubuh',
                     'Cacat Mental Retardasi' => 'Cacat Mental Retardasi', 'Mantan Penderita Gangguan Jiwa' => 'Mantan Penderita Gangguan Jiwa', 'Cacat SLK dan Mental' => 'Cacat SLK dan Mental'],null,[ 'class' => 'js-selectize', 'placeholder' => 'Pilih' ]) !!}
                {!! $errors->first('pendidikan', '<p class="error">:message</p>') !!}
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



