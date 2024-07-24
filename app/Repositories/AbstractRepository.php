<?php

namespace App\Repositories;

use App\Interfaces\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

abstract class AbstractRepository implements RepositoryInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct(protected Model $model)
    {
    }
    public function findById(string $id): ?object
    {
        return $this->model->find($id);
    }
    public function getAll(): Collection
    {
        return $this->model->get();
    }
    public function new(array $data): object
    {
        return $this->model->create($data);
    }
    public function update(string $id, array $data): ?object
    {
        $model = $this->model->find($id);

        if ($model) {
            $model->update($data);
            return $model;
        }

        return null;
    }
    public function delete(string $id): bool
    {
        $model = $this->model->find($id);

        if ($model) {
            $model->delete();
            return true;
        }

        return false;
    }
}
