<?php

namespace App\DataTables\Kependudukan;

use App\User;
use Yajra\DataTables\Services\DataTable;
use App\mLahirMati;
use Carbon;

class LahirMatiDatatable extends DataTable
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
                'delete_url' => route('lahirmati.destroy', $request->id),
                'confirm_message' => 'Yakin ingin menghapus Data lahirmati ' . $request->nama . '?'
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
        $query = mLahirMati::select('m_lahir_matis.*');

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
            (['data'=> 'nama' ,'name' => 'nama' , 'title' => 'Nama']),
            (['data'=> 'dob' ,'name' => 'dob' , 'title' => 'Tanggal Lahir']),
            (['data'=> 'alamat' ,'name' => 'alamat' , 'title' => 'Alamat']),
            (['data'=> 'nama_bapak' ,'name' => 'nama_bapak' , 'title' => 'Nama Bapak']),
            (['data'=> 'nama_ibu' ,'name' => 'nama_ibu' , 'title' => 'Nama Ibu']),
            (['data'=> 'dod' ,'name' => 'dod' , 'title' => 'Tanggal Meninggal',]),
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
        return 'Kependudukan/LahirMati_' . date('YmdHis');
    }
}
