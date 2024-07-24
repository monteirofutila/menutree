<?php

namespace App\Livewire;

use App\Services\AuthService;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    protected AuthService $authService;

    #[Validate('required|email')]
    public $email;
    #[Validate('required|string')]
    public $password;

    public function boot(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function login()
    {
        $this->validate();

        $login = $this->authService->login($this->email, $this->password);

        if (!$login) {
            return;
        }

        session()->regenerate();

        $this->reset();
        $this->redirect('/');
    }
    public function render()
    {
        return view('livewire.login');
    }
}
