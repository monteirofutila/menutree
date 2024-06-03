<?php

namespace App\Interfaces;

interface UserRepositoryInterface extends RepositoryInterface
{
    public function findByUserName(string $email): ?object;
}
