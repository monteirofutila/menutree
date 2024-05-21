<?php

namespace App\Livewire\Components\Modals;

use App\Models\Category;
use Livewire\Attributes\On;
use Livewire\Component;

class ProductModal extends Component
{
    public $category;

    #[On('product-show-modal')]
    public function showModal($category_id = null)
    {
        $this->category = Category::find($category_id);
    }
    public function render()
    {
        return view('livewire.components.modals.product-modal');
    }
}
