<?php

namespace App\Livewire\Components;

use App\Services\UserService;
use Livewire\Component;

class ProfileInformation extends Component
{
    public $user;
    public string $name;
    public $username;
    public string $email;
    public ?string $bio;
    protected UserService $authService;

    public function mount($user)
    {
        $this->user = $user;
        $this->refresh();
    }
    public function boot(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function refresh()
    {
        $this->name = $this->user->name;
        $this->username = $this->user->username;
        $this->email = $this->user->email;
        $this->bio = $this->user->bio;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username,' . $this->user->id,
            'email' => 'required|unique:users,email,' . $this->user->id,
            'bio' => 'nullable',
        ]);

        $this->user = $this->userService->update(
            $this->user->id,
            $this->only('name', 'username', 'email', 'bio')
        );

        $this->resetExcept('user');
        $this->refresh();

    }
    public function render()
    {
        return view('livewire.components.profile-information');
    }
}
