<?php

namespace App\Http\Controllers;

use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;

class QrcodeController extends Controller
{

    public function show()
    {   
        $user = auth()->user();
        $url = route('profile', $user->username);
        
        $qrCode = QrCode::format('png')
                    ->size(180)
                    ->generate($url);
        
        return response($qrCode, 200)->header('Content-Type', 'image/png');
    }
}