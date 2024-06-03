<?php

namespace App\Livewire\Components\Modals;

use App\Models\Category;
use App\Models\Product;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductModal extends Component
{
    use WithFileUploads;

    public $category;

    #[Validate('required|image|max:2048')] // 2MB Max
    public $photo;
    #[Validate('required')]
    public string $name;
    #[Validate('nullable')]
    public ?string $description = null;
    #[Validate('required|numeric')]
    public float $price;
    #[Validate('required|boolean')]
    public bool $is_stock = true;
    #[Validate('required|exists:categories,id')]
    public $category_id;

    public function store()
    {
        $this->validate();

        $data = $this->only('category_id', 'name', 'description', 'price', 'is_stock');
        $data['photo_url'] = $this->photo ? $this->photo->store('products') : null;

        Product::create($data);

        if ($this->category) {
            $this->dispatch('refresh-category-modal');
        }

        $this->dispatch('refresh-home');
        $this->reset();
    }

    #[On('product-show-modal')]
    public function showModal($category_id = null)
    {
        $this->category = Category::find($category_id);
        $this->category_id = $this->category?->id;
    }
    public function render()
    {
        return view('livewire.components.modals.product-modal');
    }
}
