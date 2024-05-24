<?php

namespace App\Livewire\Components\Modals;

use Livewire\Attributes\Reactive;
use Livewire\Component;

class ProductDeleteModal extends Component
{
    public function render()
    {
        return view('livewire.components.modals.product-delete-modal');
    }
}
