<?php

namespace App\Livewire\Components\Cards;

use Livewire\Component;

class CategoryCard extends Component
{
    public $category;

    public function mount($category = null)
    {
        $this->category = $category;
    }
    public function render()
    {
        return view('livewire.components.cards.category-card');
    }
}
