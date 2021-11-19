
<div class="modal-body">
 <div class="row">
    <div class="col-sm-8">
            <div class="form-group form-float{{ $errors->has('nama_suami') ? 'has-error': '' }} ">
                {!! Form::label('nama_suami', 'Nama Suami', ['class'=>'form-label']) !!}
                <div class="form-line">
                    {!! Form::text('nama_suami', null, ['class'=>'form-control']) !!} 
                </div>
                {!! $errors->first('nama_suami', '<p class="error">:message</p>') !!}
            </div>
        </div>
        <div class="col-sm-8">
            <div class="form-group form-float{{ $errors->has('nama_istri') ? 'has-error': '' }} ">
                {!! Form::label('nama_istri', 'Nama Istri', ['class'=>'form-label']) !!}
                <div class="form-line">
                    {!! Form::text('nama_istri', null, ['class'=>'form-control']) !!} 
                </div>
                {!! $errors->first('nama_istri', '<p class="error">:message</p>') !!}
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group form-float{{ $errors->has('tgl_nikah') ? 'has-error': '' }} ">
                {!! Form::label('tgl_nikah', 'Tanggal Pernikahan', ['class'=>'form-label']) !!}
                <div class="form-line">
                    {!! Form::date('tgl_nikah', null, ['class'=>'form-control']) !!} 
                </div>
                {!! $errors->first('tgl_nikah', '<p class="error">:message</p>') !!}
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
        <div class="col-sm-3">
            <div class="form-group form-float{{ $errors->has('tgl_cerai') ? 'has-error': '' }} ">
                {!! Form::label('tgl_cerai', 'Tanggal Perceraian', ['class'=>'form-label']) !!}
                <div class="form-line">
                    {!! Form::date('tgl_cerai', null, ['class'=>'form-control']) !!} 
                </div>
                {!! $errors->first('tgl_cerai', '<p class="error">:message</p>') !!}
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group form-float{{ $errors->has('no_akta_cerai') ? 'has-error': '' }} ">
                {!! Form::label('no_akta_cerai', 'No. Akta Cerai', ['class'=>'form-label']) !!}
                <div class="form-line">
                    {!! Form::text('no_akta_cerai', null, ['class'=>'form-control']) !!} 
                </div>
                {!! $errors->first('no_akta_cerai', '<p class="error">:message</p>') !!}
            </div>
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



