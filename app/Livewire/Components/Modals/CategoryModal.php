<?php

namespace App\Livewire\Components\Modals;

use App\Models\Category;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CategoryModal extends Component
{
    public $category;

    #[Validate('required|string')]
    public string $name = '';
    #[Validate('nullable|string')]
    public string $description = '';

    public function save()
    {
        $this->validate();

        if ($this->category) {
            $this->update($this->category->id);
        } else {
            $this->store();
        }

        $this->dispatch('refresh-home');
        $this->dispatch('category-close-modal');
        $this->reset();
    }

    public function store()
    {
        $data = $this->only('name', 'description');
        $data['user_id'] = auth()->user()->id;
        Category::create($data);
    }

    #[On('refresh-category-modal')]
    public function refreshCategoryModal()
    {
        $this->category = Category::findOrfail($this->category->id);
    }

    #[On('category-edit')]
    public function edit($category_id)
    {
        $this->category = Category::findOrfail($category_id);
        $this->name = $this->category->name;
    }

    public function update($category_id)
    {
        $data = $this->only('name', 'description');
        Category::find($category_id)->update($data);
    }

    public function render()
    {
        return view('livewire.components.modals.category-modal');
    }
}
