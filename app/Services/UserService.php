<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        protected UserRepository $repository
    ) {
    }
    public function findByUserName(string $username): ?object
    {
        return $this->repository->findByUserName($username);
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
