<?php

namespace App\Livewire;

use App\Http\Services\CategoryService;
use App\Models\Category;
use Livewire\Attributes\On;
use Livewire\Component;

class Home extends Component
{
    public $categories;

    public function mount()
    {
        $this->categories = Category::all();
    }

    #[On('refresh-home')]
    public function refreshHome()
    {
        $this->categories = Category::all();
    }
    public function render()
    {
        return view('livewire.home');
    }
}
