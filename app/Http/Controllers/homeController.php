<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class homeController extends Controller
{
    public function home()
    {
        $dataC = 'Bandung';

        return view('home', compact('dataC'));
    }
    public function user()
    {
        $file = session('file_uploaded', false);
        return view('pagenav', compact('file'));
    }
    
    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpg,jpeg,png|max:2048',
        ]);

        $file = $request->file('file');

        $filePath = 'uploads/' . time() . '_' . $file->getClientOriginalName();

        Storage::disk('minio')->put($filePath, file_get_contents($file));

        $endpoint = env('AWS_ENDPOINT'); 
        $bucket = env('AWS_BUCKET'); 
        $url = $endpoint . '/' . $bucket . '/' . $filePath;

        session()->flash('file_url', $url);

        return redirect()->back()->with('success', 'File uploaded successfully!');
    }

    public function ref(Request $request)
    {
        $filePath = $request->input('file_path');

        if (Storage::disk('minio')->exists($filePath)) {
            Storage::disk('minio')->delete($filePath);

            return redirect()->back()->with('success', 'File deleted successfully!');
        }

        return redirect()->back()->with('error', 'File not found');
    }
    public function tabeldata() 
    {
        return redirect()->back();
    }
}
