<?php

namespace App\Http\Controllers;

use App\Models\Identitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class IdentitasController extends Controller
{
    public function index()
    {
        $users = Identitas::all()->map(function ($user) {

            $user->nik = Crypt::decryptString($user->nik);
            return $user;
        });
    
        return view('pagenav', ['users' => $users]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|string|max:255',
            // 'image' => 'required|file'
        ]);

        $nikEnkripsi = Crypt::encryptString($request->nik);

        // $path = $request->file('image')->store('images', 's3');

        Identitas::create(array_merge($request->all(), [
            'nik' => $nikEnkripsi,
            // 'image' => $path
        ]));

        return redirect()->route('pagenav')->with('success', 'Data has been added successfully!');
    }

    public function show(string $id)
    {
        
    }

    public function update(Request $request, $id)
    {
        $user = Identitas::find($id);

        $user->update($request->all());

        return redirect()->route('pagenav')->with('success', 'Data has been added successfully!');
    }

    public function destroy($id)
    {
        $user = Identitas::findOrFail($id);
        $user->delete();

        return redirect()->route('pagenav')->with('success', 'Data has been added successfully!');
    }
}