
<div class="modal-body">
    <div class="row">
       <div class="col-sm-12">
               <div class="form-group form-float{{ $errors->has('uraian') ? 'has-error': '' }} ">
                   {!! Form::label('uraian', 'Kegiatan/Barang', ['class'=>'form-label']) !!}
                   <div class="form-line">
                       {!! Form::textarea('uraian', null, ['class'=>'form-control']) !!} 
                   </div>
                   {!! $errors->first('uraian', '<p class="error">:message</p>') !!}
               </div>
           </div>
           <div class="col-sm-8">
            <div class="form-group form-float{{ $errors->has('jenis_bidang') ? 'has-error': '' }} ">
                {!! Form::label('jenis_bidang', 'Jenis APBDES', ['class'=>'form-label']) !!}
                    {!! Form::select('jenis_bidang', ['bidang1' => 'Bidang Penyelenggaraan Pembangunan Desa', 'bidang2' => 'Bidang Pembangunan Desa', 'bidang3' => 'Bidang Pembinaan Kemasyarakatan',
                    'bidang4' => 'Bidang Pemberdayaan Masyarakat', 'bidang5' => 'Bidang Penanggulangan Bencana'
                     ],null,[ 'class' => 'js-selectize', 'placeholder' => 'Pilih' ]) !!}
                {!! $errors->first('jenis_bidang', '<p class="error">:message</p>') !!}
            </div>
        </div>
           <div class="col-sm-4">
               <div class="form-group form-float{{ $errors->has('jumlah') ? 'has-error': '' }} ">
                   {!! Form::label('jumlah', 'Jumlah Anggaran', ['class'=>'form-label']) !!}
                   <div class="form-line">
                       {!! Form::text('jumlah', null, ['class'=>'form-control', 'placeholder'=>'isi dengan angka']) !!} 
                   </div>
                   {!! $errors->first('jumlah', '<p class="error">:message</p>') !!}
               </div>
           </div>
           <div class="col-sm-4">
               <div class="form-group form-float{{ $errors->has('sumber_anggaran') ? 'has-error': '' }} ">
                   {!! Form::label('sumber_anggaran', 'Sumber Anggaran', ['class'=>'form-label']) !!}
                   <div class="form-line">
                       {!! Form::text('sumber_anggaran', null, ['class'=>'form-control']) !!} 
                   </div>
                   {!! $errors->first('sumber_anggaran', '<p class="error">:message</p>') !!}
               </div>
           </div>
           <div class="col-sm-12">
               <div class="form-group form-float{{ $errors->has('ket') ? 'has-error': '' }} ">
                   {!! Form::label('ket', 'Keterangan', ['class'=>'form-label']) !!}
                   <div class="form-line">
                       {!! Form::text('ket', null, ['class'=>'form-control']) !!} 
                   </div>
                   {!! $errors->first('ket', '<p class="error">:message</p>') !!}
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
   
   
   
   