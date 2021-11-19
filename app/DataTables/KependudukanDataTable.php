<?php

namespace App\DataTables;

use App\User;
use Yajra\DataTables\Services\DataTable;
use App\mKependudukan;

class KependudukanDataTable extends DataTable
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
        ->editColumn('umur', function($request){
            $umur = $request->dob;
            $now = Carbon\Carbon::today()->toDateString();
            $noww = Carbon\Carbon::parse($now)->format('d F Y');
            $years = Carbon\Carbon::parse($umur)->age;
            return $years;
        })

        ->addColumn('delete', function($request){    
            return view ('datatable._delete',[
                'model'    => $request,
                'delete_url' => route('kependudukan-admin.destroy', $request->id),
                'confirm_message' => 'Yakin ingin menghapus Data ' . $request->nama . '?'
            ]);                 
        })

       // ->addColumn('keadaan', function($request){
       //     return view ('datatable._recommendation',[
 //               'model'    => $request,
     //           'recommendation_url' => route('index.keadaan', [$request->id])
    //        ]);                       
    //    })




        ->rawColumns(['umur', 'delete']);
        ;
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model)
    {
        $query = mKependudukan::select('m_kependudukans.*');

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
            (['data'=> 'nama' ,'name' => 'nama' , 'title' => 'Nama',]),
            (['data'=> 'tempat_lhr' ,'name' => 'tempat_lhr' , 'title' => 'Tempat Lahir']),
            (['data'=> 'dob' ,'name' => 'dob' , 'title' => 'Tanggal Lahir']),
            (['data'=> 'umur' ,'name' => 'umur' , 'title' => 'Umur']),
            (['data'=> 'nik' ,'name' => 'nik' , 'title' => 'No. NIK']),
            (['data'=> 'kk' ,'name' => 'kk' , 'title' => 'No. KK']),
            (['data'=> 'alamat' ,'name' => 'alamat' , 'title' => 'Alamat']),
            (['data'=> 'pekerjaan' ,'name' => 'pekerjaan' , 'title' => 'Pekerjaan']),
            (['data'=> 'pendidikan' ,'name' => 'pendidikan' , 'title' => 'Pendidikan']),
            (['data'=> 'status_kel' ,'name' => 'status_kel' , 'title' => 'Status dalam Keluarga']),
            //(['data'=> 'delete' ,'name' => 'delete' , 'title' => '' ,'orderable' => false,'searchable' => false, 'exportable' => false, 'printable'  => false, 'width' => '25px']),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Kependudukan_' . date('YmdHis');
    }
}
