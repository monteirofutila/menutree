<?php

namespace App\Livewire\Components;

use App\Services\UserService;
use Livewire\Attributes\Validate;
use Livewire\Component;

class UpdatePassword extends Component
{
    public $user;
    protected UserService $userService;
    #[Validate('required|current_password')]
    public string $current_password;
    #[Validate('required|confirmed')]
    public string $password;
    public string $password_confirmation;

    public function mount($user)
    {
        $this->user = $user;
    }
    public function boot(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function update()
    {
        $this->validate();

        $this->user = $this->userService->update(
            $this->user->id,
            $this->only('password')
        );

        $this->resetExcept('user');
    }
    public function render()
    {
        return view('livewire.components.update-password');
    }
}
