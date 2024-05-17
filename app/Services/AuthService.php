<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;

class AuthService
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        protected Auth $auth
    ) {
    }
    public function login(string $email, string $password): bool
    {
        return $this->auth->attempt([$email, $password]);
    }
    public function me(): ?object
    {
        return $this->auth->user();
    }
    public function logout(): void
    {
        $this->auth->logout();
    }
}
