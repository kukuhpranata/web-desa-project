<?php

namespace App\DataTables;

use App\User;
use Yajra\DataTables\Services\DataTable;
use App\mApbd;
use Auth;

class Bidang1DataTable extends DataTable
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
                'delete_url' => route('apbdes.destroy', $request->id),
                'confirm_message' => 'Yakin ingin menghapus Data  ' . $request->uraian . '?'
            ]);                 
        })


        ->rawColumns(['delete']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model)
    {
        $query = mApbd::where('jenis_bidang', 'bidang1')->select('m_apbds.*');
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
            (['data'=> 'uraian' ,'name' => 'uraian' , 'title' => 'Kegiatan/Brang',]),
                (['data'=> 'jumlah' ,'name' => 'jumlah' , 'title' => 'Jumlah Anggran']),
                (['data'=> 'sumber_anggaran' ,'name' => 'sumber_anggaran' , 'title' => 'Sumber Anggaran']),
                (['data'=> 'keterangan' ,'name' => 'keterangan' , 'title' => 'Keterangan']),
                (['data'=> 'tahun' ,'name' => 'tahun' , 'title' => 'Tahun']),
                (['data'=> 'delete' ,'name' => 'delete' , 'title' => '' ,'orderable' => false,'searchable' => false, 'exportable' => false, 'printable'  => false, 'width' => '25px']),
        ];}
        else{
            return [
                (['data'=> 'uraian' ,'name' => 'uraian' , 'title' => 'Kegiatan/Brang',]),
                    (['data'=> 'jumlah' ,'name' => 'jumlah' , 'title' => 'Jumlah Anggran']),
                    (['data'=> 'sumber_anggaran' ,'name' => 'sumber_anggaran' , 'title' => 'Sumber Anggaran']),
                    (['data'=> 'keterangan' ,'name' => 'keterangan' , 'title' => 'Keterangan']),
                    (['data'=> 'tahun' ,'name' => 'tahun' , 'title' => 'Tahun']),
                   
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
        return 'Bidang1_' . date('YmdHis');
    }
}
