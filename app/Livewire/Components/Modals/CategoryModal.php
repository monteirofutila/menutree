<?php

namespace App\Livewire\Components\Modals;

use App\Livewire\Forms\CategoryForm;
use Livewire\Component;

class CategoryModal extends Component
{
    public CategoryForm $form;

    public function store()
    {
        $this->form->store();
        return $this->redirect('/posts');
    }

    public function render()
    {
        return view('livewire.components.modals.category-modal');
    }
}
