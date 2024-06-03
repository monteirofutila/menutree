<?php

namespace App\Livewire\Components;

use App\Services\UserService;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProfilePhoto extends Component
{
    use WithFileUploads;
    public $user;
    protected UserService $authService;

    #[Validate('required|image|max:2048')] // 2MB Max
    public $photo;
    public $photo_url = null;

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
        $this->photo_url = $this->user->photo_url;
    }

    public function update()
    {
        $this->validate();

        $this->photo_url = $this->photo->store('users');

        $this->user = $this->userService->update(
            $this->user->id,
            $this->only('photo_url')
        );

        $this->render();
        $this->refresh();
    }

    public function render()
    {
        return view('livewire.components.profile-photo');
    }
}
