<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Register extends Component
{
    #[Validate('required|string')]
    public $name;
    #[Validate('required|string|unique:users,username')]
    public $username;
    #[Validate('required|email|unique:users,email')]
    public $email;
    #[Validate('required|string|confirmed')]
    public $password;
    public $password_confirmation;

    public function register()
    {
        $this->validate();

        $user = User::create($this->only('name', 'username', 'email', 'password'));

        Auth::login($user);
        session()->regenerate();

        $this->reset();
        $this->redirect('home');
    }
    public function render()
    {
        return view('livewire.register');
    }
}
