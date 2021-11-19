
<div class="modal-body">
  <div class= "row">
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



