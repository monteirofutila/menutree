<?php

namespace App\Livewire\Forms;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Services\CategoryService;
use App\Services\AuthService;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CategoryForm extends Form
{
    protected CategoryService $categoryService;
    protected AuthService $authService;
    public $name;
    public function store()
    {
        dd($this->name);
        $this->validate((new StoreCategoryRequest())->rules());

        $data = $this->only(['title', 'content']);
        $data['user_id'] = $this->authService->me();

        $this->categoryService->new($data);

        $this->reset();
    }
}
