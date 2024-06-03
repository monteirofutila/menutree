<?php

namespace App\Livewire\Components\Modals;

use App\Models\Category;
use App\Models\Product;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CategoryModal extends Component
{
    public $category;
    public string $product_id;

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

    #[On('category-close-modal')]
    public function categoryCloseModal()
    {
        $this->reset();
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

    #[On('category-destroy')]
    public function destroy($category_id = null)
    {
        Category::find($category_id)->delete();
        $this->dispatch('refresh-home');
        $this->reset();
    }

    #[On('confirm-deletion')]
    public function confirmDeletion($product_id)
    {
        $this->product_id = $product_id;
    }

    #[On('product-destroy')]
    public function destroyProduct()
    {
        Product::find($this->product_id)->delete();
        $this->refreshCategoryModal();
        $this->dispatch('refresh-home');
        $this->reset('product_id');
    }

    public function render()
    {
        return view('livewire.components.modals.category-modal');
    }
}
