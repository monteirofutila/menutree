<?php

namespace App\Http\Services;

use App\Models\Category;

class CategoryService
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        protected Category $model
    ) {
    }

    public function create(array $data): object
    {
        return $this->model->create($data);
    }
}
