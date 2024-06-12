<?php

namespace App\Livewire;

use App\Services\AuthService;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\On;
use Livewire\Component;

class Home extends Component
{
    public $categories;
    protected AuthService $authService;
    public $products;

    public function mount()
    {
        $this->categories = $this->authService->me()->categories;
        $this->products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->where('categories.user_id', auth()->user()->id)
            ->get();
    }

    public function boot(AuthService $authService)
    {
        $this->authService = $authService;
    }

    #[On('refresh-home')]
    public function refreshHome()
    {
        $this->reset();
        $this->categories = $this->authService->me()->categories;
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
