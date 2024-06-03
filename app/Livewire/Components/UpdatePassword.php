<?php

namespace App\Livewire\Components;

use Livewire\Component;

class UpdatePassword extends Component
{
    public $user;

    public function mount($user)
    {
        $this->user = $user;
    }
    public function render()
    {
        return view('livewire.components.update-password');
    }
}
