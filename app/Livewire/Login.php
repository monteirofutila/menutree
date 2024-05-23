<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    #[Validate('required|email')]
    public $email;
    #[Validate('required|string')]
    public $password;

    public function login()
    {
        $this->validate();
        $login = Auth::attempt($this->only('email', 'password'));

        if (!$login) {
            return;
        }

        session()->regenerate();

        $this->reset();
        $this->redirect('home');
    }
    public function render()
    {
        return view('livewire.login');
    }
}
