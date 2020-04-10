<?php

namespace App\DataTables;

use App\Jumelle;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class JumelleDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'jumelles.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Jumelle $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Jumelle $model)
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
             'title' => __('jumelle.zone')], 
            ['data' => 'brigade', 'name'=> 'brigade',
             'title' => __('jumelle.brigade')], 
            ['data' => 'poste', 'name'=> 'poste',
             'title' => __('jumelle.poste')], 
            ['data' => 'type', 'name'=> 'type',
             'title' => __('jumelle.type')], 
            ['data' => 'numero', 'name'=> 'numero',
             'title' => __('jumelle.numero')], 
            ['data' => 'date-d-affectation', 'name'=> 'date-d-affectation',
             'title' => __('jumelle.date-d-affectation')], 
            ['data' => 'etat', 'name'=> 'etat',
             'title' => __('jumelle.etat')], 
            //['data' => 'remarque', 'name'=> 'remarque', 'title' => __('jumelle.remarque')], 
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'jumellesdatatable_' . time();
    }
}
