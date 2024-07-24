<?php

namespace App\Livewire\Components\Modals;

use Livewire\Attributes\Reactive;
use Livewire\Component;

class CategoryDeleteModal extends Component
{
    #[Reactive()]
    public $category_id;
    public function mount($category_id)
    {
        $this->category_id = $category_id;
    }
    public function render()
    {
        return view('livewire.components.modals.category-delete-modal');
    }
}
