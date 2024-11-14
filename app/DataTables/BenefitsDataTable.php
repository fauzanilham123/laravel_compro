<?php

namespace App\DataTables;

use App\Models\benefits;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Html\Editor\Editor;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;

class BenefitsDataTable extends DataTable
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
            $editUrl = url("benefits/$row->id/edit");
            $deleteUrl = route('admin.benefits.destroy', $row->id); // URL untuk route delete
    
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
        ->addColumn('icon', function ($icon) { 
        $url=asset("storage/posts/$icon->icon"); 
        return '<img src='.$url.' style="object-fit:cover;" width="200" height="100" data-bs-toggle="tooltip">'; 
        })->rawColumns(['icon', 'action'])
        ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Benefits $model): QueryBuilder
    {
        return $model->newQuery()->where('flag', 1);
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('benefits-table')
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
            Column::computed('icon'),
            Column::make('name'),
            Column::computed('action')
        ];
    }
    
    

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Benefits_' . date('YmdHis');
    }
}
