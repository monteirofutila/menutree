<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Attributes\On;
use Livewire\Component;

class Home extends Component
{
    public $categories;
    public $products;

    public function mount()
    {
        $this->categories = auth()->user()->categories;
        $this->products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->where('categories.user_id', auth()->user()->id)
            ->get();
    }

    #[On('refresh-home')]
    public function refreshHome()
    {
        $this->reset();
        $this->categories = auth()->user()->categories;
        $this->products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->where('categories.user_id', auth()->user()->id)
            ->get();
    }
    public function render()
    {
        return view('livewire.home');
    }
}
