<?php

namespace App\DataTables;

use App\Order;
use App\DetailOrder;
use Yajra\DataTables\Services\DataTable;

class StatusDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables($query);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(DetailOrder $model)
    {
        return $model->newQuery()
        ->join('services', 'detail_orders.id_service', '=', 'services.id_service')
        ->join('orders', 'detail_orders.id_order', '=', 'orders.id_order')
        ->select('detail_orders.*', 'services.jenis_layanan', 'orders.total_harga', 'orders.status');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->columns($this->getColumns());
                    // ->minifiedAjax()
                    // ->parameters($this->getBuilderParameters());
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'id_order',
            'jenis_layanan',
            'total_harga',
            'status'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Status_' . date('YmdHis');
    }
}
