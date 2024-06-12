<?php

namespace App\Services;

class AuthService
{
    /**
     * Create a new class instance.
     */

    public function login(string $email, string $password): bool
    {
        return auth()->attempt([
            'email' => $email,
            'password' => $password
        ]);
    }
    public function me(): ?object
    {
        return auth()->user();
    }
    public function logout(): void
    {
        auth()->logout();
    }
}
