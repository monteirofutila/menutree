<?php

namespace App\Livewire\Components;

use Livewire\Component;

class DeleteAccount extends Component
{
    public $user;

    public function mount($user)
    {
        $this->user = $user;
    }
    public function render()
    {
        return view('livewire.components.delete-account');
    }
}
