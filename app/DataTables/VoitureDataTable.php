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
            ->addAction(['width' => '120px', 'printable' => false, 'class' => 'text-left'])
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
             'title' => __('voiture.zone')], 
            ['data' => 'brigade', 'name'=> 'brigade',
             'title' => __('voiture.brigade')], 
            ['data' => 'poste', 'name'=> 'poste',
             'title' => __('voiture.poste')], 
            ['data' => 'type', 'name'=> 'type',
             'title' => __('voiture.type')], 
            ['data' => 'numero', 'name'=> 'numero',
             'title' => __('voiture.numero')], 
            ['data' => 'date-d-affectation', 'name'=> 'date-d-affectation',
             'title' => __('voiture.date-d-affectation')], 
            ['data' => 'etat', 'name'=> 'etat',
             'title' => __('voiture.etat')], 
            ['data' => 'date-de-panne', 'name'=> 'date-de-panne',
             'title' => __('voiture.date-de-panne')], 
            ['data' => 'place-de-reparation', 'name'=> 'place-de-reparation',
             'title' => __('voiture.place-de-reparation')], 
            //['data' => 'remarque', 'name'=> 'remarque', 'title' => __('voiture.remarque')], 
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
