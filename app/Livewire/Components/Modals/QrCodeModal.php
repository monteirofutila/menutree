<?php

namespace App\Livewire\Components\Modals;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class QrCodeModal extends Component
{
    public function download()
    {
        $imageUrl = 'https://qr.eletto.dev/' . route('profile', auth()->user()->username);
        $imageContent = file_get_contents($imageUrl);
        $imagePath = 'qrcode/' . basename($imageUrl) . '.png';

        // Salve a imagem no diretório 'public/images'
        Storage::put($imagePath, $imageContent);

        return Storage::download($imagePath, 'omenu-qrcod');
    }

    public function render()
    {
        return view('livewire.components.modals.qr-code-modal');
    }
}