
<div class="modal-body">
    <div class="col-sm-8">
            <div class="form-group form-float{{ $errors->has('atap') ? 'has-error': '' }} ">
                {!! Form::label('atap', 'Atap', ['class'=>'form-label']) !!}
                <div class="form-line">
                    {!! Form::text('atap', null, ['class'=>'form-control']) !!} 
                </div>
                {!! $errors->first('atap', '<p class="error">:message</p>') !!}
            </div>
        </div>
        <div class="col-sm-5">
            <div class="form-group form-float{{ $errors->has('dinding') ? 'has-error': '' }} ">
                {!! Form::label('dinding', 'Dinding', ['class'=>'form-label']) !!}
                <div class="form-line">
                    {!! Form::text('dinding', null, ['class'=>'form-control']) !!} 
                </div>
                {!! $errors->first('dinding', '<p class="error">:message</p>') !!}
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group form-float{{ $errors->has('lantai') ? 'has-error': '' }} ">
                {!! Form::label('lantai', 'Lantai', ['class'=>'form-label']) !!}
                <div class="form-line">
                    {!! Form::text('lantai', null, ['class'=>'form-control']) !!} 
                </div>
                {!! $errors->first('lantai', '<p class="error">:message</p>') !!}
            </div>
        </div>

</div>
<div class="modal-footer">
    <div class="marg" style="display: inline;">
        <div style="float: right;">
        {!! Form::submit ('Simpan',['class'=>'btn btn-primary btn-lg waves-effect']) !!}
       </div>
  </div>
</div>



