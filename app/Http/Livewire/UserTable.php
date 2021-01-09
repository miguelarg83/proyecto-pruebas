<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Kdion4891\LaravelLivewireTables\Column;
use Kdion4891\LaravelLivewireTables\TableComponent;

class UserTable extends TableComponent
{
    public function query()
    {
        return Product::query();
    }

    public function columns()
    {
        return [
            Column::make('ID')->searchable()->sortable(),
            Column::make('Nombre')->searchable()->sortable(),
            Column::make('Creado','Created At')->searchable()->sortable()
        ];
    }
}
