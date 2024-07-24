<?php

namespace App\Livewire\Components\Modals;

use App\Services\CategoryService;
use App\Services\ProductService;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CategoryModal extends Component
{
    protected ProductService $productService;
    protected CategoryService $categoryService;
    public $category;
    public string $product_id;

    #[Validate('required|string')]
    public string $name = '';
    #[Validate('nullable|string')]
    public string $description = '';

    public function boot(ProductService $productService, CategoryService $categoryService)
    {
        $this->productService = $productService;
        $this->categoryService = $categoryService;
    }
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
        $this->categoryService->new($data);
    }

    #[On('refresh-category-modal')]
    public function refreshCategoryModal()
    {
        $this->category = $this->categoryService->findById($this->category->id);
    }

    #[On('category-close-modal')]
    public function categoryCloseModal()
    {
        $this->reset();
    }

    #[On('category-edit')]
    public function edit($category_id = null)
    {
        $this->category = $this->categoryService->findById($category_id);
        $this->name = $this->category->name;
    }

    public function update($category_id)
    {
        $data = $this->only('name', 'description');
        $this->categoryService->update($category_id, $data);
    }

    #[On('category-destroy')]
    public function destroy($category_id = null)
    {
        $this->categoryService->delete($category_id);
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
        $this->productService->delete($this->product_id);
        $this->refreshCategoryModal();
        $this->dispatch('refresh-home');
        $this->reset('product_id');
    }

    public function render()
    {
        return view('livewire.components.modals.category-modal');
    }
}
