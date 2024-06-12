<?php

namespace App\Livewire\Components\Profile\Modals;

use App\Services\ProductService;
use Livewire\Attributes\On;
use Livewire\Component;

class ProductDetailModal extends Component
{
    public string $name;
    public string $price;
    protected ProductService $productService;

    public function mount()
    {
        $this->reset();
    }
    public function boot(ProductService $productService)
    {
        $this->productService = $productService;
    }

    #[On('show-details')]
    public function showDetails($product_id)
    {
        $product = $this->productService->findById($product_id);
        $this->name = $product->name;
        $this->price = $product->price;
    }
    public function render()
    {
        return view('livewire.components.profile.modals.product-detail-modal');
    }
}
