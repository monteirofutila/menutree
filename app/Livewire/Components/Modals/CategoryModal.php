<?php

namespace App\Livewire\Components\Modals;

use App\Models\Category;
use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CategoryModal extends Component
{
    public $category;

    #[Validate('required')]
    public string $name = '';
    #[Validate('nullable')]
    public string $description = '';

    public function store()
    {
        $this->validate();

        Category::create([
            'user_id' => User::first()->id,
            'name' => $this->name,
            'description' => $this->description
        ]);

        $this->dispatch('refresh-home');

        $this->reset();

    }

    #[On('category-edit')]
    public function edit($category_id)
    {
        $this->category = Category::findOrfail($category_id);
        $this->name = $this->category->name;
    }

    public function update()
    {
        $validated = $this->validate();

        $category = Category::findOrFail($this->product->id);
        $category->update($validated);

        $this->dispatch('refresh-home');
    }

    public function render()
    {
        return view('livewire.components.modals.category-modal');
    }
}
