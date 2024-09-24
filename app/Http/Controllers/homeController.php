<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class homeController extends Controller
{
    public function home(Request $request)
{
    $userIP = $request->server('REMOTE_ADDR');
    $response = Http::get("https://ipinfo.io/{$userIP}?token=" . env('IPINFO_API_KEY'));
    $dataC = '';

    if ($response->successful()) {
        $locationData = $response->json();
        Log::info('Location Data: ' . json_encode($locationData)); 
        $dataC = $locationData['city'] ?? 'Lokasi tidak diketahui';
    } else {
        $dataC = 'Lokasi tidak diketahui';
    }

    return view('home', compact('dataC'));
}

}
