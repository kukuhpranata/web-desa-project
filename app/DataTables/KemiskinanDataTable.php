<?php

namespace App\DataTables;

use App\User;
use Yajra\DataTables\Services\DataTable;
use App\mKemiskinan;
use Carbon;
use Auth;

class KemiskinanDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables($query)

        ->addColumn('keadaan', function($request){
                return view ('datatable._actionplan',[
                    'model'    => $request,
                    'actionplan_url' => route('keadaan.index', [$request->id])
                ]);
        })

           // ->addColumn('action', 'kemiskinandatatable.action');
           ->editColumn('umur', function($request){
            $umur = $request->dob;
            $now = Carbon\Carbon::today()->toDateString();
            $noww = Carbon\Carbon::parse($now)->format('d F Y');
            $years = Carbon\Carbon::parse($umur)->age;
            return $years;
        })
        
        ->addColumn('edit', function($request){
            return view ('datatable._edit',[
                'model'    => $request,
                'edit_url' => route('kemiskinan-admin.edit', $request->id)
            ]);                       
        })

        ->addColumn('delete', function($request){    
            return view ('datatable._delete',[
                'model'    => $request,
                'delete_url' => route('kemiskinan-admin.destroy', $request->id),
                'confirm_message' => 'Yakin ingin menghapus Data ' . $request->nama . '?'
            ]);                 
        })

       // ->addColumn('keadaan', function($request){
       //     return view ('datatable._recommendation',[
 //               'model'    => $request,
     //           'recommendation_url' => route('index.keadaan', [$request->id])
    //        ]);                       
    //    })




        ->rawColumns(['umur', 'delete', 'keadaan']);
    }

    
//$years = \Carbon::parse($dateOfBirth)->age;
    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model)
    {
        $query = mKemiskinan::select('m_kemiskinans.*');

        return $this->applyScopes($query);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->columns($this->getColumns())
                    ->parameters([
                        'buttons' => [ 'reset', 'reload'],
                        'dom' => '<"row"<"col-sm-4"l><"col-sm-5"B><"col-sm-3"f>><"row"<"col-sm-12"tr>><"row"<"col-sm-5"i><"col-sm-7"p>>',  
                    ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        if (Auth::user() == true){
        return [
           // (['data'=> 'id' ,'name' => 'id' , 'title' => 'ID',]),
            (['data'=> 'nama' ,'name' => 'nama' , 'title' => 'Nama',]),
            (['data'=> 'tempat_lhr' ,'name' => 'tempat_lhr' , 'title' => 'Tempat Lahir']),
            (['data'=> 'dob' ,'name' => 'dob' , 'title' => 'Tanggal Lahir']),
            (['data'=> 'umur' ,'name' => 'umur' , 'title' => 'Umur']),
            (['data'=> 'nik' ,'name' => 'nik' , 'title' => 'No. NIK']),
            (['data'=> 'kk' ,'name' => 'kk' , 'title' => 'No. KK']),
            (['data'=> 'alamat' ,'name' => 'alamat' , 'title' => 'Alamat']),
            (['data'=> 'pekerjaan' ,'name' => 'pekerjaan' , 'title' => 'Pekerjaan']),
            (['data'=> 'status_kel' ,'name' => 'status_kel' , 'title' => 'Status dalam Keluarga']),
            (['data'=> 'keadaan_ek' ,'name' => 'keadaan_ek' , 'title' => 'Keadaan Ekonomi']),
            
            //(['data'=> 'edit' ,'name' => 'edit' , 'title' => '' ,'orderable' => false,'searchable' => false, 'exportable' => false, 'printable'  => false, 'width' => '25px']),
            (['data'=> 'delete' ,'name' => 'delete' , 'title' => '' ,'orderable' => false,'searchable' => false, 'exportable' => false, 'printable'  => false, 'width' => '25px']),
            (['data'=> 'keadaan' ,'name' => 'keadaan' , 'title' => '' ,'orderable' => false,'searchable' => false, 'exportable' => false, 'printable'  => false, 'width' => '25px']),
        ];}
        else{
            return[ (['data'=> 'nama' ,'name' => 'nama' , 'title' => 'Nama',]),];
        }
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Kemiskinan_' . date('YmdHis');
    }
}
