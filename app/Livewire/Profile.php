<?php

namespace App\Livewire;

use App\Services\UserService;
use Livewire\Component;

class Profile extends Component
{
    public $user;
    protected UserService $userService;

    public function mount(string $username)
    {
        $this->user = $this->userService->findByUserName($username);
    }

    public function boot(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function render()
    {
        return view('livewire.profile');
    }
}
