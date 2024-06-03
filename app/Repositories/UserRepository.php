<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
use App\Models\User;

class UserRepository extends AbstractRepository implements UserRepositoryInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct(protected User $user)
    {
        parent::__construct($user);
    }

    public function findByUserName(string $username): ?object
    {
        return $this->model->where('username', $username)->first();
    }

}
