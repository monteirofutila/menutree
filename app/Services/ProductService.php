<?php

namespace App\Services;

use App\Repositories\ProductRepository;

class ProductService
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        protected ProductRepository $repository
    ) {
    }
    public function findById(string $id): ?object
    {
        return $this->repository->findById($id);
    }
    public function getAll(): ?object
    {
        return $this->repository->getAll();
    }
    public function new(array $data): ?object
    {
        return $this->repository->new($data);
    }
    public function update(string $id, array $data): ?object
    {
        $category = $this->repository->findById($id);

        if ($category) {
            return $this->repository->update($id, $data);
        }

        return null;
    }
    public function delete(string $id): bool
    {
        return $this->repository->delete($id);
    }
}
