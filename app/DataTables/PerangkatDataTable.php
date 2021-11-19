<?php

namespace App\DataTables;

use App\User;
use Yajra\DataTables\Services\DataTable;
use App\mPerangkat;
use Auth;

class PerangkatDataTable extends DataTable
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
        ->addColumn('delete', function($request){    
            return view ('datatable._delete',[
                'model'    => $request,
                'delete_url' => route('perangkat.destroy', $request->id),
                'confirm_message' => 'Yakin ingin menghapus Data Perangkat ' . $request->nama . '?'
            ]);                 
        })

        ->addColumn('image', function ($request) { 
            $url=asset("/data_file/$request->foto"); 
            return '<img src='.$url.' border="0" width="150" class="img-rounded" align="center" />'; })

        ->rawColumns(['image', 'delete']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model)
    {
        $query = mPerangkat::select('m_perangkats.*');

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
                (['data'=> 'image' ,'name' => 'image' , 'title' => '' ,'orderable' => false,'searchable' => false, 'exportable' => false, 'printable'  => false, 'width' => '25px']),
                (['data'=> 'nama' ,'name' => 'nama' , 'title' => 'Nama',]),
                (['data'=> 'dob' ,'name' => 'dob' , 'title' => 'Tanggal Lahir']),
                (['data'=> 'jabatan' ,'name' => 'jabatan' , 'title' => 'Jabatan']),
                (['data'=> 'pendidikan' ,'name' => 'pendidikan' , 'title' => 'Pendidikan']),
                (['data'=> 'no_sk' ,'name' => 'no_sk' , 'title' => 'No. SK']),
                (['data'=> 'th_purna' ,'name' => 'th_purna' , 'title' => 'Tahun Purna']),
                (['data'=> 'delete' ,'name' => 'delete' , 'title' => '' ,'orderable' => false,'searchable' => false, 'exportable' => false, 'printable'  => false, 'width' => '25px']),
            ];
        }
        else{
            return [
                (['data'=> 'image' ,'name' => 'image' , 'title' => '' ,'orderable' => false,'searchable' => false, 'exportable' => false, 'printable'  => false, 'width' => '25px']),
                (['data'=> 'nama' ,'name' => 'nama' , 'title' => 'Nama',]),
                //(['data'=> 'dob' ,'name' => 'dob' , 'title' => 'Tanggal Lahir']),
                (['data'=> 'jabatan' ,'name' => 'jabatan' , 'title' => 'Jabatan']),
               // (['data'=> 'pendidikan' ,'name' => 'pendidikan' , 'title' => 'Pendidikan']),
               // (['data'=> 'no_sk' ,'name' => 'no_sk' , 'title' => 'No. SK']),
               // (['data'=> 'th_purna' ,'name' => 'th_purna' , 'title' => 'Tahun Purna']),
                //(['data'=> 'delete' ,'name' => 'delete' , 'title' => '' ,'orderable' => false,'searchable' => false, 'exportable' => false, 'printable'  => false, 'width' => '25px']),
            ];
        }
        
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Perangkat_' . date('YmdHis');
    }
}
