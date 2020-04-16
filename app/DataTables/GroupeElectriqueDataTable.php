<?php

namespace App\DataTables;

use App\GroupeElectrique;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class GroupeElectriqueDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'groupe_electriques.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\GroupeElectrique $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(GroupeElectrique $model)
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
            ->addAction(['title' => __('common.actionHeaderTitle') ,
            'width' => '120px', 'printable' => false, 'class' => 'text-center'])
            ->parameters([
                'dom'       => 'Bfrtip',
                'stateSave' => true,
                'order'     => [[0, 'desc']],
                'buttons'   => [
                    ['extend' => 'create', 'text'=>'<i class="fa fa-plus"></i> '. __('common.create'),
                    'className' => 'btn btn-default btn-sm no-corner',],
                   ['extend' => 'export', 'text'=>'<i class="fa fa-download"></i> '. __('common.export') .' <span class="caret"></span>',
                   'className' => 'btn btn-default btn-sm no-corner',],
                   ['extend' => 'print', 'text'=>'<i class="fa fa-print"></i> '. __('common.print'),
                   'className' => 'btn btn-default btn-sm no-corner',],
                   ['extend' => 'reset', 'text'=>'<i class="fa fa-undo"></i> '. __('common.reset'), 
                   'className' => 'btn btn-default btn-sm no-corner',],
                   ['extend' => 'reload', 'text'=>'<i class="fa fa-refresh"></i> '. __('common.reload'),
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
            ['data' => 'zone', 'name'=> 'zone',
            'title' => __('groupeElectrique.zone')], 
           ['data' => 'brigade', 'name'=> 'brigade',
            'title' => __('groupeElectrique.brigade')], 
           ['data' => 'poste', 'name'=> 'poste',
            'title' => __('groupeElectrique.poste')], 
           ['data' => 'type', 'name'=> 'type',
            'title' => __('groupeElectrique.type')], 
           ['data' => 'numero', 'name'=> 'numero',
            'title' => __('groupeElectrique.numero')], 
           //['data' => 'remarque', 'name'=> 'remarque', 'title' => __('groupeElectrique.remarque')],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'groupe_electriquesdatatable_' . time();
    }
}
