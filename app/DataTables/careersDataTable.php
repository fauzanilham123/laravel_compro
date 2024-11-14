<?php

namespace App\DataTables;

use App\Models\career;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Html\Editor\Editor;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;


class careersDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function($row){
                $editUrl = url("careers/$row->id/edit");
            $deleteUrl = route('admin.careers.destroy', $row->id); // URL untuk route delete
    
            $aksi = '
                <a href="'.$editUrl.'" class="btn btn-info btn-sm">Edit</a>
                <form method="POST" action="'.$deleteUrl.'" style="display: inline;">
                    '.csrf_field().'
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you sure you want to delete this data?\')">Delete</button>
                </form>
            ';
            return $aksi;
            })
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(career $model): QueryBuilder
    {
        return $model->newQuery()
        ->select('careers.*', 'categories.name as id_category') // Pilih kolom yang Anda butuhkan
        ->leftJoin('categories', 'careers.id_category', '=', 'categories.id') // Join dengan tabel categories
        ->where('careers.flag', 1);
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('careers-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);

                    
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id_category')->title('Category'),
            Column::make('position'),
            Column::make('location'),
            Column::make('desc'),
            Column::computed('action'),
        
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'careers_' . date('YmdHis');
    }
}
