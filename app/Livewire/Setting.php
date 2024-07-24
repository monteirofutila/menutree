<?php

namespace App\Livewire;

use App\Services\AuthService;
use Livewire\Component;

class Setting extends Component
{
    public $user;
    protected AuthService $authService;
    public function mount()
    {
        $this->user = $this->authService->me();
    }
    public function boot(AuthService $authService)
    {
        $this->authService = $authService;
    }
    public function render()
    {
        return view('livewire.setting');
    }
}
