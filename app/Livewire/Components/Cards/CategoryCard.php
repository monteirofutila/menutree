<?php

namespace App\Livewire\Components\Cards;

use App\Models\Category;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class CategoryCard extends Component
{
    #[Reactive()]
    public $category_id;
    public Category $category;

    public function mount($category_id)
    {
        $this->category = Category::find($category_id);
    }

    public function render()
    {
        return view('livewire.components.cards.category-card');
    }
}
