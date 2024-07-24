<?php

namespace App\Livewire;

use App\Services\UserService;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Register extends Component
{
    protected UserService $userService;

    #[Validate('required|string')]
    public $name;
    #[Validate('required|string|unique:users,username')]
    public $username;
    #[Validate('required|email|unique:users,email')]
    public $email;
    #[Validate('required|string|confirmed')]
    public $password;
    public $password_confirmation;

    public function boot(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function register()
    {
        $this->validate();

        $user = $this->userService->new($this->only('name', 'username', 'email', 'password'));

        Auth::login($user);
        session()->regenerate();

        $this->reset();
        $this->redirect('/');

    }
    public function render()
    {
        return view('livewire.register');
    }
}
