<?php

namespace App\DataTables;

use App\Voiture;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class VoitureDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable->addColumn('action', 'voitures.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Voiture $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Voiture $model)
    {
        return $model->newQuery();
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
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false])
            ->parameters([
                'dom'       => 'Bfrtip',
                'stateSave' => true,
                'order'     => [[0, 'desc']],
                'buttons'   => [
                    ['extend' => 'create', 'text'=>'<i class="fa fa-plus"></i> إضافة',
                     'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'export', 'text'=>'<i class="fa fa-download"></i> تصدير البيانات <span class="caret"></span>',
                    'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'print', 'text'=>'<i class="fa fa-print"></i> طباعة',
                    'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reset', 'text'=>'<i class="fa fa-undo"></i> إعادة التحميل', 
                    'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reload', 'text'=>'<i class="fa fa-refresh"></i> تحديث',
                     'className' => 'btn btn-default btn-sm no-corner',],
                ],
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
            ['data' => 'zone', 'name'=> 'zone', 'title' => 'المنطقة'], 
            ['data' => 'brigade', 'name'=> 'brigade', 'title' => 'الفرقة'], 
            ['data' => 'poste', 'name'=> 'poste', 'title' => 'المركز'], 
            ['data' => 'type', 'name'=> 'type', 'title' => 'المركز'], 
            ['data' => 'numero', 'name'=> 'numero', 'title' => 'الرقم'], 
            ['data' => 'date-d-affectation', 'name'=> 'date-d-affectation', 'title' => 'تاريخ التعيين'], 
            ['data' => 'etat', 'name'=> 'etat', 'title' => 'الحالة'], 
            ['data' => 'date-de-panne', 'name'=> 'date-de-panne', 'title' => 'تاريخ العطب'], 
            ['data' => 'place-de-reparation', 'name'=> 'place-de-reparation', 'title' => 'مكان الإصلاح'], 
            //['data' => 'remarque', 'name'=> 'remarque', 'title' => 'الملاحظات'], 
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'voituresdatatable_' . time();
    }
}
