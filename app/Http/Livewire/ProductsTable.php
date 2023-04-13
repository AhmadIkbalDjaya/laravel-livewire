<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsTable extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";
    public $search = '';

    public function render()
    {
        return view('livewire.products-table', [
            "products" => Product::where('name','like',"%$this->search%")->paginate(5),
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
