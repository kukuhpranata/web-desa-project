<?php

namespace App\DataTables\Kependudukan;

use App\User;
use Yajra\DataTables\Services\DataTable;
use App\mPerceraian;
use Carbon;

class PerceraianDatatable extends DataTable
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
                'delete_url' => route('perceraian.destroy', $request->id),
                'confirm_message' => 'Yakin ingin menghapus Data perceraian ' . $request->nama . '?'
            ]);                 
        })
        ->rawColumns(['umur', 'delete', 'keadaan']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model)
    {
        $query = mPerceraian::select('m_perceraians.*');

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
        return [
            (['data'=> 'nama_suami' ,'name' => 'nama_suami' , 'title' => 'Nama Suami']),
            (['data'=> 'nama_istri' ,'name' => 'nama_istri' , 'title' => 'Nama Istri',]),
            
            (['data'=> 'tgl_nikah' ,'name' => 'tgl_nikah' , 'title' => 'Tanggal Nikah']),
            (['data'=> 'tgl_cerai' ,'name' => 'tgl_cerai' , 'title' => 'Tanggal Cerai']),
            (['data'=> 'alamat' ,'name' => 'alamat' , 'title' => 'Alamat']),
            (['data'=> 'no_akta_cerai' ,'name' => 'no_akta_cerai' , 'title' => 'no. akta Cerai']),
            (['data'=> 'delete' ,'name' => 'delete' , 'title' => '' ,'orderable' => false,'searchable' => false, 'exportable' => false, 'printable'  => false, 'width' => '25px']),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Kependudukan/Perceraian_' . date('YmdHis');
    }
}
