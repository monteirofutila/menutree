<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;

class AuthService
{
    /**
     * Create a new class instance.
     */

    public function login(string $email, string $password): bool
    {
        return auth()->attempt([$email, $password]);
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
