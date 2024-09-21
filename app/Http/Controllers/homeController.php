<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    
    public function upload()
    {
        session(['file_uploaded' => true]); 
        return redirect()->route('user'); 
    }

    public function ref()
    {
        session(['file_uploaded' => false]);
        return redirect()->back();
    }
}
